<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Coupan;
use Illuminate\Support\Facades\DB;
class CoupanController extends Controller
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
       $coupans=Coupan::all();
       return view ('admin.coupan.index',compact('coupans'));

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
        $validateData=  $request->validate([
            'coupan'=>'required|unique:coupans',
            'discount'=>'required|numeric',
        ]);
        $coupan=new Coupan();
        $coupan->coupan=$request->coupan;
        $coupan->discount=$request->discount;
        $coupan->save();
       Toastr()->success('Coupan created successfully');
        return redirect()->route('coupans.index');
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
        $coupan=Coupan::find($id);
        return view('admin.coupan.edit',compact('coupan'));
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
        $coupan=Coupan::find($id);
        $validateData=  $request->validate([
          
            'discount'=>'numeric',
        ]);
    
        $coupan->coupan=$request->coupan;
        $coupan->discount=$request->discount;
        $coupan->save();
       Toastr()->success('Coupan updated successfully');
        return redirect()->route('coupans.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $coupan=Coupan::find($id);
        $coupan->delete();
        Toastr()->success('Coupand deleted successfully');
        return redirect()->route('coupans.index');
    }
    public function newsletter(Request $request){
$letters=DB::table('newsletters')->get();
return view('admin.coupan.newsletter',compact('letters'));
    }

    public function delete_letter($id){
   $letter=DB::table('newsletters')->where('id',$id)->delete();
   if($letter){
    Toastr()->success('Subscription deleted successfully');
    return redirect()->back();
   }

    }
}
