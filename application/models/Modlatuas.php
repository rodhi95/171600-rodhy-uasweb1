<?php
class Modlatuas extends CI_Model {
    public function savedata($firstname,$lastname,$gender,$birth,$category,$membership){
    $data = array(
        'firstname'=>$firstname,
        'lastname'=>$lastname,
        'gender'=>$gender,
        'birth'=>$birth,
        'category'=>$category,
        'membership'=>$membership
      );
        

         $this->db->insert('person',$data);
        
      }

    public function tampildata(){
      return $this->db->get('person');
      
    }

      public function select_data(){
        return $this->db->get('person');
    }


public function delete_data($birth){
        $this->db->where('birth', $birth);
        return $this->db->delete('person');
    }

    }
