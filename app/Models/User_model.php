<?php

namespace App\Models;

use CodeIgniter\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

/**
 *
 */
class User_model extends Model
{
    protected $table = "admin";
    protected $allowedFields = ['nama', 'email', 'password', 'password1', 'password2'];
}