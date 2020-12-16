<?php

class order_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }


    function send_order($mac,$ip,$pin)
    {
        return $this->db->query("INSERT INTO list(mac,ip,pin) VALUES ('$mac','$ip','$pin')");
    }
}
