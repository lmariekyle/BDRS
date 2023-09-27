<?php

namespace App\Http\Controllers;

use App\Mail\ClientInquiries;
use App\Models\Inquiry;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiriesReply;
use App\Models\ClientInquiries as ModelsClientInquiries;

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

    public function viewproperties(Request $request)
    {
        $user = Auth::user();
        $query = Property::query()->where('status','Approved');

        if ($request->has('availability') && !empty($request->availability)) {
            $query->where('availability', $request->availability);
        }

        if ($request->has('furnish') && !empty($request->furnish)) {
            $query->where('furnish', $request->furnish);
        }

        if ($request->has('type') && !empty($request->type)) {
            $query->where('type', $request->type);
        }

        if ($request->has('price') && !empty($request->price)) {
            $query->where('price', $request->price);
        }

        if ($request->has('sizes') && !empty($request->sizes)) {
            $query->where('sizes', $request->sizes);
        }

        if ($request->has('bed') && !empty($request->bedroom)) {
            $query->where('bed', $request->bedroom);
        }

        if ($request->has('state') && !empty($request->state)) {
            $query->where('state', $request->state);
        }

        $properties=$query->get();
        return view('posts.viewproperties', compact('properties','user')); 
        // dd($property);
    }

    public function showproperty(string $id)
    {
        $user = Auth::user();
        $property=Property::where('id',$id)->first();
        $imagePaths = json_decode($property->img,true);
        return view('posts.showproperty', compact('property','imagePaths','user')); 
    }

    public function filterproperty(Request $request)
    {
        dd($request);
        return redirect()->back();  
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
        
        $inquiry=Inquiry::create([
            'propertyName'=> $request->propertyName,
            'clientName'=>$request->clientName,
            'clientContact'=>$request->clientContact,
            'clientEmail'=>$request->clientEmail,
            'clientMessage'=>$request->clientMessage,
            'inquiryStatus'=>'Unread',
        ]);
        
        // $email='samplemail@bdrs-realty.com';
        $subject=$request->propertyName . ' Property Inquiry';
        $body=$request->clientMessage;
        $clientEmail=$request->clientEmail;
        $clientName =$request->clientName;
        $clientContact =$request->clientContact;


        Mail::to('samplemail@bdrs-realty.com')->send(new ClientInquiries($subject, $body,$clientEmail,$clientName,$clientContact));

        return redirect('posts.showproperty');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $property=Property::where('id',$id)->first();
        $imagePaths = json_decode($property->img,true);
        return view('posts.showproperty', compact('property','imagePaths')); 
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
