<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::first();
        return view('index', ["user" => $user]);
    }

    public function resume()
    {
        $user = User::first();
        return view('resume.index', ["user" => $user]);
    }

    public function contact()
    {
        $user = User::first();
        return view('contact.index', ["user" => $user]);
    }
}
