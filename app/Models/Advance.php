<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advance extends Model
{
    protected $fillable = [
        'empId',
        'position',
        'month',
        'status'
    ];
}
