<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class News extends CI_Controller {

    protected $lists = array(
        'kuaixun'     => array('id'=>6,'count'=>8),
        'inform'      => array('id'=>2,'count'=>15),
        'competition' => array('id'=>5,'count'=>15),
        'medium'      => array('id'=>4,'count'=>8)
    );

    public function __construct() {
        parent::__construct();
        $this->load->model('posts_model');
    }

    public function index() {
        $lists = $this->lists;

        foreach ($lists as $category => $value) {
            $top = $this->posts_model->get_top($value['id']);
            if ($top) {
                $data['top'][$category] = $top;
                $value['count'] = $value['count'] - 1;
                $top_id = $top->id;
            } else {
                $top_id = -1;
            }
            $data[$category] = $this->posts_model
                    ->get_posts($value['id'], $value['count'], $top_id);
        }

        $data['page_name'] = 'news';
        $this->twig->display('news.html', $data);
    }
}
