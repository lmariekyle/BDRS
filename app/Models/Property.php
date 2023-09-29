<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'availability',
        'furnish',
        'name',
        'description',
        'type',
        'price',
        'sizes',
        'address',
        'state',
        'zip',
        'bed',
        'status',
        'featured',
        'coverphoto',
        'img',
        'vid',
];
    
}
