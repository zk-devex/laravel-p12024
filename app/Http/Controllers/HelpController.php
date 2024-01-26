<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
   function Help(){
    return view('HelpPage');
   }
}
