<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaves extends Model
{
    protected $fillable = [
        'empId',
        'name',
        'leavedate',
        'reason',
        'status'
    ];
}
