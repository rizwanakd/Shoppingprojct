<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<link rel="stylesheet"  type="text/css" href="jquery.jqzoom.css">
<script type="text/javascript" src="jquery.jqzoom-core-pack.js"></script>
 <link href="<?php echo base_url();?>assets/css/imgzoom.css" rel="stylesheet"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>
<style>
.img{
  vertical-align:middle;
  height:80px;
}
</style>

    <main class="container pt-5">
       
        <table class="table table-bordered table-definition mb-5">
            <thead class="table-warning ">
                <tr>
                    <th></th>
                    <th>Product id</th>
                    <th>Product name</th>
                    <th>Qty</th>
                     <th>Image</th>
                    <th>Status</th>
                    <th>Enable</th>
                </tr>
            </thead>
            <?php foreach($posts as $post): ?>

<form method="post" action="<?php echo base_url() . "user_cont/enable_product"?>">
            <tbody>
                <tr>
                    <td>
                      <!--   <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                        </label> -->
                    </td>
                    <td><?php echo $post->pro_id; ?></td>
                    <td><?php echo $post->p_name; ?></td>
                    <td><?php echo $post->qty; ?></td>
                    <td > <?php echo '<img src="'.base_url().'uploads/'.$post->img. '" height="80px"/>'; ?></td>

                    <td><?php echo $post->status; ?></td>

 <input type="hidden" name="pro_id" value='<?php echo $post->pro_id ; ?>' > 

                    <td>   <input type="submit" id="submit" name="dsubmit" class="rbutton" value="Enable" class="add-to-cart btn btn-default" > 
</td>
                </tr>
              
            </tbody>

       
        </form>

       
         <?php endforeach; ?>
         <!--   <a href="<?php echo base_url() . "user_cont/delete_user/" . $post->pro_id; ?>">
<button class="like btn btn-default">Delete</button></a> -->
</table>
           
        
      <h1><a href="<?php echo base_url() . 'login_cont/enter';?>">Back</a></h1>
    </main>