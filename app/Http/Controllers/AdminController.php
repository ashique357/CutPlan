<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function UserIndex(){
        $users=User::where('role','!=','1')->get();
        return view('pages.Admin.UserList')->with(['users'=>$users]);
    }

    public function UserCreate(){
        return view('pages.Admin.CreateUser');
    }

    public function PostCreateUser(UserRequest $request){
        $this->validate( $request, $request->rules(), $request->messages());
        
        $u=new User();
        $u->role=$request->role;
        $u->email=$request->email;
        $u->password=\Hash::make($request->password);
        $u->save();
        return redirect()->back();
    }
}
