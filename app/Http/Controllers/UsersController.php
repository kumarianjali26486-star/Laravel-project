<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    //
    public function index(){
    $users=User::all();
    return view('users.index',compact('users'));
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            // 'role' => 'required',
        ]);
        User::create([
        'name'   => $request->name,
        'email'  => $request->email,
        'password' => Hash::make($request->password),
        // 'role'=> $request->role,
        ]);
         return redirect()->route('users.index')->with('success','User Added Successfully');
    }
        public function edit (User $user) {
        return view('users.edit', compact('user')); 
    }
    public function update(Request $request, User $user)
    {
        // $request->update([
        //    'name'  => 'required',
        //    'email' => 'required|email',
        //    'role'  => 'required',
        // ]);
        $user->update([
        'name'  => $request->name,
        'email' => $request->email,
        'role'  => $request->role,
    ]);
      return redirect('/users');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('users.index')->with('success','user deleted successfully');

    }
}
