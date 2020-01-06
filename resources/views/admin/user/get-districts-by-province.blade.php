<label>{{trans('admin.district')}}</label>
<select name="district_id" class="select2 form-control custom-select">
    <option value=''>----</option>
    @foreach ($districts as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>    
    @endforeach
</select>
@if($errors->has('district_id'))
    <span class="error-msg">{{$errors->first('district_id')}}</span>
@endif