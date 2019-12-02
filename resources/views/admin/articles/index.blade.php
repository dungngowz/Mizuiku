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
                                        <th style="width:10%">ID</th>
                                        <th style="max-width: 350px"></th>
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
                ajax: '/admin/articles/data',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
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