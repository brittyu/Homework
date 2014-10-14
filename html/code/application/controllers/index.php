<?php

class Index extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    function login() {
        $username = $this->input->post('username');
        $passwd = $this->input->post('password');
    }

    function updatePasswd() {
        $username = $this->input->post('username');
        $oldPasswd = $this->input->post('newPassword');
        $newPasswd = $this->input->post('newPassword');

        $error = $this->user_model
                    ->updatePasswd(
                        $username, $oldPasswd, $newPasswd
                    );
        if (! $error)
            return TRUE;
    }
}
