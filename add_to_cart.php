<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
    <table border="1">  
      <tbody>  
         <tr>  
            <td> name</td>  
            <td>price</td>  
              <td> qty</td>  
           
            <td>category</td>
         </tr>  





          <?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->p_name;?></td>  
            <td><?php echo $row->price;?></td>  
            <td><?php echo $row->qty;?></td>  
           
            <td><?php echo $row->cat_id;?></td>  
         <td> 
         <?php }  
         ?>  
      </tbody>  
   </table>   







<body>  
</body>  
</html>  