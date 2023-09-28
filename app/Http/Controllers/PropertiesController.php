<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $properties = Property::paginate(10);
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
            'img.*' => 'image|mimes:jpeg,png,jpg,gif|max:32000', // Adjust file types and size limit as needed
        ]);

        $propertyimages = [];

        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $image) {
                if ($image->isValid()) {
                    $image_name = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('property'), $image_name);
                    $path = "property/" . $image_name;
                    $propertyimages[] = $path;
                }
            }
            $imgJson = json_encode($propertyimages);
        } else {
            $imgJson = "property/default.jpg";
        }

        if ($request->hasFile('coverphoto')){
            $img_name = time().'.'.$request->coverphoto->getClientOriginalExtension();
            $request->coverphoto->move(public_path('property'),$img_name);
            $imgpath="property/".$img_name;
        }else{
            $imgpath="property/default.jpg";
        }
        

        $property = Property::create([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'price' =>$request->price,
            'sizes' => $request->sizes,
            'address'=> $request->address,
            'state'=> $request->state,
            'zip'=> $request->zip,
            'bed'=> $request->bed,
            'provision'=> $request->provision,
            'status' => $request->status,
            'featured'=> $request->featured,
            'coverphoto'=> $imgpath,
            'img'=> $imgJson,
            'vid'=> NULL,
        ]);

         

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
        try {
            $property = Property::where('id',$id)->first();
            $imagePaths = json_decode($property->img, true);
        } catch (QueryException $e) {
            // Handle the database query exception.
            // You can log the error or display a user-friendly message.
            return view('error.index', ['message' => 'An error occurred while fetching data from the database.']);
        }
    
        return view('properties.edit', compact('property','imagePaths'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
        $request->validate([
            'img.*' => 'image|mimes:jpeg,png,jpg,gif|max:32000', // Adjust file types and size limit as needed
        ]);

        $property = Property::where('id',$id)->first();

        $propertyimages = [];

        // Check if new images are being uploaded
        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $image) {
                if ($image->isValid()) {
                    $image_name = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('property'), $image_name);
                    $path = "property/".$image_name;
                    $propertyimages[] = $path;
                }
            }

        // If new images are uploaded, delete the old images
        $existingImages = json_decode($property->img, true); // Assuming $property represents the existing property data
        // foreach ($existingImages as $existingImage) {
        //     if (file_exists(public_path($existingImage))) {
        //         unlink(public_path($existingImage));
        //     }
        // }
            // Merge the new images with the existing images
            $updatedImages = array_merge($existingImages, $propertyimages);
            $imgJson = json_encode($updatedImages);
        } else {
            // If no new images are uploaded, keep the existing images
            $imgJson = $property->img;
        }

        if ($request->hasFile('coverphoto')){
            $img_name = time().'.'.$request->coverphoto->getClientOriginalExtension();
            $request->coverphoto->move(public_path('property'),$img_name);
            $imgpath="property/".$img_name;
        }else{
            $imgpath=$property->coverphoto;
        }
       
            $property->name = $request->name;
            $property->description = $request->description;
            $property->type = $request->type;
            $property->price =$request->price;
            $property->sizes = $request->sizes;
            $property->address= $request->address;
            $property->state= $request->state;
            $property->zip= $request->zip;
            $property->bed= $request->bed;
            $property->provision= $request->provision;
            $property->status= $request->status;
            $property->featured= $request->featured;
            $property->coverphoto =$imgpath;
            $property->img= $imgJson;
            $property->vid= NULL;
            // dd($property);
            $property->save();

            return redirect('/properties')->with('success','Property has been Updated!');
            
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
