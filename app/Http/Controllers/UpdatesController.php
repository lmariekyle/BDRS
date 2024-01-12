<?php

namespace App\Http\Controllers;


use App\Models\Update;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;

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

    public function newsupdates(){
        $updates = Update::all()->filter(function ($update) {
            return $update->featured === 'Featured';
        });
        
        if ($updates->count() > 0) {
            return view('updates.newsupdates', compact('updates'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('updates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        $request->validate([
            'img' => 'required|array',
            'coverphoto' => 'required|image|mimes:jpeg,png,jpg,gif|max:102400',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif|max:102400',
        ]);

     

        $updatesimages = [];

        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $image) {
                if ($image->isValid()) {
                    $image_name = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('update'), $image_name);
                    $path = "update/" . $image_name;
                    $updatesimages[] = $path;
                }
            }
            $imgJson = json_encode($updatesimages);
        } else {
            $imgJson = "update/default.jpg";
        }

        if ($request->hasFile('coverphoto')){
            $img_name = time().'.'.$request->coverphoto->getClientOriginalExtension();
            $request->coverphoto->move(public_path('update'),$img_name);
            $imgpath="update/".$img_name;
        }else{
            $imgpath="update/default.jpg";
        }

        if ($request->hasFile('vid')){
            $vid_name = time().'.'.$request->vid->getClientOriginalExtension();
            $request->vid->move(public_path('update'),$vid_name);
            $vidpath="update/".$vid_name;
        }else{
            $vidpath="update/default.mp4";
        }

        $update = Update::create([
            'titleHeading' => $request->titleHeading,
            'titleSub' => $request->titleSub,
            'firstParagraph' => $request->firstParagraph,
            'secondParagraph' => $request->secondParagraph,
            'thirdParagraph' => $request->thirdParagraph,
            'date' => $request->date,
            'img' => $imgJson,
            'coverphoto' => $imgpath,
            'vid' => $vidpath,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $update=Update::where('id',$id)->first();
        

          $imagePaths = json_decode($update->img, true);
         return view('updates.show', compact('update','imagePaths'));

       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $update = Update::where('id',$id)->first();
            $imagePaths = json_decode($update->img, true);
        } catch (QueryException $e) {
            // Handle the database query exception.
            // You can log the error or display a user-friendly message.
            return view('error.index', ['message' => 'An error occurred while fetching data from the database.']);
        }
    
        return view('updates.edit', compact('update','imagePaths'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = Update::where('id',$id)->first();
    
        $updateimages = [];

        // Check if new images are being uploaded
        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $image) {
                if ($image->isValid()) {
                    $image_name = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('update'), $image_name);
                    $path = "update/".$image_name;
                    $updateimages[] = $path;
                }
            }

        // If new images are uploaded, delete the old images
        $existingImages = json_decode($update->img, true); // Assuming $property represents the existing property data
        // foreach ($existingImages as $existingImage) {
        //     if (file_exists(public_path($existingImage))) {
        //         unlink(public_path($existingImage));
        //     }
        // }
            // Merge the new images with the existing images
            $updatedImages = array_merge($existingImages, $updateimages);
            $imgJson = json_encode($updatedImages);
        } else {
            // If no new images are uploaded, keep the existing images
            $imgJson = $update->img;
        }


        if ($request->hasFile('coverphoto')) {
            foreach ($request->file('coverphoto') as $image) {
                if ($image->isValid()) {
                    $coverphoto_name = time().'.'.$request->coverphoto->getClientOriginalExtension();
                    $request->coverphoto->move(public_path('update'),$coverphoto_name);
                    $coverphotopath="update/".$coverphoto_name;
                }
            }
            // If new images are uploaded, delete the old images
            $existingImages = json_decode($update->coverphoto, true); 
                // Merge the new images with the existing images
            $updatedImages = array_merge($existingImages, $coverphotopath);
            $cJson = json_encode($updatedImages);

            } else {
                // If no new images are uploaded, keep the existing images
                $cJson = $update->coverphoto;
        }

    
        if ($request->hasFile('vid')) {
            // Delete the old video if it exists
            if (!empty($update->vid) && File::exists(public_path($update->vid))) {
                File::delete(public_path($update->vid));
            }
        
            $vid_name = time().'.'.$request->vid->getClientOriginalExtension();
            $request->vid->move(public_path('update'), $vid_name);
            $vidpath = "update/".$vid_name;
        } else {
            // No new video uploaded, use default or keep the existing one
            $vidpath = $request->has('delete_vid') ? $update->vid : $update->vid;
        }



        $update->titleHeading = $request->titleHeading;
        $update->titleSub = $request->titleSub;
        $update->firstParagraph = $request->firstParagraph;
        $update->secondParagraph = $request->secondParagraph;
        $update->thirdParagraph = $request->thirdParagraph;
        $update->date = $request->date;
        $update->status = $request->status;
        $update->featured =  $request->featured;
        $update->img = $imgJson;
        $update->coverphoto = $cJson;
        $update->vid = $vidpath;

        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
