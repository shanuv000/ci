<?php

class User_model extends CI_Model
{

    public function get_users($user_id, $username)
    {
        $this->db->where([

            'id' => $user_id, 'user' => $username
        ]);
        $query = $this->db->get('user_data');
        return $query->result();


        //        $this->db->where('id', $user_id);
//        $query = $this->db->query("select * from user_data");
        //        return $query->num_fields(); this will give number of columns
        //        $query = $this->db->get('user_data');
//        return $query->num_rows();
    }


    public function create_users($data)
    {
        $this->db->insert('user_data', $data);
    }

    public function update_user($data, $id)
    {
        $this->db->where(['id' => $id]);
        $this->db->update('user_data', $data);
    }


    public function update_id($data,$id)
    {
        $this->db->where(['id' => $id]);
        $this->db->update('user_data',$data);
    }

    public function delete_user($id)
    {
        $this->db->where(['id' => $id]);
        $this->db->delete('user_data');

    }

//$config['hostname'] = "localhost";
//$config['username'] = "root";
//$config['password'] = "";
//$config['database'] = "errand_db";
//$connection = $this->load->database($config);


}


