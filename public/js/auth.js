var auth = {
    register(){
        $.ajax({
            type: "POST",
            url: "/api/user/register",
            data: $("form").serialize(),
            contentType: "application/json",
            dataType:"json",
            Accept: 'application/json',
            success : function(data){
                console.log(data)
            },
            error: function(data) {    
                console.log(data)
            }, 
            // Swal.fire(
                //     'Erro de requisição',
                //     'You clicked the button!',
                //     'error'
                // )
        })
    },
    login(){
        return "login";
    }
}

