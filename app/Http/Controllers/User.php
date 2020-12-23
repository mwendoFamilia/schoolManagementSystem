<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function details($firstname,$lastname){

        // echo "name : ",$firstname," ",$lastname;
        return ['firstname'=>$firstname,'lastname'=>$lastname];
    }
}
  