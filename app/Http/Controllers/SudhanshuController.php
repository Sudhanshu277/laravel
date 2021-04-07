<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sudhanshu;
class SudhanshuController extends Controller
{
    public function form()
    {
    	// echo "foem";
    	return view('sud.form');
    }

    public function insert(Request $data)
    {
    	// echo "insert";
    	// echo '<pre>';
    	// print_r($data->all());
    	$a = new sudhanshu;
    	$a->name = $data->name;
    	$a->address = $data->address;
    	$a->email = $data->email;

    	$a->save();

    	if ($a) {
    		# code...
    		return redirect('sud/form');
    	}

    }

    public function show()
    {
    	// echo "show";
    	$data  = sudhanshu::all();
    	return vieW('sud.show',compact('data'));
    }
    public function detail($id)
    {
    	// echo "detail";
        $data = sudhanshu::find($id);
        return view('sud.detail',compact('data'));
    }

    public function edit($id)
    {
    	$data = sudhanshu::find($id);
    	return view('sud.edit',compact('data'));
    }

    public function update(Request $a)
    {
       $data = sudhanshu::find($a->id);

       $data->name = $a->name;
       $data->address = $a->address;
       $data->email = $a->email;

       $data->save();
       if ($data) 
       {
          return  redirect('sud/show')->with('message','data updatesd');	
       }
    }
    public function delete($id)
    {
      $data = sudhanshu::find($id);
      $deleted = $data->delete();
      if ($deleted) 
       {
       	return redirect('sud/show')->with('message','data sucessfully delete');
       }
    }
}
