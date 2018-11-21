<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Auth;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';
    protected  $redirect = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function showRegistrationForm()
    {
        $parameters = array(
            'errorNote' => '',
            'tabData' => '',
            'data' => ''
        );
        return view('auth.register')->with('parameters',$parameters);;
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            //'password' => bcrypt($data['password']),
            'password' => $data['password'],
        ]);
    }


    public function register(Request $request)
    {

        if(preg_match("/platinumcredit.co.tz/", $request['email'])){

            $staffMail =  DB::table('registeredStaffs')
                ->select('registeredStaffs.*')
                ->where('registeredStaffs.staffMail','=',$request['email'])->get();
            if(count($staffMail) == 0 ){

                $parameters = array(
                    'errorNote' => 'notification',
                    'tabData' => 'NotPCLStaff',
                    'data' => $request['email']
                );

                return view('auth.register')->with('parameters',$parameters);

            }else{

                $this->validator($request->all())->validate();
                event(new Registered($user = $this->create($request->all())));

                $this->guard()->login($user);

		Auth::user()->givePermissionTo('view staff page');

                return $this->registered($request, $user)
                    ?: redirect('mainhome');


	   }



        }

        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }






}
