<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SocialAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Response;
use DB;

class GoogleController extends Controller
{
    public function loginWithGoogle()
    {
        //normal method
        //return Socialite::driver('google')->redirect();

        //api method
        return Response::json([
            'url' => Socialite::driver('google')->stateless()->redirect()->getTargetUrl(),
        ]);
    }

    public function callbackFromGoogle()
    {   
        //normal method
        // try {
        //     $user = Socialite::driver('google')->user();

        //     // Check Users Email If Already There
        //     $is_user = User::where('email', $user->getEmail())->first();
        //     if(!$is_user){

        //         $saveUser = User::updateOrCreate([
        //             'google_id' => $user->getId(),
        //         ],[
        //             'name' => $user->getName(),
        //             'email' => $user->getEmail(),
        //             'password' => Hash::make($user->getName().'@'.$user->getId())
        //         ]);
        //     }else{
        //         $saveUser = User::where('email',  $user->getEmail())->update([
        //             'google_id' => $user->getId(),
        //         ]);
        //         $saveUser = User::where('email', $user->getEmail())->first();
        //     }


        //     Auth::loginUsingId($saveUser->id);

        //     return redirect()->route('home');
        // } catch (\Throwable $th) {
        //     throw $th;
        // }

        //api method
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = null;

        DB::transaction(function () use ($googleUser, &$user) {
            $socialAccount = SocialAccount::firstOrNew(
                ['social_id' => $googleUser->getId(), 'social_provider' => 'google'],
                ['social_name' => $googleUser->getName()]
            );

            if (!($user = $socialAccount->user)) {
                $user = User::create([
                    'email' => $googleUser->getEmail(),
                    'name' => $googleUser->getName(),
                ]);
                $socialAccount->fill(['user_id' => $user->id])->save();
            }
        });
        return Response::json([
            'user' => "new UserResource($user)",
            'google_user' => $googleUser,
        ]);
    }
}
