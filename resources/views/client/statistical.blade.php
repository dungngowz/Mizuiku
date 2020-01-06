@extends('layouts.client.default')

@section('title', $title)

@section('content')
    <div id="pageroad">
        <div class="wrp">
            <ul>
                <li><a href="/" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
                <li><a href="{{ route('statistical') }}" title="{{trans('client.statistical')}}">{{trans('client.statistical')}}</a></li>
            </ul>
            <div class="cb"></div>
        </div>
    </div>

    <div id="Analytisc">
        <div class="tit">{{trans('client.student_statistics')}}</div>
        <div class="Filter">
            <form>
                <div class="item">
                    <label>{{trans('client.city')}}</label>
                    <select name="province_id" lang="{{$currentLang}}" class="select2 form-control custom-select">
                        <option value="">----</option>
                        @php
                            $province_id = request()->province_id;
                        @endphp
                        @foreach ($provinces as $item)
                            <option {{($province_id == $item->id) ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>    
                        @endforeach
                    </select>
                </div>

                <div class="item wrap-districts">
                    <label>{{trans('client.district')}}</label>
                    <select name="district_id" class="select2 form-control custom-select">
                        <option value=''>----</option>
                        @php
                            $district_id = request()->district_id;
                        @endphp
                        @foreach ($districts as $item)
                            <option {{($district_id == $item->id) ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>    
                        @endforeach
                    </select>
                </div>

                <div class="item">
                    <label>{{trans('client.work-place')}}</label>
                    <input id="work_place" value="{{request()->work_place}}" name="work_place" type="text" id="ddlSchool" />
                </div>

                <div class="btn">
                    <button class="btn-search-statistical" type="submit">{{trans('client.statistical')}}</button>
                </div>
            </form>
        </div>

        @if ($reports)
            <div class="tit2">{{trans('client.statistical_results')}}: <span id="students"></span> {{trans('client.student')}}, <span id="students_complete"></span> {{trans('client.student_finished')}}</div>
            <div class="groupItems">
                <div class="item head">
                    <div class="col col1">STT</div>
                    <div class="col col2">{{trans('client.city')}}</div>
                    <div class="col col3">{{trans('client.district')}}</div>
                    <div class="col col4">{{trans('client.work-place')}}</div>
                    <div class="col col5">{{trans('client.number_of_participants')}}</div>
                    <div class="col col6">{{trans('client.student_finished')}}</div>
                </div>

                @php
                    $students = 0;
                    $students_complete = 0;
                @endphp
                @foreach ($reports as $k => $item)
                    @php
                        $students += $item->total_participants;
                        $students_complete += $item->complete_courses;
                    @endphp
                    <div class="item">
                        <div class="col col1">{{$k+1}}</div>
                        <div class="col col2">{{$item->province['name_' . $currentLang]}}</div>
                        <div class="col col3">{{$item->district['name_' . $currentLang]}}</div>
                        <div class="col col4">{!! $item->work_place ?? "<span style='color: #EEFBFE'>1</span>" !!}</div>
                        <div class="col col5">{{number_format($item->total_participants)}}</div>
                        <div class="col col6">{{number_format($item->complete_courses)}}</div>
                    </div>
                @endforeach

            </div>
        @else
            <div class="tit2">{{trans('client.no_results')}} ...</div>
        @endif
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('span#students').html('{{number_format($students)}}');
            $('span#students_complete').html('{{number_format($students_complete)}}');
        });
    </script>
@endpush