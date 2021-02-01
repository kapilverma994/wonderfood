@extends('admin.admin_layout')



@section('admin_content')

@php 
$categories=DB::table('categories')->get();
$subcategories=DB::table('subcategories')->get();
$brands=DB::table('brands')->get();
@endphp
    
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Wonderfood</a>
      <span class="breadcrumb-item active">Products</span>
    </nav>

    <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Update Product</h6>
            {{-- <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p> --}}
  <form action="{{route('products.update',$pro->id)}}" method="post" enctype="multipart/form-data">
    @csrf
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_name" value={{$pro->product_name}} placeholder="Enter product name">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_code" value={{$pro->product_code}}  placeholder="Enter product code">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="number" min="1" value="{{$pro->quantity}}" name="quantity" placeholder="quantity">
                  </div>
                </div><!-- col-4 -->
            
                <div class="col-lg-4">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                    <select class="form-control select2" data-placeholder="Choose country" name="category_id">
                      <option label="">Choose Category</option>
                      @foreach($categories as $cat)
                      <option value="{{$cat->id}}" @if($pro->category_id==$cat->id) selected @endif>{{$cat->category_name}}</option>
                   @endforeach
                    </select>
                  </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Subcategory: <span class="tx-danger">*</span></label>
                      <select class="form-control select2" data-placeholder="Choose country" name="subcategory_id">
                        <option label="Choose SubCatgory"></option>
                        @foreach($subcategories as $sub)
                        <option value="{{$sub->id}}" @if($pro->subcategory_id==$sub->id) selected @endif>{{$sub->subcategory_name}}</option>
                     @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                      <select class="form-control select2" data-placeholder="Choose country" name="brand_id">
                        <option label="Choose Brand"></option>
                        @foreach($brands as $brand)
                        <option value="{{$brand->id}}" @if($pro->brand_id==$brand->id) selected @endif>{{$brand->brand_name}}</option>
                        @endforeach
                       
                      </select>
                    </div>
                  </div>    
                <!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" value="{{$pro->product_size}}" name="product_size" id="size" data-role="tagsinput" >
                    
                    </div>
                  </div>  
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text"  value="{{$pro->product_color}}" name="product_color" id="color" data-role="tagsinput" >
                    
                    </div>
                  </div> 
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text"  value="{{$pro->selling_price}}" name="selling_price" placeholder="Price" >
                    
                    </div>
                  </div> 
                  <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Product Description: <span class="tx-danger">*</span></label>
                 <textarea  cols="30" name="product_details" id="summernote" class="form-control" rows="10">{{$pro->product_details}}</textarea>
                    
                    </div>
                   
                  </div> 
                  <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Product Tags: <span class="tx-danger">*</span></label>
                
                        <input class="form-control" type="text" value="{{$pro->tags}}"  name="tags" id="tag" data-role="tagsinput" >
                    
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Product Video Link: <span class="tx-danger"></span></label>
                
                        <input class="form-control" type="text" value="{{$pro->video_link }}"  name="video_link" placeholder="Enter product video link"  >
                    
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Meta Title <span class="tx-danger"></span></label>
                
                        <input class="form-control" type="text" value="{{$pro->meta_title}}"  name="meta_title" placeholder="Enter meta title"  >
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Meta Keyword <span class="tx-danger"></span></label>
                
                        <input class="form-control" type="text" value="{{$pro->meta_keyword}}"  name="meta_keyword" placeholder="Enter Meta Keywords" data-role="tagsinput" >
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Meta Description<span class="tx-danger"></span></label>
                
                       <textarea name="meta_description" class="form-control" cols="30" rows="10"> {{$pro->meta_description}}</textarea>
                    
                    </div>
                  </div>
                  
<br>

                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Image One (Main Thumbnail): <span class="tx-danger"></span></label>
                        <label class="custom-file">
                          <input type="file" id="file" name="image_one" class="custom-file-input" onchange="readURL(this)">
                          <span class="custom-file-control"></span>
                          <img src="#" id="one" alt="">
                        </label>
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Image two : <span class="tx-danger"></span></label>
                        <label class="custom-file">
                          <input type="file" id="file" name="image_two" class="custom-file-input" onchange="readURL2(this)">
                          <span class="custom-file-control"></span>
                          <img src="#" id="two" alt="">
                        </label>
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Image three: <span class="tx-danger"></span></label>
                        <label class="custom-file">
                          <input type="file" id="file" name="image_three" class="custom-file-input"  onchange=" readURL3(this)">
                          <span class="custom-file-control"></span>
                          <img src="#" id="three" alt="">
                        </label>
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Image Four: <span class="tx-danger"></span></label>
                        <label class="custom-file">
                          <input type="file" id="file" name="image_four" class="custom-file-input" onchange=" readURL4(this)">
                          <span class="custom-file-control"></span>
                          <img src="#" id="four" alt="">
                        </label>
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Image five: <span class="tx-danger"></span></label>
                        <label class="custom-file">
                          <input type="file" id="file" name="image_five" class="custom-file-input" onchange=" readURL5(this)">
                          <span class="custom-file-control"></span>
                          <img src="#" id="five" alt="">
                        </label>
                    
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Image Six: <span class="tx-danger"></span></label>
                        <label class="custom-file">
                          <input type="file" id="file" name="image_six" class="custom-file-input" onchange=" readURL6(this)">
                          <span class="custom-file-control"></span>
                          <img src="#" id="six" alt="">
                        </label>
                    
                    </div>
                  </div>
                
                
              </div><!-- row -->
              <hr>
              <br>
              <div class="row">
<div class="col-lg-4">
  <label class="ckbox">
    <input type="checkbox" name="main_slider" value="1" @if($pro->main_slider==1) checked @endif>
    <span>Main Slider</span>
  </label>
</div>
<div class="col-lg-4">
  <label class="ckbox">
    <input type="checkbox" name="mid_slider" value="1" @if($pro->mid_slider==1) checked @endif>
    <span>Mid Slider</span>
  </label>
</div>
<div class="col-lg-4">
  <label class="ckbox">
    <input type="checkbox" name="hot_deals" value="1" >
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
    <input type="checkbox" name="hot_new" value="1">
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

  <script type="text/javascript">
    $(document).ready(function(){
   $('select[name="category_id"]').on('change',function(){
        var category_id = $(this).val();
        if (category_id) {
          
          $.ajax({
            url: "{{ url('/get/subcategory/') }}/"+category_id,
            type:"GET",
            dataType:"json",
            success:function(data) { 
            var d =$('select[name="subcategory_id"]').empty();
            $.each(data, function(key, value){
            
            $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');
            });
            },
          });
        }else{
          alert('danger');
        }
          });
    });
</script>


<script type="text/javascript">
function readURL(input){
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#one')
      .attr('src', e.target.result)
      .width(80)
      .height(80);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
</script>

<script type="text/javascript">
function readURL2(input){
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#two')
      .attr('src', e.target.result)
      .width(80)
      .height(80);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
</script>



<script type="text/javascript">
function readURL3(input){
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#three')
      .attr('src', e.target.result)
      .width(80)
      .height(80);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
</script>

<script type="text/javascript">
  function readURL4(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#four')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
  </script>
  <script type="text/javascript">
    function readURL5(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#five')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
    </script>
    <script type="text/javascript">
      function readURL6(input){
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('#six')
            .attr('src', e.target.result)
            .width(80)
            .height(80);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
      </script>
  @endsection