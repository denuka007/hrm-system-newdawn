<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceMemory extends Model
{
    protected $fillable = [
        'empId',
        'name',
        'arrivetime',
        'present_date',
        'status'
    ];
}
