@extends('layouts.admin.default')
@section('title', $title)

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">@yield('title')</h4>
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
                                        <th>{{trans('admin.user')}}</th>
                                        <th>{{trans('admin.updated_at')}}</th>
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
    <!-- The Modal Delete -->
    @include('admin.components.modals.delete')
@endpush

@push('scripts')
    <script>
        $(function() {
            $('#datatable').DataTable({
                ...optionDataTable,
                ajax: {
                    url: '/admin/result-evaluation-course/get-data',
                    data : JSON.parse('<?php echo json_encode(request()->all()) ?>')
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },{
                        data: 'user.email',
                        name: 'user.email'
                    },{
                        data: 'updated_at',
                        name: 'updated_at'
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