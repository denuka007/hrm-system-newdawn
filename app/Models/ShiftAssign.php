<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftAssign extends Model
{
    protected $fillable = [
        'shift_Id',
        'emp_Id'
    ];
}
