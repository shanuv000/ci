<?php

class users extends CI_Controller
{


    public function login()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[3]');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'errors' => validation_errors());
        }
        $this->session->set_flashdata($data);
        redirect('home');


//        $username = $this->input->post('username');
//        $password = $this->input->post('password');
//
//        $this->User_model->create_users(['user' => $username, 'password' => $password]);
//


        //        echo $_POST['username'];
//        $this->load->model('user_model');
    }
















//{
//    public function show($user_id)
//    {
////        $this->load->model('user_model');
//        $result =
//
//        $datas['results'] = $this->User_model->get_users($user_id, 'vaibhav');
//        $this->load->view('User_view', $datas);
////        foreach ($result as $object) {
////            echo $object->user . "<br>";
////        }
//    }
//
//    public function insert()
//    {
//        $username = "dinesh";
//        $password = "aryan";
//
//
//        $this->User_model->create_users([
//            'user' => $username,
//            'password' => $password
//        ]);
//
//    }
//
//    public function update()
//    {
//        $id = 8;
//        $username = "Rajiv";
//        $password = "Bhaiya";
//        $this->User_model->update_user([
//            'user' => $username,
//            'password' => $password
//        ], $id);
//    }
//
//
//    public function update_ids()
//    {$ip=0;
//        for($i=3;$i<=6;$i++){
//        $ip++;
//
//            $id = $i;
//        $this->User_model->update_id([
//            'id' => $ip
//            ],$id);
//    }}
//
//
//
//
//
//    public function delete()
//    {
//            $id = 7;
//            $this->User_model->delete_user($id);
//
//    }
//
//
//    public function insert2()
//    {
//        $username = array(
//            "Harry", "Dilip", "Sanjay", "Raghav", "Anil", "Kapil", "Randhir"
//
//        );
//        $password = array(9374892, 8372, 7289, 27393, 829272, 28738292, 839320);
//
//        for ($i = 0; $i < 7; $i++) {
//
//            $this->User_model->create_users([
//                'user' => $username[$i], 'password'[$i]
//
//                //            'user' => $username,
////          'password' => $password
//
//            ]);
//        }
//    }


}


