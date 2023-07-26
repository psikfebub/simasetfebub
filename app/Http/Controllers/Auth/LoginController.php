<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    //protected $redirectTo = RouteServiceProvider::HOME;
    // protected function redirectTo(Request $request)
    // {
    // if ($request->user()->hasRole('admin')) {
    //     return redirect()->route('admin.home'); // Redirect to the admin's home page
    // } else if ($request->user()->hasRole('operator')) {
    //     return redirect()->route('operator.home'); // Redirect to the operator's home page
    // }

    // // If the user doesn't have any recognized role, you can add a default redirection here
    // return redirect()->route('/'); // Redirect to a default home page for other users.
    // }

    protected function authenticated(Request $request, $user)
    {
        if ($user->hasRole('admin')) {
            return redirect()->route('admin.home');
        } else if ($user->hasRole('operator')) {
            return redirect()->route('operator.home');
        } else {
            return redirect()->route('default.home');
        }
    }
    
    // protected function redirectTo(Request $request){
    //     if($request->user()->hasRole('admin')){
    //         return view('home');
    //     }else if($request->user()->hasRole('operator')){
    //         return view('operator');
    //     };
    // }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


  
}
