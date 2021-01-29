@extends('admin.admin_layout')
@section('admin_content')

<div class="sl-mainpanel">


    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Product Table</h5>
        
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Product
   <a href="{{route('products.create')}}" class="btn btn-sm btn-warning" style="float: right">Add Product</a>
</h6>
        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">ID</th>
                <th class="wd-15p">Image</th>
                <th class="wd-15p">Product Code</th>
                <th class="wd-15p">Product Name</th>
                <th class="wd-15p">Category</th>
                <th class="wd-15p">Brand</th>
                <th class="wd-15p">Quantity</th>
                <th class="wd-15p">Status</th>
                <th class="wd-20p">Action</th>
                
               
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $key=>$row)
                    
                
              <tr>
                <td>{{$key+1}}</td>
                <td><img src="{{asset('media/products/'.$row->image_one)}}" height="70px" width="80px" alt=""></td>
                <td>{{$row->product_code}}</td>
              <td>{{$row->product_name}}</td>
              <td>{{$row->category_name}}</td>
              <td>{{$row->brand_name}}</td>
              <td>{{$row->quantity}}</td>
              <td>

        @if($row->status==1)
        <span class="badge badge-success">Active</span>
        @else
        <span class="badge badge-danger">Inactive</span>
@endif
              </td>
                <td>
                   @if ($row->status==1)
                   <a href="{{url('/deactive/product',$row->id)}}" title="Deactive" class="btn btn-sm btn-danger"><i class="fa fa-thumbs-down"></i></a>
                   @else 
                   <a href="{{url('active/product',$row->id)}}" title="Active" class="btn btn-sm btn-primary"><i class="fa fa-thumbs-up"></i></a>
                   @endif
                   
                    <a href="{{route('products.edit',$row->id)}}" title="Show Product" class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></a>
                    <a href="{{route('products.edit',$row->id)}}" title="Edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
 
               <form action="{{route('products.destroy',$row->id)}}" style="display: inline-block" method="post" onsubmit="return confirm('Are you sure ?')">
@csrf
                        @method('DELETE')
                       
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button> 
                </form>

                </td>
                @endforeach
             
                
              </tr>
             
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->

 

      

     

    
 
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->


{{-- category model --}}
 
@endsection