<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }
    function index()
    {
        $this->load->view('login');
    }

    function sent_pin()
    {
        $pin = htmlspecialchars($this->input->post('xpin', TRUE), ENT_QUOTES);
        $this->login_model->sent_pin($pin);
        echo $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"> Welcome <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        $this->session->set_userdata('pin', $pin);
        redirect('order');
    }

    function clear()
    {
        $this->session->unset_userdata('pin');
        redirect('login');
    }
}
