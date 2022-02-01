<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobportaal extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        // load database
        $this->load->database('default',FALSE,FALSE);
        // load model
        $this->load->model('model');
    }

    public function index()
    {
        $data['pageTitle'] = "Werken bij een van onze partners? bekijk het Jobportaal";
        $data['picture'] = "";
        
        $data_vacature['filters'] = $this->model->getFilters();
        $vars = [];
       
        foreach(array('study', 'company','location') as $key) {
            if (!empty($_GET[$key]) && isset($_GET[$key])){
                $vars[$key] = $_GET[$key];
            }
        }
        $data_vacature['vacancy'] = $this->model->getVacancys($vars);
        
        $this->load->view('templates/header', $data);
        $this->load->view('jobportaal', $data_vacature);
        $this->load->view('templates/footer');  
    }

    public function vacature($slug)
    {
        $data['pageTitle'] = $slug;
        $data['picture'] = "";
        //FIELDS
        $vacature = $this->model->getVacatureBySlug($slug);
       
        $company_id = $vacature->company_id;
        $data_vacature['vacancy'] = $vacature;
        $data_vacature['company'] = $this->model->getCompanyById($company_id);
        
        $this->load->view('templates/header', $data);
         if (empty($vacature->id)) {
             redirect('/jobportaal');
        } else {
            $this->load->view('vacature', $data_vacature);
        }
        $this->load->view('templates/footer');
    }
}