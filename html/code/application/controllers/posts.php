<?php
class Posts extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('mongo');
    }

    function index() {
        $this->twig->display('index.html');
    }
}
