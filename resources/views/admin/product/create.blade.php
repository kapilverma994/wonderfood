@extends('admin.admin_layout')

<link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>

@section('admin_content')
    
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Wonderfood</a>
      <span class="breadcrumb-item active">Products</span>
    </nav>

    <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add New Product</h6>
            {{-- <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p> --}}
  <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
    @csrf
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_name"  placeholder="Enter product name">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_code"  placeholder="Enter product code">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="number" min="1" value="1" name="quantity" placeholder="quantity">
                  </div>
                </div><!-- col-4 -->
            
                <div class="col-lg-4">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                    <select class="form-control select2" data-placeholder="Choose country" name="category_id">
                      <option label="Choose Catgory"></option>
                      <option value="USA">United States of America</option>
                      <option value="UK">United Kingdom</option>
                      <option value="China">China</option>
                      <option value="Japan">Japan</option>
                    </select>
                  </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Subcategory: <span class="tx-danger">*</span></label>
                      <select class="form-control select2" data-placeholder="Choose country" name="subcategory_id">
                        <option label="Choose SubCatgory"></option>
                   
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                      <select class="form-control select2" data-placeholder="Choose country" name="brand_id">
                        <option label="Choose Brand"></option>
                        <option value="USA">United States of America</option>
                        <option value="UK">United Kingdom</option>
                        <option value="China">China</option>
                        <option value="Japan">Japan</option>
                      </select>
                    </div>
                  </div>    
                <!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text"  name="product_size" placeholder="Size">
                    
                    </div>
                  </div>  
              </div><!-- row -->
  
              <div class="form-layout-footer">
                <button class="btn btn-info mg-r-5">Submit Form</button>
                <button class="btn btn-secondary">Cancel</button>
              </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
          </div><!-- card -->

        </form>
    </div><!-- sl-pagebody -->
    
  </div><!-- sl-mainpanel -->



  <!-- ########## END: MAIN PANEL ########## -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>


  @endsection