<?php

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }
    function getUsername() {
        //return $this->model->user->find();
        return $this->db->blog->user->find();
    }

    function modify($username, $passwd) {
        $query = array('username' => $username, 'password' => $passwd);
        $user = $this->db
            ->blog
            ->user
            ->find($query)
            ->count();
        if ($user !== 1)
            return FALSE;

        return TRUE;
    }

    function addUser($username, $passwd) {
        $query = array('username' => $username, 'password' => $passwd);
        $this->db
            ->blog
            ->user
            ->insert($query);

        $error = $this->db->getLastError();
        if ($error != null)
            return FALSE;

        return TRUE;
    }

    function updatePasswd($username, $oldPasswd, $newPasswd) {
        $query = array('username' => $username, 'password' => $oldPasswd);
        $newData = array('password' => $newPasswd);
        $option = array('safe' => TRUE);

        $error = $this->db
            ->blog
            ->user
            ->update($query, $newData, $option);

        var_dump($error);
    }

    function updateUser($oldUsername, $passwd, $newUsername) {
        $query = array('username' => $oldUsername, 'password' => $passwd);
        $error = $this->db
            ->blog
            ->user
            ->update(
                $query,
                {'\$set': {"username": $username}}
            );
        var_dump($error);
    }
}
