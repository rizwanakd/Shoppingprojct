<?php
 if (!$this->session->userdata('logged_in')) {
        $this->load->view('user_login');

    } 
    else
    {
  echo "success";
      //  redirect(base_url() . 'user_cont/enter');
      // // $this->load->view("homepage"); 
    }
?>