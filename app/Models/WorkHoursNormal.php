<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkHoursNormal extends Model
{
    protected $fillable = [
        'empId',
        'workhours',
        'date'
    ];
}
