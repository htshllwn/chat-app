<input type="hidden" id="token" value="<?php echo $token; ?>" >


<input type="hidden" value='<?php echo $token; ?>' id='token'>


<!-- popup  -->




<div id="id01" class="modal">
  
  <div class="modal-content">
  <form method="post" class="animate" action="#" id="newGroupForm">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container1 new">

      <label for="uname">Group name</label>
      <input id="group_name" type="text" placeholder="" name="group_name" required>
     <br>
      <div id="newGroupUsers">
          <!-- <input type="checkbox" id="user1"><label for="user1">User 1</label> -->
      </div>
      <br>
      <label for="description">Description</label>
      <textarea id="description" class="materialize-textarea"></textarea>
     
<br>
      <button class="waves-effect waves-light btn" type="submit">Submit</button>
    </div>
    
     
 

   
 
  </form>
      
   </div>

  
</div>


  <!-- main block that contain left and right box-->
 <div class="row">
    
    <!-- item on right of screen -->
    <div class="col s12 m4 l4 scrol-3">

        <ul class="collection collection-changed with-header user-hide">
          <li class="collection-header">
            <div class="text-color">

              <img src="assets/img/img1.jpg" width="45" height="45" alt="" class="circle  image-width">
              <a href="#">USER</a>
              <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="material-icons">add</i></button> -->
              <a href="javascript:void(0)" onclick="document.getElementById('id01').style.display='block'" class="right"  ><i class="material-icons">add</i></a>

            </div>
          </li>


         <li class="collection-item hd">
                <div class="row row-margin-0">
                    <form method="post" class="col s12 hide-1">
                      <div class="row row-margin-0">
                        <div class="input-field col s12">
                          <i  class="material-icons prefix hide-2">search</i>
                          <input id="search1" type="text" class="validate">
                          <label for="icon_prefix">Search for friend</label>
                        </div>
                       
                      </div>
                    </form>
                  </div>
            </li>
            
           <!--  <li class="collection-item avatar" id="toggle">
              <center>Chatting List</center>
              <a href="#!" class="secondary-content"><i class="material-icons hidden">star</i></a>
            </li> -->

 
           <div id='userfilter' class="scrol" id="hd">

           
      
      <hr style="display: none;">

    



    
  
            </div>
         </ul>
      </div>
    
    <!-- rigth side of box -->
    <div id="right-chat" class="col s12 l8 m8 scrol-chat chat-hide">
        <ul class="collection with-header">

           <li class="collection-header pk">
              <div>
                  <!-- name of user whom chatting with -->
                  <a class="back-arrow"><i class="material-icons left margin-right">arrow_back</i></a>
                  <img src="assets/img/img1.jpg" width="45" height="45" alt="" class="circle  image-width button-collapse" data-activates="slide-out">
                  <a id='currentUser' href="#" class="">USER NAME</a>
                  <!-- <a href="" class="right"><i class="material-icons">list</i></a> -->
                  <!-- <a href="#" class="right"><i class="material-icons" id="auto">add</i></a> -->
              
              
                  <a href="#" class="right logout">Logout</a>
              </div>
            </li>
            <div id='chatArea'>
            </div>

        <!-- scroll end -->
              
         
                 <!--text area  -->
             <div id="messageDiv"class="row bg-col-1">
                  <form action="" method="post" id="messageForm">
                    <div class="row">
                      <div class="col s10 m11 l11 a">
                        <input id="message" type="text" name="message" placeholder="write message"> 
                      </div>
                      <div class="col s1 m1 l1 pos"><button type="submit" class="btn btn-floating btn-large cyan"><i class="material-icons pk">send</i></button></div>
                     </div>
                  </form>
             </div>

           </ul>
      </div> <!-- col s8 -->   
    </div>     
 <!-- row-->

 <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

 <script src="<?php echo base_url(); ?>assets/js/chat.js"></script>