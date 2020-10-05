@extends('voyager::master')


@section('page_header')
    <div class="container-fluid" >
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
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                            <th>
                                                <input type="checkbox" class="select_all">
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
<?php endif; ?>


<?php if (Auth::user()->hasRole('super-analyst')): ?>
  <th class="actions" style=""><a href="">Actions</a></th>
<?php endif; ?>


                                    </tr>
                                </thead>
                                <tbody>



@foreach($reqs as $req)
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





                                          </tr>

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
