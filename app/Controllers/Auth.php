<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller {

    public function login() {
        return view('auth/login');
    }

    public function register() {
        return view('auth/register');
    }

    public function processLogin() {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $user = $model->getUser($username);
        
        if ($user && password_verify($password, $user['password'])) {
            $sessionData = [
                'id_user' => $user['id_user'],
                'username' => $user['username'],
                'is_admin' => $user['is_admin'],
                'isLoggedIn' => true,
            ];
            $session->set($sessionData);

            if ($user['is_admin']) {
                return redirect()->to('/admin');
            } else {
                return redirect()->to('/');
            }
        } else {
            $session->setFlashdata('msg', 'Username atau Password salah');
            return redirect()->to('/auth/login');
        }
    }

    public function processRegister() {
        $model = new UserModel();

        $data = [
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'no_tlp' => $this->request->getVar('no_tlp')
        ];

        $model->insert($data);
        return redirect()->to('/auth/login');
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/auth/login');
    }
}
