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
 
  </head>
    <body>    
    <div id="top-bar" class="container">
      <div class="row">
       
        <div class="span8">
          <div class="account pull-right">
            <ul class="user-menu">        
              <!-- <li><a href="#">My Account</a></li> -->
              <li><a href="<?php echo base_url(); ?>cart_cont/view_cart">View Cart</a></li>
              <li><a href="<?php echo base_url(); ?>user_cont/logout">Checkout</a></li>   
           <?php    echo " logged in as:".$this->session->userdata('name') ;
                  ?> 
              
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
 



 <form method="post" action="<?php echo site_url("user_cont/sort");?>">
  <!-- <form method="post" action="<?php echo site_url("user_cont/view_Product");?>"> -->
 SortBY: <select name="sort" onchange="this.form.submit()">
   
    <option value="">Sort</option>
    <option value="desc"> Desc</option>
    <option value="asc">Asc</option> 
  </select>
</form>

          
          <form method="post" action="<?php echo site_url("user_cont/filter");?>">
  
 Filter: <select name="filter" onchange="this.form.submit()">
   
    <option value="">Price</option>
    <option value="1000 AND 2000">1000-2000</option>
    <option value="3000 AND 5000">3000-5000</option> 
     <option value="5000 AND 9000">5000-9000</option> 
  </select>
</form>
</nav>
        </div>
      </section>


<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   <table id="cart" class="table table-hover table-condensed">
               <thead>
                  <tr>
                     <th style="width:50%">Product</th>
                     <th style="width:10%">Price</th>
                     <th style="width:10%">Available Quantity</th>
                 
                     <th style="width:15%"></th>
                  </tr>
               </thead>

         <?php  


       foreach ($h->result() as $row)  
         {  
            ?>
                  <form method="post" action="<?php echo base_url(); ?>cart_cont/add_cart"> 

               <tbody>
                  <tr>
                     <td data-th="Product">
                        <div class="row">
                           <div class="col-sm-2 hidden-xs">

                             <?php echo '<img src="'.base_url().'uploads/'.$row->img. '" />'; ?>

                          </div>
                           <div class="col-sm-10">
                              <h4 class="nomargin"><?php echo $row->p_name;?></h4>
                              <p><?php echo $row->desc;?></p>
                           </div>
                        </div>
                     </td>
                     <td data-th="Price"><?php echo $row->price;?></td>
                    <td data-th="Available Qty"><?php echo $row->qty;?></td>
             

                     <td class="actions" data-th="">
                         <input type="hidden" name="pro_id" value="<?php echo $row->pro_id;?>">
                          <input type="hidden" name="price" value='<?php echo $row->price ; ?>' > 
                           <input type="hidden" name="qty" value='<?php echo $row->qty ; ?>' > 
                           <input type="hidden" name="purchase_qty" value='1' > 
               <input type="hidden" name="uid" value='<?php echo $this->session->userdata('uid'); ?>' > 
                         
                  <input type="submit" value="add to cart" class="btn btn-info btn-sm" name="submit"  style="background: orangered;">
                       
                     </td>
               
             
              
             </form>
               <td>
                      <form method="post" action="<?php echo base_url(); ?>user_cont/pro"> 
                        <input type="hidden" name="pro_id" value="<?php echo $row->pro_id;?>">
                          <input type="hidden" name="price" value='<?php echo $row->price ; ?>' > 
                           <input type="hidden" name="qty" value='<?php echo $row->qty ; ?>' > 
                             <input type="hidden" name="uid" value='<?php echo $this->session->userdata('uid'); ?>' > 

                      <input type="submit" value="View" class="btn btn-info btn-sm" name="submit"  style="background: orangered;">
                    </form>
                     </td>
                        </tr>
                          </tbody>
               <?php }  
         ?>

</script>
               <tfoot>
            
              <td>       <h1><a href="<?php echo base_url() . 'user_cont/enter';?>"  style="color: orangered;">Back</a></h1></td>
                 
                  </tr>
                 
               </tfoot>
            
 <div>
  
            

</div>