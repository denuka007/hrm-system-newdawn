<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentAssign extends Model
{
    protected $fillable = [
        'depId',
        'emp_Id'
    ];
}
