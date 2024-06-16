<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller {
    public function admin() {
        $session = session();
        if (!$session->get('isLoggedIn') || !$session->get('is_admin')) {
            return redirect()->to('/auth/login');
        }

        return view('dashboard/admin');
    }

    public function user() {
        $session = session();
        if (!$session->get('isLoggedIn') || $session->get('is_admin')) {
            return redirect()->to('/auth/login');
        }

        return view('dashboard/user');
    }
}
