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
                <form action="{{url('admin/user/' . $record->id)}}" method="post">
                    {{ csrf_field() }}

                    @if ($record->id)
                        <input type="hidden" name="id" value="{{$record->id}}">
                        {{ method_field('PUT') }}
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.fullname')}}</label>
                                        <input type="text" name="name" class="form-control" value="{{old('name', $record->name)}}" placeholder="{{trans('admin.enter_fullname')}}">
                                        @if($errors->has('name'))
                                            <span class="error-msg">{{$errors->first('name')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.username')}}</label>
                                        <input type="text" {{$record->id ? 'readonly' : ''}} name="username" class="form-control" value="{{old('username', $record->username)}}" placeholder="{{trans('admin.enter_username')}}">
                                        @if($errors->has('username'))
                                            <span class="error-msg">{{$errors->first('username')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.email')}}</label>
                                        <input type="text" {{$record->id ? 'readonly' : ''}} name="email" class="form-control" value="{{old('email', $record->email)}}" placeholder="{{trans('admin.enter_email')}}">
                                        @if($errors->has('email'))
                                            <span class="error-msg">{{$errors->first('email')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.password')}}</label>
                                        <input type="password" name="password" class="form-control" value="{{old('password', '123456')}}" placeholder="{{trans('admin.enter_password')}}">
                                        @if($errors->has('password'))
                                            <span class="error-msg">{{$errors->first('password')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.phone')}}</label>
                                        <input type="text" name="phone" class="form-control" value="{{old('phone', $record->phone)}}" placeholder="{{trans('admin.enter_phone')}}">
                                        @if($errors->has('phone'))
                                            <span class="error-msg">{{$errors->first('phone')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.actived')}}</label>
                                        <select name="actived" class="select2 form-control custom-select">
                                            @php
                                                $actived = old('actived', $record->actived);
                                            @endphp
                                            <option value="0" {{ ($actived == 0) ? 'selected' : '' }}>{{trans('admin.not_activated')}}</option>
                                            <option value="1" {{ ($actived == 1) ? 'selected' : '' }}>{{trans('admin.activated')}}</option>
                                        </select>
                                        @if($errors->has('actived'))
                                            <span class="error-msg">{{$errors->first('actived')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.status')}}</label>
                                        <select name="status" class="select2 form-control custom-select">
                                            @php
                                                $status = old('status', $record->status);
                                            @endphp
                                            <option value="0" {{ ($status == 0) ? 'selected' : '' }}>{{trans('admin.not_activated')}}</option>
                                            <option value="1" {{ ($status == 1) ? 'selected' : '' }}>{{trans('admin.activated')}}</option>
                                        </select>
                                        @if($errors->has('status'))
                                            <span class="error-msg">{{$errors->first('status')}}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="col-md-2"></div>

                                <div class="col-md-5">
                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.career')}}</label>
                                        <select name="career" class="select2 form-control custom-select">
                                            @php
                                                $career = old('career', $record->career);
                                            @endphp
                                            @foreach ($careers as $i => $item)
                                                <option value="{{$i}}" {{ ($i == $career) ? 'selected' : '' }}>{{$item}}</option>    
                                            @endforeach
                                        </select>
                                        @if($errors->has('career'))
                                            <span class="error-msg">{{$errors->first('career')}}</span>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.province')}}</label>
                                        <select name="province_id" lang="{{$currentLang}}" class="select2 form-control custom-select">
                                            @php
                                                $province_id = old('province_id', $record->province_id);
                                            @endphp
                                            @foreach ($provinces as $item)
                                                <option value="{{$item->id}}" {{ ($item->id == $province_id) ? 'selected' : '' }}>{{$item->name}}</option>    
                                            @endforeach
                                        </select>
                                        @if($errors->has('province_id'))
                                            <span class="error-msg">{{$errors->first('province_id')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20 wrap-districts">
                                        <label>{{trans('admin.district')}}</label>
                                        <select name="district_id" class="select2 form-control custom-select">
                                            @php
                                                $district_id = old('district_id', $record->district_id);
                                            @endphp
                                            @foreach ($districts as $item)
                                                <option value="{{$item->id}}" {{ ($item->id == $district_id) ? 'selected' : '' }}>{{$item->name}}</option>    
                                            @endforeach
                                        </select>
                                        @if($errors->has('district_id'))
                                            <span class="error-msg">{{$errors->first('district_id')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.work_place')}}</label>
                                        <input type="text" name="work_place" class="form-control" value="{{old('work_place', $record->work_place)}}" placeholder="{{trans('admin.enter_work_place')}}">
                                        @if($errors->has('work_place'))
                                            <span class="error-msg">{{$errors->first('work_place')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.birthday')}}</label>
                                        <input type="text" name="birthday" class="form-control" value="{{old('birthday', $record->birthday ? $record->birthday : '1990-01-01')}}" placeholder="{{trans('admin.enter_birthday')}}">
                                        @if($errors->has('birthday'))
                                            <span class="error-msg">{{$errors->first('birthday')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20 wrap-thumbnail">
                                        <label>Avatar</label>
                                        <div id="upload-file">
                                            <input id="input_path" type="hidden" name="avatar" value="{{$record->avatar}}">
                                            <input type="file" accept=".png,.jpg,.jpeg,.gif" id="choose-image" class="hide">
                                            <div id="preview-crop-image">
                                                <img style="width: 200px" src="{{asset($record->avatarDisplay)}}" alt="">
                                            </div>
                                            <button type="button" class="mt-3 btn close-img-preview btn-danger {{empty($record->avatar) ? 'hide' : ''}}">Remove Image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body text-right">
                                <a href="{{url('admin/user/')}}">
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

@push('modals')
    @include('admin.components.modals.image-croper')
@endpush

@push('scripts')

    <script>
        var resize = $('#modal-crop-image #image-preview').croppie({
            enableExif: true,
            enableOrientation: true,    
            viewport: { 
                width: 200,
                height: 200,
            },
            boundary: {
                width: 500,
                height: 500
            }
        });

        $('.wrap-thumbnail #preview-crop-image').on('click', function(){
            $('.wrap-thumbnail #choose-image').prop("value", "");
            $('.wrap-thumbnail #choose-image').trigger('click');
        });

        $('.wrap-thumbnail #choose-image').on('change', function () { 
            $('#modal-crop-image').modal('show');
            var reader = new FileReader();
            reader.onload = function (e) {
                setTimeout(() => {
                    resize.croppie('bind',{
                        url: e.target.result
                    }).then(function(){
                        //$('.wrap-thumbnail .modal').modal('show');
                    });
                }, 500);
            }
            reader.readAsDataURL(this.files[0]);
        });

        $('.wrap-thumbnail .close-img-preview').on('click', function (ev) {
            let html = '<img style="width: 200px" src="/client/pic/icon/no_image.gif" alt="noimage"/>';
            $("#preview-crop-image").html(html);
            $('.wrap-thumbnail #input_path').val('');
            $('.wrap-thumbnail .close-img-preview').addClass('hide');
            $('.wrap-thumbnail #choose-image').prop("value", "");
        });

        $('.btn-submit-upload-file').on('click', function (ev) {
            ev.preventDefault()
            resize.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (img) {
                $.ajax({
                    url: "{{route('admin.uploadImageBase64')}}",
                    type: "POST",
                    data: {
                        "_token": CSRF_TOKEN,
                        "file_name": $('.wrap-thumbnail #choose-image')[0].files[0].name,
                        "image": img,
                    },
                    success: function (data) {
                        html = "<img style='width: 200px' src='" + data.url + "' alt='' />";
                        $('.wrap-thumbnail #input_path').val(data.pathTmpFile);
                        $('.wrap-thumbnail #preview-crop-image').html(html);
                        $('.wrap-thumbnail .close-img-preview').removeClass('hide');
                        $('#modal-crop-image').modal('hide');
                    }
                });
            });
        });
    </script>
@endpush