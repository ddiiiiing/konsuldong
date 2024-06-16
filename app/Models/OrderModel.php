<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id_order';
    protected $allowedFields = ['id_user', 'jurusan','pilih_paket', 'deskripsi', 'status'];
    protected $useTimestamps = false; // We don't need to use timestamps here as they are handled by the DB

    public function getOrdersWithUserNames()
    {
        return $this->select('orders.*, user.nama as user_nama')
                    ->join('user', 'user.id_user = orders.id_user')
                    ->findAll();
    }
}
