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
                <form action="{{url('admin/result-evaluation-course/' . $record->id)}}" method="post">
                    {{ csrf_field() }}

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group m-t-20">
                                <label>{{trans('admin.email')}}</label>
                                <input type="text" readonly name="email" class="form-control" value="{{$record->user['email']}}">
                            </div>

                            <table>{!!$record->content!!}</table>
                        </div>
                        <div class="border-top">
                            <div class="card-body text-right">
                                <a href="{{url('admin/result-evaluation-course')}}">
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