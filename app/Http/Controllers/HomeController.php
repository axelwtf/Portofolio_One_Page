<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Iluminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('home');
    }

    public function create(Request $request)
    {
        $path = $request->file('image')->store('public');
        $tasks = new Task;
        $tasks->titre = $request->leTitre;
        $tasks->image = $path;
        $tasks->description = $request->laDescription;
        $tasks->save(); 
        return redirect('home');
    }
}

