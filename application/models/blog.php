<?php
class Blog extends CI_Model {
    function __construct()
    {
        parent::_construct();
    }

    function get_posts() {
        $query = $this->db->get('blog-posts', 10);
        return $query->result();
        
    }
}
