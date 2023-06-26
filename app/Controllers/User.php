<?php

namespace App\Controllers;

use App\Models\TasksModel;
use App\Models\UserModel;
use App\Models\ActivityModel;

class User extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $session = session();
        $username = $session->get('username');
        $title = ucfirst($username);

        $userModel = new UserModel();
        $userData = $userModel->where('username', $username)->first();
        
        $actModel = new ActivityModel();
        $actData = $actModel->where('username', $username)->findAll();

        $tasks = $db->query('SELECT * FROM `tasks` WHERE `created_by`=? AND `status`=? AND `type`=?', [$username, 'active', 'task']);
        $promotions = $db->query('SELECT * FROM `tasks` WHERE `created_by`=? AND `status`=? AND `type`=?', [$username, 'active', 'promotion']);

        return view('user/dashboard', ['title' => $title, 'user' => $userData, 'promotions' => $promotions->getResult(), 'activities' => $actData, 'tasks' => $tasks->getResult()]);
    }

    public function social()
    {
        $session = session();
        $username = $session->get('username');
        $title = "Edit Social handles";

        $userModel = new UserModel();
        $userData = $userModel->where('username', $username)->first();
        if ($this->request->is('get')) {
            return view('user/profile/social', ['title' => $title, 'user' => $userData]);
        } else {
            $facebook_id = $this->request->getVar('facebook_id');
            $twitter_handle = $this->request->getVar('twitter_handle');
            $instagram_handle = $this->request->getVar('instagram_handle');

            if (
                $userModel
                ->whereIn('username', [$username])
                ->set(['facebook_id' => $facebook_id, 'twitter_handle' => $twitter_handle, 'instagram_handle' => $instagram_handle])
                ->update()
            ) {
                // $data = $session->setFlashdata('success', 'social links updated');
                return redirect()->to('/profile/social')->withInput()->with('success', 'social links updated');
            } else {
                return view('user/profile/social', ['title' => $title, 'user' => $userData, 'error' => 'social links not updated']);
            }
        }
    }
}
