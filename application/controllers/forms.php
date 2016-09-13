<?php

class Forms extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    function index() {
        $this->load->view("forms/form1.html");
    }

    function form1() {
        $this->load->view("forms/form1.html");
    }

    function form2() {
        $this->load->view("forms/form2.html");
    }

    function form3() {
        $this->load->view("forms/form3.html");
    }

    function form4() {
        $this->load->view("forms/form4.html");
    }

    function form5() {
        $this->load->view("forms/form5.html");
    }

}
