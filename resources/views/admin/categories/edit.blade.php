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
                <form action="{{url('admin/categories/' . $record->id)}}" id="form-library" method="post">
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
                            <div class="form-group m-t-20">
                                <label>{{trans('admin.title')}}</label>
                                <input type="text" name="title" class="form-control"value="{{old('title', $record->title)}}" placeholder="{{trans('admin.enter_title')}}">
                                @if($errors->has('title'))
                                    <span class="error-msg">{{$errors->first('title')}}</span>
                                @endif
                            </div>

                            <div class="form-group m-t-20">
                                <label>{{trans('admin.status')}}</label>
                                <select name="status" class="select2 form-control custom-select">
                                    @php
                                        $status = old('status', $record->status);
                                    @endphp
                                    <option value="0" {{ ($status == 0) ? 'selected' : '' }}>{{trans('admin.hide')}}</option>
                                    <option value="1" {{ ($status == 1) ? 'selected' : '' }}>{{trans('admin.show')}}</option>
                                </select>
                                @if($errors->has('status'))
                                    <span class="error-msg">{{$errors->first('status')}}</span>
                                @endif
                            </div>

                            <div class="hide form-group m-t-20">
                                <label>{{trans('admin.priority')}}</label>
                                <input type="number" name="priority" class="form-control" value="{{old('priority', $record->priority ? $record->priority : 0)}}" placeholder="{{trans('admin.enter_priority')}}">
                                @if($errors->has('priority'))
                                    <span class="error-msg">{{$errors->first('priority')}}</span>
                                @endif
                            </div>

                            @if ($record->type == 'course' || request()->type == 'course')
                                <div class="form-group m-t-20">
                                    <label>Url Google Form</label>
                                    <input type="text" name="url" class="form-control" value="{{old('url', $record->url ? $record->url : '')}}" placeholder="{{trans('admin.enter_url')}}">
                                    @if($errors->has('url'))
                                        <span class="error-msg">{{$errors->first('url')}}</span>
                                    @endif
                                </div>
                            @endif
                        </div>

                        @if (request()->type == 'course' || $record->type == 'course')
                            <button type="submit" class="btn btn-success btn-submit-library hide">{{trans('admin.submit')}}</button>    
                        @else
                            <div class="border-top">
                                <div class="card-body text-right">
                                    <a href="{{url('admin/categories/?type=' . request()->type)}}">
                                        <button type="button" class="btn">{{trans('admin.cancel')}}</button>
                                    </a>
                                    <button type="submit" class="btn btn-success">{{trans('admin.submit')}}</button>
                                </div>
                            </div>
                        @endif
                    </div>
                </form>

                @if (request()->type == 'course' || $record->type == 'course')
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="document">{{trans('admin.document')}}</label>
                                <a class="fancybox-preview-gallery" data-fancybox="gallery" href=""></a>
                                <form action="{{ route('admin.library.storeFileUpload') }}" name="upload-file" enctype="multipart/form-data" class="dropzone" id="dropzone" method="post">
                                    @csrf   
                                </form>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body text-right">
                                <a href="{{url('admin/categories/?type=' . request()->type)}}">
                                    <button type="button" class="btn">{{trans('admin.cancel')}}</button>
                                </a>
                                <button type="button" class="btn btn-submit-gallery btn-success">{{trans('admin.submit')}}</button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection


@if (request()->type == 'course' || $record->type == 'course')
    @push('scripts')
        @include('admin.components.editor-config')
        <script>
            var gallery = <?php echo json_encode($gallery); ?>;

            $('.btn-submit-gallery').on('click', function (ev) {
                $('.btn-submit-library').trigger('click');
            });

            Dropzone.options.dropzone = {
                init: function() {
                    thisDropzone = this;

                    var i; var mockFile; var thumbnail; var ext;
                    for (i = 0; i < gallery.length; i++) {
                        mockFile = gallery[i];
                        thisDropzone.options.addedfile.call(thisDropzone, mockFile);

                        ext = mockFile.path.split('.').pop();
                        if (ext == "pdf") {
                           thumbnail = "/admin/assets/images/pdf.jpeg";
                        } else if (ext.indexOf("doc") != -1) {
                           thumbnail = "/admin/assets/images/word.png";
                        } else if (ext.indexOf("xls") != -1) {
                           thumbnail = "/admin/assets/images/excel.png";
                        } else if (ext.indexOf("mp4") != -1) {
                            thumbnail = "/admin/assets/images/mp4.png";
                        }else{
                            thumbnail = "/admin/assets/images/icon.png";
                        }

                        thisDropzone.options.thumbnail.call(thisDropzone, mockFile, thumbnail);
                    }
                    thisDropzone.on("removedfile", function (file) {
                        $("#form-library").append("<input type='hidden' name='fileRemove[]' value='"+JSON.stringify(file)+"'>");
                    });
                },
                maxFilesize: 50,
                dictFileTooBig: 'File is larger than 50MB',
                renameFile: function(file) {
                    var dt = new Date();
                    var time = dt.getTime();
                return time+file.name;
                },
                //acceptedFiles: ".doc, .docx, .pdf",
                acceptedFiles: ".mp4,.mkv,.avi, .doc, .docx, .pdf, .csv, .xlsx",
                addRemoveLinks: true,
                timeout: 2000,
                success: function(file, response) 
                {
                    var filename = file.name;
                    var fileExt = file.name.split('.').pop();
                    
                    paramObj = {
                        'file_name': filename.replace('.'+fileExt, ''),
                        'size': file.size,
                        'file_path': response.file_path
                    };
                    
                    $("#form-library").append("<input type='hidden' name='fileUpload[]' value='"+JSON.stringify(paramObj)+"'>");
                },
                error: function(file, response)
                {
                    return false;
                }
            };

            $(document).on("click", ".dz-image-preview", function(){
                $('.fancybox-preview-gallery').attr('href', $(this).find('img').attr('src')).trigger('click');
            });
        </script>
    @endpush
@endif