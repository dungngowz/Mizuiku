<div class="modal" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">{{trans('admin.confirm_deletion')}}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
    
            <!-- Modal body -->
            <div class="modal-body">
                {{trans('admin.do_you_really_want_to_delete_this_item')}}
            </div>
    
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">{{trans('admin.cancel')}}</button>
                <button type="button" class="btn btn-submit-delete btn-danger">{{trans('admin.submit')}}</button>
            </div>
            
        </div>
    </div>
</div>