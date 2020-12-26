<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
          //   'birthday','biography', 'status', 'gender',
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'birthday' => ['required', 'string', 'date'],
            'biography' => ['required', 'string', 'min:20'],
            'status' => ['required', 'string'],
            'avatar'=> ['required','image'],
            'image'=> ['required','image'],
            'gender' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'birthday' => $data['birthday'],
            'status' => $data['status'],
            'gender' => $data['gender'],
            'biography' => $data['biography'],
            'password' => Hash::make($data['password']),
        ]);
    
        if( request()->hasFile('avatar'))
        {
            //php artisan storage:link  make it accessible -> storage/avatars/../..
            //request -> global helper           config file systems
            $avatar = request()->file('avatar')->getClientOriginalName();
            request()->file('avatar')->storeAs('avatars', $user->id . '/' . $avatar, '' );
            $user->update(['avatar' => $avatar]);

        }
        if( request()->hasFile('image'))
        {
            //php artisan storage:link  make it accessible -> storage/images/../..
            //request -> global helper           config file systems
            $image = request()->file('image')->getClientOriginalName();
            request()->file('image')->storeAs('images', $user->id . '/' . $image, '' );
            $user->update(['image' => $image]);

        }

        return $user;

    }
}
