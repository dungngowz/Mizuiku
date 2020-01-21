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
                <form action="{{url('admin/course-video/' . $record->id)}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="keyword" value="course">
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
                                <div class="col-md-5">
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
                                            @foreach ($courseCategories as $item)
                                                <option value="{{$item->id}}" {{ ($item->id == $category_id) ? 'selected' : '' }}>{{$item->title}}</option>    
                                            @endforeach
                                        </select>
                                        @if($errors->has('category_id'))
                                            <span class="error-msg">{{$errors->first('category_id')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label>Url Video</label>
                                        <input type="text" name="url" class="form-control" value="{{old('url', $record->url)}}" placeholder="{{trans('admin.enter_url')}}">
                                        @if($errors->has('url'))
                                            <span class="error-msg">{{$errors->first('url')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.video_duration')}}</label>
                                        <input type="text" name="video_duration" class="form-control" value="{{old('video_duration', $record->video_duration)}}" placeholder="{{trans('admin.enter_video_duration')}}">
                                        @if($errors->has('video_duration'))
                                            <span class="error-msg">{{$errors->first('video_duration')}}</span>
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
        
                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.priority')}}</label>
                                        <input type="number" name="priority" class="form-control" value="{{old('priority', $record->priority ? $record->priority : 0)}}" placeholder="{{trans('admin.enter_priority')}}">
                                        @if($errors->has('priority'))
                                            <span class="error-msg">{{$errors->first('priority')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-1"></div>

                                @if ($record->url)
                                    <div class="col-md-6">
                                        <div class="form-group m-t-20 wrap-thumbnail">
                                            <label>Video Preview</label>
                                            <div>
                                                @php
                                                    echo preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe width='100%' height='450px' src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$record->url);
                                                @endphp
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="border-top">
                                <div class="card-body text-right">
                                    <a href="{{url('admin/course-video/?keyword=' . request()->keyword)}}">
                                        <button type="button" class="btn">{{trans('admin.cancel')}}</button>
                                    </a>
                                    <button type="submit" class="btn btn-success">{{trans('admin.submit')}}</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection