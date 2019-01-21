

          <!-- <?php if(! is_null($msg)) echo $msg;?>     -->
           <!-- <form method="post" action="<?php echo base_url(); ?>user_cont/login_validation">   -->
           <!-- <form method="post" action="<?php echo base_url(); ?>user_cont/user_login_process">  -->
              <!--   <div class="form-group">  
                     <label>Enter Username</label>  
                     <input type="text" name="name" class="form-control" required />  
                
                </div>  
                <div class="form-group">  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" required />  
             
                </div> -->  
              <!--   <div>
<select name="userrole">
  <option value="admin">Admin</option>
  <option value="user">User</option>
</select>
                </div> -->
              <!--   <div class="form-group">  
                     <input type="submit" name="insert" value="Login" class="btn btn-info" />  
                      <label><a href="http://localhost/Shopping/user_cont/user_reg">Not a user ? Register</a></label> -->
                     <!--   <label><a href="<?php echo base_url(); ?>email_cont/mail">Forgot Password?</a></label> -->
                 <!--     <?php  
                          // echo '<label class="text-danger">'.$this->session->flashdata

// ("error").'</label>';  
                     ?>  
                </div>  
           </form>  
      </div>  
 </body>  
 </html>   -->







 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="<?php echo base_url();?>assets/css/user_login.css" rel="stylesheet"/>
<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
        <h2 class="text-center">Login Now</h2>
        
          <form method="post" action="<?php echo base_url(); ?>user_cont/login_validation" class="login-form">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text"  name="name" class="form-control" placeholder="" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" name="password" class="form-control" placeholder="" required>
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember Me</small>
    </label>
 <input type="submit" name="insert" value="Login" class="btn btn-login float-right" /> 

    <!-- <button type="submit" name="insert" value="Login"class="btn btn-login float-right">Submit</button> -->

  </div>
  <?php  
 echo '<label class="text-danger">'.$this->session->flashdata

("error").'</label>';  ?>
 <?php  
 echo '<label class="text-danger">'.$this->session->flashdata

("errorusername").'</label>';  ?>
</form>

<a href="http://localhost/Shopping/user_cont/user_reg">Not a user? Register</a>
<!-- <a href="<?php echo base_url(); ?>email_cont/mail">Forgot Password?</a> -->


<div class="copy-text"> </i>  <a href="http://grafreez.com"></a></div>
    </div>
    <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="<?php echo base_url();?>assets/img/logo4.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            
        </div>  
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="<?php echo base_url();?>assets/img/logo7.jpg" alt="First slide" style="height: 420px;">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            
        </div>  
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="<?php echo base_url();?>assets/img/logo6.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
           <!--  <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p> -->
        </div>  
    </div>
  </div>
            </div>     
        
    </div>
  </div>
</div>
</section>