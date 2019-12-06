<div id="lichtrinh">
    <div class="top bot">
        <div class="wrp">

            <div class='tieude'>
                <a href='https://mizuiku-emyeunuocsach.vn/lich-trinh.htm' title='{{ __('client.program-timeline') }}' class='name'>{{ __('client.program-timeline') }}</a>
            </div>
            <div class='cont'></div>
            <div class='group'>
                @foreach ($timeline as $item)
                    <div class='item'>
                        <a class='date' href='{{ url($item['slug']) }}' title='{{ $item['title'] }}'>
                            <div class='text'>
                                <span class='fs12'>{{ __('client.months.'. strtolower(\App\Models\ProgramTimeline::convertMonth($item['month'])) ) }}</span>
                            </div>
                        </a>

                        <a href='{{ url($item['slug']) }}' title='{{ url($item['slug']) }}' class='name'>{{ $item['title'] }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>