<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use Auth;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        return view('admin.dashboard');
    }


    public function show()
    {
        
        return view('admin.profile');
    }


    public function update(Request $request ,$id ){

        // dd($request->all());

         $user = User::findOrFail($id);

         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email'=>'required|string|email|max:255|unique:users,email,'. $id,
            'image'=> 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'current-password' => 'required',             
            'new-password' => 'required|string|confirmed',
            
           
        ]);
        
    
        $input = $request->all();

      


        if ($image = $request->file('image')) {
            $destinationPath = 'users/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";  
            
             
         if (file_exists(public_path('users/image/'.$user->image))) {
                unlink(public_path('users/image/'.$user->image)); 
            }

        }else{  
            unset($input['image']);
        }
        
  
      
        
          if($input['current-password'] == null ||$input['new-password'] == null ||$input['new-password_confirmation'] == null) {
          
               unset($input['current-password']);
               unset($input['new-password']);
               unset($input['current-password_confirmation']);
               
          }else{

            // dd(Hash::check($request->get('current-password'), Auth::user()->password));
               if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

       
          }
        
          
        $user->update($input);

        
    
        return redirect()->back()->with("success","User updated succesfully");
  
       
    }

    
   
    
    
}
