<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->output->set_header('Access-Control-Allow-Origin: *');
        // load database
        $this->load->database('default',FALSE,FALSE);
        // load model
        $this->load->model('app_Model', 'model');
        session_start();
    }
    
    public function index()
    {
        $data['error'] = "";
        
        $data['isLogin'] = true;
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $user = $this->model->getPraesidium($username, $password);
            if (!is_null($user)){
                
                $_SESSION['user'] = [$user->id,$user->naam,$user->godmode];
                //$_SESSION['user'] 
                redirect(base_url().'app/home');
            } else {
                $data['error'] = "Gebruikersnaam of wachtwoord is onjuist";
            }
        }
        if (empty($_SESSION['user'])){
            $this->load->view('templates/header_app', $data);
            $this->load->view('app/login');
            $this->load->view('templates/footer_app');
        }else{
            redirect(base_url().'app/home');
        }
        
        
    }
    
    public function home(){
        $data['isLogin'] = false;
        $data['schachten'] = $this->model->getSchachten();
        $this->load->view('templates/header_app', $data);
        $this->load->view('app/home');
        $this->load->view('templates/footer_app');
    }


    public function schacht(){
        $data['isLogin'] = false;
        $id = $_GET['id'];
        $data['schacht'] = $this->model->getSchacht($id);
        $data['dijkels'] = $this->model->getSchachtDijkels($id);
        
        if (empty($data['schacht'])){
            redirect(base_url().'app/home');
        }
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->model->addDijkel($_POST['reason'],$_POST['schacht_id'], $_POST['praesidium_id']);
            redirect(base_url().'app/schacht?id='.$_POST['schacht_id']);
        }
        
        $this->load->view('templates/header_app', $data);
        $this->load->view('app/schacht');
        $this->load->view('templates/footer_app');
    }
    public function dijkel(){
        $data['isLogin'] = false;
        $id = $_GET['id'];
        $data['dijkel'] = $this->model->getDijkel($id);
        
        if (empty($data['dijkel'])){
            redirect(base_url().'app/home');
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $this->model->deleteDijkel($_POST['id']);
            redirect(base_url().'app/schacht?id='.$_POST['schachten_id']);
        }
        $this->load->view('templates/header_app', $data);
        $this->load->view('app/dijkel');
        $this->load->view('templates/footer_app');
    }
    
    public function logout() {
        session_unset($_SESSION);
        session_destroy();
        redirect(base_url().'app');
    }
}
