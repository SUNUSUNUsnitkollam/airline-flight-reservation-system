<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class PaytmModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }


 

    public function pay($username, $tid, $amount, $state) {
        $this->load->database(database2, TRUE);
        $this->legacy_db = $this->load->database(paytm, true);

        $date = new DateTime();
        if ($this->check_txt_id($tid) == 0) {

            $tdate = $this->member_since = $date->format('Y/m/d H:i:s');
            $this->legancy_db->query("INSERT INTO `membership`(`username`, `tr_id`, `amount`, `state`, `tra_date` ) VALUES( '$username', '$tid', '$amount', '$state', '$tdate' )");
            return TRUE;
        }else{
            header("Location:". base_url().'ln');
        }
        $this->legacy_db->close();
    }

    public function check_txt_id($tid) {
         $this->load->database(database2, TRUE);
        $this->legacy_db = $this->load->database(paytm, true);

        $query = $this->legancy_db->query("SELECT COUNT(id) as total FROM membership WHERE tr_id = '$tid'");
        foreach ($query->result_array() as $total) {
            return $total['total'];
            $this->legacy_db->close();
        }
    }

    public function update_membership($username) {
         $this->load->database(database2, TRUE);
        $this->legacy_db = $this->load->database(paytm, true);
        $this->legacy_db->query("UPDATE signup SET membership = '1' WHERE username = '$username'");
        $this->legacy_db->close();
    }

}
