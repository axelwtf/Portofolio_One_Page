<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create(Request $request)
    {
        $contacts = new Contact;
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->phone =$request->phone;
        $contacts->message = $request->message;
        $contacts->save(); 
        return redirect('home');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
