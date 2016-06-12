<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home  extends MY_Controller {

	public function index()
    {
        $this->load->model('Blog');

        $data['blog_posts'] = $this->Blog->get_posts();
        $this->_render('blog');
    }
}
