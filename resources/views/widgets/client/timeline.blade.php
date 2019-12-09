<div id="lichtrinh">
    <div class="top bot">
        <div class="wrp">

            <div class='tieude'>
                <a href="{{url('lich-trinh')}}" title='{{ __('client.program-timeline') }}' class='name'>{{ __('client.program-timeline') }}</a>
            </div>
            <div class='cont'></div>
            <div class='group'>
                @if ($timeline)
                    @foreach ($timeline as $item)
                        <div class='item'>
                            <a class='date' href='{{$item->url_detail}}' title='{{ $item->title }}'>
                                <div class='text'>
                                    <span class='fs12'>{{$item->month}}</span>
                                </div>
                            </a>

                            <a href='{{$item->url_detail}}' title='{{$item->title}}' class='name'>{{ $item->title }}</a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>