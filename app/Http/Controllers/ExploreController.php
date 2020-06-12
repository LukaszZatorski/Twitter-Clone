<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class ExploreController extends Controller
{
    public function __invoke() 
    {
        return view ('explore', ['tweets' => Tweet::latest()->paginate(10)]);
    }
}
