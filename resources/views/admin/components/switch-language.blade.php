<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <label>
                    {{trans('admin.current_language')}}
                    @php
                        $currentLang = request()->language ? request()->language : ($record->id ? $record->language : 'vi');
                    @endphp
                    <img src="{{ asset('admin/assets/images/'.$currentLang.'.png') }}" alt=""/>    
                </label>
            </div>
            <div class="col-3">
                <label>
                    {{trans('admin.translations_to_language')}}
                    <a href="{{$urlTrans}}">
                        <img src="{{ asset('admin/assets/images/'.($currentLang == 'vi' ? 'en' : 'vi').'.png') }}" alt=""/>    
                    </a>
                </label>
            </div>
        </div>
    </div>
</div>