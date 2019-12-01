@extends('layouts.admin.default')
@section('title', trans('news.titleList_environment'))

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
                ajax: '{{ route('news.environment') }}',
                columns: [ 
                    { data: 'id', name: 'id' },
                    { data: 'type', name: 'type' },
                    { data: 'title', name: 'title' },
                    { data: 'slug', name: 'slug' },
                    { data: 'thumbnail', name: 'thumbnail' },
                    { data: 'description', name: 'description' },
                    { data: 'content', name: 'content' }

                ],
            });
            $(".preloader").fadeOut();
        });
    </script>
@endpush