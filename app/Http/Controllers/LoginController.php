<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginController extends Controller
{
    public function index(){
        return view('content.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin =[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('/dashboard');
            }elseif(Auth::user()->role=='user'){
                return redirect('/');
            }

        }else{
            return redirect('login')->withErrors('Username dan password yang anda masukkan salah')->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    
    public function register(){
        return view('content.register');
    }

    public function register_proses(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ],[
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter'
        ]);

        $data['name'] = $request->nama;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($login)){
            
            return redirect('/');
          
            

        }else{
            return redirect('/login')->withErrors('Username dan password yang anda masukkan salah')->withInput();
        }
           
       
    }
}
