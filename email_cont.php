<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class email_cont extends CI_Controller {

public function __construct() {
parent::__construct();
$this->load->helper('form');
$this->load->library('form_validation');
//$this->load->library('encrypt');
}

public function index() {
$this->load->view('email');
}



function mail()

{

$sender_email = $this->input->post('email_id');
  $uid=$this->session->userdata('uid');
   $uname=$this->session->userdata('name') ;
//echo $sender_email;
	$m=mail($sender_email,'Shoppers Website','your payment has been done Sucessfully','From:rizwanakadam49@gmail.com');
	if($m>0)
	{
		?><script type="text/javascript">
    alert("Your payment done Sucessfully");
    window.location.href='<?php echo base_url(); ?>cart_cont/delete_cart';
 
</script>
<?php	}

}
}





?>