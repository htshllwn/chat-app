$(document).ready(function(){

    var room = $('#room').val();
    var base_url = $('#BASE_URL').val();
    var server_url = $('#SERVER_URL').val();
    var token = $('#token').val();
    var $presenterMessageForm = $('#presenterMessageForm');
    var $viewersMessageForm = $('#viewersMessageForm');

    $presenterMessageForm.hide();

    var socket = io.connect(server_url,{
        // 'query':'token='+token + ', username = ' + 'default_usr'
    
        'query':{
            token: token,
            username: 'user2'
        }
    });


    // Socket Connected
    socket.on('connect',function(){
        console.log('connected');
    });


    // Presentor Message Form Submit
    $presenterMessageForm.submit(function(e){
        e.preventDefault();

        var message = $('#presenterMessage').val();
        console.log(message);

        var data = {
            room: room,
            message: message
        };

        console.log('Presenter Form Submitted');

        socket.emit('newPresenterMessage',data);
        $('#presenterMessage').val('');
    });


    // Add Presenter message to UI
    socket.on('presenterMessage', function(data){
        console.log(data);

        var tempPresMessage = `
          <p class="block-presenter">
             ${data.message}
        </p> <br>`;

        $('#presenterDiv').append(tempPresMessage);
    });

    // Reactt to duff user roles
    socket.on('role', function(data){
        if(room == data.room){
            // console.log(data);
            if(data.role == 'admin'){

            }
            if(data.role == 'presenter'){
                $presenterMessageForm.show();
            }
            if(data.role == 'viewer'){
                
            }
        }
    });


    // Update the meeting details in the UI
    socket.on('meeting', function(data){
        if(room == data.room){
            // console.log($('#presenter').text());
            $('#presenter').text(data.presenter);
            $('#presenterName').text(data.presenter);

            for(var i = 0; i < data.viewers.length ; i++){
                var tempViewerHtml = `<li id="${data.room+data.viewers[i]}" class="collection-item">${data.viewers[i]}</li>`;
                $('#viewers').append(tempViewerHtml);
            }
        }
    });


    // Viewer Message form submit
    $viewersMessageForm.submit(function(e){
        e.preventDefault();

        var message = $('#viewersMessage').val();
        console.log(message);

        var data = {
            room: room,
            message: message
        };

        console.log('Viewer Form Submitted');

        socket.emit('newViewerMessage',data);
        $('#viewersMessage').val('');
    });


    // Add Viewer message to UI
    socket.on('viewerMessage', function(data){
        console.log(data);

        var tempViewMessage = `
        <span><i class="usernm">${data.sender} :</i>
        ${data.message}
     </span><hr>`;

        $('#viewersDiv').append(tempViewMessage);
    });





});