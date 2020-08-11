<?php

class Task_model extends CI_Model
{
    public function get_task($task_id)
    {
        $this->db->where('id', $task_id);
      $query=  $this->db->get('tasks');
      return $query->row();
    }


    public function create_task($data){
        $insert_data = $this->db->insert('tasks', $data);
        return $insert_data;
    }



    public function get_task_project_id($task_id){
        $this->db->where(['id'=> $task_id]);
       $query= $this->db->update('tasks');
        return $query->row();
    }



//    public function update_task($task_id,$data){
//        $this->db->where(['id'=> $task_id]);
//        $this->db->update('tasks', $data);
//        return true;
//    }
//
//    public function get_task_info($task_id){
//
//        $this->db->where('id', $task_id);
//        $get_data = $this->db->get('tasks');
//        return $get_data->row();
//
//    }
//


}


?>
