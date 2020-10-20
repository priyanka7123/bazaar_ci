<?php
class Work extends CI_Model{
    public function calling($table,$cond=null){
        if($cond==null){
            $data = $this->db->get($table);
        }
        else{
              $data = $this->db->where($cond)->get($table);
        }
          return $data->result();
          
    }


    

    
}


?>