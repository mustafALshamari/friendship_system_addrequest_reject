<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{

   
    protected $fillable = [
        'sender', 'receiver', 'status',
        ];    

}
