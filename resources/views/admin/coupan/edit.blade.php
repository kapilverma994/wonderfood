@extends('admin.admin_layout')
@section('admin_content')

<div class="sl-mainpanel">


    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Coupans Table</h5>
        
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> Update Coupan
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
   <form action="{{route('coupans.update',$coupan->id)}}" method="post" enctype="multipart/form-data">
      @csrf
@method('PUT')
      <div class="form-group">
          
          <input type="text" name="coupan" class="form-control" value="{{$coupan->coupan}}" placeholder="Enter coupan Name" required autocomplete="off">

      </div>
 
      <div class="form-group">
          
        <input type="text" name="discount" class="form-control" value="{{$coupan->discount  }}" placeholder="Enter discount" autocomplete="off">

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