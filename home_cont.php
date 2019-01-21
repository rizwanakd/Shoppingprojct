<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class home_cont extends CI_Controller {  
      
public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
           $this->load->library('session');

            if(!$this->session->has_userdata('logged_in') || !$this->session->logged_in){
       // header('Location: '.base_url() . 'login_cont/login');
   redirect(base_url() . 'login_cont/login');
       exit;
      }
      else
      {
        redirect(base_url() . 'login_cont/enter');

      }
 
      }










      function login()
      {
      	$this->load->view("login");
      }

function login_()
{
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('name', 'name', 'required');  
           $this->form_validation->set_rules('password', 'password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $name = $this->input->post('name');  
                $password = $this->input->post('password');  
                 $userrole = $this->input->post('userrole');  
                //model function  
                $this->load->model('login_model');  
                if($this->login_model->admin_login($name, $password,$userrole))  
                {  
                     // $session_data = array(  
                     //      'adname'     =>     $name,
                     //      'userrole'=>$userrole,  
                     // );  
                      $this->session->set_userdata('uid',$session_data); 
                      
                     //$this->check_session();
                     redirect(base_url() . 'home_cont/welcome');  
                 //  }
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(base_url() . 'login_cont/login');  
                }  
           }  
           else  
           {  
                //false  
                $this->login();  
           }  
       }

function welcome()
{
	   if(!$this->session->userdata('uid') )  
          {  

redirect(base_url() . 'home_cont/login');  
          //	$this->load->view("admin_home");
}
$this->load->view("admin_home");

}
      function index()
      {
      	$this->load->view("admin_home");
      }


  }