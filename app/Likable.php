<?php

namespace App;

trait Likable
{

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function likesCount()
    {
        return $this->likes()->count();
    }

    public function liked(User $user)
    {
        return $this->likes()->where('user_id', $user->id)->exists();
    }

    public function toggleLike(User $user)
    {
        if ($this->liked($user)) {
            $this->likes()->where('user_id', $user->id)->delete();
        }
        else {
            return $this->likes()->updateOrCreate(['user_id' => $user ? $user->id : auth()->id()]);
        }
    }
}