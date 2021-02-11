<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class WishlistController extends Controller
{
    public function addwishlist($id){
    $user_id=Auth::user()->id;
    $check=DB::table('wishlists')->where('user_id',$user_id)->where('product_id',$id)->first();
   $data=array(
       'user_id'=>$user_id,
       'product_id'=>$id,
       'created_at'=>now(),
       'updated_at'=>now(),
   );
   if(Auth::check()){
if($check){
    Toastr()->warning('Product already in your wishlist');
    return redirect()->back();

}else{
    DB::table('wishlists')->insert($data);
    Toastr()->success('Product successfully added in your wishlist');
    return redirect()->back();
}

   }else{
    Toastr()->danger('Please login first ');
    return redirect()->back();

   }
   
    }
}
