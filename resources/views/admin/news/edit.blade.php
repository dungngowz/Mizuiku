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
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <label>
                            Current language
                            @php
                                $currentLang = request()->language ? request()->language : ($record->id ? $record->language : 'vi');
                            @endphp
                            <img src="{{ asset('admin/assets/images/'.$currentLang.'.png') }}" alt=""/>    
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Translations to language
                            <a href="{{$urlTrans}}">
                                <img src="{{ asset('admin/assets/images/'.($currentLang == 'vi' ? 'en' : 'vi').'.png') }}" alt=""/>    
                            </a>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        {{-- Form Edit --}}
        <div class="row">
            <div class="col-12">
                <form action="{{url('admin/news/' . $record->id)}}" method="post">
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
                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.category')}}</label>
                                        <select name="category" class="select2 form-control custom-select">
                                            @php
                                                $category_id = old('category_id', $record->category_id);
                                            @endphp
                                            @foreach ($articleCategories as $item)
                                                <option {{ ($item->id == $category_id) ? 'selected' : '' }}>{{$item->title}}</option>    
                                            @endforeach
                                        </select>
                                        @if($errors->has('category_id'))
                                            <span class="error-msg">{{$errors->first('category_id')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group m-t-20">
                                        <label>{{trans('admin.link')}}</label>
                                        <input type="text" name="url" class="form-control" value="{{old('url', $record->url)}}" placeholder="{{trans('admin.enter_url')}}">
                                        @if($errors->has('url'))
                                            <span class="error-msg">{{$errors->first('url')}}</span>
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
                                
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <div class="form-group m-t-20">
                                        <label>Thumbnail</label>
                                        <input type="number" name="" class="form-control" value="{{old('url', $record->url)}}" placeholder="{{trans('admin.enter_url')}}">
                                        @if($errors->has('url'))
                                            <span class="error-msg">{{$errors->first('url')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group m-t-20">
                                <label>{{trans('admin.content')}}</label>
                                <textarea name="content" class="form-control editor">{!! $record->content !!}</textarea>
                                @if($errors->has('content'))
                                    <span class="error-msg">{{$errors->first('content')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body text-right">
                                <a href="{{url('admin/news/')}}">
                                    <button type="button" class="btn">{{trans('admin.cancel')}}</button>
                                </a>
                                <button type="submit" class="btn btn-primary">{{trans('admin.submit')}}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @include('admin.commons.editor-config')
@endpush