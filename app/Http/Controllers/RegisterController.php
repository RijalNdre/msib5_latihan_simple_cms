<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }
    
    public function register(Request $request){
        $validateData = $request->validate([
            'name'=> 'required|min:5|max:25|unique:users',
            'email'=> 'required|email:dns|unique:users',
            'password'=>'required|min:5|max:50'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        
        User::create($validateData);

        $request->session()->flash('success','Registrasi berhasil, silahkan login');
        return redirect('/login');
    }
}
