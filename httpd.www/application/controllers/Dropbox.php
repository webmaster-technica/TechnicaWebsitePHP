<?php
class Dropbox extends CI_Controller {
    
	public function index()
	{
            $data['pageTitle'] = "De dropbox van Technica";
            $data['picture'] = "dropbox.jpg";
            
            $this->load->view('templates/header', $data);
            $this->load->view('dropbox');
            $this->load->view('templates/footer');
	}
}
?>