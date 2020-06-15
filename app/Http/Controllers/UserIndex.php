<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserIndex extends Controller
{
    public function index(Request $request)
    {
        return view('user.user-dashboard');
    }
    public function resource_learning_center(Request $request)
    {
        return view("user.resource_learning_center");
    }
    public function success_manual(Request $request)
    {
        return view("user.success_manual");
    }
    public function create_note(Request $request)
    {
        return view("user.create_note");
    }

}
