@extends('admin.admin_layout')
@section('admin_content')

<div class="sl-mainpanel">


    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Subcategory Table</h5>
        
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Subcategories
   <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modaldemo3" style="float: right">Add New</a>
</h6>
        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">ID</th>
                <th class="wd-15p">Category name</th>
                <th>Subcategory Name</th>
              
                <th class="wd-20p">Action</th>
                
               
              </tr>
            </thead>
            <tbody>
                @foreach ($subcats as $key=>$subcat)
                    
                
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$subcat->category_name}}</td>
                <td>{{$subcat->subcategory_name}}</td>
                <td>
                    <a href="{{url('edit/category/'.$subcat->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{url('delete/category/'.$subcat->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">category Add</h6>
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
         <form action="{{route('subcategory.store')}}" method="post">
            @csrf

            <div class="form-group">
                
                <input type="text" name="subcategory_name" class="form-control" placeholder="Enter Subcategory Name" required autocomplete="off">

            </div>
        <div class="form-group">
<select name="category" class="form-control" id="">
    <option value="">Choose Category</option>
    @foreach ($cats as $cat)
   
    <option value="{{$cat->id}}">{{$cat->category_name}}</option>
        
    @endforeach
</select>
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