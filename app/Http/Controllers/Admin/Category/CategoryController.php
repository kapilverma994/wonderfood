<?php

namespace App\Http\Controllers\Admin\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function category(){
       $categories=Category::all();
       return view('admin.category.index',compact('categories'));
    }
    
    
    public function storecategory(Request $request){
        
      
        $validateData=  $request->validate([
            'category_name'=>'required|unique:categories',
        ]);
        $cat=new Category();
        $cat->category_name=$request->category_name;
        $cat->save();
       Toastr()->success('Category created successfully');
        return redirect()->back();


    }

    public function deletecategory($id){
      $cat=Category::find($id);
      $cat->delete();
      Toastr()->success('Category deleted successfully');
      return redirect()->back();
    }



    public function editcategory($id){
        $cat=Category::find($id);
    return view('admin.category.edit',compact('cat'));
      }

      public function updatecategory(Request $request,$id){
        $cat=Category::find($id);
        $validateData=  $request->validate([
            'category_name'=>'required',
        ]);
        $cat->category_name=$request->category_name;
        $cat->save();
        Toastr()->success('Category updated successfully');
        return redirect()->route('categories');
      }


}
