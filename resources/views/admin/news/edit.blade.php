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
        {{-- switch language --}}
        @include('admin.components.switch-language')

        {{-- Form Edit --}}
        <div class="row">
            <div class="col-12">
                <form action="{{url('admin/news/' . $record->id)}}" method="post">
                    {{ csrf_field() }}

                    @if ($record->id)
                        <input type="hidden" name="id" value="{{$record->id}}">
                        {{ method_field('PUT') }}
                    @else
                        <input type="hidden" name="type" value="{{request()->type}}">
                        <input type="hidden" name="language" value="{{request()->language ? request()->language : 'vi'}}">
                        <input type="hidden" name="ref_id" value="{{request()->ref_id}}">    
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.title')}}</label>
                                        <input type="text" name="title" class="form-control"value="{{old('title', $record->title)}}" placeholder="{{trans('admin.enter_title')}}">
                                        @if($errors->has('title'))
                                            <span class="error-msg">{{$errors->first('title')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.category')}}</label>
                                        <select name="category_id" class="select2 form-control custom-select">
                                            @php
                                                $category_id = old('category_id', $record->category_id);
                                            @endphp
                                            @foreach ($articleCategories as $item)
                                                <option value="{{$item->id}}" {{ ($item->id == $category_id) ? 'selected' : '' }}>{{$item->title}}</option>    
                                            @endforeach
                                        </select>
                                        @if($errors->has('category_id'))
                                            <span class="error-msg">{{$errors->first('category_id')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.status')}}</label>
                                        <select name="category" class="select2 form-control custom-select">
                                            @php
                                                $status = old('status', $record->status ? $record->status : 1);
                                            @endphp
                                            <option {{ ($status == 0) ? 'selected' : '' }}>{{trans('admin.hide')}}</option>
                                            <option {{ ($status == 1) ? 'selected' : '' }}>{{trans('admin.show')}}</option>
                                        </select>
                                        @if($errors->has('status'))
                                            <span class="error-msg">{{$errors->first('status')}}</span>
                                        @endif
                                    </div>
        
                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.priority')}}</label>
                                        <input type="number" name="priority" class="form-control" value="{{old('priority', $record->priority ? $record->priority : 0)}}" placeholder="{{trans('admin.enter_priority')}}">
                                        @if($errors->has('priority'))
                                            <span class="error-msg">{{$errors->first('priority')}}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="col-md-2"></div>

                                <div class="col-md-4">
                                    <div class="form-group m-t-20 wrap-thumbnail">
                                        <label>Thumbnail</label>
                                        <div id="upload-file">
                                            <input id="input_path" type="hidden" name="thumbnail" value="{{$record->thumbnail}}">
                                            <input type="file" accept=".png,.jpg,.jpeg,.gif" id="choose-image" class="hide">
                                            <div id="preview-crop-image">
                                                <img src="{{asset($record->thumbnailDisplay)}}" alt="">
                                            </div>
                                            <button type="button" class="mt-3 btn close-img-preview btn-danger {{empty($record->thumbnail) ? 'hide' : ''}}">Remove Image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group m-t-20">
                                <label>{{trans('admin.description')}}</label>
                                <textarea rows="5" name="description" class="form-control">{{$record->description}}</textarea>
                                @if($errors->has('description'))
                                    <span class="error-msg">{{$errors->first('description')}}</span>
                                @endif
                            </div>
                            
                            <div class="form-group m-t-20">
                                <label>{{trans('admin.content')}}</label>
                                <textarea name="content" class="form-control editor">{!! $record->content !!}</textarea>
                                @if($errors->has('content'))
                                    <span class="error-msg">{{$errors->first('content')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body text-right">
                                <a href="{{url('admin/news/')}}">
                                    <button type="button" class="btn">{{trans('admin.cancel')}}</button>
                                </a>
                                <button type="submit" class="btn btn-success">{{trans('admin.submit')}}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('modals')
    @include('admin.components.modals.image-croper')
@endpush

@push('scripts')
    @include('admin.components.editor-config')

    <script>
        var resize = $('#modal-crop-image #image-preview').croppie({
            enableExif: true,
            enableOrientation: true,    
            viewport: { 
                width: 370,
                height: 250,
            },
            boundary: {
                width: 500,
                height: 500
            }
        });

        $('.wrap-thumbnail #preview-crop-image').on('click', function(){
            $('.wrap-thumbnail #choose-image').prop("value", "");
            $('.wrap-thumbnail #choose-image').trigger('click');
        });

        $('.wrap-thumbnail #choose-image').on('change', function () { 
            $('#modal-crop-image').modal('show');
            var reader = new FileReader();
            reader.onload = function (e) {
                setTimeout(() => {
                    resize.croppie('bind',{
                        url: e.target.result
                    }).then(function(){
                        //$('.wrap-thumbnail .modal').modal('show');
                    });
                }, 500);
            }
            reader.readAsDataURL(this.files[0]);
        });

        $('.wrap-thumbnail .close-img-preview').on('click', function (ev) {
            let html = '<img src="' + URL_NOIMAGE + '" alt="noimage" class="w-100" style="width: 100%; height: 100%;"/>';
            $("#preview-crop-image").html(html);
            $('.wrap-thumbnail #input_path').val('');
            $('.wrap-thumbnail .close-img-preview').addClass('hide');
            $('.wrap-thumbnail #choose-image').prop("value", "");
        });

        $('.btn-submit-upload-file').on('click', function (ev) {
            ev.preventDefault()
            resize.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (img) {
                $.ajax({
                    url: "{{route('admin.uploadImageBase64')}}",
                    type: "POST",
                    data: {
                        "_token": CSRF_TOKEN,
                        "file_name": $('.wrap-thumbnail #choose-image')[0].files[0].name,
                        "image": img,
                    },
                    success: function (data) {
                        html = "<img src='" + data.url + "' alt='' />";
                        $('.wrap-thumbnail #input_path').val(data.pathTmpFile);
                        $('.wrap-thumbnail #preview-crop-image').html(html);
                        $('.wrap-thumbnail .close-img-preview').removeClass('hide');
                        $('#modal-crop-image').modal('hide');
                    }
                });
            });
        });
    </script>
@endpush