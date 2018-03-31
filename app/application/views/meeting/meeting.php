<input type="hidden" id="token" value="<?php echo $token; ?>" >
<input type="hidden" name="" id="room" value="<?php echo $room; ?>">

<div class="container-1 ">

<div class="row">
  <div class="col l8 m8">
     

    <div class="row">
        <div class="col l12 m12 desktop">

           
                  <div class="card card-2 blue-grey darken-1">
                    <div id="presenterDiv" class="card-content white-text">
                      <span class="card-title"><h4 id="presenterName">Presenter</h4></span>
                      <!-- <p class="block-presenter">
                         I am a very simple card. I am good at containing small bits of information.
                         I am convenient because I require little markup to use effectively.
                    </p> -->
                    </div>
                   </div>  
     </div>
     <div class="row bg-col-1">
        <form id="presenterMessageForm" action="" method="post">
          <div class="row">
            <div class="col s10 m11 l11 a">
              <input id="presenterMessage" type="text" name="message" placeholder="Address"> 
            </div>
            <div class="col s1 m1 l1 pos">
              <button type="submit" class="btn btn-floating btn-large cyan" href="#"><i class="material-icons pk">send</i></button>
            </div>
           </div>
        </form>
   </div>
          

        </div>



        <div class="col l12 m12 messege">
            <div class="card card-1 blue-grey darken-4">
                <div id="viewersDiv" class="card-content white-text">
                  <span class="card-title bold"></span>
                  <!-- <span><i class="usernm">username :</i>
                     I am a very simple card. I am good at containing small bits of information.
                     I am convenient because I require little markup to use effectively.
                  </span><hr> -->
                  

                </div>
               </div> 
        </div>

        <div class="row">
          <div class="col l12 m12 comment">
             
            
                    <!-- <div class="row">
                    <form action="">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">textsms</i>
                        <input type="text" id="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input">type plz</label>
                      </div>

                      <button class="waves-effect waves-light btn">Submit</button>
                    </form>
                    </div> -->

                    <div class="row bg-col-1">
                        <form id="viewersMessageForm" action="" method="post">
                          <div class="row">
                            <div class="col s10 m11 l11 a">
                              <input id="viewersMessage" type="text" name="message" placeholder="write message"> 
                            </div>
                            <div class="col s1 m1 l1 pos">
                              <button type="submit" class="btn btn-floating btn-large cyan"><i class="material-icons pk">send</i></button>
                            </div>
                           </div>
                        </form>
                   </div>
                

          </div>
       </div>    
        <!-- close of inner of first div -->
  </div>
        <!--close first div  -->








  <div class="col l4 m4">
   
    <div class="presenter-list">
      <div  class="collection">

          <li class="collection-item grey">PRESENTER</li>

            <li id="presenter" class="collection-item">DummyText</li>

         </div>
       </div>  
 



 <div class="viewer-list">
      <div id="viewers" class="collection">

        <li class="collection-item grey">VIEWER</li>

          <!-- <li class="collection-item">Alan</li> -->
       
       </div>
  </div>

      <div class="block-1 center">
   <br>
          <a class="waves-effect waves-light btn"><i class="material-icons">menu</i>desktop</a> &nbsp &nbsp
          <a class="waves-effect waves-light btn"><i class="material-icons">cloud</i>Change</a>
      </div>
  </div>

</div>
<!-- main row -->
</div>    
<!-- close container-1 -->

<script src="<?php echo base_url(); ?>assets/js/meeting.js"></script>