@extends('voyager::master')


@section('page_header')
<div class="container-fluid" >
  <h1 class="page-title" >
    <i class="voyager-lifebuoy" ></i>View Product

  </h1>

</div>
@stop

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        .fa {
            padding: 20px;
            font-size: 30px;
            width: 80px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
        }

        .fa:hover {
            opacity: 0.8;
            color: #22a7f0;
            background: #2a363b;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;

        }
        .fa-twitter {
            background: #55ACEE;
            color: white;
        }
        .fa-whatsapp {
            align-items: center;
            background: #00b489;
            color: white;
        }
    </style>
{{--    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f881c4943bd26001418de68&product=inline-share-buttons" async="async"></script>--}}
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="{{ asset('js/share.js') }}"></script>
<div class="page-content edit-add container-fluid">
  <div class="row">
    <div class="col-md-12">

      <div class="panel panel-bordered">
        <!-- form start -->
        <form role="form"
        class="form-edit-add"
        action="/admin/products/manufacturers/{{$product->id}}"
        method="POST" enctype="multipart/form-data">
        <!-- PUT Method if we are editing -->
        @csrf



        <div class="panel-body">


          <!-- Adding / Editing -->

                  <!-- GET THE DISPLAY OPTIONS -->

          <div class="form-group col-md-6 "
          >

          <label class="control-label"
          for="name">Name</label>
          <input type="text"
          class="form-control"
          name="name" id="name"
          placeholder="Name"

          value="{{$product->name}}" >


        </div>
        <!-- GET THE DISPLAY OPTIONS -->

        <div class="form-group col-md-6 "
        >

        <label class="control-label"
        for="name">Sub
        Category</label>
            <select name="sub_category_slug" class="form-control" id="">
                @foreach($subCategories as $cat)
                    <option value="{{$cat->name}}" @if($product->sub_category_slug == $cat->sub_category_slug) selected @endif >{{$cat->name}}</option>
                @endforeach
            </select>
{{--        <input type="text"--}}
{{--        class="form-control"--}}
{{--        name="sub_category_slug"--}}
{{--        placeholder="Sub Category Slug"--}}

{{--        value="{{$product->sub_category}}" >--}}


      </div>
      <!-- GET THE DISPLAY OPTIONS -->

      <div class="form-group col-md-6 "
      >

      <label class="control-label"
      for="name">Ean</label>
      <input type="text"
      class="form-control"
      name="ean"
      placeholder="Ean"

      value="{{$product->ean}}" >


    </div>
    <!-- GET THE DISPLAY OPTIONS -->

{{--    <div class="form-group col-md-6 "--}}
{{--    >--}}

{{--    <label class="control-label" for="name">Alcohol</label>--}}
{{--    <input type="text"--}}
{{--    class="form-control"--}}
{{--    name="alcohol"--}}
{{--    placeholder="Alcohol"--}}

{{--    value="{{$product->alcohol_status}}" >--}}


{{--  </div>--}}
            <div class="form-group col-md-6 ">

                <label class="control-label" for="alcohol">Alcohol</label>
                <select class="form-control" name="alcohol">
                    <option value="yes" @if($product->alcohol_status == 'yes') selected @endif>Yes</option>
                    <option value="no" @if($product->alcohol_status == 'no') selected @endif>No</option>
                    <option value="controversial" @if($product->alcohol_status == 'controversial') selected @endif>Controversial</option>
                    <option value="no information" @if($product->alcohol_status == 'no information') selected @endif>No Information</option>

                </select>      </div>


  <!-- GET THE DISPLAY OPTIONS -->

{{--  <div class="form-group col-md-6 " >--}}

{{--    <label class="control-label" for="name">Animal Additive</label>--}}
{{--    <input type="text" class="form-control" name="animal_additive"--}}
{{--    placeholder="Animal Additive"--}}

{{--    value="{{$product->animal_additive_status}}" >--}}


{{--  </div>--}}


            <div class="form-group col-md-6 ">

                <label class="control-label" for="animal_additive">Animal Additive</label>
                <select class="form-control" name="animal_additive">
                    <option value="yes" @if($product->animal_additive_status == 'yes') selected @endif>Yes</option>
                    <option value="no" @if($product->animal_additive_status == 'no') selected @endif>No</option>
                    <option value="controversial" @if($product->animal_additive_status == 'controversial') selected @endif>Controversial</option>
                    <option value="no information" @if($product->animal_additive_status == 'no information') selected @endif>No Information</option>

                </select>      </div>
  <!-- GET THE DISPLAY OPTIONS -->

  <div class="form-group col-md-6 " >

    <label class="control-label" for="name">Image</label>
    <input type="file" class="form-control" name="image"
    placeholder="Image"

    value="" >
      <img id="blah" style="width: 170px; height: 140px;"  src="{{asset('/storage/img/'.$product->image)}}" alt="your image" />

  </div>




  <!-- GET THE DISPLAY OPTIONS -->

  <div class="form-group col-md-6 " >

    <label class="control-label" for="name">Company Name</label>
    <input type="text" class="form-control" name="company_name"
    placeholder="Company Name"

    value="{{$product->company_name}}" >


  </div>
  <!-- GET THE DISPLAY OPTIONS -->

  <div class="form-group col-md-6 " >

    <label class="control-label" for="name">Store Name</label>

      <select name="store_id" class="form-control" id="">
      @foreach($stores as $store)
          <option value="{{$store->id}}" @if($product->store_id == $store->id) selected @endif >{{$store->name}}</option>
      @endforeach
      </select>

{{--    <input type="text" class="form-control" name="store_id"--}}
{{--    placeholder="Store Id"--}}

{{--    value="{{$product->store_id}}" >--}}


  </div>


  <!-- GET THE DISPLAY OPTIONS -->

  <div class="form-group col-md-6 " >

    <label class="control-label" for="name">Title</label>
    <input type="text" class="form-control" name="title"
    placeholder="Title"

    value="{{$product->title}}" >


  </div>

            <div class="form-group col-md-12 " >

                <label class="control-label" for="name">Manufacturer Reply</label>
                <textarea name="" id="" cols="200" rows="10" disabled>{{$product->man_reply}}</textarea>


            </div>

</div><!-- panel-body -->

<div class="panel-footer">
  <button type="submit" class="btn btn-primary save">Publish</button>
{{--    <div class="sharethis-inline-share-buttons"></div>--}}
{{--    {{ printf(Share::page('http://jorenvanhocht.be', 'Share title')--}}
{{--	->facebook()--}}
{{--	->twitter()--}}
{{--	->linkedin('Extra linkedin summary can be passed here')--}}
{{--	->whatsapp())--}}
{{--    }}--}}
    <br><br><br>
    <div style="text-align: center">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{  Share::page('http://lara.halalcheck.net/product-detail/'.$product->id, $product->name)
    ->facebook()
    ->getRawLinks()}}" class="fa fa-facebook" style=""></a>


    <a href="https://twitter.com/intent/tweet?text=Share+title&url={{  Share::page('http://lara.halalcheck.net/product-detail/'.$product->id, $product->name)
    ->twitter()
    ->getRawLinks()}}" class="fa fa-twitter" style=""></a>


    <a href="https://wa.me/?text={{  Share::page('http://lara.halalcheck.net/product-detail/'.$product->id, $product->name)
    ->whatsapp()
    ->getRawLinks()}}" class="fa fa-whatsapp" style=""> </a>
    </div>



</div>
</form>

<iframe id="form_target" name="form_target" style="display:none"></iframe>
<form id="my_form" action="http://127.0.0.1:8000/admin/upload" target="form_target" method="post"
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
