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
        {{-- Form Edit --}}
        <div class="row">
            <div class="col">
                {{-- <form action="{{ route('admin.library.update', ['id' => $record->id])}}" method="post">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-t-20">
                                        <label for="file_name">{{trans('admin.file_name')}}</label>
                                        <input type="text" name="file_name" class="form-control" value="{{ $record->file_name }}" placeholder="{{trans('admin.enter_file_name')}}">
                                        
                                        @if($errors->has('file_name'))
                                            <span class="error-msg">{{$errors->first('file_name')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group m-t-20">
                                        <label for="file_path">{{ trans('admin.file_path')}}</label>
                                        <input type="text" name="file_path" class="form-control" value="{{ $record->file_path }}" placeholder="{{trans('admin.enter_file_path')}}">
                                        @if($errors->has('file_path'))
                                            <span class="error-msg">{{$errors->first('file_path')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body text-right">
                                <a href="{{ route('admin.library') }}">
                                    <button type="button" class="btn">{{trans('admin.cancel')}}</button>
                                </a>
                                <button type="submit" class="btn btn-primary">{{trans('admin.submit')}}</button>
                            </div>
                        </div>
                    </div>
                </form> --}}
                <div class="form-group">
                    <label for="document">Upload File</label>
                    <form action="{{ route('admin.library.storeFileUpload') }}" name="upload-file" enctype="multipart/form-data" class="dropzone" id="dropzone" method="post">
                        @csrf   
                    </form>
                </div>
                <form action="{{ route('admin.library.store') }}" name="store-gallery" method="post">
                    @csrf   
                    <div class="text-right">
                        <a href="{{ route('admin.library') }}">
                            <button type="button" class="btn">{{trans('admin.cancel')}}</button>
                        </a>
                        <button type="submit" class="btn btn-primary">{{trans('admin.submit')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection