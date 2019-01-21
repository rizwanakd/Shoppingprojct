
<!DOCTYPE html>  
 <html>  
 <head>  
     
      <link rel="stylesheet" 

href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
 </head>  
 <body>  
   <h1>Admin Login  </h1>
      <div class="container">  
           <br /><br /><br />  
  
           <form method="post" action="<?php echo base_url(); ?>login_cont/login_validation">  
           <!-- <form method="post" action="<?php echo base_url(); ?>user_cont/user_login_process">  -->
                <div class="form-group">  
                     <label>Enter Username</label>  
                     <input type="text" name="name" class="form-control" required />  
                
                </div>  
                <div class="form-group">  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" required />  
             
                </div>  
         <!--        <div>
<select name="userrole">
  <option value="admin">Admin</option>
  <option value="user">User</option>
</select>
                </div> -->
                <div class="form-group">  
                     <input type="submit" name="insert" value="Login" class="btn btn-info" />  
                      <!-- <label><a href="http://localhost/Shopping/user_cont/user_reg">Not a user ? Register</a></label> -->
                     <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata

("error").'</label>';  
                     ?>  
                </div>  
           </form>  
      </div>  
 </body>  
 </html>  