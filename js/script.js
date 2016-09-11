$(document).ready(function(){
    
    $('#form').bind('submit',function(e){
        e.preventDefault();
        
        var data = $(this).serialize();
        console.log(data);
        
        $.ajax({
            type:'POST',
            url:'php/login.php',
            data:data,
            dataType:'json',
            success:function(json){
                if (json.status === "okay"){
                    $('.invalido').css("background-color","rgba(135,211,124,.4)");
                    $('.invalido').css("color","green");
                    $('.invalido').text("Logado com sucesso");
                } else {
                    $('.invalido').css("background-color","rgba(236,100,75,.4)");
                    $('.invalido').css("color","red");
                    $('.invalido').text("Usuário ou senha invalidos");
                }
            },
            error:function(){
                
            }
        });
    });
});


