<?php

namespace LogIn\Http\Controllers\Auth;

use LogIn\User;
use LogIn\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'doc' => 'required|string|max:255',
            //'gen' => 'required|string|',
            //'eps' => 'required|string|max:255',
            //'ciu' => 'required|string|max:255',
            //'tel' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \LogIn\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'doc' => $data['doc'],
            //'gen' => $data['gen'],
            //'eps' => $data['eps'],
            //'ciu' => $data['ciu'],
            //'tel' => $data['tel'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
