<?php
class MainController extends CI_Controller{

        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->view('templates/header');
    }


    public function view()
    {
        $page = "login";

        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
         
        $this->load->view('pages/'.$page);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('pages/create');
        $this->load->view('templates/footer');
        
    }

    
    public function register()
    {
        $this->Profile_model->createUser();
        $this->load->view('templates/footer');
        redirect("MainController/view");
    }

    public function login()
    {
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $row = $this->Profile_model->checkUser($user); 
        if ($user == NULL || $pass == NULL) {
            redirect('MainController/view');
        }
        $user1 = $row['user'];
        $pass1 = $row['pass'];
        if ($user == $user1 && $pass == $pass1){
            redirect('MainController/home');
        }else{
            redirect('MainController/view');
        }

    }

    public function home(){
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    // public function login()
    // {
    //     $this->Profile_model->checkUser();

    //     $this->load->view('templates/footer');
    //     // redirect("MainController/view");
    // }

}