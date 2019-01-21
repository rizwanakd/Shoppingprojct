
<!DOCTYPE html>
<html lang="en">
<head>
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
	<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
	<META HTTP-EQUIV="EXPIRES" CONTENT=0>

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

</head>
<body>		
	<div id="top-bar" class="container">
		<div class="row">
        <!-- <div class="span4">
         
        </div> -->
        <div class="span8">
        	<div class="account pull-right">
        		<ul class="user-menu">        
        			<!-- <li><a href="#">My Account</a></li> -->
        			<li><a href="<?php echo base_url(); ?>cart_cont/view_cart">View Cart</a></li>
        			<li><a href="<?php echo base_url(); ?>user_cont/logout">Logout</a></li>   
        			<li><a href="<?php echo base_url(); ?>user_cont/update_profile">View profile</a></li>   
        			<?php    echo " logged in as:".$this->session->userdata('name') ;
                // echo 'logged in as:<h3> '.$this->session->userdata('name').'</h2>';       ?> 

            </li>
            <!-- <li><a href="<?php echo base_url(); ?>user_cont/login">Login</a></li>     -->
            <form method="post" action="<?php echo base_url(); ?>user_cont/search_products">  
            	<li> Search: <input type="text" name="search"></li>
            	<!-- <input type="hidden" name="search" value="search" > -->

            </ul>
        </form>
    </div>
</div>
</div>
</div>
</div>
<div id="wrapper" class="container">
	<section class="navbar main-menu">
		<div class="navbar-inner button">  
			<a href="<?php echo base_url(); ?>user_cont/enter" class="logo pull-left"><img src="<?php echo base_url();?>assets/themes/images/logo.png" class="site_logo" alt=""  ></a>
			<nav id="menu" class="pull-right">


			</nav>
		</div>
	</section>	
	<section class="header_text sub">

		<h4><span>New products</span></h4>
	</section>
	<section class="main-content">

		<div class="row">						
			<div class="span9">		

				<ul class="thumbnails listing-products" style="
				width: 1000px;
				">
				<?php
				foreach ($h->result() as $row)  
				{
					?>	
					<form method="post" action="<?php echo base_url(); ?>user_cont/pro">			  
						<li class="span3">



							<div class="product-box">
								<span class="sale_tag"></span>					

								<?php echo '<img src="'.base_url().'uploads/'.$row->img. '" /  style="
								height: 250px;
								">'; ?><br/>
								<a href="#" class="title"><?php echo $row->p_name;?></a><br/>
								<a href="#" class="category"><?php echo $row->brand;?></a>
								<p class="price"><?php echo $row->price;?></p>
								
								<input type="hidden" name="pro_id" value="<?php echo $row->pro_id;?>">
								<input type="hidden" name="price" value='<?php echo $row->price ; ?>' > 
								<input type="hidden" name="qty" value='<?php echo $row->qty ; ?>' > 
								<input type="hidden" name="uid" value='<?php echo $this->session->userdata('uid'); ?>' > 

								<input type="submit" value="View" class="btn btn-info btn-sm" name="submit">
							</div>
						</li>
					</form>
					<?php
				}
				?>       
						
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							
						</div>
					</div>
					<!--  <div class="span3 col">
	



       <?php  

       $c = $this->db->query("select *  from category");

       foreach ($c->result() as $row)  
       {  
       	?>
       	<form method="post" action="<?php echo base_url(); ?>user_cont/view_clothes_cat">  

       		<input type="submit" value="<?php echo $row->name;?> " style="
       		background: coral;     border-radius: 7px;    margin-top: 10px;


       		">

       		<!-- <input type="hidden" name="sub_id" value='<?php echo $row->sub_id ; ?>' >  

       		 <input type="hidden" name="cat_id" value='<?php echo $row->cat_id ; ?>' >

        		<input type="hidden" name="uid" value='<?php echo $this->session->userdata('uid'); ?>' > 



       	</form>
       <?php }  
       ?>

   </li>

</ul> 
<br/>
							<!-- <ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Nike</a></li>
								<li><a href="products.html">Dunlop</a></li>
								<li><a href="products.html">Yamaha</a></li>
							</ul> -->
						</div>
						
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
						 <li><a href="<?php echo base_url(); ?>user_cont/enter">Homepage</a></li>  
             
              <li><a href="<?php echo base_url(); ?>cart_cont/view_cart">Your Cart</a></li>
              <li><a href="<?php echo base_url(); ?>user_cont/logout">Logout</a></li>						
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>	
	</body>
	</html>