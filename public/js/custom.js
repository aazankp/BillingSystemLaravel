$(document).ready(function(){
    var table = $('#view_table').DataTable( {
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
    } );
 
    var buttonsContainer = table.buttons().container();
    buttonsContainer.appendTo('#view_table_wrapper .col-md-6:eq(0)');
    buttonsContainer.css('margin-top', '0.8rem');

    // $(document).on("click", ".editAccounts", function(){
    //     var Acc_id = $(this).val();
    //     var upd_url = $("updAccount").attr("action");
    //     $.ajax({
    //         url: upd_url,
    //         type: "POST",
    //         data: { Acc_id:Acc_id },
    //         success: function (response) {
    //             window.location.href = upd_url;
    //         }, error: function(error){
    //             console.error('Error:', error);
    //         }
    //     });
    // });

});
