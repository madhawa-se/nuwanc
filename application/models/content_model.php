<?php

class Content_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getContent() {
        $query = $this->db->get('content');
        $content = $query->result();
        return $content;
    }

    public function getContact() {
        $query = $this->db->get('contact');
        $result = $query->first_row();
        $address1 = $result->address1;
        $address2 = $result->address2;
        $phone1 = $result->phone1;
        $phone2 = $result->phone2;
        $email = $result->email;

        $contact_arr = array("address1" => $address1, "address2" => $address2, "phone1" => $phone1, "phone2" => $phone2, "email" => $email);
        //var_dump($contact_arr);
        return $contact_arr;
    }

    public function getSocial() {
        $query = $this->db->get('social_media');
        $result = $query->result();
        var_dump($result);
        return $result;
    }

}
