<?php

namespace App\Controllers;

use App\Models\OrderModel;
use CodeIgniter\Controller;

class OrderController extends Controller
{
    public function create()
    {
        return view('order/create');
    }

    public function store()
    {
        $orderModel = new OrderModel();

        $data = [
            'id_user' => session()->get('id_user'),
            'pilih_paket' => $this->request->getPost('pilih_paket'),
            'jurusan' => $this->request->getPost('jurusan'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'status' => 'On Progress',  // Set default status
        ];

        if ($orderModel->insert($data)) {
            session()->setFlashdata('success', 'Order berhasil dibuat!');
            return redirect()->to('/'); // Redirect langsung ke dashboard
        } else {
            session()->setFlashdata('error', 'Order gagal dibuat!');
            return redirect()->back()->withInput();
        }
    }

    public function history()
    {
        $orderModel = new OrderModel();
        $id_user = session()->get('id_user');

        $data['orders'] = $orderModel->where('id_user', $id_user)->findAll();

        return view('order/history', $data);
    }
}
