<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentages extends Model
{
    protected $fillable = [
        'empId',
        'name',
        'position',
        'present',
        'absant',
        'product'
    ];
}
