@extends('voyager::master')


@section('page_header')
    <div class="container-fluid" >
        <h1 class="page-title" >
            <i class="voyager-lifebuoy" ></i>Products

                <a href="manufacturer/create" class="btn btn-success">
                    <i class="voyager-plus"></i> Add New
                </a>
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

                                            <th class="actions" style=""><a href="">Name</a></th>

                                        <th class="actions" style=""><a href="">Ean</a></th>
                                        <th class="actions" style=""><a href="">Status</a></th>
                                        <th class="actions" style=""><a href="">Image Path</a></th>
                                        <th class="actions" style=""><a href="">Title</a></th>


                                        <th class="actions" style=""><a href="">Active</a></th>
                                        <th class="actions" style=""><a href="">Actions</a></th>

                                    </tr>
                                </thead>
                                <tbody>



@foreach($products as $product)
  <tr>
<td>
</td>


                                            <td class="no-sort no-click bread-actions">
{{$product->name}}
                                            </td>
                                            <td class="no-sort no-click bread-actions">
{{$product->ean}}
                                            </td>
                                            <td class="no-sort no-click bread-actions">
{{$product->status}}
                                            </td>
                                            <td class="no-sort no-click bread-actions">
{{$product->image}}
                                            </td>
                                            <td class="no-sort no-click bread-actions">
{{$product->title}}
                                            </td>
                                            <td class="no-sort no-click bread-actions">
{{$product->active}}
                                            </td>
                                            <td class="no-sort no-click bread-actions">

                                                    <a href="/admin/products/manufacturer/edit/{{$product->id}}" class="btn btn-sm btn-primary pull-right edit">
                                                        <i class="voyager-edit"></i> {{ __('voyager::generic.edit') }}
                                                    </a>

                                            </td>
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
