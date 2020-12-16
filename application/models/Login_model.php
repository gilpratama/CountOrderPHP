<?php

class login_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }


    function sent_pin($pin)
    {
        return $this->db->query("INSERT INTO pin(pin) VALUES ('$pin')");
    }

    function get_session()
    {
        $sess_data['pin'] = $pin;
		$this->session->set_userdata($sess_data);
    }
}
