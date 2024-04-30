<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginBasic extends Controller
{
    public function index()
  {
    return view('pages.authentications.auth-login-basic');
  }

  public function forget()
  {
    return view('pages.authentications.auth-forgot-password-basic');
  }
}
