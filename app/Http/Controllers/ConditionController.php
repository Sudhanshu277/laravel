<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function aif(){
    	//echo "jk";
    	$a = "if statement";
    	return view("condition.if",compact('a'));
    }
    public function aelse(){
    	// echo "jdksdjsk";
    	$b = "else statement";
    	return view("condition.else",compact('b'));
    }
    public function aelseif(){
    	// echo "iijk";
    	$c = "else if statement";
    	return view("condition.elseif",compact('c'));
    }
    public function aisset(){
        $c= "issset statement";
        return view("condition.isset",compact('c'));
    }
    public function aempty(){
         $a = "";
        return view("condition.empty",compact('a'));
    }
    public function aunless(){
        $name = "unless statement";
        $names = [];
        return view("condition.unless",compact('name','names'));
    }
    // loop
    public function bfor(){
        $name = "For statement";
        $names = [];
        return view('loop.for',compact('name','names'));
    }
    public function bforeach(){
        $name = "Foreach statement";
        $names= ['sudhanshu pal', 1,432,2];
        return view('loop.foreach',compact('name','names'));
    }
    public function bforelse(){
        $name = "Forelse statement";
        $names = ["hello", "world","how are you"];
        return view('loop.forelse',compact('name','names'));
    }
    public function bwhile(){
        $name = "krishna";
        $names = ["shiv",'hanuman','ganesh'];
        return view('loop.while',compact('name','names'));
    }
    public function bloopindex(){
        $name = "jay";
        $names = ["kumar" , 1234];
        return view('loop.loopindex',compact('name','names'));
    }
}