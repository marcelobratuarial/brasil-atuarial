<?php 

namespace App\Models;
use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    // protected $allowedFields = [
    //   'name',
    //   'email',
    //   'password',
    //   'created_at'
    // ];
}