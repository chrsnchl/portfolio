<?php

class MY_Controller extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
  }

  function _render($body = 'home')
  {
      $this->data['locale'] = array("Chris", "Nichol", "chrsnchl@gmail.com");

      $this->load->view('header', $this->data);
      $this->load->view($body);
      $this->load->view('footer');
  }
}

class Admin_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    echo 'This is from admin controller';
  }
}

class Public_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    echo 'This is from public controller';
  }
}
