<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
class FriendshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addNewFriend($receiver_id)
    {      

         $user = User::first();
         $user->adduser($receiver_id);
        

    }


    public function acceptNewFriend($sender)
    {

        $user = User::find(Auth::id());
        $user->acceptinvitation($sender);
     
    }

  
    public function reject($sender)
    {

       $user = User::find(Auth::id());
       $user->reject($sender);

    }

}
