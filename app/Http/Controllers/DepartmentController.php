<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
class DepartmentController extends Controller
{
    public function create()
    {
    	return view('image.create');
    }

    public function save(Request $a)
    {
    	// echo '<pre>';
    	// print_r($a->file('image'));
    	$file = $a->file('image');
    	// dd($file);//dump and die
    	// exit;
    	$filename = 'image'. time().'.'.$a->image->extension();
            // dd($filename);
            // exit;
    	 $file->move("upload/",$filename);
         //dd($file);
         //exit;
         $data = new Department;
         $data->name = $a->name;
         $data->image = $filename;
         $data->save();
    }

}
