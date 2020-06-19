<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

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

    public function index()
    {

        $friends = auth()->user()->follows()->pluck('id');

        return view('home', [
            'tweets' => Tweet::whereIn('user_id', $friends)
                        ->orWhere('user_id', auth()->user()->id)
                        ->latest()
                        ->paginate(20)
            ]);
    }
}
