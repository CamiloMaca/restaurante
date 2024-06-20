<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Categoria;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function register(Request $request){
        $user = new User();
    
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= Hash::make($request->password);
        $user->save();

        Auth::login($user);
        return redirect(route('privada'));
        
    }


    public function login(Request $request){

        $credentials=[
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        $remember = ($request->has('remember')? true : false);

        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();
            return redirect()->intended(route('privada'));
        }else{
            return redirect('login');
        }

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();       
        $request->session()->regenerate();

        return redirect(route('login'));
    }

    public function create(){
        return view('create');
    }

    public function storeCate(Request $request){
        $categoria = new Categoria();

        $categoria->nombre=$request->nombre;    
        $categoria->color=$request->color;  
    

        $categoria->save();
        return redirect(route('create'));
    }

    public function indexCate(){

        $categorias = Categoria::orderBy('id', 'desc')->get();
        return view('index', compact('categorias'));
    }


}
