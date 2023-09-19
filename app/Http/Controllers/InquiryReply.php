<?php

namespace App\Http\Controllers;

use App\Mail\InquiresReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiriesReply;
// use Mail;

class InquiryReply extends Controller
{
    public function index(){
        $subject = "Property Inquiry";
        $body='Test';

        Mail::to('rachelyoo09@gmail.com')->send(new InquiriesReply($subject, $body));
    }
}
