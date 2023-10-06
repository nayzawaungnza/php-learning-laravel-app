<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = DB::table("users")->get();
        return view('users',[
            'users' => $users
        ]);
    }

    public function store(Request $request){
        //dd($request->all());
        DB::table("users")->insert([
            "name" => $request->txtname,
            "email" => $request->txtemail,
            "phone" => $request->txtphone,
        ]);
        return redirect()->route('user#index')->with('success','store user data success');

    }

    public function delete($id){
        DB::table("users")->where('id', $id)->delete();
        return redirect()->route('user#index')->with('success','delete success');
    }
    public function edit($id){
        $user = DB::table('users')->where('id',$id)->first();
        return view('edit',compact('user'));
    }
    public function update(Request $request, $id){
        DB::table('users')->where('id',$id)->update([
            "name" => $request->txtname,
            "email" => $request->txtemail,
            "phone" => $request->txtphone,
        ]);

        return redirect()->route('user#index')->with('success','update user data success');

    }
}
