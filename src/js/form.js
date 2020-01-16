$(document).ready(function () {
    $(document).on('click', ".open-phone", function (e) {
        e.preventDefault();
        alert('sdfdsf');
        $(this).addClass('d-none');
        $(this).next().removeClass('d-none');
    });
});
