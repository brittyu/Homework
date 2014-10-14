<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct() {
        parent::__construct();
        //$this->load->model('user_model');
    }

	public function index()
	{
        /*$post = $this->user_model->getUsername();
        foreach ($post as $id=>$name){
            var_dump("$id ");
            var_dump($name);
         */
        //$this->Twig('home.html');
        //$this->mongo->hello();
        $result_condition = array('skip' => 0);
       var_dump($this->find('user', array(), $result_condition));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
