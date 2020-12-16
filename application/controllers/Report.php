<?php

class Report extends CI_Controller {

	public function index()
	{
		// $data['report'] = $this->db->query("SELECT * FROM list");
		$data['report'] = $this->db->query("SELECT pin, mac, ip, 'Ordered by', 'mac pro', 'iphone 12', (mac+ip) AS total FROM list");
        $this->load->view('report', $data);
	}
}