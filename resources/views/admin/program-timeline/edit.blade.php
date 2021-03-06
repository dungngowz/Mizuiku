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
                <form action="{{url('admin/program-timeline/' . $record->id)}}" method="post">
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

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group m-t-10">
                                        <label>{{trans('admin.month')}}</label>
                                        <input type="text" name="month" class="form-control"value="{{old('month', $record->month)}}" placeholder="{{trans('admin.enter_month')}}">
                                        @if($errors->has('month'))
                                            <span class="error-msg">{{$errors->first('month')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <div class="hide form-group m-t-10">
                                        <label>{{trans('admin.priority')}}</label>
                                        <input type="number" name="priority" class="form-control" value="{{old('priority', $record->priority ? $record->priority : 0)}}" placeholder="{{trans('admin.enter_priority')}}">
                                        @if($errors->has('priority'))
                                            <span class="error-msg">{{$errors->first('priority')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group m-t-20">
                                <label>{{trans('admin.content')}}</label>
                                <textarea name="content" rows="20" class="form-control editor">{!! $record->content !!}</textarea>
                                @if($errors->has('content'))
                                    <span class="error-msg">{{$errors->first('content')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body text-right">
                                <a href="{{url('admin/program-timeline/')}}">
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