$(document).ready(function(){

$('#right-chat').hide();

var room = '';
var base_url = $('#BASE_URL').val();
var server_url = $('#SERVER_URL').val();
var token = $('#token').val();
var $messageForm = $('#messageForm');
var $newGroupForm = $('#newGroupForm');
var sender = 'amarnath';
console.log(base_url,server_url,token);
var socket = io.connect(server_url,{
    // 'query':'token='+token + ', username = ' + 'default_usr'

    'query':{
        token: token,
        username: 'user2'
    }
});
socket.on('connect',function(){
    console.log('connected');
 
});

socket.on('connectedRooms',function(data){

    console.log(data);

    for(var i=0;i<data.connectedRooms.length;i++){

        var tempHtml= `   <li class="collection-item avatar hov1">
    <img src="assets/img/img1.jpg" alt="" class="circle">
    <span class="title">${data.connectedRooms[i]}</span>
    <p>First Line</p>
    <!-- <a href="#!" class="secondary-content"><i class="material-icons hidden">keyboard_arrow_down</i></a> -->
</li>`;
        var tempDiv = `<div id='chat-${data.connectedRooms[i]}' class="scrol scrol-chat bg-col"></div>`;

        var tempGroupUsers = `<input type="checkbox" name="groupUsersCB" value="${data.connectedRooms[i]}" id="group${data.connectedRooms[i]}"><label for="group${data.connectedRooms[i]}">${data.connectedRooms[i]}</label><br>`;

        // $('#newGroupUsers').append(tempGroupUsers);

$('#userfilter').append(tempHtml);
$('#chatArea').append(tempDiv);
$('#chat-'+data.connectedRooms[i]).hide();


}

});

socket.on('allUsers',function(data){

    console.log(data);

    for(var i=0;i<data.allUsers.length;i++){

        var tempHtml= `   <li class="collection-item avatar hov1">
    <img src="assets/img/img1.jpg" alt="" class="circle">
    <span class="title">${data.allUsers[i]}</span>
    <p>First Line</p>
    <!-- <a href="#!" class="secondary-content"><i class="material-icons hidden">keyboard_arrow_down</i></a> -->
</li>`;
        var tempDiv = `<div id='${data.allUsers[i]}' class="scrol scrol-chat bg-col"></div>`;

        var tempGroupUsers = `<input type="checkbox" name="groupUsersCB" value="${data.allUsers[i]}" 
        id="group${data.allUsers[i]}"><label for="group${data.allUsers[i]}">${data.allUsers[i]}</label><br>`;

        $('#newGroupUsers').append(tempGroupUsers);

// $('#userfilter').append(tempHtml);
// $('#chatArea').append(tempDiv);
// $('#'+data.connectedRooms[i]).hide();


}

});

$('#userfilter').on('click','.collection-item',function(e){
    var target = $(this);
    var clickedUser = target.find('.title').text();
    // console.log(target.find('.title').text());
    $('#currentUser').text(clickedUser);
    room = clickedUser;
    $('#chatArea').children().hide();
    $('#chat-'+clickedUser).show();
    $('#right-chat').show();
    var chatArea = $('#chatArea');
    console.log(chatArea.find("#"+clickedUser));   
  })




socket.emit('join',{
    rooms:['testing','testing2']
})

    socket.on('message',function(data){
        console.log(data);

        var messageHTML = `  <!-- 1st user -->
        <div class="container-2">
            <p id="user_id_1">${data.sender}</p>
            <p>${data.message}</p>
            <i class="material-icons time-right">check</i>
            <span class="time-right">11:00</span>
        </div><br>
        `;

        $('#chat-'+data.room).append(messageHTML);


    });

$messageForm.submit(function(e){
    e.preventDefault();
    var message = $('#message').val();
    console.log(message);

    var data = {
        room: room,
        message: message
    };

    console.log('Form Submitted');

    socket.emit('newMessage',data);
    $('#message').val(''); 
});

$newGroupForm.submit(function(e){
    e.preventDefault();
    var data ={};

    var group_name = $('#group_name').val();
    data.group_name = group_name; 
    // console.log(group_name);

    data.users= [];
    $('input[name="groupUsersCB"]:checked').each(function(){
        data.users.push(this.value);
        // console.log(this.value);
    });

    data.description = $('#description').val();

    console.log(data);

    var success = false;

    $.post(server_url+'api/newGroup',data,function(dataServer,status){
        console.log("Data: " + data + "\nStatus: " + status);
        console.log(dataServer);
        if(dataServer.success == true){
            // alert(group_name + ' created');
            success = true;
            // window.location.replace(base_url + 'chat')
        }
        else{
            // alert('Please use a different group name');
            success = false;
        }
      })
        .done(function(){
            console.log('new group request completed');
            // console.log(dataServer);
            if(success == true){
                alert(group_name + ' created');
                window.location.replace(base_url + 'chat')
            }
            else{
                alert('Please use a different group name');
            }
            
        })
        .fail(function(){
            console.log('new group request failed');
            alert(' created');
        })
        ;

    // var data = {
    //     to:"user6",
    //     message: message
    // };

    console.log('Group Form Submitted');

    $('#group_name').val('');
    $('input[name="groupUsersCB"]:checked').prop('checked', false);
    $('#description').val('');

    // socket.emit('newPrivateMessage',data); 
});

 $('#search1').on('keyup',function(){
    var value =$(this).val().toLowerCase();
    
   
    $('#userfilter li').filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
    });
    
 });
 

});