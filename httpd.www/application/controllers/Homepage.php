<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
    
	public function index()
	{
            $data['pageTitle'] = "De faculteitsvereniging in Antwerpen";
            $data['isFrontpage'] = true;
            
            $this->load->view('templates/header', $data);
            $this->load->view('homepage');
            $this->load->view('templates/footer');
	}
}
