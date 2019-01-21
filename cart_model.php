<?php
class cart_model extends CI_Model{
 //var $table = "user";  

function order_insert($data){

$this->db->insert('orders', $data);
// if($query)
//   {
//     return true;  
//   }
//   else
//   {
//     return false; 
//   }
}

function buy($data){

$query=$this->db->insert('confirm', $data);
 if($query>0)
  {
   // echo "delete cart";
    return true;  
  }
  else
  {
    return false; 
  }

}

function delete_cart($uid)
{
  $this->db->where('uid', $uid);
$this->db->delete('orders');
}

function delete_pro($pro_id)
{
  $this->db->where('pro_id', $pro_id);
$this->db->delete('orders');
}






 function select($postdata)
{
	// $this->db->where('pro_id', $pro_id);
            $this->db->where('pro_id', $postdata); 

           $query=$this->db->get('products');
            return $query;
	
  // $query = $this->db->get('products');  

  
  //        return $query;
     
 }



	 function update_order($oid,$data)  
      {  
           $this->db->where('order_id', $oid);
           $this->db->update("orders",$data);
           

      } 

      function view_category()
      {
        
          $query=$this->db->get('category');

            return $query;
      }




      function checkout($uid,$data)
      {
 $query=$this->db->get('orders');
            return $query;

      }
      function view_order()
      {
      //  $this->db->select(sum())
       // SELECT uid, SUM(subtotal), SUM(qty) FROM orders GROUP BY uid
//$this->db->select('sum(subtotal)as amt');
//$this->db->where(uid=7);
       // $this->db->select(subtotal);
$query=$this->db->get('orders');
            return $query;
            //echo $query;

      }



       function view_user()
      {
      

$query = $this->db->query("SELECT COUNT(*) as count_rows FROM user where userrole='user'");
    return $query->row_array();


    
      }
}








