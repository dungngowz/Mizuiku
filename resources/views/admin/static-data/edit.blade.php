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
                <form action="{{url('admin/static-data/' . $record->id)}}" method="post">
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
                                <label>Type</label>
                                <input {{$record->id ? 'readonly' : ''}} type="text" name="type" class="form-control"value="{{old('type', $record->type)}}">
                                @if($errors->has('type'))
                                    <span class="error-msg">{{$errors->first('type')}}</span>
                                @endif
                            </div>
                            
                            <div class="form-group m-t-20">
                                <label>{{trans('admin.content')}}</label>
                                <textarea rows="15" name="content" class="form-control editor">{!! $record->content !!}</textarea>
                                @if($errors->has('content'))
                                    <span class="error-msg">{{$errors->first('content')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="border-top">
                            <div class="card-body text-right">
                                <a href="{{url('admin/static-data/')}}">
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