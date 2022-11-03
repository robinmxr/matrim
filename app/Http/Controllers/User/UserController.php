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

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function search()
    {
        return view('search');
    }
    public function viewprofile()
    {
        $user = Auth::user();
        $notifications = $user->unReadNotifications;
        return view('user.profile.view',compact('user','notifications'));
    }

    public function editprofile()
    {
        $user = Auth::user();
        return view('user.profile.edit',compact('user'));
    }
     public function updateprofile(Request $request)
     {
         $user = Auth::user();
         if($request->hasFile('avatar'))
         {
             $request->validate([
                 'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
             ]);
             $imageName = time().'.'.$request->avatar->extension();

             $request->avatar->move(public_path('storage/users-avatar'), $imageName);

             $user->avatar = $imageName;
         }


         $user->update($request->all());
         return redirect()->route('user.profile.view');

     }
     public function showUsers()
     {
         $users = User::all();
         return view('user.list',compact('users'));
     }

     public function viewUser($id)
     {
         $user = User::find($id);
         return view('user.view',compact('user'));
     }

     public function showStatus()
     {
        return view('user.status');
     }

     public function searchresult($gender)
     {
         $users = User::where('gender',$gender)->get();
         return view('searchresult',compact('users'));
     }

     public function markReadNotifications(Request $request)
     {
         auth()->user()->unReadNotifications
             ->when($request->input('id'),function ($query) use ($request)
             {
                return $query->where('id',$request->input('id'));
             })->markAsRead();
         return redirect()->route('user.profile.view');
     }
}
