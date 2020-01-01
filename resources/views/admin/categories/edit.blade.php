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
                <form action="{{url('admin/categories/' . $record->id)}}" method="post">
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
                                <label>{{trans('admin.priority')}}</label>
                                <input type="number" name="priority" class="form-control" value="{{old('priority', $record->priority ? $record->priority : 0)}}" placeholder="{{trans('admin.enter_priority')}}">
                                @if($errors->has('priority'))
                                    <span class="error-msg">{{$errors->first('priority')}}</span>
                                @endif
                            </div>

                            @if (0 && $record->type == 'course' || request()->type == 'course')
                                <div class="form-group m-t-20">
                                    <label>{{trans('admin.views')}}</label>
                                    <input type="number" name="views" class="form-control" value="{{old('views', $record->views ? $record->views : '')}}" placeholder="{{trans('admin.enter_views')}}">
                                    @if($errors->has('views'))
                                        <span class="error-msg">{{$errors->first('views')}}</span>
                                    @endif
                                </div>

                                <div class="form-group m-t-20">
                                    <label>{{trans('admin.content')}}</label>
                                    <textarea rows="15" name="content" class="form-control editor">{!! $record->content !!}</textarea>
                                    @if($errors->has('content'))
                                        <span class="error-msg">{{$errors->first('content')}}</span>
                                    @endif
                                </div>
                            @endif
                        </div>
                        <div class="border-top">
                            <div class="card-body text-right">
                                <a href="{{url('admin/categories/')}}">
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

@push('scripts')
    @include('admin.components.editor-config')
@endpush