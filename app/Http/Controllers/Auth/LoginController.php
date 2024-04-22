<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Carbon\Carbon;
use URL;
use Hash;
use Illuminate\Support\Facades\Session;
use Redirect;
use Spatie\Permission\Models\Role;



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

  //  use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function authentication(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'username is required',
                'password.required' => 'Password is required',
            ]
        );

        $username =$request->input('username');
        $password =$request->input('password');
        $remember =$request->input('remember');


        if (Auth::attempt(['email' => $username, 'password' => $password],$remember)) {
            $user = User::find(auth()->user()->id);
            if ($user->is_active) { 
               if ($user->hasRole('Admin') || $user->hasRole('Super Admin') || $user->hasRole('Customer')) {
                if ($user->hasRole('Admin') || $user->hasRole('Super Admin')) {
                    return response()->json([
                        'success' =>true,
                        'message' =>$user->name.' Welcome Again',
                        'url'     =>URL::to('dashboard')
                    ]);
                }elseif($user->hasRole('Customer')){
                    $last_url =Session::get('last_url');
                    $url =$last_url ?? URL::to('/');
                    Session::forget('last_url');
                    return response()->json([
                        'success' =>true,
                        'message' =>$user->name.' Welcome Again',
                        'url'     =>$url,
                    ]);
                } 
                else {
                    return response()->json([
                        'success' =>true,
                        'message' =>$user->name.' Welcome Again',
                        'url'     =>URL::to('/')
                    ]);
                }
               
               } else {
                Auth::logout();
                return response()->json([
                    'success' =>false,
                    'errors' =>'You dont have Permission to access this site',
                ],500);
               }
               

            } else {
                Auth::logout();
                return response()->json([
                    'success' =>false,
                    'errors' =>'Your Account has been Deactivated , Contact System Adminstrator to Activate Your Account',
                ],500);
            }
        } else {
            return response()->json([
                'success' =>false,
                'errors' =>'Invalid email/Username or Password',
            ],500);
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('home');
    }

    public function changePasswordForm(){
        return view('auth.change_password');
    }

    public function changePassword(Request $request){
        $valid =$this->validate($request,[
            'old_password' =>'required',
            'password'     =>['required','confirmed','string','min:6','regex:/[a-z]/','regex:/[A-Z]/','regex:/[0-9]/','regex:/[@$!%*#?&]/',
            ],
        ]);

        $user =Auth::user();
        if (!Hash::check($valid['old_password'],$user->password)) {
            return response()->json([
                'success' =>false,
                'errors'  =>"Old Password is not correct",
            ],500);
        }

        $user->password =Hash::make($valid['password']);
        $user->password_change_status =1;
        $user->password_change_date =Carbon::now();
        $user->save();
        
        return response()->json([
            'success' =>true,
            'message' =>greeting().' '.$user->name.' Welcome Again at Usk Brotherhood',
            'url'     =>URL::to('dashboard')
        ]);
    }

}
