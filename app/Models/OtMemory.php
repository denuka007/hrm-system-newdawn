<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtMemory extends Model
{
    protected $fillable = [
        'empId',
        'name',
        'position',
        'department',
        'shiftId',
        'Otdate',
    ];
}
