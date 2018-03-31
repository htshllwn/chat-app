<?php
   
   class Chat extends CI_Controller{

   	public function index(){
      $data['title']='Chat';
      $data['styles'] = array('chat');
      $data['header']= false;
      $data['token'] = $this->db_model->get_token();
      //echo SERVER_URL;
      $this->load->database();
      $this->load->view('templates/header',$data);	 
      $this->load->view('chat/chat',$data);	 
     
   	}
  

   }