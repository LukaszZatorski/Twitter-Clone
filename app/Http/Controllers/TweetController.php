<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
       $attributes = $request->validate([
           'body' => 'required|max:10000'
       ]);

       Tweet::create([
           'user_id' => auth()->id(),
           'body' => $attributes['body'],
       ]);

       return redirect('home');
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->delete();
        
        return back();
    }
}
