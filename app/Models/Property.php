<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'propertyID',
        'name',
        'type',
        'price',
        'sizes',
        'measurement',
        'address',
        'state',
        'zip',
        'bed',
        'provision',
        'status',
        'img',
        'vid',
];
    
}
