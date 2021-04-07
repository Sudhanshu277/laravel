<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    function pratice()
    {
      $a = "practice";
      return view('condition.pratice',compact('a'));
    }
}
