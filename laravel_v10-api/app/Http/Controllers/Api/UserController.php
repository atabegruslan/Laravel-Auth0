<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        try 
        {
            // sanitize fields

            $staff = User::updateOrCreate(['email' => $request->email],[
                'email'    => $request->email,
                'name'     => $request->name,
                'auth0_id' => auth()->id(),
                'password' => Hash::make('dummy')
            ]);

            return response()->json([
                'data' => $staff
            ], 200);
        }
        catch (\Exception $e)
        {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
