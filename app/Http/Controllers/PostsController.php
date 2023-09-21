<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiriesReply;

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

    public function showproperty(string $id)
    {
        $property=Property::where('id',$id)->first();
        $imagePaths = json_decode($property->img,true);
        return view('posts.showproperty', compact('property','imagePaths')); 
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
        
        $subject=$request->propertyName. ' Property Inquiry';
        $body=$request->clientMessage;
        $senderMail=$request->clientEmail;


        Mail::to('bdrs@realty.com')->send(new InquiriesReply($subject, $body,$senderMail));

        return redirect('posts.showproperty')->with('success','Property has been Added!');

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
