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
            <div class="col-12">
                <form action="{{url('admin/comment/' . $record->id)}}" method="post">
                    {{ csrf_field() }}

                    @if ($record->id)
                        <input type="hidden" name="id" value="{{$record->id}}">
                        {{ method_field('PUT') }}
                    @endif

                    <div class="card">
                        <div class="card-body">

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
                                <label>IP</label>
                                <input type="text" name="ip" class="form-control" value="{{$record->ip}}">
                            </div>

                            <div class="form-group m-t-20">
                                <label>{{trans('admin.content')}}</label>
                                <textarea rows="8" name="content" class="form-control">{!! $record->content !!}</textarea>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body text-right">
                                <a href="{{url('admin/comment')}}">
                                    <button type="button" class="btn">{{trans('admin.back')}}</button>
                                </a>
                                <button type="submit" class="btn btn-submit-gallery btn-success">{{trans('admin.submit')}}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection