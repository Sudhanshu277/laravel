<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teache;

class TeacherController extends Controller
{
    public function form()
    {
      // echo "form";
    	return view('test.form');
    }
    public function save(Request $data)
    {
    	// echo "save";
    	// echo "<pre>";
    	// print_r($data->all());
    	$a = new Teache;
    	$a->name = $data->name;
    	$a->college = $data->college;
    	$a->branch = $data->branch;
    	$a->salary = $data->salary;
    	$a->subject = $data->subject;    
    	$a->address = $data->address;
    	$a->phone_number = $data->phone_number;
    	$a->email = $data->email;
    	$a->gender = $data->gender;

    	$a->save();
    	if ($a) {
    		return redirect('test/display');
    	}
    }

    public function display()
    {
    	// echo "display";
    	$data = Teache::all();
    	return view('test.display',compact('data'));
    }

    public function show($id)
    {
    	// echo "show";
    	$data = Teache::find($id);
        return view('test.show',compact('data'));
    }
    public function edit($id)
    {
        $data = Teache::find($id);
         return view('test.edit',compact('data'));
    }
    public function update(Request $a)
    {
    	// echo "update";
          // echo "<pre>";
          // print_r($a->all());
        $data = Teache::find($a->id);
        $data->name = $a->name;
    	$data->college = $a->college;
    	$data->branch = $a->branch;
    	$data->salary = $a->salary;
    	$data->subject = $a->subject;    
    	$data->address = $a->address;
    	$data->phone_number = $a->phone_number;
    	$data->email = $a->email;
    	$data->gender = $a->gender;

    	$data->save();

    	if ($data) {
    	     return redirect('test/display')->with('message','data sucessfully update');
    	}
    }
    public function delete($id)
    {
       $data = Teache::find($id);
       $deleted = $data->delete();
       if ($deleted) 
       {
       	return redirect('test/display')->with('message','data sucessfully delete');
       }
    }
}
