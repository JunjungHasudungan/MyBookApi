<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthApiController extends Controller
{
    public function forgotPassword(Request $request) {

        // create validation for all request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|string|max:255',
        ]);

        // Cek apakah validasi gagal
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validasi gagal',
                'errors' => $validator->errors(),
            ], 400); // show error for error validation
        }

        // get request input from user
        $inputEmail = $request->input('email');

        // try to check data user from inputEmail user
        $emailUser = User::where('email', $inputEmail)->first();

        if(!$emailUser){
            return response()->json([
                'status'        => false,
                'message'       => 'email yang anda masukkan tidak ada..'
            ]);
        }

        return response()->json([
            'status'    => true,
            'message'   =>  'email ada'
        ]);
    }
}
