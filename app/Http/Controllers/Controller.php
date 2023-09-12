<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

     function welcome(){
        $property = Property::where('approve','=',0)->paginate();
        return view('/', compact('property'));
     }
}
