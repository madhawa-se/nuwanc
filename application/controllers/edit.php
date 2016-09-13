<?php

class Edit extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    //put your code here
    public function index() {
        $this->load->model("content_model");
        $this->content_model->getContent();
        $this->content_model->getContact();
        $this->load->view("edit.php");
    }

    function validateGenaral() {

        $genaralTitle = $this->input->post('genaral_title');
        $genaralTopDiscription = $this->input->post('genaral_top-discription');
        $genaralActionText = $this->input->post('genaral_action-text');
        $genaralLatestWorkDiscription = $this->input->post('genaral_latest-work-discription');

        // $this->load->library('Error_block');

        $genaralTitle_success = $this->form_validation->required($genaralTitle);
        $genaralTopDiscription_success = $this->form_validation->required($genaralTopDiscription);
        $$genaralActionText_success = $this->form_validation->required($genaralActionText);
        $genaralLatestWorkDiscription_success = $this->form_validation->required($genaralLatestWorkDiscription);

        $this->load->database();
        $data = array('user_id' => $user->user_id, 'article-title' => $articleName, 'article-content' => $articleContent, 'article-pic' => $articlePic);
        $this->load->model("article_model");
        $state = $this->article_model->insertArticle($data);
    }

}
