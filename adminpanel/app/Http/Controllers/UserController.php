<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
{
    $users =user::all();
    return view('admin.users.index',compact('user'));
}
public function create(){
    return view('admin.user.create.');
}
public function store(Request $request)
{
    user::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>bcrypt($request->password),
    'role'=>$request->role,
    ]);
    return redirect()->route('user.index');
}
public function edit(user $user)
{
    return view('admin.users.edit', compact('user'));
}
public function update(request $request,user $user){
    $user->update([
    'name'=>$request->name,
    'email'=>$request->email,
    'role'=>$request->role
    ]);
    return redirect()->route('users.index');
}
public function destroy(user $user){
    $user->delete();
    return redirect()->route('users.index');
}
}
