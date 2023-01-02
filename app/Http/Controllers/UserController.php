<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($id, Request $request)
    {
        $user=User::find($id);
        return view('profile', compact('user'));
    } 
}
