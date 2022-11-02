<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\Approved;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;
        return view('admin.dashboard',compact('notifications'));
    }

    public function showUsers()
    {
        $users = User::all();
        return view('admin.user.list',compact('users'));
    }

    public function viewUser($id)
    {
        $user = User::find($id);
        return view('admin.user.view',compact('user'));
    }

    public function approveUser($id)
    {
    $user = User::find($id);
    $user->status = 'active';
    $user->save();
    event( new Approved($user));
    return redirect()->route('admin.user.show');
    }

    public function declineUser($id)
    {
    $user = User::find($id);
    $user->delete();
    return redirect()->route('admin.user.show');
    }






    public function markReadNotifications(Request $request)
    {
        auth()->user()->unReadNotifications
            ->when($request->input('id'),function ($query) use ($request)
            {
                return $query->where('id',$request->input('id'));
            })->markAsRead();
        return redirect()->route('admin.index');
    }
}
