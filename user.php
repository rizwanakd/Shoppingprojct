<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

  public function __construct() {

    parent::__construct();

    // load base_url
    $this->load->helper('url');
  }

  public function index(){

 
 
 $this->load->view('user_view');
  }

}