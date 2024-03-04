<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        User::updateOrCreate(['email' => auth()->user()->email], [
            'email' => auth()->user()->email,
            'name'  => auth()->user()->nickname,
            'auth0' => auth()->id(),
            'password' => Hash::make('dummy')
        ]);

        return view('welcome');
    }
}
