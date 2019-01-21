


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div id="fullscreen_bg" class="fullscreen_bg"/>
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-8 col-xs-9 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <ul class="list-group">
                <a href="<?php echo base_url(); ?>login_cont/enter" class="list-group-item active">
                  <br/><br/><i class="glyphicon glyphicon-home"></i> Home<br/><br/>
                  </a>
                <a href="<?php echo base_url(); ?>user_cont/user_list" class="list-group-item ">
                  <br/><br/><i class="glyphicon glyphicon-tasks"></i> All Users<br/><br/>
                </a>  
                <a href="<?php echo base_url(); ?>product_cont/select_category" class="list-group-item ">
                  <br/><br/><i class="glyphicon glyphicon-transfer"></i> Add Products<br/><br/>
                </a>
                <a href="<?php echo base_url(); ?>login_cont/logout" class="list-group-item">
                  <br/><br/><h4 class="glyphicon glyphicon-wrench"></h4> Logout<br/><br/>
                </a>
              </ul>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <center>
                      <h1 class="glyphicon glyphicon-user" style="font-size:4em;color:#00001a"></h1>
                      <!-- <h2 style="margin-top: 0;color:#00001a">Welcome</h2> -->
                      <h3 style="margin-top: 0;color:#00001a">




                       <?php 



                       echo "You have logged in sucessfully..";
                 echo '<h2>Welcome - '.$this->session->userdata('adname').'</h2>';

 // $sess_id = $this->session->userdata('uid');
                
 //   if(!empty($sess_id))
 //   {
 //        $this->load->view("admin_home"); 

 //   }else{

      
 //       $this->load->view("login");        
 //   }  

?>


</h3>
                    </center>
                </div>
              
              
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-tasks" style="font-size:4em;color:#00001a"></h1>
                      <h2 style="margin-top: 0;color:#00001a"><a href="<?php echo base_url(); ?>user_cont/user_list" class="btn btn-sm btn-primary btn-block" role="button">View User</a></h2>
                      <!-- <h3 style="margin-top: 0;color:#00001a">My Schedule</h3> -->
                    </center>
                </div>
                  <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-transfer" style="font-size:4em;color:#00001a"></h1>
                      <h2 style="margin-top: 0;color:#00001a"><a href="<?php echo base_url(); ?>category_cont/add_pro" class="btn btn-sm btn-primary btn-block" role="button">Category</a></h2>
                    
            </div>
    
               
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-transfer" style="font-size:4em;color:#00001a"></h1>
                      <h2 style="margin-top: 0;color:#00001a"><a href="<?php echo base_url(); ?>product_cont/select_category" class="btn btn-sm btn-primary btn-block" role="button">Product</a></h2>
                    
            </div>
        </div>
  </div>
</div>
     