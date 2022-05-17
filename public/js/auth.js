var auth = {
    register(){
        $.ajax({
            type: "POST",
            url: "/api/user/register",
            data: {
                'email':$('#email').val(),
                'password':$('#password').val()
            }, 
            dataType:"json", 
            success : function(data){
                Swal.fire({ 
                    icon: 'success',
                    title: '<h5 style="color:black">'+data.message+'</h5>',  
                    background: 'white',
                }).then(function() {
                    window.location = "/";
                });
            },
            error: function(data) {     
                var json = data.responseJSON.errors;
                var $text ="";
                $.map( json, function( n, i ) {
                  $text += n +="<br>";
                });
                Swal.fire({ 
                    icon: 'error',
                    title: '<h5 style="color:black">'+data.responseJSON.message+'</h5>', 
                    html: $text,
                    background: 'white',
                });
            },  
        })
    },
    login(){
        $.ajax({
            type: "POST",
            url: "/api/user/login",
            data: {
                'email':$('#email').val(),
                'password':$('#password').val()
            },
            dataType:"json", 
            success : function(data){
                Swal.fire({ 
                    icon: 'success',
                    title: '<h5 style="color:black">'+data.message+'</h5>',  
                    background: 'white',
                }).then(function() { 
                    window.location.href="/session?email="+$('#email').val()+"&password="+$('#password').val();  
                });  
            },
            error: function(data) {    
                var json = data.responseJSON.errors;
                var $text ="";
                $.map( json, function( n, i ) {
                  $text += n +="<br>";
                }); 
                message = data.message ? data.message :'Erro de requisição';
                Swal.fire({ 
                    icon: 'error',
                    title: '<h5 style="color:black">'+ message +'</h5>', 
                    html: $text,
                    background: 'white',
                });
            },  
        })
    }
}

