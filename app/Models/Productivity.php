<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productivity extends Model
{
    protected $fillable = [
        'empId',
        'name',
        'position',
        'date',
        'target'
    ];
}
