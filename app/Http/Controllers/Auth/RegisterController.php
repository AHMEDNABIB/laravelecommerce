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

    protected function profileImagePath()
    {
        $path = '/storage/avatars/defaultavatar.png';
        if(request()->hasFile('profile_image') && request()->file('profile_image')->isValid()) {
            $path = request()->profile_image->store('avatars');
        }
        
        return $path;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
           
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
        
         if (request()->hasFile('image')) {
         $file_extention = $data['image']->getClientOriginalExtension();
         $file_name = time().rand(99,999).'image_profile.'.$file_extention;
         $file_path = $data['image']->move(public_path().'/users/image',$file_name);
         }
        
        
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
             'image'    => $file_name ,

             
            'password' => Hash::make($data['password']),
        ]);


      

        return $user;


    }

  
}
