<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class User_model extends CI_Model{

    private $salt;

    function __construct(){
        parent::__construct();
        $this->salt = $this->config->item('encryption_key');

    }


    public function is_user($username, $pw){
        $data = array(
            'username'=>$username,
            'password'=>$this->encrypt($pw)
        );

        $query = $this->db->get_where('user', $data);

        if($query->num_rows() > 0)
            return $query->result();

        return FALSE;
    }


    public function alter_pw($user_id , $new_pw){
        $new_data = array('password'=>$this->encrypt($new_pw));

        $this->db->where('id', $user_id);
        $this->db->update('user', $new_data);

    }

    public function compare_pw($user_id, $compare_pw) {
        $pword = $this->db
                ->get_where('user', array('id'=>$user_id))
                ->result();
        $compare_pw = $this->encrypt($compare_pw);
        if ($pword[0]->password == $compare_pw)
            return true;
        return false;
    }


    public function create_user($username, $pw){
        $data = array(
            'username'=>$username,
            'password'=>$this->encrypt($pw)
        );
        $this->db->insert('user', $data);

    }

    public function encrypt($pw){
        return md5($this->salt.$pw);

    }
    public function get_user_count() {
        return $this->db->get('user')
            ->num_rows();
    }
    public function get_all_users() {
        return $this->db->select('username')
                ->get('user')
                ->result();
    }

}

