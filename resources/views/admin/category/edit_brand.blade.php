@extends('admin.admin_layout')
@section('admin_content')

<div class="sl-mainpanel">


    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Brand Table</h5>
        
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> Update Brand
</h6>
        
      
<div class="table-wrapper">


      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
   <form action="{{route('brands.update',$brand->id)}}" method="post" enctype="multipart/form-data">
      @csrf
@method('PUT')
      <div class="form-group">
          
          <input type="text" name="brand_name" class="form-control" value="{{$brand->brand_name}}" placeholder="Enter Brand Name" required autocomplete="off">

      </div>
      <img src="{{asset($brand->brand_logo)}}" height="70px" width="80px" alt="">
      <div class="form-group">
          
        <input type="file" name="brand_logo" class="form-control" value="" placeholder="Enter Category Name" autocomplete="off">

    </div> 
     
  
  </div><!-- modal-body -->
  <div class="modal-footer">
    <button type="submit" class="btn btn-info pd-x-20">Update</button>
    <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
  </form>

</div>

</div><!-- card -->

    
 
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->


{{-- category model --}}
@endsection