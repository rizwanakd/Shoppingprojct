<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">


</script>
</script>
<div class="container">
    <div class="row">
        
        
        <div class="col-md-12">
        <h4>All users</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <!-- <th><input type="checkbox" id="checkall" /></th> -->
                   <th>Id</th>
                    <th>Name</th>
                     <th>Address</th>
                     <th>Contact</th>
                     <th>Status</th>
                      <!-- <th>Edit</th>
                      
                       <th>Delete</th> -->
                   </thead>
    <tbody>
         <?php foreach($posts as $post): ?>
<form method="post" id="form" action="<?php echo base_url() . "user_cont/active_user"?>">
    
    <tr>
    <td name="uid"><?php echo $post->uid; ?></td>
   
    <td><?php echo $post->name; ?></td>
    <td><?php echo $post->address; ?></td>
    <td><?php echo $post->contactno; ?></td>
    <td name="status"><?php echo $post->status; ?></td>

     <td>  <input type="hidden" name="status" value='<?php echo $post->status; ?>'>  </td>
  <td><input type="hidden" name="uid" value='<?php echo $post->uid; ?>'> </td>

 <td><input type="submit" id="submit" name="dsubmit" value="Active" class="add-to-cart btn btn-default" data-toggle="modal"  > </td>

<!-- onClick="this.disabled=true; this.value='Active';" -->
  <script type="text/javascript">
       $('form').submit(function(){
    $(this).find('button[type=submit]').prop('disabled', true);
});
    </script>
</form>


   <td> <a href="<?php echo base_url() . "user_cont/delete_user/" . $post->uid; ?>">
<button class="like btn btn-default" id="btn">Delete</button></a></td>
  <!--   <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> -->
    </tr>
  <script>
      $(document).ready (function() { 
 $(“#btn1”).bind(‘click’, function(event)
 {
  $(“#btn1”).css(“background-color”, “yellow”); 
   $(“#btn2”).css(“background-color”, “”);
      });
    });
  </script>
    
    </tbody>

         <?php endforeach; ?>
        

</table>
<a href="<?php echo base_url() . "login_cont/enter" ; ?>">
<button class="like btn btn-default">Back</button></a>


                
            </div>
            
        </div>
    </div>
</div>



  
    
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>