<?php
class insert_model extends CI_Model{
 var $table = "user";  
      var $select_column = array("uid", "name", "address","contactno","password","email_id","status","userrole");  
      var $order_column = array(null, "name", "address","contactno","password","email_id","status","userrole", null, null);  
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
          // $this->db->where('userrole','user');
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("name", $_POST["search"]["value"]);  
                  $this->db->like("address", $_POST["search"]["value"]);  
                    $this->db->like("contactno", $_POST["search"]["value"]);  
                      $this->db->like("password", $_POST["search"]["value"]);  
                        $this->db->like("email_id", $_POST["search"]["value"]);  
                          $this->db->like("status", $_POST["search"]["value"]);  
                            $this->db->like("userrole", "user");  
                // $this->db->or_like("hobbies", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('uid', 'DESC');  
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
            $this->db->where('userrole','user');
           $query = $this->db->get();
           return $query->result(); 
      }   
       function get_products()
      {

         $this->db->select("*");  
           $this->db->from("products");  
        //    $this->db->where('userrole','user');
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
           $this->db->insert('user', $data);  
      }  
       function fetch_single_user($user_id)  
      {  
           $this->db->where('uid', $user_id);
           $query=$this->db->get('usuer');
            return $query->result(); 

      }  
       function update_crud($user_id,$data)  
      {  
           $this->db->where('uid', $user_id);
           $this->db->update("user",$data);
           

      }  
  function delete_single_user($uid)  
      {  
           $this->db->where("uid", $uid);  
           $this->db->delete("user");  
           //DELETE FROM users WHERE id = '$user_id'  
      }  

      function activate_user($uid,$active)

      {
 $this->db->where('uid', $uid);
           $this->db->update("user",$active);

      }
       function enable_pro($pro_id,$enable)

      {
 $this->db->where('pro_id', $pro_id);
           $this->db->update("products",$enable);

      }
function select()
{

  $this->db->select('*');
$this->db->from('products');
//$this->db->orderby($desc);
// $this->db->limit($limit,$offset);
  $query = $this->db->get(); 

         return $query;
 }  

function select_arrival_clothes()
{
  $query = $this->db->query("SELECT * FROM products WHERE Added_at >= (NOW() - INTERVAL 1 MONTH)");
    return $query->row_array();


}


 function select_cart($uid)
 {


$this->db->select('*');
$this->db->from('products');
$this->db->join('orders', 'orders.pro_id = products.pro_id');
$this->db->where('orders.uid',$uid);
 
$query = $this->db->get();

  //  $this->db->where('uid', $uid);
  // $query = $this->db->get('orders'); 

         return $query;
 }


function check_cart($oid)
 {


$this->db->select('*');
$this->db->from('products');
$this->db->join('orders', 'orders.pro_id = products.pro_id');
$this->db->where('orders.order_id',$oid);
 
$query = $this->db->get();

  //  $this->db->where('uid', $uid);
  // $query = $this->db->get('orders'); 

         return $query;
 }

function search_pro($search)
{
  $this->db->select('*');
$this->db->from('products');

$this->db->where('p_name',$search);
  $query = $this->db->get();  
         return $query;
 } 
 function search_single($single)
{
  $this->db->select('*');
$this->db->from('products');

$this->db->where('pro_id',$single);
  $query = $this->db->get();  
         return $query;
 } 

function select_user($uid)
{
$this->db->select('*');
$this->db->from('user');

$this->db->where('uid',$uid);
  $query = $this->db->get();  
         return $query;

}
 function update_user($uid,$data)  
      {  
           $this->db->where('uid', $uid);
           $this->db->update("user",$data);
           

      } 

}