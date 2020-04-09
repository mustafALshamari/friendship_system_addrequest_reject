<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class userApiController extends Controller
{
    public function signup(Request $request)
    {


        $this->validate($request, [
             
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6'

            ]);


        try{
            
            $user = $request->all();
            $user['password'] = bcrypt($request->password);
            $User = User::create($user);
            
            return response()->json(['success' => 'You have registered successfuly'], 200);
    

        } catch (Exception $e) {
           
             return response()->json(['error' => 'something went wrong'], 500);
        }
    }

}
