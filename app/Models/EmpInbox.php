<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpInbox extends Model
{
    protected $fillable = [
        'empId',
        'msg',
        'type'
    ];
}
