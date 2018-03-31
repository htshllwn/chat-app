<?php 
 class Db_model extends CI_Model{
     public function __construct(){
         $this->load->database();
         
     }

     public function saveBuffer($data){
        $this->db->where('title','private_key');
        $query = $this->db->get('private_data');
        $result = $query->result();
        // print_r($result);
        foreach($result as $temp){
            if($temp->title === 'private_key'){
                return false;
            }
        }
         $this->db->insert('private_data',$data);
         return true;         
     }

     //save token 
     
     public function saveToken($data){
         $this->db->where('title','token');
         $query = $this->db->get('private_data');
         $result = $query->result();

         foreach($result as $temp){
             if($temp->title === 'token'){
                $this->db->set('value', $data['value']);
                $this->db->insert('private_data');
                return true;
             }

             
         }
         $this->db->insert('private_data',$data);
        return true;
     } 

     //get token 

     public function get_token(){
         $this->db->where('title','token');
         $query = $this->db->get('private_data');
         $result = $query->result();
         return $result[0]->value;


     }


     public function saveUsername($data){

        $this->db->where('title','username');
        $query = $this->db->get('private_data');
        $result = $query->result();

        foreach($result as $temp){
            if($temp->title === 'username'){
                return false;
            }
        $this->db->insert('private_data',$data);
        return true;
        }
     }
  
 }