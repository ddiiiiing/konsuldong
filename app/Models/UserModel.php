<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama', 'username', 'password', 'no_tlp', 'is_admin'];

    public function getUser($username) {
        return $this->where('username', $username)->first();
    }
}
