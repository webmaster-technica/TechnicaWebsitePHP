<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overons extends CI_Controller {
    
	public function index()
	{
            $data['pageTitle'] = "Over de faculteitsvereniging Technica";
            $data['picture'] = "technica_met_view.jpg";
            
            $this->load->view('templates/header', $data);
            $this->load->view('overons');
            $this->load->view('templates/footer');
	}
}