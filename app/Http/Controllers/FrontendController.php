<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FrontendController extends Controller
{
    public function storeletter(Request $request){
     $validate=$request->validate([
          'email'=>'required|email|unique:newsletters'

     ]);
$data =  array();
    $data['email']=$request->email;
        
     $res=DB::table('newsletters')->insert($data);
     if($res){
        Toastr()->success('Subscription successfully');
        return redirect()->back();
     }


    }
}
