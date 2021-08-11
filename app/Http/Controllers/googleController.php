<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class googleController extends Controller
{
    //
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(){
        $user = Socialite::driver('google')->stateless()->user();

        $ourUser = User::where("googleId", $user->getId())->first();

        if($ourUser){
            Auth::login($ourUser);
            return redirect("/");
        }else{
            $ourUser = User::create([
                'name' => $user->getName(),
                'email'=> $user->getEmail(),
                'googleId'=> $user->getId(),
            ]);

            Auth::login($ourUser);
            return redirect("/");
        }


        
    }

    public function googleLogout(){
        Auth::logout();
        return redirect("/");
    }

   
}
