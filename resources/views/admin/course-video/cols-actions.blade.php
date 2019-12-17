<a href="{{url('admin/course-video/' . $item->id . '/edit/?keyword=' . $item->keyword)}}">
    <button type="button" class="btn btn-info">{{trans('admin.edit')}}</button>
</a>
<button type="button" data-id="{{$item->id}}" data-url="{{url('admin/course-video')}}" class="btn-delete btn btn-danger">{{trans('admin.delete')}}</button>