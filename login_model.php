<?php  
 class login_model extends CI_Model  
 {  
      
function validate()
{
  // grab user input
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        
        // Prep the query
        $this->db->where('name', $name);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('user');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {

           
            $row = $query->row();
            $data = array(
                    'uid' => $row->uid,

                    'email_id'=>$row->email_id,
                     'name' => $row->name,

                   'is_logged_in'=>TRUE,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
     
        return false;
    }












      function can_login($name, $password,$userrole)  
      {  
           $this->db->where('name', $name);  
           $this->db->where('password', $password);  
             $this->db->where('userrole', 'user'); 
              $this->db->where('status', 'active'); 
           $query = $this->db->get('user');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                // echo 'true';
                // die();

            $row = $query->row();
            $session_data = array(
                    'uid' => $row->uid,
                    'name' => $row->name,
                    'is_logged_in'=>TRUE
                    );
              $this->session->set_userdata($session_data);
                return true;

           }  
           else  
           {  
            // echo 'false';
            // die();
                return false;       
           }  
      }

      function admin_login($name, $password,$userrole)  
      {  
           $this->db->where('name', $name);  
           $this->db->where('password', $password);  
             $this->db->where('userrole', 'admin'); 
           $query = $this->db->get('user');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                 $row = $query->row();
            $session_data = array(
              'uid'=>$row->uid,
                    'adname' => $row->name,
                    'userrole' => $row->userrole,
                    'is_logged_in'=>true
                    );
              $this->session->set_userdata($session_data);
                return true;

           }  
           else  
           {  
            // echo 'false';
            // die();
                return false;       
           }  
      }

// public function login($data) {

// $condition = "name =" . "'" . $data['name'] . "' AND " . "password =" . "'" . $data['password'] . "'  AND " . "userrole ='user' ";
// $this->db->select('*');
// $this->db->from('user');
// $this->db->where($condition);
// $this->db->limit(1);
// $query = $this->db->get();

// if ($query->num_rows() == 1) {
 

// return true;
// } else {
  
// return false;
// }
// }

 }  