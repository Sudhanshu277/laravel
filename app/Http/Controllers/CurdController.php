<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curd;


class CurdController extends Controller
{
    public function create()
    {
      // echo "my";
    	return view('curd.create');
    }
    public function save(Request $data)
    {
      // echo "my";
    	// echo '<pre>';
    	// print_r($data->all());
    	$a = new Curd;
        $a->username = $data->username;
        $a->password = $data->password;

        $a->save();

        if($a)
        {
        	return redirect('curd/create');
        }
    }
    
    public function display()
    {
        // echo "display";
        $data = Curd::all();
        // 
        return view('curd.display',compact('data'));
    }
    public function show($id)
    {
        // echo $id;
        $data = Curd::find($id);
        // echo '<pre>';
        // print_r($data);
        return view('curd.show',compact('data'));
    }
    public function delete($id)
    {
        // echo $id;
        $data = Curd::find($id);
        $deleted = $data->delete();
        if($deleted)
        {
            return redirect('curd/display')->with('message','data sucessfully delete');
        }
     }
      public function edit($id)
    {
        // echo $id;
        $data = Curd::find($id);
        // echo '<pre>';
        // print_r($data);
        return view('curd.edit',compact('data'));
    }
    public function update(Request $a)
    {
        // echo '<pre>';
        // print_r($a->all());
        $data = Curd::find($a->id);
   
        $data->username = $a->username;
        $data->password = $a->password;

        $data->save();

        if($data)
        {
            return redirect('curd/display')->with('message','data sucessfully upadated');
        }
    }
}
