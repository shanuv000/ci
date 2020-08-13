<?php

class projects extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('no_access', 'Sorry You are not logged in or accessed denied');
            redirect('home/index');
        }
    }

    public function index()
    {
        $data['projects'] = $this->project_model->get_projects();
        $data['main_view'] = "projects/index";
        $this->load->view('layouts/main', $data);
    }

    public function create_projects()
    {
        $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('project_body', 'Project Body', 'trim|required|min_length[3]');

        if ($this->form_validation->run() == FALSE) {
            $data['main_view'] = "projects/create_project_view";
            $this->load->view('layouts/main', $data);

        } else {
            $data = array(
                'project_user_id' => $this->session->userdata('user_id'),
                'project_name' => $this->input->post('project_name'),
                'project_body' => $this->input->post('project_body')

            );
            if ($this->project_model->create_project($data)) {
                $this->session->set_flashdata('project_created', 'Your Project has been Created');
                redirect('projects');
            }


        }
    }


    public function update_projects($project_id)
    {
        $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('project_body', 'Project Body', 'trim|required|min_length[3]');

        if ($this->form_validation->run() == FALSE) {

            $data['project_info'] = $this->project_model->get_project_info($project_id);
            $data['main_view'] = "projects/update_project_view";
            $this->load->view('layouts/main', $data);
        } else {
            $data = array(
                'project_user_id' => $this->session->userdata('user_id'),
                'project_name' => $this->input->post('project_name'),
                'project_body' => $this->input->post('project_body')
            );
            if ($this->project_model->update_project($project_id, $data)) {
                $this->session->set_flashdata('project_updated', 'Your Project has been Updated');
                redirect('projects/index');
            }
        }
    }


    public function delete_projects($project_id)
    {
        $this->project_model->delete_project_and_tasks($project_id);
        $this->project_model->delete_project($project_id);
        $this->session->set_flashdata('project_deleted', 'Your project has been deleted');
        redirect('projects/index');
    }


    public function display($project_id)
    {

        $data['completed_tasks'] = $this->project_model->get_project_task($project_id,true);
        $data['project_data'] = $this->project_model->get_project($project_id);
        $data['main_view'] = "projects/display";
        $this->load->view('layouts/main', $data);
    }


}


?>
