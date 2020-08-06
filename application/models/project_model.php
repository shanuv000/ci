<?php

class project_model extends CI_Model
{

    public function get_projects()
    {
        $query = $this->db->get('projects');
        return $query->result();
    }


    public function get_project($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('projects');
        return $query->row();
    }

    public function create_project($data)
    {
        $insert_data = $this->db->insert('projects', $data);
        return $insert_data;
    }

    public function update_project($id, $data)
    {
        $this->db->where(['id', $id]);
        $this->db->update('projects', $data);
        return true;
    }

    public function get_project_info($project_id)
    {
        $this->db->where('id', $project_id);
        $query = $this->db->get('projects');
        return $query->row();
    }
}


?>
