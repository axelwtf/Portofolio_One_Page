<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class MailController extends Controller
{
    public function index($id)
    {        
        $item = Contact::find($id);
        return view('readMail',compact('item'));
    }
}
