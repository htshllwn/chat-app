
$(document).ready(function(){
    var SERVER_URL = $('#SERVER_URL').val();
    console.log(SERVER_URL);
    var base_url =$('#BASE_URL').val();
    console.log(base_url);
    var token;
  
        $(".dropdown-button").dropdown();
    // Initialize collapse button
    $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();

   $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) {}, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
    }
  );

  $("#loginform").submit(function(e){
      e.preventDefault();
      var user = $('#icon_prefix').val();
      var pass = $('#icon_telephone').val();
      
      $.post(SERVER_URL+'api/login',{
          username:user,
          password:pass
        },function(data,status){
        console.log("Data: " + data + "\nStatus: " + status);
        console.log(data);
        token =data.token;
        console.log(token);
        
      })
        .done(function(){
            console.log('request completed');

            //Saveing Token in Local DB
            
            $.post(base_url+'api/saveToken',{
               token : token
                },function(data,status){
                    console.log("secondData: " + data + "\nStatus: " + status);
                    console.log(data);
                });

        })
        .fail(function(){
            console.log('request failed');
        })
        ;

    });
    
});