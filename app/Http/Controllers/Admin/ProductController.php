<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Product;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
        $products=DB::table('products')->join('categories','products.category_id','categories.id')
        ->join('brands','products.brand_id','brands.id')->select('products.*','categories.category_name','brands.brand_name')->get();
        return view('admin.product.index',compact('products'));
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
        
  
       $pro=new Product();
       $pro->category_id=$request->category_id;
       $pro->subcategory_id=$request->subcategory_id;
       $pro->brand_id=$request->brand_id;
       $pro->product_name=$request->product_name;
       $slug = Str::of($request->product_name)->slug('-');
       $pro->slug=$slug;
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
       $pro->tags=$request->tags;
       $image_one=$request->image_one;
       $image_two=$request->image_two;
       $image_three=$request->image_three;
       $image_four=$request->image_four;
       $image_five=$request->image_five;
       $image_six=$request->image_six;


if($image_one){
    $image_one_name=hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
    
$image_one->storeAs('media/products',$image_one_name,'public');
 $pro->image_one=$image_one_name;
}
if($image_two){
    $image_two_name=hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
    
$image_two->storeAs('media/products',$image_two_name,'public');
 $pro->image_two=$image_two_name;
}
if($image_three){
    $image_three_name=hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
    
$image_three->storeAs('media/products',$image_three_name,'public');
 $pro->image_three=$image_three_name;
}
if($image_four){
    $image_four_name=hexdec(uniqid()).'.'.$image_four->getClientOriginalExtension();
    
$image_four->storeAs('media/products',$image_four_name,'public');
 $pro->image_four=$image_four_name;
}
if($image_five){
    $image_five_name=hexdec(uniqid()).'.'.$image_five->getClientOriginalExtension();
    
$image_five->storeAs('media/products',$image_five_name,'public');
 $pro->image_five=$image_five_name;
}
if($image_six){
    $image_six_name=hexdec(uniqid()).'.'.$image_six->getClientOriginalExtension();
    
$image_six->storeAs('media/products',$image_six_name,'public');
 $pro->image_six=$image_six_name;
}




$pro->save();

Toastr()->success('Product Added successfully');
return redirect()->route('products.index');



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
        $pro=Product::find($id);
        
        return view('admin.product.edit',compact('pro'));
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
       
       $pro=Product::find($id);
       $pro->category_id=$request->category_id;
       $pro->subcategory_id=$request->subcategory_id;
       $pro->brand_id=$request->brand_id;
       $pro->product_name=$request->product_name;
       $slug = Str::of($request->product_name)->slug('-');
       $pro->slug=$slug;
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
       $pro->tags=$request->tags;
       $image_one=$request->image_one;
       $image_two=$request->image_two;
       $image_three=$request->image_three;
       $image_four=$request->image_four;
       $image_five=$request->image_five;
       $image_six=$request->image_six;
       $one=$pro->image_one;
    
       $two=$pro->image_two;
       $three=$pro->image_three;
       $four=$pro->image_four;
       $five=$pro->image_five;
       $six=$pro->image_six;
  $path="media/products/";


if($image_one){
    Storage::disk('public')->delete($path.$one);
    $image_one_name=hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
    
$image_one->storeAs('media/products',$image_one_name,'public');
 $pro->image_one=$image_one_name;
}
if($image_two){
    Storage::disk('public')->delete($path.$two);
    $image_two_name=hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
    
$image_two->storeAs('media/products',$image_two_name,'public');
 $pro->image_two=$image_two_name;
}
if($image_three){
    Storage::disk('public')->delete($path.$three);
    $image_three_name=hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
    
$image_three->storeAs('media/products',$image_three_name,'public');
 $pro->image_three=$image_three_name;
}
if($image_four){
    Storage::disk('public')->delete($path.$four);
    $image_four_name=hexdec(uniqid()).'.'.$image_four->getClientOriginalExtension();
    
$image_four->storeAs('media/products',$image_four_name,'public');
 $pro->image_four=$image_four_name;
}
if($image_five){
    Storage::disk('public')->delete($path.$five);
    $image_five_name=hexdec(uniqid()).'.'.$image_five->getClientOriginalExtension();
    
$image_five->storeAs('media/products',$image_five_name,'public');
 $pro->image_five=$image_five_name;
}
if($image_six){
    Storage::disk('public')->delete($path.$six);
    $image_six_name=hexdec(uniqid()).'.'.$image_six->getClientOriginalExtension();
    
$image_six->storeAs('media/products',$image_six_name,'public');
 $pro->image_six=$image_six_name;
}




$pro->save();

Toastr()->success('Product Update Successfully');
return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $pro=Product::find($id);
        $one=$pro->image_one;
    
        $two=$pro->image_two;
        $three=$pro->image_three;
        $four=$pro->image_four;
        $five=$pro->image_five;
        $six=$pro->image_six;
   $path="media/products/";
   Storage::disk('public')->delete([$path.$one,$path.$two,$path.$three,$path.$four,$path.$five,$path.$six]);



        $pro->delete();
        Toastr()->success('Product Deleted successfully');
        return redirect()->back();
  
    }
    public function inactive_product($id){
        $pro=Product::find($id);
        $pro->status=0;
        $pro->save();
        Toastr()->success('Product Inactive successfully');
        return redirect()->back();

    }
    public function active_product($id){
        $pro=Product::find($id);
        $pro->status=1;
        $pro->save();
        Toastr()->success('Product active successfully');
        return redirect()->back();

    }
}
