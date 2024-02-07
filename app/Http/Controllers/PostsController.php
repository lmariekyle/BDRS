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
use App\Models\Project;
use App\Models\UnitType;
use App\Models\Update;
use Illuminate\Support\Facades\Redirect;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $property = Property::where('featured','Featured')->first();
        $updates = Update::where('featured','Featured')->get()->take(4);
        if($property == NULL){
            return view('welcome', compact('property','user','updates')); 
        }else{
            $imagePaths = json_decode($property->img,true);
            return view('welcome', compact('property','imagePaths','user','updates')); 
        }
        // dd($property);
    }

    public function viewproperties(Request $request)
    {
        $user = Auth::user();
        $query = Property::query()->where('status','Approved');
        $unitTypes = UnitType::where('status','Approved')->get();
        $projects = Project::where('status','Approved')->get();
 

    
        if ($request->has('name') && !empty($request->name)) {
            $query->where('name', $request->name);
        }

        if ($request->has('availability') && !empty($request->availability)) {
            $query->where('availability', $request->availability);
        }

        if ($request->has('furnish') && !empty($request->furnish)) {
            $query->where('furnish', $request->furnish);
        }

        if ($request->has('type') && !empty($request->type)) {
            $query->where('type', $request->type);
        }

        if ($request->has('unitType') && !empty($request->unitType)) {
            $query->where('unitType', $request->unitType);
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
        return view('posts.viewproperties', compact('properties','user','projects','unitTypes')); 
        // dd($property);
    }

    public function showproperty(string $id)
    {
        $user = Auth::user();
        $property=Property::where('id',$id)->first();
        $imagePaths = json_decode($property->img,true);
        return view('posts.showproperty', compact('property','imagePaths','user')); 
    }
    public function showupdate(string $id)
    {
        $user = Auth::user();
        $update = Update::where('id',$id)->first();
        $imagePaths = json_decode($update->img,true);
        return view('posts.showupdate', compact('update','imagePaths','user')); 

    }

    public function showbuy()
    {
        $user = Auth::user();
        $properties=Property::where('availability','For Sale')->get();
        $unitTypes = UnitType::where('status','Approved')->get();
        $projects = Project::where('status','Approved')->get();
        return view('posts.showbuy', compact('properties','user','unitTypes','projects')); 
    }

    public function showrent()
    {
        $user = Auth::user();
        $properties=Property::where('availability','For Rent')->get();
        $unitTypes = UnitType::where('status','Approved')->get();
        $projects = Project::where('status','Approved')->get();
        return view('posts.showrent', compact('properties','user','unitTypes','projects')); 
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


        Mail::to('realtybdrs@gmail.com')->send(new ClientInquiries($subject, $body,$clientEmail,$clientName,$clientContact));

        return redirect()->back()->withSuccess('Property Inquiry has been sent!');;  

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
