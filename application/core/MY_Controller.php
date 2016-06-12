<?php

class MY_Controller extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->helper('url');

      //dynamically load css-- views/myview.php loads css/myview.css if it exists

      $this->data['css'] = array(
          base_url().'assets/css/pages.css',
          'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
          'https://fonts.googleapis.com/css?family=Raleway:400,700'
      );
      $this->data['js'] = array('program.js');
  }

  function _render($body = 'home')
  {
      $this->data['locale'] = array("Chris", "Nichol", "chrsnchl@gmail.com");
      if(file_exists(FCPATH.'/assets/css/'.$body.'.css')):
            array_push($this->data['css'], base_url()."assets/css/".$body.".css");
      endif;

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
