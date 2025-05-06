<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;


    class ContactFormController extends Controller
{
    // Store Contact Form data
    public function ContactForm(Request $request) {
 
        // Form validation
         $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
         ]);
         if ($validator->fails()) { 
     return response()->json(['error'=>$validator->errors()], 401);            
 }
        //  Store data in database
        Contact::create($request->all());
 
        
        return response()->json(['success' => 'form is submit.']);
    }
}
