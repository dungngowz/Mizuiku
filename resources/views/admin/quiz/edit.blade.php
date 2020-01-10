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
                <form action="{{url('admin/quiz/' . $record->id)}}" id="form-library" method="post">
                    {{ csrf_field() }}

                    @if ($record->id)
                        <input type="hidden" name="id" value="{{$record->id}}">
                        {{ method_field('PUT') }}
                    @else
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
                                <label>{{trans('Option1')}}</label>
                                <input type="text" name="option1" class="form-control"value="{{old('option1', $record->option1)}}">
                                @if($errors->has('option1'))
                                    <span class="error-msg">{{$errors->first('option1')}}</span>
                                @endif
                            </div>

                            <div class="form-group m-t-20">
                                <label>{{trans('Option2')}}</label>
                                <input type="text" name="option2" class="form-control"value="{{old('option2', $record->option2)}}">
                                @if($errors->has('option2'))
                                    <span class="error-msg">{{$errors->first('option2')}}</span>
                                @endif
                            </div>

                            <div class="form-group m-t-20">
                                <label>{{trans('Option3')}}</label>
                                <input type="text" name="option3" class="form-control"value="{{old('option3', $record->option3)}}">
                                @if($errors->has('option3'))
                                    <span class="error-msg">{{$errors->first('option3')}}</span>
                                @endif
                            </div>

                            <div class="form-group m-t-20">
                                <label>{{trans('Option4')}}</label>
                                <input type="text" name="option4" class="form-control"value="{{old('option4', $record->option4)}}">
                                @if($errors->has('option4'))
                                    <span class="error-msg">{{$errors->first('option4')}}</span>
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

                        <div class="border-top">
                            <div class="card-body text-right">
                                <a href="{{url('admin/quiz/')}}">
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