<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceLog extends Model
{
    protected $fillable = [
        'emp_Id',
        'present',
        'leaves',
        'shortleave',
        'absant'
    ];
}
