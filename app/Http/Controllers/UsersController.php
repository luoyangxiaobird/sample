<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Requests;
class UsersController extends Controller
{
    //
    public function create(){
        return view('users.create');
    }
    public function show(User $user){
        return view('users.show',compact('user'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|max:50',
            'email'=>'required|email|unique:users|max:255',
            'password'=>'required|confirmed|min:6|max:20',
        ]);

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

        session()->flash('success','欢迎你来，您将在这里开启一段新旅程');
        return redirect()->route('users.show',[$user]);
    }
}
