<?php

class User_model extends CI_Model
{

    public function get_users($user_id, $username, $password)
    {
        $this->db->where([

            'id' => $user_id, 'user' => $username, 'password' => $password
        ]);
        $query = $this->db->get('user_data');
        return $query->result();
    }

    public function login_users($username, $password)
    {
        $this->db->where('user', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('user_data');
        if ($result->num_rows() == 1) {
            return $result->row(0)->id;   //select single row in db
        } else {
            return false;
        }


        //        $this->db->where('id', $user_id);
//        $query = $this->db->query("select * from user_data");
        //        return $query->num_fields(); this will give number of columns
        //        $query = $this->db->get('user_data');
//        return $query->num_rows();
    }

//    public function register_users($data)
//    {
//        $this->db->insert('user_data', $data);
//    }

    public function create_users($data)
    {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email')


        );

        $insert_data = $this->db->insert('user_data', $data);
        return $insert_data;
    }


    public function update_user($data, $id)
    {
        $this->db->where(['id' => $id]);
        $this->db->update('user_data', $data);
    }


    public function update_id($data, $id)
    {
        $this->db->where(['id' => $id]);
        $this->db->update('user_data', $data);
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


