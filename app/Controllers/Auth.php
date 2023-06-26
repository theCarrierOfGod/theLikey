<?php

namespace App\Controllers;

use App\Models\CountriesModel;
use App\Models\UserModel;
use App\Models\ActivityModel;
use CodeIgniter\HTTP\Request;

class Auth extends BaseController
{
    public function sign_in()
    {
        if ($this->request->is('get')) {
            $data['title'] = "Sign in";
            return view('auth/sign-in', $data);
        } else {
            $rules = [
                'username' => [
                    'rules' => 'required|min_length[3]|is_not_unique[users.username]',
                    'errors' => [
                        'required' => 'You must choose a username.',
                        'is_not_unique' => 'username unknown',
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Minimum length is 8'
                    ]
                ],
            ];

            if ($this->validate($rules)) {
                $session = session();
                $userModel = new UserModel();

                $username = $this->request->getVar('username');
                $password = $this->request->getVar('password');

                $user = $userModel->where('username', $username)->first();
                $pwd_verify = password_verify($password, $user['password']);

                if (!$pwd_verify) {
                    return redirect()->back()->withInput()->with('password', 'Invalid password');
                }

                $ses_data = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                
                $actModel = new ActivityModel();
                $detail = "Logged in:" . $_SERVER['REMOTE_ADDR'];
                $data = [
                    'username' => $username,
                    'detail' => $detail,
                    'date' => date('Y-m-d'),
                ];
                $actModel->save($data);
                return redirect()->to(base_url('dashboard'));
            } else {
                $data['validation'] = $this->validator;
                $data['title'] = "Sign in";
                return view('auth/sign-in', $data);
            }
        }
    }

    public function sign_up()
    {
        $countryModel = new CountriesModel();
        $countries = $countryModel->findAll();
        if ($this->request->is('get')) {
            $title = "Sign up";
            return view('auth/sign-up', ['title' => $title, 'countries' => $countries]);
        } else {
            $rules = [
                // 'username' => 'required|min_length[4]|is_unique[users.username]',
                'username' => [
                    'rules' => 'required|min_length[3]|is_unique[users.username]',
                    'errors' => [
                        'required' => 'You must choose a username.',
                        'is_unique' => 'A user with same username already exists',
                    ]
                ],
                'location' => [
                    'rules' => 'required|is_not_unique[countries.name]',
                    'errors' => [
                        'required' => 'You must choose a location.',
                        'is_not_unique' => 'Location is unknown',
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email|is_unique[users.email]',
                    'errors' => [
                        'required' => 'You must choose an email.',
                        'is_unique' => 'A user with samee email already exists',
                        'valid_email' => 'please supply a valid email address',
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Minimum length is 8'
                    ]
                ],
                'cpassword' => [
                    'rules' => 'required|matches[password]',
                    'errors' => [
                        'required' => 'Password mismatch',
                        'matches' => 'Password mismatch'
                    ]
                ],
            ];

            $emailToken = rand(100000000, 999999999);

            if ($this->validate($rules)) {
                $model = new UserModel();

                $username = strtolower($this->request->getVar('username'));
                $data = [
                    'username' => $username,
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'earned' => '20',
                    'email_token' => $emailToken,
                    'location' => $this->request->getVar('location'),
                ];
                $email = \Config\Services::email();
                $email->setTo($this->request->getVar('email'));
                $email->setSubject('Verify your email');
                $body = view('mails/sign-up', ['username' => strtolower($this->request->getVar('username')), 'token' => $emailToken]);
                $email->setMessage($body);
                $email->send();

                if ($model->save($data)) {
                    $actModel = new ActivityModel();
                    $detail = "Joined :" . $_SERVER['REMOTE_ADDR'];
                    $data = [
                        'username' => $username,
                        'detail' => $detail,
                        'date' => date('Y-m-d'),
                    ];
                    $actModel->save($data);
                    return redirect()->to(base_url('auth/verify/' . $username))->withInput()->with('success', 'Check your email for verification code');
                    // return redirect()->back()->withInput()->with('password', 'Invalid password.');
                } else {
                    return redirect()->back()->withInput()->with('error', 'registration failed');
                }
            } else {
                $data['validation'] = $this->validator;
                $data['title'] = "Sign up";
                $data['countries'] = $countries;
                return view('auth/sign-up', $data);
            }
        }
    }

    public function verify($username) {
        if($this->request->is('get')) {
            echo $username;
        } else {

        }
    }

    public function sign_out()
    {
        $session = session();
        $username = $session->get('username');
        $actModel = new ActivityModel();
        $detail = "Logged out :" . $_SERVER['REMOTE_ADDR'];
        $data = [
            'username' => $username,
            'detail' => $detail,
            'date' => date('Y-m-d'),
        ];
        $actModel->save($data);
        $session->destroy();
        return redirect()->to(base_url('sign-in'));
    }
}
