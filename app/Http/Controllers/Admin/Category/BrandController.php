<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Brand;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $brands=Brand::all();
        return view('admin.category.brand',compact('brands'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand=new Brand();
        $validate=$request->validate([
            'brand_name'=>'required|unique:brands',
            'brand_logo'=>'required|mimes:jpeg,bmp,png,jpg|max:2048'
        ]);
        $brand->brand_name=$request->brand_name;
        $image=$request->file('brand_logo');
        if($image){
            $image_name=date('dmy_H_s_i');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'-'.$ext;
            $upload_path='media/brands/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
 }
 $brand->brand_logo=$image_url;
 $brand->save();
 Toastr()->success('Brand created successfully');
        return redirect()->back();

       
 
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
        $brand=Brand::find($id);
       return view ('admin.category.edit_brand',compact('brand'));
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
        $brand=Brand::find($id);
        $image_url=$brand->brand_logo;
        if($request->hasFile('brand_logo')){
            unlink($image_url);
            $image_name=date('dmy_H_s_i');
            $ext=strtolower($request->brand_logo->getClientOriginalExtension());
            $image_full_name=$image_name.'-'.$ext;
            $upload_path='media/brands/';
            $image_url=$upload_path.$image_full_name;
            $success=$request->brand_logo->move($upload_path,$image_full_name);


        }
        $brand->brand_name=$request->brand_name;
        
        $brand->brand_logo=$image_url;
        $brand->save();

        Toastr()->success('Brand updated successfully');
        return redirect()->route('brands.index');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
   $brand=Brand::find($id);
   $image=$brand->brand_logo;
  unlink($image);

  $brand->delete();
  Toastr()->success('Brand deleted successfully');
  return redirect()->route('brands.index');

    }
}
