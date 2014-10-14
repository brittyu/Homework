<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed');
/*
 *
 * 挑战杯后台
 *
 * 用于后台用户登陆登出
 * xs
 */

class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('user_model');
	}

    /**
     * 检查登陆
     */
    public function index(){
		$token = $this->session->userdata('user_id');
        if($token === FALSE){
            $this->twig->display('backend/signin.html');
        }
        else{
            redirect('backend/posts');
		}
    }

    /**
     * 登陆
     */
    public function login(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username','required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
        if($this->form_validation->run() == FALSE){
            redirect('backend/user/index');
        }
        else{
            //对用户名进行转义,密码会进行加密匹配，所以不转义
            $username = addslashes($this->input->post('username'));
            $username = str_replace(';', '', $username);
            $pw = $this->input->post('password');
            $query = $this->user_model->is_user($username, $pw);
            if($query === FALSE){
                redirect('backend/user');
            }
            else{
				$user_id = $query[0]->id;
				$this->session->set_userdata('user_id', $user_id);
                redirect('backend/posts');
            }
        }
    }

    /**
     * 退出
     */
    public function logout(){
        $this->session->sess_destroy();
        redirect('backend/user');
    }

    /**
     * 更新密码页显示
     */
	public function update_pw() {
		$this->twig->display('backend/alter_pw.html');
	}

    /**
     * 更新密码
     */
    public function alter_pw(){

		$this->load->model('user_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('ord_pw', 'Ord_pw', 'required|xss_clean');
		$this->form_validation->set_rules('new_pw', 'New_pw', 'required|xss_clean');
		$this->form_validation->set_rules('conf_pw', 'Conf_pw', 'required|xss_clean');
		if($this->form_validation->run() != FALSE){
	    	$ord_pw = $this->input->post('ord_pw');
		    $new_pw = $this->input->post('new_pw');
		    $conf_pw = $this->input->post('conf_pw');
	    	$user_id = $this->session->userdata('user_id');

		    if($this->user_model->compare_pw($user_id, $ord_pw)) {
				if($new_pw == $conf_pw){
		   			$this->user_model->alter_pw($user_id, $new_pw);
				}
			}
			redirect('backend/posts');
		}
    }

    /**
     * 添加用户页显示
     */
	public function add_user() {
		$this->twig->display('backend/add_user.html');
	}

    /**
     * 添加用户
     */
	public function add_u() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('pw', 'password', 'required|xss_clean');
		$this->form_validation->set_rules('conf_pw', 'confirm_password', 'required|xss_clean');
		if ($this->form_validation->run() != false) {
			$username = $this->input->post('username');
			$password = $this->input->post('pw');
			$this->user_model->create_user($username, $password);
		}
		redirect('backend/posts');
	}

    /**
     * 用户列表
     */
	public function user_list() {
		$data['count'] = $this->user_model->get_user_count();
		$username = $this->user_model->get_all_users();
		$i = 1;
		foreach($username as $user) {
			$user->uid = $i; $i++;
		}
		$data['username'] = $username;
		$this->twig->display('backend/user_list.html', $data);
	}
}
