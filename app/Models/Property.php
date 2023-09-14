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
        'description',
        'type',
        'price',
        'sizes',
        'address',
        'state',
        'zip',
        'bed',
        'provision',
        'status',
        'featured',
        'coverphoto',
        'img',
        'vid',
];
    
}
