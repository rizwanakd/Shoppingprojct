
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
   <div id="wrapper" class="container">


    <section class="navbar main-menu" style="
    margin-left: 3px;
    margin-right: 3px;
    ">
    <div class="navbar-inner main-menu">        
     <!--   <a href="<?php echo base_url(); ?>user_cont/enter" class="logo pull-left"><img src="<?php echo base_url();?>assets/themes/images/logo.png" class="site_logo" alt=""></a> -->
     <nav id="menu" class="pull-right">
    


      <ul style="
    margin-top: 45px;">
<sc style="
    font-size: 25px;
">Choose</sc>

        <?php  
        $c = $this->db->query("select *  from subcategory");

        foreach ($c->result() as $row)  
        {  
          ?>
          <form method="post" action="<?php echo base_url(); ?>user_cont/products">  

           <input type="submit" value="<?php echo $row->sub_name;?> " style="
           background: coral;              width: 200px;
   height: 30px;  margin-top: 10px;


           ">


           <input type="hidden" name="sub_id" value='<?php echo $row->sub_id ; ?>' > 

   <input type="hidden" name="uid" value='<?php echo $this->session->userdata('uid'); ?>' > 



         </form>
       <?php }  
       ?> 
</ul>
</nav>
</div>
</section>





<div class="navbar-inner button">  
  <a href="<?php echo base_url(); ?>user_cont/enter" class="logo pull-left"><img src="<?php echo base_url();?>assets/themes/images/logo.png" class="site_logo" alt="" style="
    margin-top: -200px;
"></a>
<h style="margin-left: -200px;
    font-size: 25px;">All Categories</h>
  <form method="post" action="<?php echo base_url(); ?>user_cont/view_clothes_cat">
      <!-- Categories: <select name="category" onchange="this.form.submit()"> -->
     <!-- <option>All categories</option> -->

     <?php  
     $c = $this->db->query("select *  from category");

     foreach ($c->result() as $row)  
     {  
      ?>
       <form method="post" action="<?php echo base_url(); ?>user_cont/view_clothes_cat"> 

           <input type="submit" value="<?php echo $row->name;?> " style="
           background: coral;              width: 200px;
   height: 30px;  margin-top: 10px;


           ">
                     <input type="hidden" name="cat_id" value='<?php echo $row->cat_id ; ?>' > 
</form>
      <!-- <option value="<?php echo $row->name;?> "><?php echo $row->name;?> </option> -->
    <?php 
  }  

    ?>

 
<!-- </select> -->
   

</nav>
</div>



</section>
<section  class="homepage-slider" id="home-slider">
  <div class="flexslider">
    <ul class="slides">
      <li>
        <img src="<?php echo base_url();?>assets/themes/images/carousel/banner-1.jpg" alt="" />
      </li>
      <li>
        <img src="<?php echo base_url();?>assets/themes/images/carousel/banner-2.jpg" alt="" />
        <div class="intro">
          <h1>Mid season sale</h1>
          <p><span>Up to 50% Off</span></p>
          <p><span>On selected items online and in stores</span></p>
        </div>
      </li>
    </ul>
  </div>      
</section>
</section>
<section class="main-content">
  <div class="row">
    <div class="span12">                          
      <div class="row">
        <div class="span12">
          <h4 class="title">
            <span class="pull-left"><span class="text"><span class="line"> <strong><a href="<?php echo base_url(); ?>user_cont/view_product">View Products</strong></a></span></span></span>
            <span class="pull-right">
              <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
            </span>
          </h4>
          <div id="myCarousel" class="myCarousel carousel slide">
            <div class="carousel-inner">
              <div class="active item">
                <ul class="thumbnails"> 
                  <?php
                  $query = $this->db->query("select *  from products where status='enable'");

                  foreach ($query->result() as $row)
                  {
     //   echo "product:".$row['p_name'];

                    ?>
                    <form method="post" action="<?php echo base_url(); ?>user_cont/pro"> 
                      <li class="span3">
                        <div class="product-box">
                          <span class="sale_tag"></span>


                          <p><a href="<?php echo base_url(); ?>user_cont/view_product">
                            <?php echo '<img src="'.base_url().'uploads/'.$row->img. '" />'; ?> </a></p>



                            <a href="<?php echo base_url(); ?>user_cont/view_product" class="title"> <?php echo $row->p_name; ?> </a><br/>


                            <input type="hidden" name="pro_id" value="<?php echo $row->pro_id;?>">
                            <input type="hidden" name="price" value='<?php echo $row->price ; ?>' > 
                            <input type="hidden" name="qty" value='<?php echo $row->qty ; ?>' > 
                            <input type="hidden" name="uid" value='<?php echo $this->session->userdata('uid'); ?>' > 


                            <input type="submit" value="View" class="btn btn-info btn-sm" name="submit" style="background: orangered;">

                          </div>
                        </li>
                      </form>
                    <?php       }?>



                  </ul>
                </div>

              </div>              
            </div>
          </div>            
        </div>
        <br/>

      </div>

    </div>    
  </div>        
</div>
</section>

</section>
<section id="footer-bar" style="
margin-left: 80px;
margin-right: 80px;
">
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

</div>  
</section>
<section id="copyright">
  <span>Copyright 2018 All right reserved.</span>
</section>
</div>
<script src="themes/js/common.js"></script>
<script src="themes/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
  $(function() {
    $(document).ready(function() {
      $('.flexslider').flexslider({
        animation: "fade",
        slideshowSpeed: 4000,
        animationSpeed: 600,
        controlNav: false,
        directionNav: true,
            controlsContainer: ".flex-container" // the container that holds the flexslider
          });
    });
  });
</script>
<div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 12px; right: 0px; opacity: 1; cursor: pointer;"><img src="<?php echo base_url();?>assets/img/top.png"" style="width:40px; height:40px; margin-top: 25px; margin-right: 17px;"></div>
</body>
</html>
