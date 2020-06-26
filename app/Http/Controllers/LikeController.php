<?php

namespace App\Http\Controllers;

use App\Tweet;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Tweet $tweet)
    {

        $tweet->toggleLike(current_user());

        return back();
    }
}
