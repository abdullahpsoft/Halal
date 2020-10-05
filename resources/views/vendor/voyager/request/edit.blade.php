@extends('voyager::master')


@section('page_header')
    <div class="container-fluid" >
        <h1 class="page-title" >
            <i class="voyager-mail" ></i>Update Request

                <!-- <a href="manufacturer/create" class="btn btn-success">
                    <i class="voyager-plus"></i> Add New
                </a> -->
        </h1>

    </div>
@stop

@section('content')
<div class="page-content edit-add container-fluid">
  <div class="row">
    <div class="col-md-12">

      <div class="panel panel-bordered">
        <!-- form start -->
        <form role="form"
        class="form-edit-add"
        action="/admin/request/manufacturer/{{$reqi->id}}"
        method="POST" enctype="multipart/form-data">
        <!-- PUT Method if we are editing -->
        @csrf



        <div class="panel-body">


          <!-- Adding / Editing -->

                  <!-- GET THE DISPLAY OPTIONS -->

          <div class="form-group col-md-12 "
          >

          <label class="control-label"
          for="product">Product Name</label>
          <select class=" form-control" name="product" disabled>
            <option value="">{{$reqi->product_name}}</option>
          </select>

        </div>
        <!-- GET THE DISPLAY OPTIONS -->

        <div class="form-group col-md-12 "
        >

        <label class="control-label"
        for="manufacturer">Manufacturer Name</label>
        <select class=" form-control" name="manufacturer" disabled>
                      <option value="">{{$reqi->manufacturer_name}}</option>
        </select>

      </div>
      <!-- GET THE DISPLAY OPTIONS -->

      <div class="form-group col-md-12 "
      >

      <label class="control-label"
      for="alcohol">Alcohol</label>
      <select class="form-control" name="alcohol">
        <option value="yes">Yes</option>
        <option value="no">No</option>
        <option value="controversial">Controversial</option>
        <option value="no information">No Information</option>

      </select>      </div>
      <br>
      <div class="form-group col-md-12 "
      >

      <label class="control-label"
      for="animal">Animal Additive</label>
<select class="form-control" name="animal">
  <option value="yes">Yes</option>
  <option value="no">No</option>
  <option value="controversial">Controversial</option>
  <option value="no information">No Information</option>

</select>
      </div>
      <div class="form-group col-md-12 "
      >
<br>
<label class="control-label"
for="comment">Comment</label>
<input type="text" class="form-control" name="comment" placeholder="Your Comment" value="">
</div>
<div class="form-group col-md-12 "
>
<br>
      <label class="control-label  alert-info"
      for="body">Write reply from {{$reqi->manufacturer_name}} here:</label><br><br>
      <textarea class="form-control focus" name="body" rows="8" cols="80" placeholder="Enter text..."></textarea>

    </div>
    <!-- GET THE DISPLAY OPTIONS -->




</div><!-- panel-body -->

<div class="panel-footer">
  <button type="submit" class="btn btn-primary save">Save</button>
</div>
</form>

<iframe id="form_target" name="form_target" style="display:none"></iframe>
<form id="my_form" action="http                           ://127.0.0.1:8000/admin/upload" target="form_target" method="post"
enctype="multipart/form-data" style="width        :0;height   :0;overflow:hidden">
<input name="image" id="upload_file" type="file"
onchange="$('#my_form').submit();this.value='';">
<input type="hidden" name="type_slug" id="type_slug" value="h-products">
<input type="hidden" name="_token" value="y0vSCAYlq6S6PK5eG7vB0aOVOwDDzQezRXgGdNRQ">
</form>

</div>
</div>
</div>
</div>
@stop

<link rel="stylesheet" href="css/app.css">


@section('javascript')


@stop
