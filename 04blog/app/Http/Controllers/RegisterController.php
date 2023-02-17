<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        // dd('formulario enviado');
        // dd($request);
        $this->validate($request, [
            'name' => ['required', 'min:5'],
            'username' => "required|unique:users|min:3|max:20",
            'email' => ['required', 'unique:users','email', 'max:50'],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        // dd('generando usuario');
        User::create([
            'name' => $request->name,
            // 'username' => Str::lower($request->username),
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }
}
