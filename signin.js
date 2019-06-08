
$(document).ready(function(){
    $("button").click(function(){
        registrar();
    });
});

function registrar(){

    var data = {
        "user": $("#user").val(),
        "password": $("#password").val(),
    };

    $.ajax({
        'url': '/high_school/index.php/core/do_signin',
        'method': 'POST',
        'data': data,
        'dataType': 'json',
        success: function(data){
            if(data.result == 'success'){
                alert("Se ha creado el usuario correctamente.");
                window.location = '/high_school/index.php/core/login';
            }else{
                alert("Ocurrio un error al intentar crear el usuario.");
                alert(data.message);
            }
        },
        error: function(err){
            console.log(err);
        }
    });
}