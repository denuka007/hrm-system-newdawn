<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    protected $fillable = [
        'empId',
        'name',
        'position',
        'department',
        'shiftId',
        'starttime',
        'Otdate',
        'status'
    ];
}
