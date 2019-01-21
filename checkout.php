
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="<?php echo base_url();?>assets/themes/css/bootstrappage.css" rel="stylesheet"/>
    
    <!-- global styles -->
    <link href="<?php echo base_url();?>assets/themes/css/flexslider.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/themes/css/main.css" rel="stylesheet"/>

    <!-- scripts -->
    <script src="<?php echo base_url();?>assets/themes/js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>       
    <script src="<?php echo base_url();?>assets/themes/js/superfish.js"></script>  
    <script src="<?php echo base_url();?>assets/themes/js/jquery.scrolltotop.js"></script>
    
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 

  <script type = "text/javascript">
         <!--
            function getValue() {  

               var retVal = prompt("Enter your Email_id : ", "your Email_id here");
               document.write("You have entered : " + retVal);
               
            }
         //-->
      </script>    

  </head>
    <body>    
    <div id="top-bar" class="container">
      <div class="row">
        
        <div class="span8">
          <div class="account pull-right">
            <ul class="user-menu">        
         
              <li><a href="<?php echo base_url(); ?>cart_cont/view_cart">View Cart</a></li>
              <li><a href="<?php echo base_url(); ?>user_cont/logout">Logout</a></li>   
           <?php    echo " logged in as:".$this->session->userdata('name') ;?>

               
            </ul>
          </div>
        </div>
      </div>
    </div>



    <div id="wrapper" class="container">
      <section class="navbar main-menu">
        <div class="navbar-inner main-menu">        
          <a href="<?php echo base_url(); ?>user_cont/enter" class="logo pull-left"><img src="<?php echo base_url();?>assets/themes/images/logo.png" class="site_logo" alt=""></a>
          <nav id="menu" class="pull-right">

       </nav>
        </div>
      </section>


<h2>Bill</h2>


  <?php  


$sum = 0;
$s=0;
   foreach ($c->result() as $row)  
         { 
?>

     <form method="post" action="<?php echo base_url(); ?>cart_cont/buy"> 
          
<td><?php    $sum += $row->subtotal;  ?> </td>
<td><?php   $s += $row->qty;  ?> </td>
    
    
   
  
 <?php  }

?>

<div class="container">
   <table id="cart" class="table table-hover table-condensed">
               <thead>
                  <tr>
                     <th style="width:50%">Total Amount</th>
                     <th style="width:30%">Total Qty</th>
                     
                  </tr>
               </thead>
     
 <td><?php echo $sum; ?></td>


 <td><?php echo $s; ?></td>
   <input type="hidden" name="uid" value='<?php echo $this->session->userdata('uid'); ?>' > 
                       <input type="hidden" name="sum" value='<?php echo $sum; ?>' > 
                       <input type="hidden" name="s" value='<?php echo $s; ?>' > 
                     
 <td><input type="submit" value="Buy" id="btn" name="submit" class="btn btn-success btn-block" ></td>
       

                     <td colspan="2" class="hidden-xs">
   </table>

   </form>
