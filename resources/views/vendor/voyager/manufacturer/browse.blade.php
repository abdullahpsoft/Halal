@extends('voyager::master')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-lifeboat">Products</i>
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
                            <form method="get" class="form-search">
                                <div id="search-input">
                                    <div class="col-2">
                                        <select id="search_key" name="key">

                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <select id="filter" name="filter">

                                        </select>
                                    </div>
                                    <div class="input-group col-md-12">

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
                                                <input type="checkbox" class="select_all">
                                            </th>

                                        <th>
                                                        <i class="voyager-angle-up pull-right"></i>
                                                        <i class="voyager-angle-down pull-right"></i>
                                        </th>

                                        <th class="" style=""></th>
                                        <th class="actions text-right" style=""><a href="">{{ __('voyager::generic.actions') }}</a></th>
                                        <th class="" style=""></th>
                                        <th class="" style=""></th>


                                          <th class="actions text-right">Approve</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                            <td>
                                            </td>


                                            <td>
                                                            <span class="label label-info"></span>

                                                            <span class="label label-primary"></span>

                                                    <span class="badge badge-lg"</span>
                                                    <div></div>
                                                    <div></div>
                                                            <a href="" target="_blank">
                                                            </a>
                                                            <br/>
                                                        <a href="" target="_blank">
                                                            Download
                                                        </a>
                                                    <div></div>
                                                            <img src="" style="width:50px">
                                                            <img src="" style="width:50px">
                                                            <ul>
                                                                <li></li>
                                                            </ul>
                                                            <img src="" style="width:50px">
                                                    <span></span>
                                            </td>
                                        <td class="no-sort no-click bread-actions">
                                          <td>
                                          </td>
                                        </td>






                                    </tr>
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

@section('css')
    <link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
@stop

@section('javascript')

    
@stop
