<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Update Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

<script type="text/javascript">

  function checkname()
  {
    var name = document.forms["registrationForm"]["name"];

     if (name.value == "")                                  
    { 
      document.getElementById("msg").innerHTML = "required";
       // window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    }
    return true;
  }

   function ValidateEmail()
  {
  var email = document.forms["registrationForm"]["email"];
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(email.value.match(mailformat))
  {
   document.getElementById("emailmsg").innerHTML = "valid email_id";
  return true;
  }
  else
  {
 document.getElementById("emailmsg").innerHTML = "enter proper email";
  email_id.focus();
  return false;
  }
  }

  function validatecontact()
  {
 var contactno = document.forms["registrationForm"]["contact"];
     var phoneno = /^\d{10}$/;
  if(contactno.value.match(phoneno))

  {
      document.getElementById("contactmsg").innerHTML = "valid no";
     // contactno.focus();
  return true;
    }
     else
  {
 document.getElementById("contactmsg").innerHTML = "enter 10 digits only";
  //contactno.focus();
  return false;
  }

  }



  function validatepassword()
  {
  var password = document.forms["registrationForm"]["password"];
  var letters = /^[0-9a-zA-Z]+$/;
  if(password.value.match(letters))
  {
document.getElementById("pwdmsg").innerHTML = "password is valid ";
  return true;
  }
  else
  {
  document.getElementById("pwdmsg").innerHTML = "enter alphanumeric characters only";
  password.focus();
  return false;
  }
}


function validateaddress()
  {
  var address = document.forms["registrationForm"]["address"];
  var letters =  /^[A-Za-z]+$/;
  if(address.value.match(letters))
  {
document.getElementById("addmsg").innerHTML = "address is valid ";
  return true;
  }
  else
  {
  document.getElementById("addmsg").innerHTML = "enter alphabets only";
  password.focus();
  return false;
  }
}


    </script>  





</head>
    <body>    
    <div id="top-bar" class="container">
      <div class="row">

  <div class="span8">
          <div class="account pull-right">
            <ul class="user-menu">        
              <!-- <li><a href="#">My Account</a></li> -->
              <li><a href="<?php echo base_url(); ?>cart_cont/view_cart">View Cart</a></li>
              <li><a href="<?php echo base_url(); ?>user_cont/logout">Logout</a></li>   
               <li><a href="<?php echo base_url(); ?>user_cont/update_profile">View profile</a></li>   
           <?php    echo " logged in as:".$this->session->userdata('name') ;
                // echo 'logged in as:<h3> '.$this->session->userdata('name').'</h2>';       ?> </li>
              <!-- <li><a href="<?php echo base_url(); ?>user_cont/login">Login</a></li>     -->
           <form method="post" action="<?php echo base_url(); ?>user_cont/search_products">  


 </ul>
       </form>
          </div>
        </div>
      </div>
    </div>

<!-- <div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>  <?php    echo "User:".$this->session->userdata('name') ;?></h1></div>
    
    </div> -->
    <div class="row" style="    margin-top: 20px;
">
  		<div class="col-sm-3"><!--left col-->
         

    <!--   <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>

                -->
          

          
        </div><!--/col-3-->
    	<div class="col-sm-9" style="    margin-left: 110px;
">
            <ul class="nav nav-tabs">
                <!-- <li class="active"><a data-toggle="tab" href="<?php echo base_url() . "user_cont/enter"?>" >Home</a></li> -->
                <!-- <a href="<?php echo base_url() . "user_cont/enter"?>"  data-toggle="tab"> Home </a> -->
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
               
                  <form class="form" id="user_form" action="<?php echo base_url() . "user_cont/update"?>" method="post" name="registrationForm" >
                      <div class="form-group">
                          <?php 
                          foreach ($h->result() as $row)  
         {
                          ?>
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="name" id="name" value="<?php echo $row->name;?>" title="enter your first name if any."  onblur="checkname()" style="
    height: 40px;
"> <span id="msg" style="color:red"></span>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Address</h4></label>
                              <input type="text" class="form-control" name="address" id="address" value="<?php echo $row->address;?>" onblur="validateaddress()" title="enter your last name if any." style="
    height: 40px;
"><span id="addmsg" style="color:red"></span> 
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>ContactNo</h4></label>
                              <input type="text" class="form-control" name="contact" id="contact" value="<?php echo $row->contactno;?>" title="enter your phone number if any."  onblur="validatecontact()" style="
    height: 40px;
"><span id="contactmsg" style="color:red"></span> 
                          </div>
                      </div>
          
                    
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" value="<?php echo $row->email_id;?>" title="enter your email." onblur="ValidateEmail()" style="
    height: 40px;
"> <span id="emailmsg" style="color:red"></span>
                          </div>
                      </div>
                    
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" value="<?php echo $row->password;?>" title="enter your password."   onblur="validatepassword()" style="
    height: 40px;
"> <span id="pwdmsg" style="color:red"></span>
                          </div>
                      </div>
                     
                      <?php 
                    }?>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                              <!--  	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button> -->
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
             
           
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                     <hr>                                    
         <h1><a href="<?php echo base_url() . 'user_cont/enter';?>">Back</a></h1>
          </div>        
        </div>
      </section>