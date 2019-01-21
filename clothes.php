   
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
                // echo 'logged in as:<h3> '.$this->session->userdata('name').'</h2>';       ?> 
              <!-- <li><a href="<?php echo base_url(); ?>user_cont/login">Login</a></li>     -->
            </ul>
         
          </div>
        </div>
      </div>
    </div>
    <div id="wrapper" class="container">
      <section class="navbar main-menu">
        <!-- <div class="navbar-inner main-menu">   -->
               <div class="navbar-inner button">  
          <a href="<?php echo base_url(); ?>user_cont/enter" class="logo pull-left"><img src="<?php echo base_url();?>assets/themes/images/logo.png" class="site_logo" alt="" ></a>
          <nav id="menu" class="pull-right">
            
             
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
                  <span class="pull-left"><span class="text"><span class="line"> <strong><a href="<?php echo base_url(); ?>user_cont/view_product">Category</strong></a></span></span></span>
                  <span class="pull-right">
                    <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
                  </span>
                </h4>
                <div id="myCarousel" class="myCarousel carousel slide">
                  <div class="carousel-inner">
                    <div class="active item" style="
    width: 1200px;
">
                      <ul class="thumbnails">




                    <?php
                foreach ($h->result() as $row)  
         {
          ?>

                  <form method="post" action="<?php echo base_url(); ?>user_cont/pro"> 
                       
                        <li class="span3">
                          <div class="product-box">
                            <span class="sale_tag"></span>
                          <p><a href="<?php echo base_url(); ?>user_cont/pro">
                           <?php echo '<img src="'.base_url().'uploads/'.$row->img. '" /  style="
    height: 250px;
">'; ?>

                          </a></p> 

                            <a href="<?php echo base_url(); ?>user_cont/pro" class="title"><?php echo $row->p_name;?></a><br/>
                          
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
                    </div>
                  
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
      <section id="footer-bar">
        <div class="row">
          <div class="span3">
            <h4>Navigation</h4>
            <ul class="nav">
              <li><a href="./index.html">Homepage</a></li>  
              <li><a href="./about.html">About Us</a></li>
              <li><a href="./contact.html">Contac Us</a></li>
              <li><a href="./cart.html">Your Cart</a></li>
              <li><a href="./register.html">Login</a></li>              
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
    </body>
</html>
