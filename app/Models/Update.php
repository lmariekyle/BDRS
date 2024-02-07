<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;
    protected $fillable = [
        'titleHeading',
        'titleSub',
        'firstParagraph',
        'secondParagraph',
        'thirdParagraph',
        'date',
        'status',
        'featured',
        'img',
        'coverphoto',
        'vid',
    ];
}
