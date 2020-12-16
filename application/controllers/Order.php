<?php
class Order extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('order_model');
    }
    function index()
    {
        $this->load->view('order');
    }

    function send_order()
    {
        $mac = htmlspecialchars($this->input->post('xmac', TRUE), ENT_QUOTES);
        $ip = htmlspecialchars($this->input->post('xip', TRUE), ENT_QUOTES);
        $pin = htmlspecialchars($this->session->userdata('pin', TRUE), ENT_QUOTES);
        $this->order_model->send_order($mac, $ip, $pin);
        echo $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"> Order Success <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('login');
    }
}
