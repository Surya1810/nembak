<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->username == 'love' &&  $request->password == '240124') {
            return redirect()->route('berhasil');
        } else {
            return Redirect::back()->withErrors(['msg' => 'Salah coba lagi cik']);;
        }
    }
}
