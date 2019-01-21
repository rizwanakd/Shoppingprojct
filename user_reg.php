 <html>  
 <head>  
   
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script type="text/javascript">

  function checkForm(form)
  {
    var name = document.forms["RegForm"]["name"];

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
  var email = document.forms["RegForm"]["email_id"];
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(email.value.match(mailformat))
  {
   document.getElementById("emailmsg").innerHTML = "valid";
  return true;
  }
  else
  {
 document.getElementById("emailmsg").innerHTML = "invalid";
  email_id.focus();
  return false;
  }
  }

  function validatecontact()
  {
 var contactno = document.forms["RegForm"]["contactno"];
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
  var password = document.forms["RegForm"]["password"];
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
    </script>  
   <style>  
           body  
           {  
                margin:0;  
                padding:0;  
                   background: linear-gradient(to bottom, #FFB88C, #DE6262);

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
  <h1 style="
    text-align: center;
">Register </h1>
      <div class="container box">  
         
            <div class="table-responsive">  
                <br />  
                <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>  
                <br /><br />  
                <table id="user_data" class="table table-bordered table-striped">  
                     
                     <thead>  
                          <tr>  
          
         <!-- <th>User ID</th>                 -->
      <th> Name</th>
      <th>Address</th>
      <th>ContactNo</th>
      <th>Password</th>
      <th>Email_id</th>
      <th>Status</th>
      <th>Role</th>
    
    <!--  <th width="10%">Edit</th>  
                               <th width="10%">Delete</th>  -->
      <!-- <th>Action</th> -->
                          </tr>  
                     </thead>  
                </table>  
           </div>  
      </div>  
 </body>  
 </html>  
 <div id="userModal" class="modal fade">  
      <div class="modal-dialog">  
           <form method="post" id="user_form" name="RegForm" onsubmit="return checkForm()">  
               <div class="modal-content">  
                     <div class="modal-header">  
                          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>   -->
                          <h4 class="modal-title">Add User</h4>  
                     </div>
                     <div class="modal-body">  
                          <label>Enter Name</label>  
                          <input type="text" name="name" id="name" class="form-control"  />  
                        <span id="msg" style="color:red"></span>
                          <br />  
                          <label>Enter Address</label>  
                          <input type="text" name="address" id="address" class="form-control" />  
                          <br />  
                           <label>Enter contactno</label>  
                          <input type="text" name="contactno" id="contactno" onblur="validatecontact()" class="form-control" /> <span id="contactmsg" style="color:red"></span> 
                          <br />  
                          <label>Enter password</label>  
                          <input type="password" name="password" onblur="validatepassword()" id="password" class="form-control" />   <span id="pwdmsg" style="color:red"></span>
                          <br />  
                           
                          <label>Enter email</label>  
                          <input type="text" onblur="ValidateEmail()" name="email_id" id="email_id" class="form-control" />   <span id="emailmsg" style="color:red"></span>
                          <br />  
                             <br />  
                           
                         <!--  <label>Enter Status</label>  
                          <input type="text" name="status" id="status" class="form-control" />  
                          <br />   -->
                           
                          <label>Enter Role</label>  
                         <select name="userrole">
                          <option value="admin">Admin</option>
                         <option value="user">User</option>
                       </select>
                          <br />  
                         
                     </div>  
                     <div class="modal-footer">  
                      <input type="hidden" name="user_id" id="user_id">
                          <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />  

                        <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>   -->
                     </div>  
                </div>  
           </form>  




      </div>  
 </div>  

      <h1><a href="<?php echo base_url() . 'user_cont/login';?>">Back</a></h1>
 <script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  

 $('#add_button').click(function(){  
           $('#user_form')[0].reset();  
           $('.modal-title').text("Add User");  
           $('#action').val("Add");  
           $('#user_uploaded_image').html('');  
      })  


      var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'user_cont/fetch_user'; ?>",  
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
var address = $("#address").val();
var contactno = $("#contactno").val();
var password = $("#password").val();
var email_id = $("#email_id").val();
//var status = $("#status").val();
var userrole = $("#userrole").val();


           
           if(name != '' && address != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url() . 'user_cont/user_action'?>",  
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
                alert("Fields are Required");  
           }  
      }); 




$(document).on('click', '.update', function(){ 

var user_id=$(this).attr("id");
 $.ajax({  
                     url:"<?php echo base_url();?>insert_form/fetch_single_user",  
                     method:'POST',  
                     data:{user_id:user_id},
                     dataType:"json", 
                     success:function(data)  
                     {
$('#userModal').modal('show');  
$('#firstname').val(data.firstname);  
$('#middlename').val(data.middlename);
$('#lastname').val(data.lastname);
$('#address').val(data.address);
$('#gender').val(data.gender);
$('#email_id').val(data.email_id);
$('#password').val(data.password);
$('#hobbies').val(data.hobbies);
$('.modal-title').text("Edit user");
$('#user_id').val(user_id);
$('#user_uploaded_image').html(data.user_image);
$('#action').val("Edit");

}
                     })
 return false;  

});

 $(document).on('click', '.delete', function(){  
           var user_id = $(this).attr("id");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>insert_form/delete_single_user",  
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