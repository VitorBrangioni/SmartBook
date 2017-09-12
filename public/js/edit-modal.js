$(document).on("click", ".edit-title", function () {
    var title = $(this).data('title');
    var text = $(this).data('text');
    var titleId = $(this).data('id');
    var nv = $(this).data('nv');

    $(".modal #titleId").val(titleId);
    $(".modal #nv").val(nv);
    $(".modal-body #title").val(title);
    $(".modal-body #text").val(text);
});