@extends('voyager::master')


@section('page_header')
    <div class="container-fluid" >
        <h1 class="page-title" >
            <i class="voyager-mail" ></i>Request

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
        action="/admin/request/manufacturer"
        method="POST" enctype="multipart/form-data">
        <!-- PUT Method if we are editing -->
        @csrf



        <div class="panel-body">


          <!-- Adding / Editing -->

                  <!-- GET THE DISPLAY OPTIONS -->
            <div class="row">
                <div class="form-group col-md-4 "
                >

                    <label class="control-label"
                           for="product">Select Product</label>
                    <select class=" form-control" name="product">
                        @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>

                </div>
            </div>

        <!-- GET THE DISPLAY OPTIONS -->
            <div class="row">
                <div class="form-group col-md-4 "
                >

                    <label class="control-label"
                           for="manufacturer">Select Manufacturer</label>
                    <select class=" form-control" name="manufacturer">
                        @foreach($manufacturers as $manufactur)
                            <option value="{{$manufactur->id}}">{{$manufactur->Name}}</option>
                        @endforeach

                    </select>

                </div>

            </div>

      <!-- GET THE DISPLAY OPTIONS -->
            <div class="row">
                <div class="form-group col-md-4 "
                >

                    <label class="control-label"
                           for="manufacturer">Select Mail Template</label>
                    <select class=" form-control" name="manufacturer">
                        @foreach($mails as $mail)
                            <option value="{{$manufactur->id}}">{{$mail->subject}}</option>
                        @endforeach

                    </select>

                </div>

            </div>

      <div class="form-group col-md-12 "
      >

      <label class="control-label"
      for="body">Write you request:</label>
      <textarea class="form-control" name="body" rows="8" cols="80"> @foreach($mails as $mail)
       {{$mail->body}}
@endforeach</textarea>

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
