<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function __invoke(Request $request)
    {
        $user_key = 85978;
        $user_info = [
            'name' => "Emon",
            'email' => "emon123653@gmail.com",
            'mobile' => "01797734294",
            'Bank_acc' => "5237678453534",
        ];

        if ($user_key != $request->user_key) {
            return response([
                "message" => "Provide valid secret key"
            ], 404);
        } else {
            return response()->json([
                'user_info' => $user_info
            ]);
        }
    }
}
