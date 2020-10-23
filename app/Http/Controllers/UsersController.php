<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show($username)
    {
        $user = User::findByUsername($username);
        $tweets = $user->tweets;
        return view('users.show', ['tweets'=>$tweets]);
    }
}
