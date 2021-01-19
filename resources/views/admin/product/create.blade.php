@extends('admin.admin_layout')



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
                      <option label="">Choose Category</option>
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
                        <input class="form-control" type="text"  name="product_size" id="size" data-role="tagsinput" >
                    
                    </div>
                  </div>  
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text"  name="product_color" id="color" data-role="tagsinput" >
                    
                    </div>
                  </div> 
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text"  name="selling_price" placeholder="Price" >
                    
                    </div>
                  </div> 
                  <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Product Description: <span class="tx-danger">*</span></label>
                 <textarea name=""  cols="30" name="product_details" id="summernote" class="form-control" rows="10"></textarea>
                    
                    </div>
                   
                  </div> 
                  <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Product Tags: <span class="tx-danger">*</span></label>
                
                        <input class="form-control" type="text"  name="tags" id="tag" data-role="tagsinput" >
                    
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Product Video Link: <span class="tx-danger"></span></label>
                
                        <input class="form-control" type="text"  name="video_link" placeholder="Enter product video link"  >
                    
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Meta Title <span class="tx-danger"></span></label>
                
                        <input class="form-control" type="text"  name="meta_title" placeholder="Enter meta title"  >
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Meta Keyword <span class="tx-danger"></span></label>
                
                        <input class="form-control" type="text"  name="meta_keyword" placeholder="Enter Meta Keywords" data-role="tagsinput" >
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Meta Description<span class="tx-danger"></span></label>
                
                       <textarea name="meta_description" class="form-control" cols="30" rows="10"></textarea>
                    
                    </div>
                  </div>
                  
<br>

                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Image One (Main Thumbnail): <span class="tx-danger"></span></label>
                        <label class="custom-file">
                          <input type="file" id="file" name="image_one" class="custom-file-input">
                          <span class="custom-file-control"></span>
                        </label>
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Image two : <span class="tx-danger"></span></label>
                        <label class="custom-file">
                          <input type="file" id="file" name="image_two" class="custom-file-input">
                          <span class="custom-file-control"></span>
                        </label>
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Image three: <span class="tx-danger"></span></label>
                        <label class="custom-file">
                          <input type="file" id="file" name="image_three" class="custom-file-input">
                          <span class="custom-file-control"></span>
                        </label>
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Image Four: <span class="tx-danger"></span></label>
                        <label class="custom-file">
                          <input type="file" id="file" name="image_four" class="custom-file-input">
                          <span class="custom-file-control"></span>
                        </label>
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Image five: <span class="tx-danger"></span></label>
                        <label class="custom-file">
                          <input type="file" id="file" name="image_five" class="custom-file-input">
                          <span class="custom-file-control"></span>
                        </label>
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Image Six: <span class="tx-danger"></span></label>
                        <label class="custom-file">
                          <input type="file" id="file" name="image_six" class="custom-file-input">
                          <span class="custom-file-control"></span>
                        </label>
                    
                    </div>
                  </div>
                
                
              </div><!-- row -->
              <hr>
              <br>
              <div class="row">
<div class="col-lg-4">
  <label class="ckbox">
    <input type="checkbox" name="main_slider" value="1">
    <span>Main Slider</span>
  </label>
</div>
<div class="col-lg-4">
  <label class="ckbox">
    <input type="checkbox" name="mid_slider" value="1">
    <span>Mid Slider</span>
  </label>
</div>
<div class="col-lg-4">
  <label class="ckbox">
    <input type="checkbox" name="hot_deals" value="1">
    <span>Hot Deals</span>
  </label>
</div>
<div class="col-lg-4">
  <label class="ckbox">
    <input type="checkbox" name="best_rated" value="1">
    <span>Best Rated</span>
  </label>
</div>
<div class="col-lg-4">
  <label class="ckbox">
    <input type="checkbox" name="trend" value="1">
    <span>Trend</span>
  </label>
</div>
<div class="col-lg-4">
  <label class="ckbox">
    <input type="checkbox" name="	hot_new" value="1">
    <span>Hot New</span>
  </label>
</div>
              </div><br>
              <div class="form-layout-footer">
                <button class="btn btn-info mg-r-5">Submit </button>
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