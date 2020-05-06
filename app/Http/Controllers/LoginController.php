<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    //

    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index() 
    {
        return view('auth.login');
    }
}