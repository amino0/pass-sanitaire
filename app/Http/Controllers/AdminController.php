<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.home');
    }
    public function alluser()
    {
        $users = DB::select("select * from users ");

        return view('Admin.alluser', compact('users'));
    }
    public function user($id)
    {
        $user = DB::select("select * from users where id = $id ");

        return view('Admin.user', compact('user'));
    }
}
