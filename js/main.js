$(document).ready(function () {
    $('button').click(function () {
        var form = $("form");
        var email = $('input[type="email"]').val();

        $.ajax({
            url: "/main/validate",
            data: form.serialize(),
            //dataType: "json",
            dataType: "xml",
            type: "POST",
            success: function (data) {
                //showErrorJson(data);
                showErrorXML(data);
                console.log(data);
            }
        });
        return false;
    })
})

function showErrorJson(json) {
    $('.has-error').removeClass('has-error');
    $.each(json, function (key, value) {
        var classEr = $('.' + key);
        !value ? classEr.addClass('has-error') : classEr.addClass('has-success');
    });


}


function showErrorXML(data) {
    $('.has-error').removeClass('has-error');
    xmlParse(data,'error');
    xmlParse(data,'success');

}
function xmlParse(data,type)
{
    var list = $(data).find(type);
    $.each(list, function () {
        var classError = $(this).text();
        $('.'+classError).addClass('has-'+type);
    })
}