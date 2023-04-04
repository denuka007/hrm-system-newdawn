<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class positionassign extends Model
{
    protected $fillable = [
        'posid',
        'empId'
    ];
}
