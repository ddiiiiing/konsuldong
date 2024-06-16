<?php

namespace App\Controllers;

use App\Models\OrderModel;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $orderModel = new OrderModel();
        $data['orders'] = $orderModel->getOrdersWithUserNames();

        return view('admin/home', $data);
    }

    public function updateStatus($id)
    {
        $orderModel = new OrderModel();
        $order = $orderModel->find($id);
        
        if ($order['status'] == 'On Progress') {
            $order['status'] = 'Selesai';
        } else {
            $order['status'] = 'On Progress';
        }
        
        $orderModel->update($id, $order);
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $orderModel = new OrderModel();
        $orderModel->delete($id);
        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $orderModel = new OrderModel();
        $order = $orderModel->find($id);

        return view('admin/edit', ['order' => $order]);
    }

    public function update($id)
    {
        $orderModel = new OrderModel();

        $data = [
            'pilih_paket' => $this->request->getPost('pilih_paket'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'status' => $this->request->getPost('status')
        ];

        $orderModel->update($id, $data);
        return redirect()->to('/admin');
    }
}
