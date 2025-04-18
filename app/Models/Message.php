<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    /**
    * The attributes that are mass assignable.
    *
    * @var list<string>
    */
   protected $fillable = [
       'name',
       'email',
       'message',
   ];
}
