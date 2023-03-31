$(document).ready(function () {
    $('#datatable').DataTable({
        language:{
            search:"Buscar:"
        },
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
});

