@extends('layouts.admin.default')
@section('title', $title)

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">@yield('title')</h4>
                <div class="ml-auto text-right">
                    <button type="button" id="btn-remove-all" data-url="{{url('admin/quiz/delete-multiple')}}" class="btn btn-danger">{{trans('admin.delete_selected_item')}}</button>
                    <a href="{{url('admin/quiz/create')}}">
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
                                        <th>
                                            <input type="checkbox" id="all-category" name="all-category">
                                        </th>
                                        <th>ID</th>
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
    <!-- The Modal Delete -->
    @include('admin.components.modals.delete')
@endpush

@push('scripts')
    <script>
        var table = $('#datatable').DataTable({
                ...optionDataTable,
                ajax: {
                    url: '/admin/quiz/data',
                    data : JSON.parse('<?php echo json_encode(request()->all()) ?>')
                },
                columns: [{
                        data: 'id',
                        orderable: false,
                        className: 'text-center',
                        render: function(data, type, row, meta){
                            return '<input type="checkbox" name="remove[]" id="'+ row.id +'">';
                        } 
                    },{
                        data: 'id',
                        name: 'id'
                    },{
                        data: 'title',
                        name: 'title',
                        width: '30%'
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
                success: function(res){
                    $(".preloader").fadeOut();
                }
            });
            
             // action check all
            $('#all-category').on('change', function(){
                $(this).is(':checked') ? checked=true : checked=false ;
                $('tr td input:checkbox').prop('checked', checked);
            }).trigger('change');

            // change checked button all-category when change any checkbox in datatable
            $('#datatable').on('change',"tr td input:checkbox", function(){
                var countSelect = 0;
                table.rows().every(function () {
                    var data = this.node();
                    if($(data).find('input').prop('checked') == false)
                    {
                        countSelect++;
                    }
                    // console.log($(data).find('input').prop('checked'));
                });
                var check = countSelect != 0 ? false : true ;
                $('#all-category').prop('checked', check);
            });

            $('#btn-remove-all').on('click', function(){
                var arraySelected = $("#datatable input:checkbox:checked").map(function(){
                    return $(this).attr('id');
                }).get();
                if(arraySelected.length <= 0) {
                    alert("{{ trans('admin.pls-choose-item') }}");
                    return;
                }
                var allCategory = arraySelected.indexOf('all-category');
                if(allCategory >= 0) {
                    arraySelected.splice(allCategory, 1);
                }
                let url = $(this).attr('data-url');

                // $('#modal-delete .btn-submit-delete').attr('data-ids', arraySelected);
                $('#modal-delete .btn-submit-delete').attr('data-array-selected', arraySelected);
                $('#modal-delete .btn-submit-delete').attr('data-url', url);
                $('#modal-delete').modal('show');
            });
    </script>
@endpush