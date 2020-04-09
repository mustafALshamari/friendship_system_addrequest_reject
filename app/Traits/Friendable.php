<?php

namespace App\Traits;

use App\Friendship;


trait Friendable
{


        public function adduser($receiver_id)
        {
            $friendship = Friendship::create([
                            'sender' => $this->id,
                            'receiver'=> $receiver_id]);
                if($friendship)
                {
                    return response()->json(['message' => 'you sent a friendship invitaion'], 200);
                }

                    return response()->json('fail',501);

        }


        public function acceptinvitation($sender)
        {
            $friendship = Friendship::where('sender',$sender)
                                    ->where('receiver',$this->id)
                                    ->first();
                if($friendship)
                {
                    $friendship->update(['status' => 1 ]);
                    return response()->json('you accepted friend request', 200);
                }
                    return response()->json('fail',501);


        }



        public function reject($sender)
        {
            $friendship = Friendship::where('sender',$sender)
                                    ->where('receiver',$this->id)
                                    ->first();
                if($friendship)
                {
                    $friendship->delete();
                    return response()->json('you have rejected request', 200);
                }
                return response()->json('fail',501);

        }



}