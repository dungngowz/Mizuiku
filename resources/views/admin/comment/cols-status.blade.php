@if ($item->status)
    {{trans('admin.show')}}
@else
    {{trans('admin.hide')}}
@endif