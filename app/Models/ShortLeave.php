<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortLeave extends Model
{
    protected $fillable = [
        'empId',
        'name',
        'date'
    ];
}
