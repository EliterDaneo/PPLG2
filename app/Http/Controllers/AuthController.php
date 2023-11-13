<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function index()
  {
    if ($user = Auth::user()) {
      if ($user->level == 'admin') {
        return redirect()->intended('admin');
      } elseif ($user->level == 'siswa') {
        return redirect()->intended('siswa');
      }
    }
    return view('belakang.auth.login');
  }

  public function proses_login(Request $request){
    $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ],
    [
      'email.required' => 'Maaf Email Harus Diisi!',
      'password.required' => 'Maaf Password Harus Diisi!'
    ]
    );

    $kredensial = $request->only('email', 'password');
    if(Auth::attempt($kredensial)){
      $request->session()->regenerate();
      $user = Auth::user();

      if($user->level == 'admin'){
        return redirect()->intended('admin');
      }elseif($user->level == 'siswa'){
        return redirect()->intended('user');
      }
      return redirect()->intended('/');
    }
    return back()->withErrors([
      'email' => 'The provided credentials do not match our records.',
  ])->onlyInput('email');
  }

  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
  }
}
