@extends('layouts.admin.default')
@section('title', $title)

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>{{trans('admin.title')}}</th>
                                        <th>{{trans('admin.language')}}</th>
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

@push('scripts')
    <script>
        $(function() {
            $('#datatables').DataTable({
                ...optionDataTable,
                ajax: '/admin/categories/data',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },{
                        data: 'title',
                        name: 'title'
                    },{
                        data: 'language',
                        name: 'language'
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