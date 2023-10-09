<?php

namespace App\Http\Controllers;


use App\Models\Update;
use Illuminate\Http\Request;

class UpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $updates=Update::all();
        return view('updates.index', compact('updates'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('updates.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try {
            $request->validate([
                'titleHeading' => 'required',
                'img' => 'required|array',
                'img.*' => 'image|mimes:jpeg,png,jpg,gif|max:32000',
                'coverphoto' => 'image|mimes:jpeg,png,jpg,gif|max:32000',
            ]);
        
            $propertyimages = [];
            if ($request->hasFile('img')) {
                foreach ($request->file('img') as $image) {
                    if ($image->isValid()) {
                        $image_name = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('update'), $image_name);
                        $path = "updates/" . $image_name;
                        $propertyimages[] = $path;
                    }
                }
                $imgJson = json_encode($propertyimages);
            } else {
                $imgJson = "updates/default.jpg";
            }
        
            if ($request->hasFile('coverphoto') && $request->file('coverphoto')->isValid()) {
                $img_name = time() . '.' . $request->coverphoto->getClientOriginalExtension();
                $request->coverphoto->move(public_path('property'), $img_name);
                $imgpath = "property/" . $img_name;
            } else {
                $imgpath = "property/default.jpg";
            }
        
            $update = Update::create([
                'titleHeading' => $request->titleHeading,
                'titleSub' => $request->titleSub,
                'description' => $request->description,
                'date' => $request->date,
                'status' => $request->status,
                'featured' => $request->featured,
                'img' => $imgJson,
                'coverphoto' => $imgpath,
                'vid' => NULL,
            ]);
        
            return redirect()->back()->with('success', 'Update created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
        


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $update = Update::where('id', $id)->first();
        $imagePaths = json_decode($update->img, true);

        return view('updates.show', compact('update', 'imagePaths'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        try {
            // Find the update by its ID
            $update = Update::findOrFail($id);
    
            // Return the view for editing with the update data
            return view('updates.edit', compact('update'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }

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
