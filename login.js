$(document).ready(function(){
    $("button").click(function(){
        login();
    });
});

function login(){

    var data = {
        "user": $("#user").val(),
        "password": $("#password").val(),
    };

    $.ajax({
        'url': '/high_school/index.php/core/do_login',
        'method': 'POST',
        'data': data,
        'dataType': 'json',
        success: function(data){
            alert(data.message);
            if(data.message != 'Error de Inicio de sesión.'){
                window.location = '/high_school/'
            }
        },
        error: function(err){
            console.log(err);
        }
    });
}