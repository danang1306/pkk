<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminRequest;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    
    public function __construct(){
        $this->middleware('guest:admin')->except('logout');
    }
    
    public function viewlogin(){
        return view('admin/login');
    }

    public function login(AdminRequest $req){
        $data = $req->only('name','password');
        $auth = Auth::guard('admin')->attempt($data);

        if($auth) return redirect()->route('admin.view.dashboard');

        return redirect()->route('admin.view.login')->with('error','Username Atau Password Salah');
    }

    public function logout(){
        Auth::guard('admin')->logout();

		return redirect()->route('admin.view.login')->with('success','Anda Berhasil Logout');
    }
}
