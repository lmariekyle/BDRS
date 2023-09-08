<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $properties = Property::all();
        } catch (QueryException $e) {
            // Handle the database query exception.
            // You can log the error or display a user-friendly message.
            return view('error.index', ['message' => 'An error occurred while fetching data from the database.']);
        }
    
        return view('properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'img' => 'required|array',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size limit as needed
        ]);

        $propertyimages=[];

        if ($request->hasFile('img')){
            // dd($request->img);
            foreach($request->file('img')as $img){
                if($img->isValid()){
                    $image_name = time().'.'.$img->getClientOriginalExtension();
                    $img->move(public_path('property'),$image_name);
                    $path="property/".$image_name;
                    $propertyimages[]=$path;
                }
            }
            $imgJson = json_encode($propertyimages);
        }else{
            $imgJson = "property/default.jpg";
        }
        

        $property = Property::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' =>$request->price,
            'sizes' => $request->sizes,
            'measurement' => $request->measurement,
            'address'=> $request->address,
            'state'=> $request->state,
            'zip'=> $request->zip,
            'bed'=> $request->bed,
            'provision'=> $request->provision,
            'approve' => $request->approve,
            'status'=> $request->status,
            'img'=> $imgJson,
            'vid'=> NULL,
        ]);

        return redirect('/properties')->with('success','Property has been Added!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $property=Property::where('id',$id)->first();
        $imagePaths = json_decode($property->img, true);
        return view('properties.show', compact('property','imagePaths'));
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
