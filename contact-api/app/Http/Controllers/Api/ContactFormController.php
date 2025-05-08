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
        $messages = [
            'phone.regex' => 'Phone number must start with + and be exactly 13 characters long.'
        ];
 
        // Form validation
        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|min:2|max:50',
            'country_code' => 'required|not_in:null',
            'phone' => 'required|numeric|',
            'select_service' => 'required|string|not_in:null',
            'select_product' => 'required|string|not_in:null',
            'email' => 'required|email:rfc,dns|max:100',
            'message' => 'required|string|min:10|max:255'
        ] , $messages);
        
         if ($validator->fails()) { 
     return response()->json(['error'=>$validator->errors()], 401);            
 }
        //  Store data in database
        Contact::create($request->all());
 
        
        return response()->json(['success' => 'form is submit.']);
    }
}
