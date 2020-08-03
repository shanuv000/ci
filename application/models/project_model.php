<?php
class project_model extends CI_Model{

    public function get_projects(){
      $query=  $this->db->get('projects');
        return $query->result() ;
    }


    public function get_project($id){
        $this->db->where('id', $id);
        $query = $this->db->get('projects');
        return $query->row();
    }

    public function create_project($data){
$insert_data = $this->db->insert('projects',$data);
return $insert_data;
    }
}


?>
