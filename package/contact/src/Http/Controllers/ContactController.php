<?php

namespace guruprasad\Contact\Http\Controllers;


use guruprasad\Contact\Models\Contact;
use guruprasad\Contact\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index()
    {
    	return view('contact::contact');
    }
    public function send(Request $request)
    {
    	Mail::to('guruprasadmp21@gmail.com')->send(new ContactMail($request->message));
    	Contact::create($request->all());
    	return view('contact::contact');
    }
}
