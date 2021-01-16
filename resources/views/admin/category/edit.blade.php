@extends('admin.admin_layout')
@section('admin_content')

<div class="sl-mainpanel">


    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Category Table</h5>
        
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> Update Category
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
   <form action="{{url('update/category/'.$cat->id)}}" method="post">
      @csrf

      <div class="form-group">
          
          <input type="text" name="category_name" class="form-control" value="{{$cat->category_name}}" placeholder="Enter Category Name" required autocomplete="off">

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