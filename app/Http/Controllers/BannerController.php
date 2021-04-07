<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class BannerController extends Controller
{
    public function form()
    {
       // echo "form";
    	return view('banner.form');
    }
    public function inser(Request $data)
    {
    	// echo "jhkh";
    	// echo '<pre>';
    	// print_r($data->all());

    	$a = new Banner;
    	$a->name = $data->name;
    	$a->city = $data->city;
    	$a->address = $data->address;
    	$a->college = $data->college;
    	$a->gender = $data->gender;
    	$a->qulification = implode(',',$data->qulification);
    	$a->phone_number = $data->phone_number;

    	$a->save();
    	if ($a) {
    		return redirect('banner/form');
    	}
    }
    public function display()
    {
        // echo "display";
        $data = Banner::all();
        return view('banner.display',compact('data'));
    }
    public function show($id)
    {
        // echo "done";
        $data = Banner::find($id);
        return view('banner.show',compact('data'));

    }
    public function edit($id)
    {
        // echo "djs";
        $data = Banner::find($id);
        // echo "<pre>";
        // print_r($data);
        return view('banner.edit',compact('data'));
    }
    public function update(Request $a)
    {
        // echo "hello";
        // print_r($a->all());
        $data = Banner::find($a->id);
        $data->name = $a->name;
        $data->city = $a->city;
        $data->address = $a->address;
        $data->college = $a->college;
        $data->gender = $a->gender;
        $data->qulification = implode(',',$a->qulification);
        $data->phone_number = $a->phone_number;

        $data->save();
        if ($data) {
            return redirect('banner/display')->with('message','data sucessfully update');
        }

    }
    public function delete($id)
    {
         $data = Banner::find($id);
         $deleted = $data->delete();
         if ($deleted) 
         {
             return redirect('banner/display')->with('message','data sucessfully delete');
         }
    }
}
