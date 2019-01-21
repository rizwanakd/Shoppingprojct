<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class cart_cont extends CI_Controller {  
     public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
           $this->load->library('session');
           
          if(!$this->session->userdata('uid')=='uid')
             {
                $this->load->view("user_login");
            }

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

 function add_to_cart()
 {
// //  	if($this->input->post()) {
// //      $postdata= $this->input->post('pro_id').'<br/>';
// //      echo "id".$postdata;
 //      $postdata= $this->input->post('pro_id').'<br/>';
 //      echo "id".$postdata;
 //    $subqty=$this->input->post('subqty');
 // echo "purchase".$subqty.'<br/>';
  $price= $this->input->post('price').'<br/>';
      echo "price".$price;


     $pid= $this->input->post('pro_id').'<br/>';
      echo "id".$pid;

 $subqty=$this->input->post('subqty');
 echo "purchase".$subqty.'<br/>';

 $uid=$this->session->userdata('uid');
 echo $uid;
//echo $price*$subqty;

 // $oid= $this->input->post('order_id').'<br/>';
 //      echo "oid".$oid;


$data=array(
// 'pro_id'=>$pid,
// 'uid' => $uid,
// 'totalprice' => $price,
'subtotal'=>$this->input->post('price')*$this->input->post('subqty'),
'qty'=>$subqty,
 'status' =>'ordered',
);
     $this->load->model('cart_model');  
                
$this->cart_model->update_order($oid,$data);
 echo "updated";
// //        //$this->cart_model->select($postdata);    
// // //$page_id =$this->uri->segment(3);
// // //$data['h']=$this->cart_model->select(); 
// // //$this->load->view('add_to_cart',$postdata); 
// //  $this->load->model("cart_model"); 
// //        $data['h']=$this->cart_model->select($postdata);  
// //          //return the data in view  
// //          $this->load->view('add_to_cart', $data);  
 //$this->load->view("checkout");


       }
          //$this->load->view("add_to_cart",$data);  
	//}

  function add_cart()
  {

    $rate= $this->input->post('rating');
  
  // echo $rate;

      $postdata= $this->input->post('pro_id').'<br/>';
     // echo "id".$postdata;

 $purchase_qty=$this->input->post('purchase_qty');
 //echo "purchase".$purchase_qty.'<br/>';

 $uid=$this->session->userdata('uid');
 //echo $uid;
 //echo "<br>";
 $sub=$this->input->post('price')*1;
 //echo $sub;
// echo "purchase".$purchase_qty.'<br/>';
//echo "<br>";

 $pdata= $this->input->post('price').'<br/>';
  //   echo $pdata;

    $data=array('pro_id' =>$postdata,
'uid' => $uid,
'totalprice' => $pdata,
'subtotal'=>$sub,
'qty'=>$purchase_qty,
'status' =>'unordered',
'rating'=>$rate,
);
     $this->load->model('cart_model');  
                
$this->cart_model->order_insert($data);

//echo "added";
 ?>
  <script type="text/javascript">
   alert("Product Added to cart");
     window.location.href="<?php echo base_url() . 'cart_cont/view_cart';?>";
// //    // redirect('/user_cont/view_product/');
    //window.location.href='product_user_view.php';
 </script>
  <?php
  }



function view_cart()
{
  $uid=$this->session->userdata('uid');
//echo $uid;

   $this->load->model("insert_model"); 
         $data['h']=$this->insert_model->select_cart($uid);  
         
         $this->load->view('view_cart', $data);  
}

function delete_cart()
{

 $uid=$this->session->userdata('uid');
//echo $uid;

     $this->load->model('cart_model');  
   $this->cart_model->delete_cart($uid);
  //echo "deleted from cart";
   ?>
<script type="text/javascript">
    alert("Cart is empty");
    window.location.href='<?php echo base_url(); ?>cart_cont/view_cart';
</script>

<?php
 

}





function subtotal()
{
  $price= $this->input->post('price').'<br/>';
      echo "price".$price;

     $pid= $this->input->post('pro_id').'<br/>';
      echo "id".$pid;

 $subqty=$this->input->post('subqty');
 echo "purchase".$subqty.'<br/>';

 $uid=$this->session->userdata('uid');
 echo $uid;

 $oid= $this->input->post('order_id').'<br/>';
      echo "oid".$oid;


  $data=array(
// 'pro_id'=>$pid,
// 'uid' => $uid,
// 'totalprice' => $price,
'subtotal'=>$this->input->post('price')*$this->input->post('subqty'),
'qty'=>$subqty,
 'status' =>'ordered',
);
     $this->load->model('cart_model');  
                
$this->cart_model->update_order($oid,$data);
?>
<script type="text/javascript">
    alert("Ordered ");
    window.location.href='<?php echo base_url(); ?>cart_cont/view_cart';
</script>

<?php

}
function checkout_chart()
{
   $uid=$this->session->userdata('uid');
  // echo $uid;
   $s=$this->input->post('sum');
   echo $s;
      $this->load->model("cart_model"); 
        // $data['h']=$this->insert_model->select_cart($uid);  
        $data['c']= $this->cart_model->view_order();
       $this->load->view('checkout',$data);  

}





function checkout()
{
  $uid=$this->session->userdata('uid');
  $data=array(
// 'pro_id'=>$pid,
// 'uid' => $uid,
// 'totalprice' => $price,
'subtotal'=>$this->input->post('subtotal')+ $this->input->post('subtotal'),
// 'qty'=>$subqty,
//  'status' =>'ordered',
);
   $this->load->model("cart_model"); 
        // $data['h']=$this->insert_model->select_cart($uid);  
        $data['c']= $this->cart_model->checkout($uid,$data);
         $this->load->view('checkout',$data); 


}


function category()
{

   $this->load->model("cart_model"); 
        // $data['h']=$this->insert_model->select_cart($uid);  
        $data['c']= $this->cart_model->view_category();
         $this->load->view('homepage',$data);  
}


function buy()
{
 
  if($this->session->userdata('name') != '')
{
  //echo "you are  logged in";
$uid=$this->session->userdata('uid');
//echo $uid;

 $s=$this->input->post('sum');
 //  echo $s;
    $s1=$this->input->post('s');
  // echo $s1;
$data=array(

'c_amt'=>$s,
'c_qty'=>$s1,
 'uid' =>$uid,
);
     $this->load->model('cart_model');  
     $this->cart_model->buy($data);
   // if($s>0)
   // {
   //  echo "delete cart";
   // }
 ?>
<script type="text/javascript">
    alert("Order Confirmed");
  //  window.location.href='<?php echo base_url(); ?>cart_cont/delete_cart';
   window.location.href='<?php echo base_url(); ?>cart_cont/payment';
</script>

 <?php  }

else
{
 //echo "you are  not logged in"; 
 ?> <script type="text/javascript">
    alert("You are not logged in");
    window.location.href='<?php echo base_url(); ?>cart_cont/checkout_chart';
 
</script>
<?php
}             

}



function payment()
{
  $uid=$this->session->userdata('uid');
//echo $uid;
 $this->load->view("payment");
}




function delete_pro()
{
$uid=$this->session->userdata('uid');
//echo $uid;

 $s=$this->input->post('pro_id');
  //echo $s;

 $this->load->model('cart_model');  
   $this->cart_model->delete_pro($s);
  //echo "deleted from cart";
   redirect('cart_cont/view_cart');

 

}

function total_user()
{
  $this->load->model('cart_model');  
  $data['h']=   $this->cart_model->view_user();
    $this->load->view('admin',$data); 

}
function total_products()
{
 // $this->load->model('cart_model');  
 //  $data['h']=   $this->cart_model->view_user();
    $this->load->view('trial_category'); 

}

function total_order()
{
 // $this->load->model('cart_model');  
 //  $data['h']=   $this->cart_model->view_user();
    $this->load->view('order'); 

}

}

      