<?php

class projects extends CI_Controller
{
public function __construct()
{
parent::__construct();
    if(!$this->session->userdata('logged_in')){
        $this->session->set_flashdata('no_access', 'Sorry You are not logged in or accessed denied');
        redirect('home/index');
    }
}

    public function index()
    {
        $data['projects']=$this->project_model->get_projects();
        $data['main_view'] = "projects/index";
        $this->load->view('layouts/main', $data);
    }public function display()
    {
        $data['main_view'] = "projects/display";
        $this->load->view('layouts/main', $data);
    }
}


?>
