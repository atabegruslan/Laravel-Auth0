<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function store(Request $request)
    {
        try 
        {
            // sanitize fields

            $staff = Staff::updateOrCreate(['email' => $request->email],[
                'email'         => $request->email,
                'name'          => $request->name,
                'auth0_user_id' => $request->auth0_user_id,
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
