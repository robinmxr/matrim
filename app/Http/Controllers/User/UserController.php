<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
    public function home()
    {
        return view('welcome');
    }
    public function viewprofile()
    {
        $user = Auth::user();
        return view('user.profile.view',compact('user'));
    }

    public function editprofile()
    {
        $user = Auth::user();
        return view('user.profile.edit',compact('user'));
    }
    // public function updateprofile(Request $request)
    // {
    //     $user = Auth::user();
    //     $user->name = $request->name;
    // }
}
