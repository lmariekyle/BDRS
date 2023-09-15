<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $property = Property::where('featured','Featured')->first();
        
        if($property == NULL){
            return view('welcome', compact('property')); 
        }else{
            $imagePaths = json_decode($property->img,true);
            return view('welcome', compact('property','imagePaths')); 
        }
        // dd($property);
    }

    public function viewproperties()
    {
        $user = Auth::user();
        $properties = Property::where('status','Approved')->get();
        

            return view('posts.viewproperties', compact('properties','user')); 
        // dd($property);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
