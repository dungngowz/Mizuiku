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
            <div class="col-6">
                <form action="{{url('admin/contact-us/' . $record->id)}}" method="post">
                    {{ csrf_field() }}

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group m-t-20">
                                <label>{{trans('admin.fullname')}}</label>
                                <input type="text" name="fullname" class="form-control" value="{{$record->fullname}}">
                            </div>

                            <div class="form-group m-t-20">
                                <label>{{trans('admin.phone')}}</label>
                                <input type="text" name="phone" class="form-control" value="{{$record->phone}}">
                            </div>

                            <div class="form-group m-t-20">
                                <label>{{trans('admin.email')}}</label>
                                <input type="text" name="email" class="form-control" value="{{$record->email}}">
                            </div>

                            <div class="form-group m-t-20">
                                <label>IP</label>
                                <input type="text" name="ip" class="form-control" value="{{$record->ip}}">
                            </div>

                            <div class="form-group m-t-20">
                                <label>{{trans('admin.content')}}</label>
                                <textarea rows="7" name="content" class="form-control">{!! $record->content !!}</textarea>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body text-right">
                                <a href="{{url('admin/contact-us')}}">
                                    <button type="button" class="btn">{{trans('admin.back')}}</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection