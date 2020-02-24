<a href="{{url('admin/partners/' . $item->id . '/edit')}}">
    <button type="button" class="btn btn-info">{{trans('admin.edit')}}</button>
</a>
<button type="button" data-id="{{$item->id}}" data-url="{{url('admin/partners')}}" class="btn-delete btn btn-danger">{{trans('admin.delete')}}</button>