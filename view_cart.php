


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
    <!--[if lt IE 9]>     
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script>
function doconfirm()
{

    job=confirm("Are you sure you want to delete?");
    if(job!=true)
    {
        return false;
    }
}
</script>
  </head>
    <body>    
    <div id="top-bar" class="container">
      <div class="row">
        <!-- <div class="span4">
          <form method="POST" class="search_form">
            <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
          </form>
        </div> -->
        <div class="span8">
          <div class="account pull-right">
            <ul class="user-menu">        
              <!-- <li><a href="#">My Account</a></li> -->
              <li><a href="<?php echo base_url(); ?>cart_cont/view_cart">View Cart</a></li>
              <li><a href="<?php echo base_url(); ?>user_cont/logout">Logout</a></li>   
           <?php    echo " logged in as:".$this->session->userdata('name') ;
                // echo 'logged in as:<h3> '.$this->session->userdata('name').'</h2>';       ?> 
              <!-- <li><a href="<?php echo base_url(); ?>user_cont/login">Login</a></li>     -->
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


<div class="container">
   <table id="cart" class="table table-hover table-condensed">
               <thead>
                  <tr>
                     <th style="width:50%">Order ID</th>
                     <th style="width:30%">Product Name</th>
                     <th style="width:10%">Price</th>
                     <th style="width:8%">Quantity</th>
                     <th style="width:22%" class="text-center"></th>
                     <th style="width:10%">Choose Qty</th>
                     <th style="width:10%">Ur Rating</th>
                  </tr>
               </thead>
           <?php    foreach ($h->result() as $row)  
         {  
            ?>
                 <form method="post" action="<?php echo base_url(); ?>cart_cont/subtotal"> 
               <tbody>
                 
       
                  <tr>
                     <td data-th="Product">
                        <div class="row">
                           <!-- <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div> -->
                           <div class="col-sm-10">
                              <h4 class="nomargin"><?php echo $row->order_id;?></h4>
                              <!-- <p><?php echo $row->pro_id;?></p> -->
                           </div>
                        </div>
                     </td>
                     <td data-th="Price" name="pro_id"><?php echo $row->p_name;?></td>
                     <td data-th="Price" name="price"><?php echo $row->totalprice;?></td>
                     
                      <td data-th="qty" name="qty" >1</td>
                     <!-- <td data-th="Subtotal" class="text-center"></td> -->
                     <td class="actions" data-th="">
                        <!-- <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button> -->
                        <!-- <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>                        -->
                     </td>
                     <td data-th="Quantity">
                        <input type="number" class="form-control" name="subqty" text-center" value="<?php echo $row->qty;?>" placeholder="1">
                     </td>


                     <td><?php echo $row->rating;?></td>
                  <input type="hidden" name="order_id" value='<?php echo $row->order_id ; ?>' > 
                   <input type="hidden" name="price" value='<?php echo $row->totalprice ; ?>' > 
                   <input type="hidden" name="pro_id" value='<?php echo $row->pro_id ; ?>' > 
                   <!-- <input type="hidden" name="subqty" value="" >  -->
                    <input type="hidden" name="uid" value='<?php echo $this->session->userdata('uid'); ?>' > 
              
                
                     <td><input type="submit" value="Purchase" name="submit" class="btn btn-success btn-block"></td>
                     </form>

                     
                     <form method="post" action="<?php echo base_url(); ?>cart_cont/delete_pro">

                       <input type="hidden" name="pro_id" value='<?php echo $row->pro_id ; ?>' > 
                   <!-- <input type="hidden" name="subqty" value="" >  -->
                    <input type="hidden" name="uid" value='<?php echo $this->session->userdata('uid'); ?>' > 
                       <td><input type="submit"  value="Delete" name="submit" class="btn btn-success btn-block" onClick="return doconfirm();" ></td>
          </form>
          

      </tr>
       
  <tr>
                     <td colspan="2" class="hidden-xs"></td>
                      <td class="hidden-xs text-center"><strong>Total:<?php echo $row->subtotal; ?></strong></td> 
                       
</tr>

 <?php }  

         ?>
        
                     </tbody>
               <tfoot>
                  <!-- <tr class="visible-xs">
                     <td class="text-center"><strong>Total 1.99</strong></td>
                  </tr> -->
                  <tr>
                     <td><a href="<?php echo base_url(); ?>user_cont/view_product" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                     <td colspan="2" class="hidden-xs"></td>
                     <input type="hidden" name="uid" value='<?php echo $this->session->userdata('uid'); ?>' > 
                     
                      <!-- <input type="hidden" name="subtotal" value='<?php echo $row->subtotal ; ?>' >  -->



                      <td><a href="<?php echo base_url(); ?>cart_cont/checkout_chart" class="btn btn-warning"><i class="fa fa-angle-right"></i> Checkout</a></td>
                     <td colspan="2" class="hidden-xs"></td>
                   


                  </tr>
               </tfoot>
            </table>

</div>