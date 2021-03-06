//****************************
/* Datatable*/
//****************************
var optionDataTable = {
    pageLength: 20,
    lengthMenu: [[10, 20, 50], [10, 20, 50]],
    order: [
        [1, 'desc']
    ],
    responsive: true,
    processing: true,
    serverSide: true,
    searching: true,
    fnDrawCallback: function(oSettings) {
        let pagination = $('#' + oSettings.sTableId).closest('.dataTables_wrapper').find('.dataTables_paginate');
        if(oSettings._iDisplayLength >= oSettings._iRecordsDisplay) {
            pagination.hide();
        } else {
            pagination.show();
        }
    }
};