@extends('admin.admin_layout')
@section('admin_content')

<div class="sl-mainpanel">


    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Subscriber List</h5>
        
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Subscriber
          <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modaldemo3" style="float: right">All Delete</a>

</h6>
        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p"> ID</th>
                <th class="wd-15p">Email</th>
                <th class="wd-15p">Subscribe Time</th>
              
                <th class="wd-20p">Action</th>
                
               
              </tr>
            </thead>
            <tbody>
                @foreach ($letters as $key=>$letter)
                    
                
              <tr>
                <td><input type="checkbox"> {{$key+1}}</td>
           
                <td>{{$letter->email}}</td>
                <td>{{\Carbon\Carbon::parse($letter->created_at)->diffForhumans()}}</td>
              
                <td>
              <a href="{{route('admin.delete_letter',$letter->id)}}" id="delete" class="btn btn-danger btn-sm">Delete</a>
         
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
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Newsletter</h6>
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
     
        </div>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->
@endsection