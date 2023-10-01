<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
/*configurar el driver para dos rutas necesitamos dos metodos*/
{
    
    public function login(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(){
        /*buscar ese id si lo encuentra realizamos el login y lo dirigimos al dashboard*/
        try{
            $googleUser= Socialite::driver('google')->user();
            $userExists= User::where('google_id', $user->id)->where('google_auth', 'google')->first();

            if ($userExists) {
                Auth::login($userExists);
                return redirect()->intended('home');
            }else {
                /*en caso contrario generar nuevo usuario */
                $newUser = User::create([
                    'name'=>$googleUser->name,
                    'email'=>$googleUser->email,
                    'avatar'=>$googleUser->avatar,
                    'google_id'=>$googleUser->id,
                    'google_auth'=>'google',
                ]);
                Auth::login($newUser);
                return redirect()->intended('home');
            }
        /*en caso de rror mostrar el sgnt mensaje*/
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
