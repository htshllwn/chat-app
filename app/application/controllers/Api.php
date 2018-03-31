<?php
   
   class Api extends CI_Controller{

   	public function saveBuffer(){
        $buffer=$this->input->post('buffer');
        $serializedBuffer = serialize($buffer);
        $data = array(
            'title' => 'private_key',
            'value' => $serializedBuffer
        );

        $dataSaved = $this->db_model->saveBuffer($data);
        if($dataSaved){
            $output = ['saved'=>true];

        }else{
            $output = ['saved'=>false];

        }

         header('Content-type:application/json');
         echo json_encode($output);

        //print_r(unserialize($serializedBuffer));
        
       }
       
       public function saveToken(){
        // $Username = $this->post('username');
        $token=$this->input->post('token');
        $dataToken= array(
            'title' => 'token',
            'value' => $token
        );
        // $dataUsername = array(
        //     'title' => 'username',
        //     'value' => $Username
        // );
        //  $dataSavedUser = $this->db_model->saveUsername($dataUsername);           
         $dataSaved = $this->db_model->saveToken($dataToken);
       
         print_r('token saved '.$dataSaved);
        
        
        //print_r($.' is the username given');

        // if($dataSaved){
        //     $output = ['saved'=>true];

        // }else{
        //     $output = ['saved'=>false];

        // }

        //  header('Content-type:application/json');
        //  echo json_encode($output);

        // print_r(unserialize($serializedBuffer));
        
       }
       
   }