<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paytm extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PaytmModel','Paytm');
        $this->load->library('session');
    


        /* set the tempory session data
         *  you can remove if you have login and 
         * signup form in your project
         */

        $this->session->set_userdata('username', 'stint');
        $this->session->set_userdata('logged_in', TRUE);
    }

    public function index()

    {   

        $this->load->view("header");
        $this->load->view("upgrade");
        $this->load->view("footer");
        
    }

    public function pgRedirect() {
    

        if ($this->session->userdata('username') != NULL && $this->session->userdata('logged_in') == TRUE) {
            $this->load->view("PaytmKit/pgRedirect");
        }
    }

    public function pgResponse() {


        if ($this->session->userdata('username') != NULL && $this->session->userdata('logged_in') == TRUE) {
            $data = array(
                "Paytm" => $this->Paytm
            );


            $this->load->view("PaytmKit/pgResponse", $data);
        }
    }

}
