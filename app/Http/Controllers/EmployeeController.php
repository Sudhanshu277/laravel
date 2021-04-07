<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function create(){
   	// echo "sudhanshu";
   	return view('welcome');
   }
   public function display()
   {
   	// echo "display";
   	$data = "SUDHANSHU PAL";
   	$a = "ITM";
   	$b = [1,3,"hello","fjid"];
   	return view('display',compact('data','a','b'));
   }
}

