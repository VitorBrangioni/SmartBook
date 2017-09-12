$(document).on("click", ".add-title", function () {

    $(".modal #title").val("");
    $(".modal #text").val("");

    var nv = $(this).data('nv');
    var idNv1 = $(this).data('idnv1');
    var idNv2 = $(this).data('idnv2');
    var idNv3 = $(this).data('idnv3');


    $(".modal #idNv1").val(idNv1);
    $(".modal #idNv2").val(idNv2);
    $(".modal #idNv3").val(idNv3);
    $(".modal #nv").val(nv);

    //document.formModal.action += "/store" + $(this).data('nv');
    // As pointed out in comments, 
    // it is superfluous to have to manually call the modal.
    // $('#addBookDialog').modal('show');

});