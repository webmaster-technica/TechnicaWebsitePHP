<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Praesidium extends CI_Controller {
    
	public function index()
	{
            $data['pageTitle'] = "Het praesidium van 2020-2021";
            $data['picture'] = "praesidium2.jpg";
            
            $this->load->view('templates/header', $data);
            $this->load->view('praesidium');
            $this->load->view('templates/footer');
	}
}