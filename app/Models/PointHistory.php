<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointHistory extends Model
{
    protected $fillable = [
        'empId',
        'name',
        'month',
        'date',
        'staradd',
        'reason'
    ];
}
