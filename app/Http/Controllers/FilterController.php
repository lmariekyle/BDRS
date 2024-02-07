<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index(){
        $properties=Property::all();
    }
}
