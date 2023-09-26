<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;

class FaceController extends Controller
/*configurar el driver para dos rutas necesitamos dos metodos*/
{
    public function redirectFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebookk(){
        /*buscar ese id si lo encuentra realizamos el login y lo dirigimos al dashboard*/
        try{
            $facebookUser = Socialite::driver('facebook')->user();
            $findUser = User::where('fb_id', $facebookUser->id)->first();

            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('dashboard');
            }else {
                /*en caso contrario generar nuevo usuario */
                $newUser = User::create([
                    'name'=>$facebookUser->name,
                    'email'=>$facebookUser->email,
                    'fb_id'=>$facebookUser->id,
                    'password'=> encrypt(12345678)
                ]);
                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        /*en caso de rror mostrar el sgnt mensaje*/
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
