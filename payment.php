
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
   




<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
    <body>    
    <div id="top-bar" class="container">
      <div class="row">
        <!-- <div class="span4">
         
        </div> -->
        <div class="span8">
          <div class="account pull-right">
             <ul class="user-menu" style="
    margin-left: 700px; ">        
              <!-- <li><a href="#">My Account</a></li> -->
              <li><a href="<?php echo base_url(); ?>cart_cont/view_cart">View Cart</a></li>
              <li><a href="<?php echo base_url(); ?>user_cont/logout">Logout</a></li>   
               <li><a href="<?php echo base_url(); ?>user_cont/update_profile">View profile</a></li>   
           <?php    echo " logged in as:".$this->session->userdata('name') ;
                // echo 'logged in as:<h3> '.$this->session->userdata('name').'</h2>';       ?> 

               </li>
             
                         
         </ul>



<div class="container">
  <!-- <form class="form-horizontal" role="form"> -->
    <fieldset style="
    padding-left: 400px;
    margin-left: 130px;
">
      <legend>Payment</legend>
      <form method="post" id="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>email_cont/mail">
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name" value="<?php    echo $this->session->userdata('name') ;?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Card Number</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number" >Email</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="email_id" id="email_id" placeholder="Your email id">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-3">
              <select class="form-control" name="expiry-year">
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <input type="submit" value="Pay Now" class="btn btn-success">
        </div>
      </div>
    </fieldset>
  </form>
</div>
