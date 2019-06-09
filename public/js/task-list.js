$(document).ready(function() {
    $('#task_list').DataTable( {

        "aLengthMenu": [[3, 50, 100, -1], [3, 50, 100, "All"]],
        "pageLength": 3,
        "stateSave":   true,
        "columnDefs": [ {
        	"targets": [0, 3, 4, 6],
        	"orderable": false
        } ],
    } );
} );