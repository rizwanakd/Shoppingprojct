 <html>  
 <head>  
   
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   <style>  
           body  
           {  
                margin:0;  
                padding:0;  
                background-color:#f1f1f1;  
           }  
           .box  
           {  
                width:900px;  
                padding:20px;  
                background-color:#fff;  
                border:1px solid #ccc;  
                border-radius:5px;  
                margin-top:10px;  
           }  
      </style>  
 </head>  
 <body>  
  <h1>Category </h1>
      <div class="container box">  
         
            <div class="table-responsive">  
                <br />  
                <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>  
                <br /><br />  
                <table id="user_data" class="table table-bordered table-striped">  
                     
                     <thead>  
                          <tr>  
         <th>Category</th>
      <th>Subcategory</th>
        <th>Delete</th> 
      <!-- <th>qty</th>
    
      <th>desc</th>
       
      <th>brand</th>
       <th>category</th> -->
     <th width="10%"></th>  
                               <th width="10%"></th>  
      <!-- <th>Action</th> -->
                          </tr>  
                     </thead>  
                </table>  
           </div>  
      </div>  



      <h1><a href="<?php echo base_url() . 'login_cont/enter';?>">Back</a></h1>
 </body>  
 </html>  
 <div id="userModal" class="modal fade">  
      <div class="modal-dialog">  
           <form method="post" id="user_form">  
               <div class="modal-content">  
                     <div class="modal-header">  
                          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>   -->
                          <h4 class="modal-title">Add Category</h4>  
                     </div>
                     <div class="modal-body">  
                          <label>Enter Category Name</label>  
                          <input type="text" name="name" id="name" class="form-control" />  
                          <br />  
                          <label>Enter Sub category</label>  
                          <input type="text" name="subcategory" id="subcategory" class="form-control" />  
                          <br />  
                           <!-- <label>Enter qty</label>  
                          <input type="text" name="qty" id="qty" class="form-control" />  
                          <br />  
                           
                          <label>Enter description</label>  
                          <input type="text" name="desc" id="desc" class="form-control" />  
                          <br />  
                          <label>Enter brand</label>  
                          <input type="text" name="brand" id="brand" class="form-control" />  
                          <br />  

                          <label>Enter category</label>  
                          <input type="text" name="cat_id" id="cat_id" class="form-control" />  
                          <br />  
                            -->
                       
                          <br />  
                     </div>  
                     <div class="modal-footer">  
                      <input type="hidden" name="user_id" id="user_id">
                          <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />  

                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                     </div>  
                </div>  
           </form>  




      </div>  
 </div>  
 <script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  

 $('#add_button').click(function(){  
           $('#user_form')[0].reset();  
           $('.modal-title').text("Add Category");  
           $('#action').val("Add");  
           $('#user_uploaded_image').html('');  
      })  


      var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'category_cont/fetch_user'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
      $(document).on('submit', '#user_form', function(event){  
         //  event.preventDefault();  
        
var name = $("#name").val();
var subcategory = $("#subcategory").val();
// var qty = $("#qty").val();
// var desc = $("#desc").val();
// var brand = $("#brand").val();
//var status = $("#status").val();
//var cat_id = $("#cat_id").val();


           if(name != '' && subcategory != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url() . 'category_cont/user_action'?>",  
                     method:'POST',  
                     data:new FormData(this),  
                     contentType:false,  
                     processData:false,  
                     success:function(data)  
                     {  
                          alert(data);  
                          $('#user_form')[0].reset();  
                          $('#userModal').modal('hide');  
                          dataTable.ajax.reload();  
                     }  
                });  
                  return false;  
           }  
           else  
           {  
                alert(" Fields are Required");  
           }  
      }); 




$(document).on('click', '.update', function(){ 

var user_id=$(this).attr("id");
 $.ajax({  
                     url:"<?php echo base_url();?>category_cont/fetch_single_user",  
                     method:'POST',  
                     data:{user_id:user_id},
                     dataType:"json", 
                     success:function(data)  
                     {
$('#userModal').modal('show');  
$('#name').val(data.name);  
$('#subcategory').val(data.subcategory);
// $('#qty').val(data.qty);
// $('#desc').val(data.desc);
// $('#brand').val(data.brand);
// $('#cat_id').val(data.cat_id);
$('.modal-title').text("Edit user");
$('#user_id').val(user_id);
$('#user_uploaded_image').html(data.user_image);
$('#action').val("Edit");
//$('#action').val("update");

}
                     });
 return false;  

});

 $(document).on('click', '.delete', function(){  
           var user_id = $(this).attr("id");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>category_cont/delete_single_user",  
                     method:"POST",  
                     data:{user_id:user_id},  
                     success:function(data)  
                     {  
                          alert(data);  
                          dataTable.ajax.reload();  
                     }  
                });  
           }  
           else  
           {  
                return false;       
           }  
      });  


 });  
 </script>  