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
                                        <th>{{trans('admin.fullname')}}</th>
                                        <th>{{trans('admin.phone')}}</th>
                                        <th>{{trans('admin.email')}}</th>
                                        <th>IP</th>
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
                    url: '/admin/contact-us/data',
                    data : JSON.parse('<?php echo json_encode(request()->all()) ?>')
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },{
                        data: 'fullname',
                        name: 'fullname'
                    },{
                        data: 'phone',
                        name: 'phone',
                    },{
                        data: 'email',
                        name: 'email',
                    },{
                        data: 'ip',
                        name: 'ip',
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