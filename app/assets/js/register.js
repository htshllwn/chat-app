$(document).ready(function(){
    var SERVER_URL = $('#SERVER_URL').val();
    console.log(SERVER_URL);  
    var base_url =$('#BASE_URL').val();
    console.log(base_url);
    
    $('#registerForm').submit(function(e){
        e.preventDefault();
        var username = $('#username').val();
        var email = $('#email').val();
        var password1 = $('#password1').val();
        var password2 = $('#password2').val();
        if(password1=== password2){
            console.log(username,email,password1,password2);
            var buffer;
            $.post(SERVER_URL+'api/register',{
                username:username,
                email:email,
                password:password1
            },function(data,status){
                console.log("Data: " + data + "\nStatus: " + status);
                console.log(data);
                buffer = data.secret;
              })
                .done(function(){
                    console.log('request completed');
                    console.log(buffer);
                   
                   
                    // Saving Buffer in Local DB
                   
                    $.post(base_url+'api/saveBuffer',{
                    buffer : buffer
                    },function(data,status){
                        console.log("Data: " + data + "\nStatus: " + status);
                        console.log(data);
                    });


                })
                .fail(function(){
                    console.log('request failed');
                })
                ;
        }
        else{
            alert('Passwords do not match');
        }
    });

});