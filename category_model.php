<?php
class category_model extends CI_Model{
 var $table = "category";  
      var $select_column = array("cat_id", "name", "subcategory");  
      var $order_column = array(null, "name", "subcategory", null, null);  
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("name", $_POST["search"]["value"]);  
                  $this->db->like("subcategory", $_POST["search"]["value"]);  
                    // $this->db->like("qty", $_POST["search"]["value"]);  
                    //   $this->db->like("desc", $_POST["search"]["value"]);  
                    //     $this->db->like("brand", $_POST["search"]["value"]);  
                          
                    //         $this->db->or_like("cat_id", $_POST["search"]["value"]);  
                // $this->db->or_like("hobbies", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
               $this->db->order_by('cat_id', 'DESC');  
           }  
      }  
      function make_datatables(){  
           $this->make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function get_filtered_data(){  
           $this->make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }    

      function get_all_users()
      {

         $this->db->select("*");  
           $this->db->from($this->table);  
           
           $query = $this->db->get();
           return $query->result(); 
      }   
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table);  
           return $this->db->count_all_results();  
      }  
      function insert_crud($data)  
      {  
           $this->db->insert('category', $data);  
      }  
       function fetch_single_user($user_id)  
      {  
           $this->db->where('cat_id', $user_id);
           $query=$this->db->get('category');
            return $query->result(); 

      }  
       function update_crud($user_id,$data)  
      {  
           $this->db->where('cat_id', $user_id);
           $this->db->update("category",$data);
           

      }  
  function delete_single_user($user_id)  
      {  
           $this->db->where("cat_id", $user_id);  
           $this->db->delete("category");  
           //DELETE FROM users WHERE id = '$user_id'  
      }  





function update_product(){
   $pro_id=$this->input->post('pro_id');
        $name=$this->input->post('name');
        $price=$this->input->post('price');
        $qty=$this->input->post('qty');
         $desc=$this->input->post('desc');
        $brand=$this->input->post('brand');
        $category=$this->input->post('category');
 
        $this->db->set('p_name', $name);
        $this->db->set('price', $price);
        $this->db->set('qty', $qty);
        $this->db->set('desc', $desc);
        $this->db->set('brand', $brand);
        $this->db->set('cat_id', $cat_id);
        $this->db->where('pro_id', $pro_id);
        $result=$this->db->update('products');
        return $result;
    }

 function product_list(){
        $hasil=$this->db->get('products');
        return $hasil->result();
    }
 

function view_clothes($cat_id)
 {


 $this->db->select('*');
 $this->db->from('products');
 $this->db->where('cat_id',$cat_id);
 
$query = $this->db->get();


         return $query;
 }


 function view_subcategory($sub_id)
 {


$this->db->select('*');
$this->db->from('products');
//$this->db->join('orders', 'orders.pro_id = products.pro_id');
$this->db->where('sub_id',$sub_id);
 
$query = $this->db->get();

         return $query;
 }
 
 }  