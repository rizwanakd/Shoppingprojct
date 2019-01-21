<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class user_cont extends CI_Controller { 

  public function __construct() { 

   parent::__construct(); 
   $this->load->helper(array('form', 'url')); 
   $this->load->library('session');



// if(!$this->session->userdata('uid')=='uid')
//             {
//                 $this->load->view("user_login");
//             }
//           }
// if (!$this->session->userdata('logged_in')) {
//         $this->load->view('user_login');

//     } 
//     else
//     {

//        redirect(base_url() . 'user_cont/enter');
//       // $this->load->view("homepage"); 
//     }

 }

 function index() {

  if (!$this->session->userdata('logged_in')) {
    $this->load->view('user_login');

  } 
  else
  {

   redirect(base_url() . 'user_cont/enter');
      // $this->load->view("homepage"); 
 }
}


function home()
{
 $this->load->view("user_login"); 
}


function user_reg()  
{ 
  $this->load->view("user_reg");  

}
function fetch_user(){  
 $this->load->model("insert_model");  
 $fetch_data = $this->insert_model->make_datatables();  
 $data = array();  
 foreach($fetch_data as $row)  
 {  
  $sub_array = array();  
                // $sub_array[] = '<img src="'.base_url().'uploads/images'.$row->img.'" class="img-thumbnail" width="50" height="35" />';  
  $sub_array[] = $row->name;  
  $sub_array[] = $row->address;  
  $sub_array[] = $row->contactno;  
  $sub_array[] = $row->password;  
  $sub_array[] = $row->email_id;  
  $sub_array[] = $row->status;
  $sub_array[] = $row->userrole;
                           // $sub_array[] = $row->hobbies;      
  $sub_array[] = '<button type="button" name="update" id="'.$row->uid.'" onclick="'.base_url().'insert_form/update_user" value="Edit" class="btn btn-warning btn-xs update">Update</button>'; 




  $sub_array[] = '<button type="button" name="delete" id="'.$row->uid.'" class="btn btn-danger btn-xs delete">Delete</button>';  
  $data[] = $sub_array;  

}  
$output = array(  
  "draw"                    =>     intval($_POST["draw"]),  
  "recordsTotal"          =>      $this->insert_model->get_all_data(),  
  "recordsFiltered"     =>     $this->insert_model->get_filtered_data(),  
  "data"                    =>     $data  
);  
echo json_encode($output);  
}  

function user_action(){  

            // if($_POST["action"] == "Add")  
            // {   
  $insert_data = array(  
    'name'     => $this->input->post('name'),  
    'address'  => $this->input->post('address'),  
    'contactno'   => $this->input->post('contactno'),  
    'password' => $this->input->post('password'),
    'email_id'  => $this->input->post('email_id'),  
    'status'   => 'unactive' ,
    'userrole' => $this->input->post('userrole'),

  );  
  $this->load->model('insert_model');  
  $this->insert_model->insert_crud($insert_data);  
  echo 'Registered sucessfully';  
        //  } 
}

function user_list()
{
  $this->load->model("insert_model");
  $this->data['posts'] = $this->insert_model->get_all_users(); 
  // $this->load->view('userlist', $this->data);
  $this->load->view('active_user', $this->data);

}

function pro_list()
{
  $this->load->model("insert_model");
  $this->data['posts'] = $this->insert_model->get_products(); 
  // $this->load->view('userlist', $this->data);
  $this->load->view('view_products', $this->data);

}


function enable_product()
{
 $pid= $this->input->post('pro_id');
//echo $pid;

 $status= $this->input->post('status');
//echo $status;
//die();
 $this->load->model("insert_model");
 $enable=array(
   'status'     =>'Enable'); 
 $this->insert_model->enable_pro($pid,$enable);
 ?>
 <script type="text/javascript">
   alert("Product is enable now");

   window.location.href='<?php echo base_url(); ?>user_cont/pro_list';

 </script>

 <?php
 //echo 'User is Active now';



}


function active_user()
{

  $uid= $this->input->post('uid');
//echo $uid;

  $status= $this->input->post('status');

//echo $status;

  $this->load->model("insert_model");
  $active=array(
   'status'     =>'active'); 
  $this->insert_model->activate_user($uid,$active);
  ?>
  <script type="text/javascript">
   alert("User is Active now");

   window.location.href='<?php echo base_url(); ?>user_cont/user_list';

 </script>

 <?php
 //echo 'User is Active now';



}


function delete_user()  
{  
  $uid = $this->uri->segment(3);
      	//$uid= $this->input->post('uid');
  $this->load->model("insert_model");  
  $this->insert_model->delete_single_user($uid);  
  ?>
  <script type="text/javascript">
    alert("User is Deleted");

    window.location.href='<?php echo base_url(); ?>user_cont/user_list';
  </script>

  <?php
}  



function login()  
{  

 $this->load->view("user_login");  
} 



function validate()
{
  $result = $this->login_model->validate();

  if(! $result && !$this->session->userdata('logged_in')){

   echo '<font color=red>Invalid username and/or password.</font><br />';

 }else{

  redirect(base_url() . 'user_cont/enter');
}    
} 



function login_validation()  
{  
 $this->load->library('form_validation');  
 $this->form_validation->set_rules('name', 'name', 'required');  
 $this->form_validation->set_rules('password', 'password', 'required');  
 if($this->form_validation->run())  
 {  
  $data = array(

    $name = $this->input->post('name'),
    $password = $this->input->post('password'), 
    $userrole = $this->input->post('userrole')
  );  
                //model function  
  $this->load->model('login_model');  
  if($this->login_model->can_login($name, $password,$userrole))  

  {  

   redirect(base_url() . 'user_cont/enter');  
 }  

               // if ('status'!='active') 
                //{
               //  $this->session->set_flashdata('error', 'You are Unactive');
               //   redirect(base_url() . 'user_cont/login'); 
               //     }

 if (!$result && !$this->session->userdata('logged_in')) 
 {  
   $this->session->set_flashdata('errorusername', 'Invalid Username or Password');  
   redirect(base_url() . 'user_cont/login');  
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
 if($this->session->userdata('name') != '' && $userrole='user' )  
 {  

// $this->load->model("cart_model"); 
        // $data['h']=$this->insert_model->select_cart($uid);  
      //  $data['c']= $this->cart_model->view_category();
   $this->load->view('homepage');  
 } 

 else  
 {  
   $this->load->view('user_login'); 
 }  
}  



function user_status()
{
 $this->db->select('*'); 
 $this->db->from('user');     
 $this->db->where('username', $this->input->post('username'));
 $this->db->where('password',sha1($this->input->post('password')));
 $this->db->where('status','unactive');

 $result=$this->db->get();
 return $result->row_array(); 
}

function logout()  
{  
 $this->session->unset_userdata('name');  
 redirect(base_url() . 'user_cont/login');  
}  




function view_product()
{
  $this->load->model("insert_model"); 
  $data['h']=$this->insert_model->select();  

  $this->load->view('product_user_view', $data); 
}




function sort()
{
  $desc=$this->input->post('sort');
  //echo $desc;
  $this->load->model("product_model"); 
  $data['h']=$this->product_model->sort($desc);  

  $this->load->view('product_user_view', $data); 
}



function filter()
{
  $filter=$this->input->post('filter');
  //echo $desc;
  $this->load->model("product_model"); 
  $data['h']=$this->product_model->filter($filter);  

  $this->load->view('product_user_view', $data); 
}

function subcategory()
{
  $sub=$this->input->post('subcategory');
  echo $sub;
   $cat_id= $this->input->post('cat_id');

echo $cat_id;

}


function new_arrival()
{
  $this->load->model("insert_model"); 
  $data['query']=$this->insert_model->select_arrival_clothes();  

  $this->load->view('homepage', $data); 

}
// SELECT * FROM products WHERE Added_at >= (NOW() - INTERVAL 1 MONTH)



function view_clothes_cat()
{
  $cat_id= $this->input->post('cat_id');
 $sub_id= $this->input->post('sub_id');
//echo $sub_id;
  echo '<br>';
// $uid=$this->session->userdata('uid');
 //echo $cat_id;
  if($cat_id==1)
  {
   $this->load->model("category_model"); 
   $data['h']=$this->category_model->view_clothes($cat_id);  
           //return the data in view  
   $this->load->view('products', $data); 
 }
 elseif ($cat_id==2)
 {
   $this->load->model("category_model"); 
   $data['h']=$this->category_model->view_clothes($cat_id);  
   //        //return the data in view  
   $this->load->view('products', $data); 
 }
 elseif ($cat_id==3)
 {
   $this->load->model("category_model"); 
   $data['h']=$this->category_model->view_clothes($cat_id);  
   //        //return the data in view  
   $this->load->view('products', $data); 
 }
 else
 {
  echo "No products Found";
}

}


function search_products()
{
  $search= $this->input->post('search');
//echo $search;
  $this->load->model("insert_model"); 
  $data['h']=$this->insert_model->search_pro($search);  
         //return the data in view  
  $this->load->view('search', $data); 
}




function pro()
{
 $single= $this->input->post('pro_id');
  // echo $single;
 $p= $this->input->post('price');
  // echo $p;
//echo $search;
 $this->load->model("insert_model"); 
 $data['h']=$this->insert_model->search_single($single);  
 $this->load->view("single_product",$data);
}


function update_profile()
{
 $uid=$this->session->userdata('uid');
//echo $uid;
 $this->load->model("insert_model"); 
 $data['h']=$this->insert_model->select_user($uid);  
 $this->load->view("updateprofile",$data);
}



function update()
{
 $uid=$this->session->userdata('uid');
 $add= $this->input->post('address');
 $con= $this->input->post('contact');
 $email= $this->input->post('email');
 $password= $this->input->post('password');
  // echo $add;
   //echo $con;   
 $data=array(

  'address' => $add,
  'contactno'=>$con,
  'password'=>$password,
  'email_id'=>$email,
);
 $this->load->model('insert_model');  

 $this->insert_model->update_user($uid,$data);
 //echo "profile updated";
 redirect(base_url() . 'user_cont/update_profile');  
}




function rating()
{
  $this->load->view("trial_category");
}


function rate()
{
  $rate= $this->input->post('rating');
    // $password= $this->input->post('password');
  echo $rate;
   //echo $con;
   //  $this->load->view("view_cart");
  ?> <script type="text/javascript">
   alert("U have rated".$rate);

    //window.location.href='<?php echo base_url(); ?>user_cont/pro_list';    
  </script>
  <?php 
}

function products()
{
   $pro= $this->input->post('subcategory');
 //  echo $pro;
$sub_id= $this->input->post('sub_id'); 
if($sub_id==1)
  {
   
    $this->load->model("category_model"); 
    $data['h']=$this->category_model->view_subcategory($sub_id);  
   //         
   $this->load->view('products', $data); 
 }
 elseif ($sub_id==2)
 {
  $this->load->model("category_model"); 
    $data['h']=$this->category_model->view_subcategory($sub_id);  
   //         
   $this->load->view('products', $data); 
 }
 else
 {
  echo "Nothing Found";
}

  //$this->load->view("products");
}
}

