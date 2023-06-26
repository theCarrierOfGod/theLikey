<?php

namespace App\Controllers;


use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Controllers\BaseController;
use App\Models\CountriesModel;
use App\Models\MediaModel;
use App\Models\UserModel;
use App\Models\ActivityModel;
use App\Models\Addfunds;
use App\Models\Withdrawal;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class WalletController extends BaseController
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
    
    public function addFund()
    {
        $title = "Fund Wallet";
        $session = session();
        $username = $session->get('username');

        $userModel = new UserModel();
        $userData = $userModel->where('username', $username)->first();

        $mediaModel = new MediaModel();
        $platforms = $mediaModel->findAll();

        $countryModel = new CountriesModel();
        $countries = $countryModel->findAll();

        if ($this->request->is('get')) {
            return view('user/wallet/add_fund', ['title' => $title, 'username' => $username, 'user' => $userData, 'platforms' => $platforms, 'countries' => $countries]);
        } else {
            $wallet_to = $this->request->getVar('wallet_to');
            $currency = $this->request->getVar('currency');
            $amount_usd = $this->request->getVar('amount_usd');
            $amount_crypto = $this->request->getVar('amount_crypto');
            $credits = $this->request->getVar('credits');
            $username = $this->request->getVar('username');
            
            $add = new Addfunds();
            $data = [
                'transaction_id' => "THFW" . $this->generateRandomString(12),
                'wallet_to' => $wallet_to,
                'currency' => $currency,
                'amount_usd' => $amount_usd,
                'amount_crypto' => $amount_crypto,
                'credits' => $credits,
                'username' => $username,
                'status' => 'processing',
            ];
            
            $email = \Config\Services::email();
            $email->setTo($userData['email']);
            $email->setSubject('New funding');
            $body = view('mails/addFund', ['title' => "Alert", 'uid' => "56789023"]);
            $email->setMessage($body);
            
            if ($add->save($data)) {
                echo json_encode(['status' => 'success']);
                $email->send();
                
                //mail to admins
    
                // $mail->setFrom(getenv('email.fromEmail'), 'Likey Administration');
                // $mail->addReplyTo(getenv('email.noReplyEmail'), 'No-reply');
    
                // // Add a recipient
                // $mail->addAddress('olajesujuwon@gmail.com', 'Jay');
                // $mail->addBcc('developerjcworld@gmail.com', 'JCWORLD');
    
                // // Email subject
                // $mail->Subject = 'Funding alert';
    
                // // Set email format to HTML
                // $mail->isHTML(true);
    
                // // Email body content
                // $body = view('mails/addFund', ['title' => "Alert", 'uid' => "56789023"]);
                // $mail->Body = $body;
            } else {
                echo json_encode(['status' => 'failed']);
            }
        }
    }

    public function Withdraw()
    {
        $title = "Withdraw funds";
        $session = session();
        $username = $session->get('username');

        $userModel = new UserModel();
        $userData = $userModel->where('username', $username)->first();

        $mediaModel = new MediaModel();
        $platforms = $mediaModel->findAll();

        $countryModel = new CountriesModel();
        $countries = $countryModel->findAll();

        if ($this->request->is('get')) {
            return view('user/wallet/withdraw', ['title' => $title, 'user' => $userData, 'platforms' => $platforms, 'countries' => $countries]);
        } else {
            $wallet_to = $this->request->getVar('wallet');
            $currency = $this->request->getVar('currency');
            $network = $this->request->getVar('network');
            $credits = $this->request->getVar('credits');
            $amount = $this->request->getVar('amount');
            
            // insert into withdrawal table 
            $withdraw = new Withdrawal();
            $data = [
                'transaction_id' => "THWFB" . $this->generateRandomString(15),
                'wallet_to' => $wallet_to,
                'currency' => $currency,
                'network' => $network,
                'amount' => $amount,
                'credits' => $credits,
                'username' => $username,
                'status' => 'processing',
            ];
            
            // update new user balance 
            $balance = $userData['deposited'];
            $newBalance = $balance - $credits;
            
            $updateUser = [
                'deposited' => $newBalance
            ];
            
            $email = \Config\Services::email();
            $email->setTo($userData['email']);
            $email->setSubject('New funding');
            $body = view('mails/addFund', ['title' => "Alert", 'uid' => "56789023"]);
            $email->setMessage($body);
            
            if ($withdraw->save($data)) {
                $userModel->update($userData['id'], $updateUser);
                header('Content-Type: application/json');
                echo json_encode(['status' => 'success']);
                $email->send();
                
                //mail to admins
    
                // $mail->setFrom(getenv('email.fromEmail'), 'Likey Administration');
                // $mail->addReplyTo(getenv('email.noReplyEmail'), 'No-reply');
    
                // // Add a recipient
                // $mail->addAddress('olajesujuwon@gmail.com', 'Jay');
                // $mail->addBcc('developerjcworld@gmail.com', 'JCWORLD');
    
                // // Email subject
                // $mail->Subject = 'Funding alert';
    
                // // Set email format to HTML
                // $mail->isHTML(true);
    
                // // Email body content
                // $body = view('mails/addFund', ['title' => "Alert", 'uid' => "56789023"]);
                // $mail->Body = $body;
            } else {
                echo header('Content-Type: application/json');
                echo json_encode(['status' => 'failed', 'message' => 'couldn\'t complete transaction, contact support']);
            }
        }
    }

    public function Transfer()
    {
        $title = "Internal Transfer";
        $session = session();
        $username = $session->get('username');

        $userModel = new UserModel();
        $userData = $userModel->where('username', $username)->first();

        if ($this->request->is('get')) {
            return view('user/wallet/transfer', ['title' => $title, 'user' => $userData]);
        } else {
            $balance = $userData['deposited'];
            $rules = [
                'amount' => [
                    'rules' => 'required|less_than_equal_to[' . $balance . ']',
                    'errors' => [
                        'required' => 'Amount of service is required',
                        'less_than_equal_to' => 'Your purchased balance is not sufficient for this transaction.'
                    ]
                ],
            ];
            
            if($this->validate($rules)) {
                $newPurchased = $userData['deposited'] - $this->request->getVar('amount');
                $newEarned = $userData['earned'] + $this->request->getVar('amount');

                $updateUser = [
                    'deposited' => $newPurchased,
                    'earned' => $newEarned,
                ];
                
                $actModel = new ActivityModel();
                $detail = "Transfered ". $this->request->getVar('amount') . "credits from your purchased to earned wallets :" . $_SERVER['REMOTE_ADDR'];
                $data = [
                    'username' => $username,
                    'detail' => $detail,
                    'date' => date('Y-m-d'),
                ];
                if ($userModel->update($userData['id'], $updateUser)) {
                    $actModel->save($data);
                    return redirect()->to('/wallet/transfer')->withInput()->with('success', 'Success');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Creation failed');
                }
            } else {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
            // return view('user/wallet/transfer', ['title' => $title, 'user' => $userData]);
        }
    }
}
