<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class login_cont extends CI_Controller {  
      
public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
           $this->load->library('session');


}
function index() {

    if (!$this->session->userdata('logged_in')) {
        $this->load->view('login');

    } 
    else
    {
       redirect(base_url() . 'login_cont/enter');
      // $this->load->view("homepage"); 
    }
  }

function home()
{
  $this->load->view("admin");
}

      function login()  
      {  
            
        
           $this->load->view("login");  
      }  
      function login_validation()  
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
                    //  $this->session->set_userdata('uid',$session_data); 
                      
                     //$this->check_session();
                     redirect(base_url() . 'login_cont/enter');  
                        
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




      function enter()
      {
    //  $this->check_session();  
           if($this->session->userdata('adname') != '' && $userrole='admin' )  
          {  


//$this->load->model("cart_model"); 
        // $data['h']=$this->insert_model->select_cart($uid);  
       // $data['c']= $this->cart_model->view_category();

     //    $this->load->view('admin_home');  
      
$this->load->view('admin'); 

//             echo "You have logged in sucessfully..";
//                 echo '<h2>Welcome - '.$this->session->userdata('name').'</h2>';  

//                  echo '<label><a href="'.base_url

// ().'user_cont/user_list">User_list</a></label>';
//  
// ().'product_cont/add_pro">Product_list</a></label>';  
 
          } 

        
          

     else  
         {  
              redirect(base_url() . 'login_cont/login');  
           }  
      }  


      function logout()  
      {  
           $this->session->unset_userdata('adname');  
           redirect(base_url() . 'login_cont/login');  
      }  
 }  