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
        $result = $this->db->get('user_data');

        $db_password = $result->row(2)->password;
        if (password_verify($password, $db_password)) {
            return $result->row(0)->id;   //select single row in db
        } else {
            return false;
        }
    }
        //        $this->db->where('id', $user_id);
//        $query = $this->db->query("select * from user_data");
        //        return $query->num_fields(); this will give number of columns
        //        $query = $this->db->get('user_data');
//        return $query->num_rows();


//    public function register_users($data)
//    {
//        $this->db->insert('user_data', $data);
//    }


    public function create_user()

    {
        $option = ['$cost' => 12];
        $encrypted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $option);
        $data = array(
            'user' => $this->input->post('username'),
            'password' => $encrypted_pass,
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
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


