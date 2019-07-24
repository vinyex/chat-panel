<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{
    public $successStatus = 200;

    /**
     * Login API
     */
    public function login()
    {
        $attemptEmail = Auth::attempt([
                            'email' => request('email'), 
                            'password' => request('password')
                        ]);
        $attemptUsername = Auth::attempt([
                            'username' => request('email'), 
                            'password' => request('password')
                        ]);

        if ($attemptEmail || $attemptUsername) {
            $user = Auth::user();
            $success['token'] = $user->createToken('myToken')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401); 
        }
        
    }

    /**
     * Register API
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'username' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);

        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all(); 
                $input['password'] = bcrypt($input['password']); 
                $user = User::create($input); 
                $success['token'] =  $user->createToken('MyApp')->accessToken; 
                $success['name'] =  $user->name;
                $success['username'] =  $user->username;
        return response()->json(['success'=>$success], $this->successStatus); 
    }

    /**
     * Get User Data
     */
    public function getUser()
    {
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this->successStatus);
    }

    /**
     * Get All Users Data
     */
    public function allUser()
    {
        $allUser = User::get();
        return response()->json(['success' => $allUser], $this->successStatus);
    }
}
