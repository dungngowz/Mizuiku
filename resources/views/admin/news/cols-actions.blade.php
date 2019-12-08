<a href="{{url('admin/news/' . $item->id . '/edit')}}">
    <button type="button" class="btn btn-info">{{trans('admin.edit')}}</button>
</a>
<button type="button" data-id="{{$item->id}}" data-url="{{url('admin/news')}}" class="btn-delete btn btn-danger">{{trans('admin.delete')}}</button>
