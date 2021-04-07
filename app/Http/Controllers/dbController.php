<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class dbController extends Controller
{
    public function insert()
    {
      // echo "insert function";
     $data = DB::table('students')->insert(['name'=>'sudhanshu pal','city'=>'agra','college'=>'rjit','number'=>'56623']);
    	echo $data;
    }
    public function display()
    {
     $data = DB::table('students')->get();

// $data =DB::table('students')->orderBy('id','desc')->get();
// $data= DB::table('students')->where(['id'=>3])->get();
// $data =DB::table('students')->where(['id'=>3])->first();
// $data = DB::table('students')->count();
// $data = DB::table('students')->pluck('name'); 
// $data =DB::table('students')->select('name','email')->get();
// $data =DB::table('students')->select('name','email as email_id')->get();
     echo "<pre>";
     print_r($data);
    }
    public function update()
    {
    	// echo "update";
    	echo $data=DB::table('students')->where(['id'=>1])->update(['name'=>'jeetu', 'college'=>'j@gmail.com']);
    }
    public function delete()
    {
   echo $data=DB::table('students')->where(['id'=>3])->delete();
    }
}
