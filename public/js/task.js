var task = {
    create(){ 
        $.ajax({
            type: "POST",
            url: "/api/task",
            data: {
                'name':$('#name').val(),
                'description':$('#description').val(),
                'status':$('#status').is(':checked') ? 1:0
            }, 
            dataType:"json", 
            beforeSend: function (xhr) {
                xhr.setRequestHeader ("Authorization", "Bearer "+$('#token').val());
            },
            success : function(data){ 
                $('#taskModel').modal('hide');
                toastr.success(data.message);  
                task.index(); 
                
            },
            error: function(data) {     
                var json = data.responseJSON.errors; 
                var $text ="";
                $.map( json, function( n, i ) { 
                    toastr.error(n); 
                });    
                
            },  
        })
    },
    delete(id){
        $.ajax({
            type: "DELETE",
            url: "/api/task/"+id, 
            dataType:"json", 
            contentType: "application/json; charset=utf-8",
            beforeSend: function (xhr) {
                xhr.setRequestHeader ("Authorization", "Bearer "+$('#token').val());
            }, 
            success : function(data){  
                toastr.success(data.message);  
                task.index();  
                Swal.fire(
                    'Deletado!',
                    'Sua tarefa foi deletada!!',
                    'success'
                )
            },
            error: function(data) { 
            },  
        })
    },
    update(){
        $.ajax({ 
            type: "PUT",
            url: "/api/task/"+$('#id').val(), 
            dataType:"json", 
            data: {
                'name':$('#name').val(),
                'description':$('#description').val(),
                'status':$('#status').is(':checked') ? 1:0
            },  
            beforeSend: function (xhr) {
                xhr.setRequestHeader ("Authorization", "Bearer "+$('#token').val());
            }, 
            success : function(data){ 
                $('#taskModel').modal('hide');
                toastr.success(data.message);  
                task.index();  
            },
            error: function(data) {     
                var json = data.responseJSON.errors; 
                var $text ="";
                $.map( json, function( n, i ) { 
                    toastr.error(n); 
                });     
            },   
        })
    },
    index(){
        $.ajax({
            type: "GET",
            url: "/api/task", 
            dataType:"json", 
            contentType: "application/json; charset=utf-8",
            beforeSend: function (xhr) {
                xhr.setRequestHeader ("Authorization", "Bearer "+$('#token').val());
            }, 
            success : function(data){ 
                var json = data.data.data;
                var body = "";
                $('#tbody-list').empty();
                $.map( json, function( n, i ) { 
                    var status = n.status ? 'checked="" disabled=""' : '';
                    var d = new Date(n.created_at);
                    var date_create = d.getDate() + '/' + (d.getMonth()+1) + '/' + d.getFullYear();
                    body +="<tr>";
                        body +="<td>" +n.id+"</td>";
                        body +='<td class="character35"><input type="checkbox"'+status+' class="input-chk"></td>';
                        body +='<td class="character35">'+n.name+'</td>'
                        body +='<td class="character35">'+n.description+'</td>';
                        body +='<td>'+date_create+'</td>'; 
                        body +='<td><button onclick="update('+n.id+')" type="button" class="btn btn-icon btn-warning"><i class="fa fa-refresh"></i></button></td>'
                        body +='<td><button onclick="del('+n.id+')" type="button" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button></tr>' 
                    body +='</tr>'   
                }); 
                $('#tbody-list').append(body);
            },
            error: function(data) {     
                 
            },  
        })
    },
    show(id){
        $.ajax({
            type: "GET",
            url: "/api/task/"+id, 
            dataType:"json", 
            contentType: "application/json; charset=utf-8",
            beforeSend: function (xhr) {
                xhr.setRequestHeader ("Authorization", "Bearer "+$('#token').val());
            }, 
            success : function(data){ 
                $('#taskModel').modal()
                $('#name').val(data.data.name);
                $('#description').val(data.data.description); 
                $('#id').val(data.data.id); 
                if(data.data.status == 1){  
                    $('#status').attr('checked',true);
                }else{ 
                    $('#status').attr('checked',false);
                }
            },
            error: function(data) {      
            },  
        })
    },
}

