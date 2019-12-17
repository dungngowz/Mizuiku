@extends('layouts.admin.default')
@section('title', $title)

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">@yield('title')</h4>
                <div class="ml-auto text-right">
                    <a href="{{url('admin/news/create?keyword=news')}}">
                        <button type="button" class="btn btn-success">{{trans('admin.add_new')}}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-no-bordered table-hover" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Thumbnail</th>
                                        <th>{{trans('admin.category')}}</th>
                                        <th>{{trans('admin.title')}}</th>
                                        <th>{{trans('admin.language')}}</th>
                                        <th>{{trans('admin.created_at')}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('modals')
    @include('admin.components.modals.delete')
@endpush

@push('scripts')
    <script>
        $(function() {
            $('#datatable').DataTable({
                ...optionDataTable,
                ajax: {
                    url: '/admin/news/data',
                    data : JSON.parse('<?php echo json_encode(request()->all()) ?>')
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },{
                        data: 'thumbnail',
                        name: 'thumbnail'
                    },{
                        data: 'category.title',
                        name: 'category.title',
                    },{
                        data: 'title',
                        name: 'title'
                    },{
                        data: 'language',
                        name: 'language',
                        className: 'text-center'
                    },{
                        data: 'created_at',
                        name: 'created_at'
                    },{
                        data: 'actions',
                        name: 'actions',
                        className: 'text-right',
                        orderable: false
                    }
                ],
            });
            $(".preloader").fadeOut();
        });
    </script>
@endpush