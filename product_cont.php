<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class product_cont extends CI_Controller {  
  
      
public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
           $this->load->library('session','upload');



if(!$this->session->userdata('uid')=='uid')
            {
                $this->load->view("login");
            }
          }




      function fetch_user(){  
           $this->load->model("product_model");  
           $fetch_data = $this->product_model->make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
               $sub_array[] = '<img src="'.base_url().'uploads/'.$row->img.'" class="img-thumbnail" width="50" height="35" />'; 
                $sub_array[] = $row->p_name;  
                $sub_array[] = $row->price;  
                  $sub_array[] = $row->qty;  
                    $sub_array[] = $row->desc;  
                      $sub_array[] = $row->brand;  
                        $sub_array[] = $row->cat_id;

                            
                  $sub_array[] = '<button type="button" name="update" id="'.$row->pro_id.'"  class="btn btn-warning btn-xs update">Update</button>'; 


                $sub_array[] = '<button type="button" name="delete"     id="'.$row->pro_id.'" class="btn btn-danger btn-xs delete">Delete</button>';  
                $data[] = $sub_array;  
                
 
           
           } 
            $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->product_model->get_all_data(),  
                "recordsFiltered"     =>     $this->product_model->get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output);  
      }  




function user_action(){  
 
            // if($_POST["action"] == "Add")  
            // {   
   $user_image='';
           if($_FILES["user_image"]["name"]!='')
           {
$user_image=$this->upload_image();

           }
           else{

$user_image=$this->input->post("hidden_user_image");

           } 

                  $insert_data = array(  
                    'p_name'     => $this->input->post('p_name'),  
                        'price'  => $this->input->post('price'),  
                        'qty'   => $this->input->post('qty'),  
                        'desc' => $this->input->post('desc'),
                         'brand'  => $this->input->post('brand'),  
                        
                        'cat_id' => $this->input->post('cat_id'),
                       'sub_id'=>$this->input->post('sub_id'),
                         'img'   =>    $user_image 
                        
                );  
                $this->load->model('product_model');  
                $this->product_model->insert_crud($insert_data);  
                echo 'Product Inserted';  
          } 
//                 if($_POST["action"] == "Edit")  
//            {  
           
// $updated_data=array(
//     'p_name'     => $this->input->post('p_name'),  
//                         'price'  => $this->input->post('price'),  
//                         'qty'   => $this->input->post('qty'),  
//                         'desc' => $this->input->post('desc'),
//                          'brand'  => $this->input->post('brand'),  
//                         'cat_id'   => $this->input->post('cat_id')
                      

// );
// $this->load->model('product_model');
// $this->product_model->update_crud($this->input->post("user_id"),$updated_data);
// echo 'Product updated';
//            }
//   }




      function upload_image()  
      {  



           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './uploads/' . $new_name;  
                
                // $destination = './uploads' . $new_name; 
//       if ($_FILES["user_image"]["size"] > 200000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
//              else
//              { 
  move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
         //  }
           }  
      }  


 
 function delete_single_user()  
      {  
           $this->load->model("product_model");  
           $this->product_model->delete_single_user($_POST["user_id"]);  
           echo 'Product Deleted';  
      }  

 
   function fetch_single_user()
      {

        $output=array();
        $this->load->model("product_model");
         $data=$this->product_model->fetch_single_user($_POST["user_id"]); 

foreach($data as $row)  
           {  
             //$output['pro_id']=$row->pro_id;
                $output['p_name']=$row->p_name;
                 $output['price'] = $row->price;  
                  $output['qty'] = $row->qty;  
                   $output['desc'] = $row->desc;  
                     $output['brand'] = $row->brand;  
                       $output['cat_id'] = $row->cat_id;
                        if($row->img!='')
                           {
                            $output['user_image']='<img src="'.base_url().'uploads/'.$row->img.'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row->img.'"/>';

                           }
                           else
                           {
 $output['user_image']='<input type="hidden" name="hidden_user_image" value=""/>';

                           }
                     

      }
      echo json_encode($output);
 } 

function select_category()
{

   $this->load->model("product_model"); 
         $data['h']=$this->product_model->select_cat();  
       
        $this->load->view('product_view', $data); 
       //  $this->load->view('trial_category', $data); 

}

function update()
{
  echo $pro_id=$this->input->post('pro_id');
      echo   $name=$this->input->post('name');
       echo  $price=$this->input->post('price');
       echo  $qty=$this->input->post('qty');
         echo $desc=$this->input->post('desc');
        echo $brand=$this->input->post('brand');
        echo $category=$this->input->post('category');
 
}

 





}