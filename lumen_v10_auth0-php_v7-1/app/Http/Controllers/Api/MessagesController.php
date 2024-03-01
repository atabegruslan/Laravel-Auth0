<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Laravel\Lumen\Routing\Controller;

class MessagesController extends Controller
{
    public function showPublicMessage(): JsonResponse
    {
        return new JsonResponse(["aaa"=>"bbb"]);
    }

    public function showProtectedMessage(): JsonResponse
    {
        return new JsonResponse(["ccc"=>"ddd"]);
    }
}
