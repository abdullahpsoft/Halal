@extends('voyager::master')


@section('page_header')
<div class="container-fluid" >
  <h1 class="page-title" >
    <i class="voyager-lifebuoy" ></i>Adding New Product

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
        action="/admin/products/manufacturer"
        method="POST" enctype="multipart/form-data">
        <!-- PUT Method if we are editing -->
        @csrf



        <div class="panel-body">


          <!-- Adding / Editing -->

                  <!-- GET THE DISPLAY OPTIONS -->

          <div class="form-group col-md-12 "
          >

          <label class="control-label"
          for="name">Name</label>
          <input type="text"
          class="form-control"
          name="name" id="name"
          placeholder="Name"

          value="">


        </div>
        <!-- GET THE DISPLAY OPTIONS -->

        <div class="form-group col-md-12 "
        >

        <label class="control-label"
        for="name">Sub
        Category Slug</label>
        <input type="text"
        class="form-control"
        name="sub_category_slug"
        placeholder="Sub Category Slug"

        value="">


      </div>
      <!-- GET THE DISPLAY OPTIONS -->

      <div class="form-group col-md-12 "
      >

      <label class="control-label"
      for="name">Ean</label>
      <input type="text"
      class="form-control"
      name="ean"
      placeholder="Ean"

      value="">


    </div>
    <!-- GET THE DISPLAY OPTIONS -->

    <div class="form-group col-md-12 "
    >

    <label class="control-label" for="name">Alcohol</label>
    <input type="text"
    class="form-control"
    name="alcohol"
    placeholder="Alcohol"

    value="">


  </div>
  <!-- GET THE DISPLAY OPTIONS -->

  <div class="form-group col-md-12 " >

    <label class="control-label" for="name">Animal Additive</label>
    <input type="text" class="form-control" name="animal_additive"
    placeholder="Animal Additive"

    value="">


  </div>
  <!-- GET THE DISPLAY OPTIONS -->

  <div class="form-group col-md-12 " >

    <label class="control-label" for="name">Image</label>
    <input type="file" class="form-control" name="image"
    placeholder="Image"

    value="">


  </div>




  <!-- GET THE DISPLAY OPTIONS -->

  <div class="form-group col-md-12 " >

    <label class="control-label" for="name">Company Name</label>
    <input type="text" class="form-control" name="company_name"
    placeholder="Company Name"

    value="">


  </div>
  <!-- GET THE DISPLAY OPTIONS -->

  <div class="form-group col-md-12 " >

    <label class="control-label" for="name">Store Name</label>
    <input type="text" class="form-control" name="store_id"
    placeholder="Store Id"

    value="">


  </div>


  <!-- GET THE DISPLAY OPTIONS -->

  <div class="form-group col-md-12 " >

    <label class="control-label" for="name">Title</label>
    <input type="text" class="form-control" name="title"
    placeholder="Title"

    value="">


  </div>


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
