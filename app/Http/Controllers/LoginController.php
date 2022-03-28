<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('login')) {			
            return view('dashboard');
		}else{
            return view('login');
        }
    }

    public function login(Request $request)
    {

    }
}
