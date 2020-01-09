<a href="{{url('admin/quiz/' . $item->id . '/edit/')}}">
    <button type="button" class="btn btn-info">{{trans('admin.edit')}}</button>
</a>
<button type="button" data-id="{{$item->id}}" data-url="{{url('admin/quiz')}}" class="btn-delete btn btn-danger">{{trans('admin.delete')}}</button>