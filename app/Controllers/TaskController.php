<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CountriesModel;
use App\Models\MediaModel;
use App\Models\TasksModel;
use App\Models\UserModel;
use App\Models\PromotionsModel;
use App\Models\ActivityModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class TaskController extends BaseController
{

    private function generateRandomString($length = 10)
    {
        $characters = '012345678901234567890123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function create()
    {
        $title = "New Task";
        $session = session();
        $username = $session->get('username');

        $userModel = new UserModel();
        $userData = $userModel->where('username', $username)->first();

        $mediaModel = new MediaModel();
        $platforms = $mediaModel->findAll();

        $countryModel = new CountriesModel();
        $countries = $countryModel->findAll();

        if ($this->request->is('get')) {
            return view('user/tasks/new_task', ['title' => $title, 'user' => $userData, 'platforms' => $platforms, 'countries' => $countries]);
        } else {
            $balance = $userData['deposited'];
            $rules = [
                'promotion' => [
                    'rules' => 'required|min_length[3]',
                    'errors' => [
                        'required' => 'Promotion type must be specified',
                    ]
                ],
                'description' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Description is required'
                    ]
                ],
                'location' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Location is required',
                    ]
                ],
                'amount' => [
                    'rules' => 'required|greater_than[4]',
                    'errors' => [
                        'required' => 'Amount of service is required',
                        'greater_than' => 'You cannot specify an amount lesser than 5'
                    ]
                ],
                'cpu' => [
                    'rules' => 'required|integer|greater_than_equal_to[3]',
                    'errors' => [
                        'required' => 'Password is required',
                        'greater_than' => 'Cost per user must not be lesser than 3'
                    ]
                ],
                'total' => [
                    'rules' => 'required|integer|less_than_equal_to[' . $balance . ']',
                    'errors' => [
                        'required' => 'Total cost must be supplied',
                        'less_than_equal_to' => 'Insufficient purchased credits'
                    ]
                ],
            ];

            if ($this->validate($rules)) {
                $taskModel = new TasksModel();
                $uid = $this->generateRandomString(20);
                $data = [
                    'unique_id' => $uid,
                    'type' =>  'task',
                    'title' => $this->request->getVar('promotion'),
                    'description' => $this->request->getVar('description'),
                    'location' => $this->request->getVar('location'),
                    'target' => $this->request->getVar('amount'),
                    'achieved' => 0,
                    'total_cost' => $this->request->getVar('total'),
                    'left_cost' => $this->request->getVar('total'),
                    'created_by' => $username,
                    'cpu' => $this->request->getVar('cpu'),
                ];

                $newBalance = $balance - $this->request->getVar('total');
                $newTB = $userData['processed'] + $this->request->getVar('total');

                $updateUser = [
                    'deposited' => $newBalance,
                    'processed' => $newTB,
                ];

                $mail = new PHPMailer();

                $mail->isSMTP();
                $mail->Host     = getenv('email.SMTPHost');
                $mail->SMTPAuth = true;
                $mail->Username = getenv('email.SMTPUser');
                $mail->Password = getenv('email.SMTPPass');
                $mail->SMTPSecure = getenv('email.SMTPCrypto');
                $mail->Port     = getenv('email.SMTPPort');

                $mail->setFrom(getenv('email.fromEmail'), 'Likey');
                $mail->addReplyTo(getenv('email.noReplyEmail'), 'No-reply');

                // Add a recipient
                $mail->addAddress($userData['email'], $userData['username']);

                // Email subject
                $mail->Subject = 'You created a task';

                // Set email format to HTML
                $mail->isHTML(true);

                // Email body content
                $body = view('mails/new_task', ['title' => $this->request->getVar('promotion'), 'uid' => $uid]);
                $mail->Body = $body;
                
                $actModel = new ActivityModel();
                $detail = "Created a new task :" . $_SERVER['REMOTE_ADDR'];
                $dataA = [
                    'username' => $username,
                    'detail' => $detail,
                    'date' => date('Y-m-d'),
                ];

                if (($taskModel->save($data)) &&  ($userModel->update($userData['id'], $updateUser))) {
                    $actModel->save($dataA);
                    if ($mail->send()) {
                        return redirect()->to('/new_task')->withInput()->with('success', 'Success');
                    } else {
                        return redirect()->to('/new_task')->withInput()->with('success', 'Creation successful');
                    }
                } else {
                    return redirect()->back()->withInput()->with('error', 'Creation failed');
                }
            } else {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
        }
    }

    public function promotion()
    {
        $title = "New Promotion";
        $session = session();
        $username = $session->get('username');

        $userModel = new UserModel();
        $userData = $userModel->where('username', $username)->first();

        $mediaModel = new MediaModel();
        $platforms = $mediaModel->findAll();

        $countryModel = new CountriesModel();
        $countries = $countryModel->findAll();

        if ($this->request->is('get')) {
            return view('user/tasks/new_promotion', ['title' => $title, 'user' => $userData, 'platforms' => $platforms, 'countries' => $countries]);
        } else {

            $balance = $userData['earned'];
            $rules = [
                'media' => [
                    'rules' => 'required|min_length[3]|is_not_unique[media.D]',
                    'errors' => [
                        'required' => 'You must choose a task type.',
                        'is_not_unique' => 'Unknown task type',
                    ]
                ],
                'description' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Password is required'
                    ]
                ],
                'link' => [
                    'rules' => 'required|valid_url',
                    'errors' => [
                        'required' => 'Link is required',
                        'valid_url_strict' => 'Invalid link'
                    ]
                ],
                'location' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Location is required',
                    ]
                ],
                'amount' => [
                    'rules' => 'required|greater_than[4]',
                    'errors' => [
                        'required' => 'Amount of service is required',
                        'greater_than' => 'You cannot specify an amount lesser than 5'
                    ]
                ],
                'cpu' => [
                    'rules' => 'required|integer|greater_than_equal_to[3]',
                    'errors' => [
                        'required' => 'Password is required',
                        'greater_than' => 'Cost per user must not be lesser than 3'
                    ]
                ],
                'total' => [
                    'rules' => 'required|integer|less_than_equal_to[' . $balance . ']',
                    'errors' => [
                        'required' => 'Total cost must be supplied',
                        'less_than_equal_to' => 'Insufficient balance'
                    ]
                ],
            ];

            if ($this->validate($rules)) {
                $promotionModel = new PromotionsModel();
                
                $medias = $mediaModel->where('D', $this->request->getVar('media'))->first();
                $type = $medias['T'];
                $platform = $medias['M'];
                $uid = $this->generateRandomString(20);
                $data = [
                    'unique_id' => $uid,
                    'type' =>  $type,
                    'link' => $this->request->getVar('link'),
                    'platform' => $platform,
                    'title' => $this->request->getVar('media'),
                    'description' => $this->request->getVar('description'),
                    'location' => $this->request->getVar('location'),
                    'target' => $this->request->getVar('amount'),
                    'achieved' => 0,
                    'total_cost' => $this->request->getVar('total'),
                    'left_cost' => $this->request->getVar('total'),
                    'created_by' => $username,
                    'cpu' => $this->request->getVar('cpu'),
                    'status' => 'active',
                ];

                $newBalance = $balance - $this->request->getVar('total');
                $newTB = $userData['processed'] + $this->request->getVar('total');

                $updateUser = [
                    'earned' => $newBalance,
                    'processed' => $newTB,
                ];
                
                
                $actModel = new ActivityModel();
                $detail = "Created a new promotion :" . $_SERVER['REMOTE_ADDR'];
                $actdata = [
                    'username' => $username,
                    'detail' => $detail,
                    'date' => date('Y-m-d'),
                ];

                $mail = new PHPMailer();

                $mail->isSMTP();
                $mail->Host     = getenv('email.SMTPHost');
                $mail->SMTPAuth = true;
                $mail->Username = getenv('email.SMTPUser');
                $mail->Password = getenv('email.SMTPPass');
                $mail->SMTPSecure = getenv('email.SMTPCrypto');
                $mail->Port     = getenv('email.SMTPPort');

                $mail->setFrom(getenv('email.fromEmail'), getenv('email.fromEmailName'));
                $mail->addReplyTo(getenv('email.noReplyEmail'), 'No-reply');

                // Add a recipient
                $mail->addAddress($userData['email'], $userData['username']);

                // Email subject
                $mail->Subject = 'You created a promotion';

                // Set email format to HTML
                $mail->isHTML(true);

                // Email body content
                $body = view('mails/new_task', ['title' => $this->request->getVar('promotion'), 'uid' => $uid]);
                $mail->Body = $body;

                if (($promotionModel->save($data)) &&  ($userModel->update($userData['id'], $updateUser))) {
                    $actModel->save($actdata);
                    if ($mail->send()) {
                        return redirect()->to('/new_promotion')->withInput()->with('success', 'Success');
                    } else {
                        return redirect()->to('/new_promotion')->withInput()->with('success', 'Creation successful');
                    }
                } else {
                    return redirect()->back()->withInput()->with('error', 'Creation failed');
                }
            } else {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
        }
    }
    
    public function getPromos() 
    {
        $session = session();
        $username = $session->get('username');
        $userModel = new UserModel();
        $userData = $userModel->where('username', $username)->first();
        $promotionModel = new PromotionsModel();
        if($this->request->getVar('name')) {
            $name = $this->request->getVar('name');
            $taskM = $promotionModel->select('*')
                ->Where('title', $name)
                ->WhereIn('location', [$userData['location'], 'worldwide'])
                ->notLike('created_by', $userData['username'])
                ->orderBy('id', 'DESC')
                ->paginate(2);
                
            return $this->response->setJSON($taskM);
        }
    }

    public function earnCredits()
    {
        $title = "Earn free credits";
        $session = session();
        $username = $session->get('username');

        $userModel = new UserModel();
        $userData = $userModel->where('username', $username)->first();
        
        $mediaModel = new MediaModel();
        $platforms = $mediaModel->findAll();

        $db = db_connect();
        
        $promotionModel = new PromotionsModel();
        $taskM = $promotionModel->select('*')
                ->orLike('title', 'FACEBOOK LIKE')
                ->WhereIn('location', [$userData['location'], 'worldwide'])
                ->notLike('created_by', $userData['username'])
                ->orderBy('id', 'DESC')
                ->paginate(2);

        $tasks = $db->query('SELECT * FROM `tasks` WHERE `created_by` != ? AND `status`=? AND `type`=? AND (`location` = ? or `location` = ?)', [$username, 'active', 'task', 'worldwide', $userData['location']]);
        $promotions = $db->query('SELECT * FROM `tasks` ');

        $data = [
            'user' => $userData,
            'title' => $title,
            'tasks' => $taskM,
            'platforms' => $platforms
            
        ];
        
        return view('user/tasks/tasks', $data);
        // return view('user/tasks/tasks', ['title' => $title, 'user' => $userData, 'tasks' => $tasks->getResult(), 'promotions' => $promotions->getResult()]);
    }

    public function makeMoney()
    {
        $title = "Make money";
        $session = session();
        $username = $session->get('username');

        $userModel = new UserModel();
        $userData = $userModel->where('username', $username)->first();


        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        // $data['perPage'] = 15;
        // $data['total'] = $model->countAll();
        // $data['data'] = $model->paginate($data['perPage']);
        // $data['pager'] = $model->pager;

        $db = db_connect();
        $tasksModel = new TasksModel();
        if($this->request->getVar('search')) {
            $search = $this->request->getVar('search');
            $taskM = $tasksModel->select('*')
                ->orLike('location', $search)
                ->orLike('title', $search)
                ->orLike('cpu', $search)
                ->orLike('target', $search)
                ->Where('type', 'task')
                ->notLike('created_by', $userData['username'])
                ->paginate(9);
        } else {
            $search = '';
            $taskM = $tasksModel->select('*')
                ->WHERE('type', 'task')
                ->notLike('created_by', $userData['username'])
                ->paginate(9);
        }

        $tasks = $db->query('SELECT * FROM `tasks` WHERE `created_by` != ? AND `status`=? AND `type`=? AND (`location` = ? or `location` = ?)', [$username, 'active', 'task', 'worldwide', $userData['location']]);
        $promotions = $db->query('SELECT * FROM `tasks` ');

        $data = [
            'user' => $userData,
            'title' => $title,
            'tasks' => $taskM,
            'pager' => $tasksModel->pager,
            
            'total' => $tasksModel->countAll(),
            // 'data' = $model->paginate($data['perPage']),
            
            'search' => $search
        ];
        
        return view('user/tasks/make_money', $data);
    }

    public function eachTask($unique_id)
    {
        $session = session();
        $username = $session->get('username');

        $userModel = new UserModel();
        $userData = $userModel->where('username', $username)->first();

        $db = db_connect();

        $task = $db->query('SELECT * FROM `tasks` WHERE `unique_id` = ? ', [$unique_id]);
        // $task->getResult();
        
        if ($this->request->is('get')) {
            foreach ($task->getResult() as $thisTask) {
                $tasik = $thisTask;
                $title = $thisTask->title;
            }
            return view('user/tasks/task', ['title' => $title, 'user' => $userData, 'tasks' => $tasik]);
        } else {
            $validationRule = [
                'proof' => [
                    'label' => 'Image File',
                    'rules' => [
                        'uploaded[proof]',
                        'is_image[proof]',
                        'mime_in[proof,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                        'max_size[proof,100]',
                        'max_dims[proof,1024,768]',
                    ],
                ],
            ];
            if (! $this->validate($validationRule)) {
                $data = ['errors' => $this->validator->getErrors()];
    
                return json_encode($this->validator->getErrors());
            }
            $img = $this->request->getFile('proof');
    
            if (! $img->hasMoved()) {
                $filepath = WRITEPATH . 'uploads/' . $img->store();
    
                return json_encode(['uploaded_fileinfo' => new File($filepath)]);
            }
    
            return json_encode(['errors' => 'The file has already been moved.']);
        }

        
    }
    
    public function taskDone($unique_id)
    {
        $session = session();
        $username = $session->get('username');

        $userModel = new UserModel();
        $userData = $userModel->where('username', $username)->first();

        $db = db_connect();

        $task = $db->query('SELECT * FROM `tasks` WHERE `unique_id` = ? ', [$unique_id]);
        // $task->getResult();

        foreach ($task->getResult() as $thisTask) {
            $title = $thisTask->title;
        }
        return view('user/tasks/task_done', ['title' => $title, 'user' => $userData, 'tasks' => $task->getResult()]);
    }
    
    function addProof()  
    {  
       
    } 

}






