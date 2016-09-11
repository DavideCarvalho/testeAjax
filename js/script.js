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
                if (json.status == "okay"){
                    console.log("Logado com sucesso");
                } else {
                    $('.invalido').text("Usuário ou senha invalidos");
                }
            },
            error:function(){
                
            }
        });
    });
});


