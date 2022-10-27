<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    return redirect()->route('admin.user.show');
    }

    public function declineUser($id)
    {
    $user = User::find($id);
    $user->delete();
    return redirect()->route('admin.user.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
