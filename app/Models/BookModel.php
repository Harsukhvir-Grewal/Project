<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'booking';

    protected $allowedFields = ['name', 'phone' , 'place','budget','idea'];
}