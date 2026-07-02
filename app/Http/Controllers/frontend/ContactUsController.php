<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FrontEndRequests\ContactUsRequest;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        return view('frontend.contact');
    }
    public function store(ContactUsRequest $request){
       $contact_store=Contact::create($request->validated());
       if($contact_store){
        return redirect()->back()->with('success','Your messege has been successfully received');
       }else{
        return redirect()->back()->with('error','Please Try Again .. !');
       }

    }
}
