<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

//        $post1 = 'Pirmas postas';

        $users = User::all()->toArray();

        return view('home', compact('users'));
    }
}
