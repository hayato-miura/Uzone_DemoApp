<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailVerificationCodeController extends Controller
{
    public function send(Request $request)
    {
        // メール認証コードの送信処理を実装する
        $user = $request->user();
        $verificationCode = Str::random(8);
        // メール送信
        Mail::to($user->email)->send(new VerificationCodeMail($verificationCode));
        return response()->json(['message' => 'Verification code sent'], 200);
    }
}