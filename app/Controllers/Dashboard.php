<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\UsersModel;
use Config\Database;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->usermodel = new UsersModel();
        $this->produkmodel = new ProdukModel();
    }

    public function index()
    {
        $users = session('header');
        if (!$users) {
            return redirect()->to('/login');
        } else {
            return view('admin/index', ['users' => $users]);
        }
    }

    public function login()
    {
        helper(['form']);
        return view('admin/login');
    }

    public function register()
    {
        return view('admin/register');
    }

    public function logout()
    {
        $session = session();
        $session->stop();
        return redirect()->to('/login');
    }

    public function postregister()
    {
        // $userModel = new UsersModel;
        $this->usermodel->save([
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'level' => "admin",
        ]);
        return redirect()->to('/login');
    }

    public function postlogin()
    {
        // $this->usermodel = new UsersModel();
        $session = session();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cocokuser = $this->usermodel->where('username', $username)->first();
        if ($cocokuser) {
            $cocokpassword = $this->usermodel->where('password', $password)->first();
            if ($cocokpassword) {
                $level = 'admin';
                $levelmatch = $cocokuser['level'];
                switch ($levelmatch) {
                    case 'admin':
                        $setData = [
                            'username' => $username,
                            'password' => $password,
                            'header' => 'ADMIN'
                        ];
                        $session->set($setData);
                        return redirect()->to('/dashboard');
                        break;
                    case 'user':
                        $setData = [
                            'username' => $username,
                            'password' => $password,
                            'header' => 'USER'
                        ];
                        $session->set($setData);
                        return redirect()->to('/dashboard');
                        break;
                }
            } else {
                return redirect()->to('/login');
            }
        } else {
            return redirect()->to('/login');
        }
        return redirect()->to('/login');
    }
}
