<a href="{{url('admin/categories/' . $item->id . '/edit')}}">
    <button type="button" class="btn btn-info">{{trans('admin.edit')}}</button>
</a>
<button type="button" data-id="{{$item->id}}" class="btn-delete btn btn-danger">{{trans('admin.delete')}}</button>