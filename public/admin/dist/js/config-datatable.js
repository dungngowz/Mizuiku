//****************************
/* Datatable*/
//****************************
var optionDataTable = {
    pageLength: 10,
    lengthMenu: [[10, 20, 50], [10, 20, 50]],
    order: [
        [0, 'desc']
    ],
    responsive: true,
    processing: true,
    serverSide: true,
    searching: false,
    fnDrawCallback: function(oSettings) {
        let pagination = $('#' + oSettings.sTableId).closest('.dataTables_wrapper').find('.dataTables_paginate');
        if(oSettings._iDisplayLength >= oSettings._iRecordsDisplay) {
            pagination.hide();
        } else {
            pagination.show();
        }
    }
};