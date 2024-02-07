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
        'unitdesc',
        'beddesc',
        'furnishdesc',
        'locationdesc',
        'type',
        'unitType',
        'sizes',
        'address',
        'state',
        'zip',
        'status',
        'coverphoto',
        'img',
        'vid',
        'priceimg',
];
    
}
