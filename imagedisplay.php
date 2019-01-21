<!-- <html>
    <body>

    <h3>Your file was successfully uploaded!</h3>

    <?php  print_r($upload_data); ?>   </br>
    <?php  $str=base_url()."uploads/".$user_image['name'] ?>  </br>
    <?php $str=str_replace('http://','',$str) ?>

    <?php echo $str; ?>  



       <img src="<?php echo $str; ?>"/>  </br> -->
   <!--     <?php 
$this->load->helper('directory'); //load directory helper
$dir = "uploads"; // Your Path to folder
$map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */

foreach ($map as $k)
{?>
     <img src="<?php echo base_url($dir)."/".$k;?>" alt="">
   
<?php }
          
?>  -->  

<?php

  foreach ($h->result() as $row)  
         {  
            ?>
            Name:<?php echo $row->p_name;?>
            <!-- <img src="<?php echo $row->img; ?>"> -->
            <!-- <img src="<?php echo base_url().'uploads/'.$row->img; ?>"> -->
<!-- <img src="<?php echo sprintf("uploads/%s", $row->img);?>" /> -->
<!-- <img src=”<?php echo base_url(); ?>uploads/<?php echo $row->img ; ?>” alt=””> -->
  <?php
  echo '<img src="'.base_url().'uploads/'.$row->img. '" />'; 
} 

  