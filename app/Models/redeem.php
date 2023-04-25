<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class redeem extends Model
{
    protected $fillable = [
        'empId',
        'name',
        'stars',
        'date',
        'status'
    ];
}
