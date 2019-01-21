
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

<script type="text/javascript">


</script>
  </head>

  <body>
  
  <div class="container">
    <div class="card">
    </div>
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-md-6">
            
          
            
          </div>
          <div class="details col-md-6">
          </div>
            <h3 class="product-title">User details</h3>
            <div class="rating">
          <?php foreach($posts as $post): ?>

<form method="post" action="<?php echo base_url() . "user_cont/active_user"?>">
<label id="hide">Id :</label>
<input type="text" id="hide" name="uid" value="<?php echo $post->uid; ?>">
<label>Name :</label>
<input type="text" name="name" value="<?php echo $post->name; ?>">
<label>Email :</label>
<input type="text" name="address" value="<?php echo $post->address; ?>">
<label>Mobile :</label>
<input type="text" name="contactno" value="<?php echo $post->contactno; ?>">
<label>Status :</label>
<input type="text" name="status" value="<?php echo $post->status; ?>">


          <!--   <p class="product-description">This book is about hmm i dont know cus i never read this book before.</p>
            <h4 class="price">Current price: <span>RM40</span></h4>
            <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
         -->
            <div class="action">
              <input type="submit" id="submit" name="dsubmit" class="rbutton" value="Active" class="add-to-cart btn btn-default" > 

              

              <!-- <button class="add-to-cart btn btn-default" type="button" >Active</button> -->
              

              <!-- <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> -->
            </div>
            </form>
            <a href="<?php echo base_url() . "user_cont/delete_user/" . $post->uid; ?>">
<button class="like btn btn-default">Delete</button></a>
       
            <?php endforeach; ?>

          </div>
          

      <h1><a href="<?php echo base_url() . 'login_cont/enter';?>">Back</a></h1>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>





















