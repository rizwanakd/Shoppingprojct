<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class category_cont extends CI_Controller {  
      
      function add_pro()  
      { 
      	 $this->load->view("category_view");  
       // $this->load->view("user_ajax");  

      }
       function fetch_user(){  
           $this->load->model("category_model");  
           $fetch_data = $this->category_model->make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
              
                $sub_array[] = $row->name;  
                $sub_array[] = $row->subcategory;  
                  // $sub_array[] = $row->qty;  
                  //   $sub_array[] = $row->desc;  
                  //     $sub_array[] = $row->brand;  
                  //       $sub_array[] = $row->cat_id;
                            
                  // $sub_array[] = '<button type="button" name="update" id="'.$row->cat_id.'"  class="btn btn-warning btn-xs update">Update</button>'; 


                $sub_array[] = '<button type="button" name="delete"     id="'.$row->cat_id.'" class="btn btn-danger btn-xs delete">Delete</button>';  
                $data[] = $sub_array;  
           
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->category_model->get_all_data(),  
                "recordsFiltered"     =>     $this->category_model->get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output);  
      }  
      function user_action(){  
 
            // if($_POST["action"] == "Add")  
            // {   
                  $insert_data = array(  
                    'name'     => $this->input->post('name'),  
                        'subcategory'  => $this->input->post('subcategory'),  
                        // 'qty'   => $this->input->post('qty'),  
                        // 'desc' => $this->input->post('desc'),
                        //  'brand'  => $this->input->post('brand'),  
                        
                        // 'cat_id' => $this->input->post('cat_id'),
                        
                );  
                $this->load->model('category_model');  
                $this->category_model->insert_crud($insert_data);  
                echo 'category Inserted';  
          } 
      function delete_single_user()  
      {  
           $this->load->model("category_model");  
           $this->category_model->delete_single_user($_POST["user_id"]);  
           echo 'category Deleted';  
      }  

 
   function fetch_single_user()
      {

        $output=array();
        $this->load->model("category_model");
         $data=$this->category_model->fetch_single_user($_POST["user_id"]); 

foreach($data as $row)  
           {  
             //$output['pro_id']=$row->pro_id;
                $output['name']=$row->name;
                 $output['subcategory'] = $row->subcategory;  
                  // $output['qty'] = $row->qty;  
                  //  $output['desc'] = $row->desc;  
                  //    $output['brand'] = $row->brand;  
                  //      $output['cat_id'] = $row->cat_id;
                       
                     

      }
      echo json_encode($output);
 } 




  // function ajax_update(){
  //       $data=$this->product_model->update_product();
  //       echo json_encode($data);
  //   }
  //    function product_data(){
  //       $data=$this->product_model->product_list();
  //       echo json_encode($data);
  //   }



function view_clothes()
{
  $query = $this->db->get('products');  
         return $query;
 }

}
