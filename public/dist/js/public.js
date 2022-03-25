$(function () {


  // remove uploaded files 
    $(document).on("click", '.file-uploaded span', function() {
        let el = $(this).parent();
        el.remove();
    })
});
