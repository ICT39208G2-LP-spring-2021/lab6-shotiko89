<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy()
    {
        Auth::logout();

        return redirect('/')->with('success', 'you have logged out');
    }
}
