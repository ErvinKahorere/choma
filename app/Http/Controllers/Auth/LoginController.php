<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your dashboard screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($service)
    {
        return Socialite::driver($service)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($service)
    {

   //     $userSocial = Socialite::driver('twitter')->user();


        if ($service == 'twitter') {
            $userSocial = Socialite::driver($service)->user();
        } else {
            $userSocial = Socialite::driver($service)->stateless()->user();
        }

    //    return $userSocial->name;

        $findUser = User::where('email',$userSocial->email)->first();

        if ($findUser) {

            Auth::login($findUser);

            return redirect('/');

      //      return 'done with old';

        }else {

            $user = new User;

            $user->name = $userSocial->name;
            $user->email = $userSocial->email;
            $user->avatar= $userSocial->avatar;
            $user->password = bcrypt(123456);
            $user->city = '';
            $user->gender = '';
            $user->age_group = '';
            $user->phone_number='';
            $user->slug='';

            $user->save();

            Auth::login($user);

            return redirect('/');

        //    return 'done with new';

        }


    }
}
