<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salery extends Model
{
    protected $fillable = [
        'empId',
        'month',
        'present',
        'leave',
        'short',
        'absant',
        'othours',
        'normalhours',
        'advance',
        'basic',
        'normalsal',
        'otsal',
        'absal',
        'epf',
        'newyear',
        'chrismas',
        'allcome',
        'finalsal'
    ];
}
