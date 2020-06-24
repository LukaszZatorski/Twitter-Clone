<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
 public function show(User $user)
 {
     return view('profiles.show', [ 
        'user' => $user, 
        'tweets' => $user->tweets()->latest()->paginate(10)]);
 }

 public function edit(User $user)
 {
     return view('profiles.edit', compact('user'));
 }

 public function update(Request $request, User $user)
 {
     $attributes = $request->validate([
        'username' => ['required', 'string', 'max:20', Rule::unique('users')->ignore($user)],
        'description' => ['nullable'],
        'name' => ['required', 'string', 'max:30'],
        'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
     ]);

    $attributes['password'] = Hash::make($attributes['password']);

     $user->update($attributes);

     return redirect(route('profile.show', $user->username));
 }
}