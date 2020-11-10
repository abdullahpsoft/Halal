@extends('voyager::master')


@section('page_header')
    <div class="container-fluid" >
        @isset($message)
            <p class="alert alert-success">{{ $message }}</p>
        @endisset
        <h1 class="page-title" >
            <i class="voyager-lifebuoy" ></i>Requests

<?php if (Auth::user()->hasRole('super-user')): ?>
  <a href="/admin/request/manufacturer/create" class="btn btn-success">
      <i class="voyager-plus"></i> Add New
  </a>

<?php endif; ?>


<?php if (Auth::user()->hasRole('super-analyst')): ?>
  <a href="/admin/request/manufacturer/create" class="btn btn-success">
      <i class="voyager-plus"></i> Add New
  </a>

<?php endif; ?>


<?php if (Auth::user()->hasRole('user')): ?>
  <a href="/admin/request/manufacturer/create" class="btn btn-success">
      <i class="voyager-plus"></i> Add New
  </a>

<?php endif; ?>
        </h1>

    </div>
@stop

@section('content')
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f881c4943bd26001418de68&product=inline-share-buttons" async="async"></script>
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">


                        <form method="get" class="form-search">
                            <div id="search-input">
                                <div class="col-2">
                                    <select id="search_key" name="key" data-select2-id="search_key" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                        <option value="id" data-select2-id="2">Id</option>
                                        <option value="name">Name</option>
                                        <option value="sub_category">Sub Category</option>
                                        <option value="sub_category_slug">Sub Category Slug</option>
                                        <option value="ean">Ean</option>
                                        <option value="alcohol">Alcohol</option>
                                        <option value="animal_additive">Animal Additive</option>
                                        <option value="image">Image</option>
                                        <option value="user_id">User Id</option>
                                        <option value="status">Status</option>
                                        <option value="analyst_id">Analyst Id</option>
                                        <option value="superuser_id">Superuser Id</option>
                                        <option value="admin_status">Admin Status</option>
                                        <option value="company_name">Company Name</option>
                                        <option value="store_id">Store Id</option>
                                        <option value="comment_id">Comment Id</option>
                                        <option value="created_at">Created At</option>
                                        <option value="updated_at">Updated At</option>
                                        <option value="controlled">Controlled</option>
                                        <option value="verified">Verified</option>
                                        <option value="man_reply">Man Reply</option>
                                        <option value="title">Title</option>
                                        <option value="certified">Certified</option>
                                        <option value="active">Active</option>
                                        <option value="manufacturer_id">Manufacturer Id</option>
                                        <option value="recommended">Recommended</option>
                                        <option value="published">Published</option>
                                        <option value="analyst_name">Analyst Name</option>
                                        <option value="superuser_name">Superuser Name</option>
                                        <option value="manufacturer_name">Manufacturer Name</option>
                                        <option value="alcohol_status">Alcohol Status</option>
                                        <option value="animal_additive_status">Animal Additive Status</option>
                                        <option value="reason_id">Reason Id</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 163.6px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-search_key-container"><span class="select2-selection__rendered" id="select2-search_key-container" role="textbox" aria-readonly="true" title="Id">Id</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="col-2">
                                    <select id="filter" name="filter" data-select2-id="filter" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                        <option value="contains" data-select2-id="4">contains</option>
                                        <option value="equals">=</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-filter-container"><span class="select2-selection__rendered" id="select2-filter-container" role="textbox" aria-readonly="true" title="contains">contains</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="input-group col-md-12">
                                    <input type="text" class="form-control" placeholder="Search" name="s" value="">
                                    <span class="input-group-btn">
                                            <button class="btn btn-info btn-lg" type="submit">
                                                <i class="voyager-search"></i>
                                            </button>
                                        </span>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                            <th>
{{--                                                <input type="checkbox" class="select_all">--}}
                                            </th>

                                            <th class="actions" style=""><a href="">Request Id</a></th>

                                        <th class="actions" style=""><a href="">Product Name</a></th>
                                        <th class="actions" style=""><a href="">Manufacturer Name</a></th>
                                        <th class="actions" style=""><a href="">Sent By</a></th>
                                        <th class="actions" style=""><a href="">Time stamp</a></th>


                                        <th class="actions" style=""><a href="">Status</a></th>
<?php if (Auth::user()->hasRole('super-user')): ?>
  <th class="actions" style=""><a href="">Actions</a></th>
<?php endif; ?>

<?php if (Auth::user()->hasRole('super-admin')): ?>
  <th class="actions" style=""><a href="">Actions</a></th>
{{--                                        <th class="actions" style=""><a href="">Actions 2</a></th>--}}
<?php endif; ?>


<?php if (Auth::user()->hasRole('manufacturer')): ?>
  <th class="actions" style=""><a href="">Actions</a></th>
<?php endif; ?>


<?php if (Auth::user()->hasRole('super-analyst')): ?>
  <th class="actions" style=""><a href="">Actions</a></th>
<?php endif; ?>


                                    </tr>
                                </thead>
                                <tbody>



@foreach($reqs as $req)
@if(Auth::user()->hasRole('manufacturer') && $req->manufacturer_name == Auth::user()->name )
<tr>
    <td></td>
<td>
  {{$req->id}}
</td>


                                            <td class="no-sort no-click bread-actions">
{{$req->product_name}}
                                            </td>
                                            <td class="no-sort no-click bread-actions">
{{$req->manufacturer_name}}
                                            </td>
                                            <td class="no-sort no-click bread-actions">
{{$req->sent_by_name}}
                                            </td>
                                            <td class="no-sort no-click bread-actions">
{{$req->created_at}}
                                            </td>
@if($req->status == 'untracked')
                                            <td class="no-sort no-click bread-actions alert-danger">
{{$req->status}}
                                            </td>
@endif
@if($req->status == 'published')
                                            <td class="no-sort no-click bread-actions alert-info">
{{$req->status}}
                                            </td>
@endif
@if($req->status == 'updated')
                                            <td class="no-sort no-click bread-actions alert-success">
{{$req->status}}
                                            </td>
@endif




@if($req->status == 'updated' && (Auth::user()->hasRole('super-admin') ))
<td class="no-sort no-click bread-actions">

        <a href="/admin/request/super/edit/{{$req->id}}" class="btn btn-sm btn-success pull-right edit">
            <i class="voyager-edit"></i> Publish
        </a>
        <a href="/admin/request/super/view/{{$req->id}}" class="btn btn-sm btn-warning pull-right edit">
            <i class="voyager-edit"></i> View Product
        </a>
    <a href="/admin/request/super/view/{{$req->id}}" class="btn btn-sm btn-warning pull-right edit">
        <i class="voyager-edit"></i> View Product
    </a>
    <a href="/product-detail/{{$req->product_id}}" class="btn btn-sm btn-info pull-right edit">
        <i class="voyager-edit"></i> User View
    </a>
</td>

@endif

@if($req->status == 'untracked' && (Auth::user()->hasRole('super-user') || Auth::user()->hasRole('super-analyst')))
<td class="no-sort no-click bread-actions">

        <a href="/admin/request/manufacturer/edit/{{$req->id}}" class="btn btn-sm btn-primary pull-right edit">
            <i class="voyager-edit"></i> Update Status
        </a>
        <a href="/admin/request/super/view/{{$req->id}}" class="btn btn-sm btn-warning pull-right edit">
            <i class="voyager-edit"></i> View Product
        </a>
    <a href="/product-detail/{{$req->product_id}}" class="btn btn-sm btn-info pull-right edit">
        <i class="voyager-edit"></i> User View
    </a>
</td>

@endif
@if($req->status == 'updated' && (Auth::user()->hasRole('super-user')  || Auth::user()->hasRole('super-analyst')))
<td class="no-sort no-click bread-actions">

        <a href="" class="btn btn-sm btn-primary pull-right edit" onclick="return false" disabled>
            <i class="voyager-edit"></i> Update Status
        </a>
        <a href="/admin/request/super/view/{{$req->id}}" class="btn btn-sm btn-warning pull-right edit">
            <i class="voyager-edit"></i> View Product
        </a>
    <a href="/product-detail/{{$req->product_id}}" class="btn btn-sm btn-info pull-right edit">
        <i class="voyager-edit"></i> User View
    </a>
</td>

@endif
@if($req->status == 'untracked' && Auth::user()->hasRole('manufacturer') )
<td class="no-sort no-click bread-actions">

        <a href="/admin/request/manufacturer/edit/{{$req->id}}" class="btn btn-sm btn-primary pull-right edit">
            <i class="voyager-edit"></i> Add Reply
        </a>
        <a href="/admin/request/super/view/{{$req->id}}" class="btn btn-sm btn-warning pull-right edit">
            <i class="voyager-edit"></i> View Product
        </a>

</td>

@endif




                                          </tr>
@endif
@if(Auth::user()->hasRole('super-user') || Auth::user()->hasRole('super-analyst') || Auth::user()->hasRole('super-admin'))
  <tr>
    <td></td>
<td>
  {{$req->id}}
</td>


                                            <td class="no-sort no-click bread-actions">
{{$req->product_name}}
                                            </td>
                                            <td class="no-sort no-click bread-actions">
{{$req->manufacturer_name}}
                                            </td>
                                            <td class="no-sort no-click bread-actions">
{{$req->sent_by_name}}
                                            </td>
                                            <td class="no-sort no-click bread-actions">
{{$req->created_at}}
                                            </td>
@if($req->status == 'untracked')
                                            <td class="no-sort no-click bread-actions alert-danger">
{{$req->status}}
                                            </td>
@endif
@if($req->status == 'published')
                                            <td class="no-sort no-click bread-actions alert-info">
{{$req->status}}
                                            </td>
@endif
@if($req->status == 'updated')
                                            <td class="no-sort no-click bread-actions alert-success">
{{$req->status}}
                                            </td>
@endif




@if($req->status == 'updated' && (Auth::user()->hasRole('super-admin') ))
<td class="no-sort no-click bread-actions">

        <a href="/admin/request/super/edit/{{$req->id}}" class="btn btn-sm btn-success pull-right edit">
            <i class="voyager-edit"></i> Publish
        </a>

        <a href="/admin/request/super/view/{{$req->id}}" class="btn btn-sm btn-warning pull-right edit">
            <i class="voyager-edit"></i> View Product
        </a>
    <a href="/product-detail/{{$req->product_id}}" class="btn btn-sm btn-info pull-right edit">
        <i class="voyager-edit"></i> User View
    </a>

</td>

@endif
      @if($req->status == 'published' && (Auth::user()->hasRole('super-admin') ))
          <td class="no-sort no-click bread-actions">

              <a href="/product-detail/{{$req->product_id}}" class="btn btn-sm btn-info pull-right edit">
                  <i class="voyager-edit"></i> User View
              </a>
              <a href="/admin/request/super/view/{{$req->id}}" class="btn btn-sm btn-warning pull-right edit">
                  <i class="voyager-edit"></i> View Product
              </a>

          </td>

      @endif


@if($req->status == 'untracked' && (Auth::user()->hasRole('super-user') || Auth::user()->hasRole('super-analyst')))
<td class="no-sort no-click bread-actions">

        <a href="/admin/request/manufacturer/edit/{{$req->id}}" class="btn btn-sm btn-primary pull-right edit">
            <i class="voyager-edit"></i> Update Status
        </a>
        <a href="/admin/request/super/view/{{$req->id}}" class="btn btn-sm btn-warning pull-right edit">
            <i class="voyager-edit"></i> View Product
        </a>

</td>

@endif
@if($req->status == 'updated' && (Auth::user()->hasRole('super-user')  || Auth::user()->hasRole('super-analyst')))
<td class="no-sort no-click bread-actions">

        <a href="" class="btn btn-sm btn-primary pull-right edit" onclick="return false" disabled>
            <i class="voyager-edit"></i> Update Status
        </a>
        <a href="/admin/request/super/view/{{$req->id}}" class="btn btn-sm btn-warning pull-right edit">
            <i class="voyager-edit"></i> View Product
        </a>
</td>

@endif
@if($req->status == 'untracked' && Auth::user()->hasRole('manufacturer') )
<td class="no-sort no-click bread-actions">

        <a href="/admin/request/manufacturer/edit/{{$req->id}}" class="btn btn-sm btn-primary pull-right edit">
            <i class="voyager-edit"></i> Add Reply
        </a>
        <a href="/admin/request/super/view/{{$req->id}}" class="btn btn-sm btn-warning pull-right edit">
            <i class="voyager-edit"></i> View Product
        </a>

</td>

@endif




                                          </tr>
                                          @endif
@endforeach
                                </tbody>
                            </table>
                        </div>
                            <div class="pull-left">
                                <div role="status" class="show-res" aria-live="polite">
                                </div>
                            </div>
                            <div class="pull-right">

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} </h4>
                </div>
                <div class="modal-footer">
                    <form action="#" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="{{ __('voyager::generic.delete_confirm') }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

<link rel="stylesheet" href="css/app.css">


@section('javascript')


@stop
