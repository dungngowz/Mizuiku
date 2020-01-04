<a href="{{url('admin/categories/' . $item->id . '/edit/?type=' . $item->type)}}">
    <button type="button" class="btn btn-info">{{trans('admin.edit')}}</button>
</a>
<button type="button" data-id="{{$item->id}}" data-url="{{url('admin/categories')}}" class="btn-delete btn btn-danger">{{trans('admin.delete')}}</button>