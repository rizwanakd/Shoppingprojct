<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Single Product</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/single.css">
  <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/rating.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="<?php echo base_url();?>assets/css/imgzoom.css" rel="stylesheet"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>
  </head>
    <body>    
    <div id="top-bar" class="container">
      <div class="row">
        
      
        <div class="span8">
          <div class="account pull-right">
            <ul class="user-menu">        
              
              <li><a href="<?php echo base_url(); ?>cart_cont/view_cart">View Cart</a></li>
              <li><a href="<?php echo base_url(); ?>user_cont/logout">Checkout</a></li>   
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


  <body>
	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">




						 <?php 
  foreach ($h->result() as $row)  
         {
         ?>           
          <form method="post" action="<?php echo base_url(); ?>cart_cont/add_cart"> 
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1">
                <?php echo '<img src="'.base_url().'uploads/'.$row->img. '"  class="zoom" style=" width: 450px;height: 350px;" />'; ?>

              </div>
						  <div class="tab-pane" id="pic-2"><img src="<?php echo base_url();?>assets/themes/images/ladies/1.jpg" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <!-- <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?php echo base_url();?>assets/img/w2.jpg" style="
    height: 80px;
    width: 70px;
"/></a></li> -->
             
            
						</ul>
		
					</div>


  <div class="details col-md-6">
            <h3 class="product-title"><?php echo $row->p_name;?></h3>
            <div class="rating">
              <div class="stars">
                <fieldset class="rating">

    <input type="radio" id="star5" name="rating" value="5" onchange="this.form.submit()" /><label for="star5" title="Rocks!">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4"  onchange="this.form.submit()"/><label for="star4" title="Pretty good">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3"  onchange="this.form.submit()"/><label for="star3" title="Meh">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2"  onchange="this.form.submit()"/><label for="star2" title="Kinda bad">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" onchange="this.form.submit()"/><label for="star1" title="Sucks big time">1 star</label>
</fieldset>
              </div>
              <br>
             
            </div>
             <br>
              <br>
              <p class="product-description"><strong>Description: </strong><?php echo $row->desc;?></p>
            <h4 class="price"><strong>current price:</strong> <span><?php echo $row->price;?></span></h4>
            <p class="vote"><strong>Qty:</strong> <?php echo $row->qty;?> </p>
           
           
            <h5 class="sizes"><strong>sizes:</strong>
              <span class="size" data-toggle="tooltip" title="small">s</span>
              <span class="size" data-toggle="tooltip" title="medium">m</span>
              <span class="size" data-toggle="tooltip" title="large">l</span>
              <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
            </h5>
            
            <div class="action">

   <input type="hidden" name="pro_id" value="<?php echo $row->pro_id;?>">
                          <input type="hidden" name="price" value='<?php echo $row->price ; ?>' > 
                           <input type="hidden" name="qty" value='<?php echo $row->qty ; ?>' > 
                           <input type="hidden" name="purchase_qty" value='1' > 
               <input type="hidden" name="uid" value='<?php echo $this->session->userdata('uid'); ?>' > 
					<input type="submit" value="add to cart" class="btn btn-info btn-sm" name="submit" style="
    height: 40px;
    margin-left: -10px;
    margin-top: 10px;
        background: orangered;">
							
					
		
			 </form>
			<?php 
		}?>
    <br>
 
  </div>
          </div>
        </div>
  </div>
		</div>
		 <h1><a href="<?php echo base_url() . 'user_cont/enter';?>"  style="color: orangered;

">Back</a></h1>
	</div>
  </body>
</html>







