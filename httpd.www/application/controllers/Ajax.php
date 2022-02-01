<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        // load database
        $this->load->database('default',FALSE,FALSE);
        // load model
        $this->load->model('app_Model', 'model');
    }
    
    public function searchSchacht(){
        $input = $_POST['input'];
        $data['result'] = $this->model->searchSchacht($input);
        $this->load->view('app/ajax',$data);
    }
}