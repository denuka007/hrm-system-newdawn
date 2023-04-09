<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [
        'clientId',
        'name',
        'address',
        'mobile',
        'email',
        'pic',
        'type',
        'location',
        'projects'
    ];
}
