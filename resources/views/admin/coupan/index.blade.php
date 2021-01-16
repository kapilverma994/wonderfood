@extends('admin.admin_layout')
@section('admin_content')

<div class="sl-mainpanel">


    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Coupans Table</h5>
        
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Coupans
   <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modaldemo3" style="float: right">Add Coupan</a>
</h6>
        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">ID</th>
                <th class="wd-15p">Coupan</th>
                <th class="wd-15p">Discount %</th>
              
                <th class="wd-20p">Action</th>
                
               
              </tr>
            </thead>
            <tbody>
                @foreach ($coupans as $key=>$coupan)
                    
                
              <tr>
                <td>{{$key+1}}</td>
           
                <td>{{$coupan->coupan}}</td>
                <td>{{$coupan->discount}}%</td>
              
                <td>
                    <a href="{{route('coupans.edit',$coupan->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    {{-- <a href="{{route('coupans.destroy',$coupan->id)}}" class="btn btn-sm btn-warning">delete</a> --}}
               <form action="{{route('coupans.destroy',$coupan->id)}}" style="display: inline-block" method="post" onsubmit="return confirm('Are you sure ?')">
@csrf
                        @method('delete')
                       
                    <button type="submit"   class="btn btn-sm btn-danger">delete</button> 
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
  <div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Coupan</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
         <form action="{{route('coupans.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="">Coupan</label>
                <input type="text" name="coupan" class="form-control" placeholder="Enter Coupan" required autocomplete="off">

            </div>
            <div class="form-group">
                <label for="">Discount</label>
                <input type="text" name="discount" class="form-control" placeholder="Enter discount %" required autocomplete="off">

            </div>
           
        
        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-info pd-x-20">Submit</button>
          <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
        </form>
        </div>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->
@endsection