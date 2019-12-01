@extends('layouts.admin.default')
@section('title', trans('news.titleList'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width:10%">ID</th>
                                    <th>type</th>
                                    <th>title</th>
                                    <th>slug</th>
                                    <th>thumbnail</th>
                                    <th>description</th>
                                    <th>content</th>
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
                ajax: '{{ route('news.index') }}',
                columns: [ 
                    { data: 'id', name: 'id', className: "text-center" },
                    { data: 'type', name: 'type', className: "text-center" },
                    { data: 'title', name: 'title', className: "text-center" },
                    { data: 'slug', name: 'slug', className: "text-center" },
                    { data: 'thumbnail', name: 'thumbnail', className: "text-center" },
                    { data: 'description', name: 'description', className: "text-center" },
                    { data: 'content', name: 'content', className: "text-center" },
                    {
                        data: 'id',
                        searchable: false,
                        sortable: false,
                        className: "text-center",
                        render: function(data, type, row, meta){
                            var html = '<a href="#" title="edit" class="btn btn-secondary bt-pd-icon"><i class="fa fa-edit fa-lg"></i></a>&nbsp;'
                            html += '<a href="#" title="Remove" class="btn btn-danger bt-pd-icon btn-destroy"><i class="fa fa-trash fa-lg" ></i></a>';
                            return html;
                        }
                    }
                ],
            });
            $(".preloader").fadeOut();
        });
    </script>
@endpush