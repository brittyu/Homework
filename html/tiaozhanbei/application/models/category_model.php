<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');


class Category_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function add($category){
        $this->db->insert('category', array('category'=>$category));
    }
}
