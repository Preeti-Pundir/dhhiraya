<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use Session;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function credentials(Request $request){
        return ['email'=>$request->email,'password'=>$request->password,'status'=>'active','role'=>'admin'];
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

// for Google

    public function redirect($provider)
    {
        // dd($provider);
     return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
    {
        $userSocial =   Socialite::driver($provider)->stateless()->user();
        $users      =   User::where('provider_id',$userSocial->id)->first();

        if($users){
            Auth::login($users);
            Session::put('user',$users['email']);
            return redirect('/')->with('success','You are login from '.$provider);
        }else{
            $user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
            ]);

         $users  =  User::where('provider_id',$userSocial->id)->first();
        if($users){
                Auth::login($users);
                Session::put('user',$users['email']);
                return redirect('/')->with('success','Registered & Successfully login from '.$provider);
            }else{

                return redirect()->route('home')->with('success','Registration is successfull from '.$provider);

            }
        }
    }


// For Facebook

public function redirectToFacebook()
{
    // dd($provider);

return Socialite::driver('facebook')->redirect();
}

public function CallbackFacebook()
{
    $userSocial =   Socialite::driver('facebook')->stateless()->user();
    $users      =   User::where('provider_id',$userSocial->id)->first();

    if($users){
        Auth::login($users);
        Session::put('user',$users['email']);
        return redirect('/')->with('success','You are login from facebook');
    }else{
        $user = User::create([
            'name'          => $userSocial->getName(),
            'email'         => $userSocial->getEmail(),
            'image'         => $userSocial->getAvatar(),
            'provider_id'   => $userSocial->getId(),
            'provider'      => 'facebook',
        ]);
     return redirect()->route('home')->with('success','Registration is successfull from facebook');
    }
}


}