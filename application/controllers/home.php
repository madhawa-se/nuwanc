<?php

class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    //put your code here
    public function index() {
        $this->load->model('content_model');
        $content["genaral"]=$this->content_model->getContent();
        $content["contact"]=$this->content_model->getContact();
        $content["social"]=$this->content_model->getSocial();
        $this->load->view("home.php",$content);
    }

}
