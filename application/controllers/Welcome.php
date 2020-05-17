<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{


    public function index()
    {
        $this->load->view('welcome_message');

    }
 public function hey(){
        echo "Kaise ho?";

 }
    public function shanu()
    {
        echo "shanu is a damn great man";
    }
}
