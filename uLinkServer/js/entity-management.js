$(document).ready(() => {
    $('#js-all').click(() => {
        $("#js-search").attr('name', "all");
    });
    $('#js-companies').click(() => {
        $("#js-search").attr('name', "company");
    });
    $('#js-tutors').click(() => {
        $("#js-search").attr('name', "pilot");
    });
    $('#js-delegates').click(() => {
        $("#js-search").attr('name', "delegate");
    });
    $('#js-students').click(() => {
        $("#js-search").attr('name', "student");
    });
});
