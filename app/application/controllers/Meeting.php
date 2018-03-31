<?php
   
   class Meeting extends CI_Controller{

   	public function index($room){
        $data['room'] = $room;
      $data['title']='Meeting';
      $data['styles'] = array('meeting');
      $data['header']= false;
      $data['token'] = $this->db_model->get_token();
      //echo SERVER_URL;
      $this->load->database();
      $this->load->view('templates/header',$data);	 
      $this->load->view('meeting/meeting',$data);	 
     
   	}
  

   }