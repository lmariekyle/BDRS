<?php

namespace App\Http\Controllers;

use App\Mail\InquiryReply;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inquiries = Inquiry::where('inquiryStatus','Unread')->get();

      return view('inquiry.index',compact('inquiries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
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
        $inquiry=Inquiry::where('id',$id)->first();
        return view('inquiry.show', compact('inquiry'));
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inquiry = Inquiry::where('id',$id)->first();
        
        $subject = $inquiry->propertyName . ' Inquiry Reply';
        $body=$request->reply;
        $clientName = $request->clientName;
        $inquiry->inquiryStatus = 'Replied';
        $inquiry->save();

        Mail::to($inquiry->clientEmail)->send(new InquiryReply($subject, $body,$clientName));

        return redirect('inquiry.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
