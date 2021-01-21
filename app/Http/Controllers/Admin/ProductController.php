<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Product;
use Illuminate\Support\Facades\DB;
use Image;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=DB::table('categories')->get();
        $brands=DB::table('brands')->get();
        return view('admin.product.create',compact('categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        dd($request->all());
  
       $pro=new Product();
       $pro->category_id=$request->category_id;
       $pro->subcategory_id=$request->subcategory_id;
       $pro->brand_id=$request->brand_id;
       $pro->product_name=$request->product_name;
       $pro->product_details=$request->product_details;
       $pro->product_code=$request->product_code;
       $pro->quantity=$request->quantity;
       $pro->product_color=$request->product_color;
       $pro->product_size=$request->product_size;
       $pro->selling_price=$request->selling_price;
       $pro->discount_price=$request->discount_price;
       $pro->video_link=$request->video_link;
       $pro->main_slider=$request->main_slider;
       $pro->hot_deals=$request->hot_deals;
       $pro->best_rated=$request->best_rated;
       $pro->mid_slider=$request->mid_slider;
       $pro->hot_new=$request->hot_new;
       $pro->trend=$request->trend;
       $pro->meta_title=$request->meta_title;
       $pro->meta_keyword=$request->meta_keyword;
       $pro->meta_description=$request->meta_description	;
       $pro->tags=$request->$request->tags;
       $image_one=$request->image_one;
       $image_two=$request->image_two;
       $image_three=$request->image_three;
       $image_four=$request->image_four;
       $image_five=$request->image_five;
       $image_six=$request->image_six;

if($image_one || $image_two || $image_three || $image_four || $image_five || $image_six){
    $image_one_name=hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
    


}


    }



    public function get_sub($cat_id)
    {
        $sub_cat=DB::table('subcategories')->where('category_id',$cat_id)->get();
        return response()->json($sub_cat);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
