<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * 首页的显示
 */
class Home extends CI_Controller {
    protected $lists = array(
        'kuaixun'     => array('id'=>6, 'count'=>6),
        'inform'      => array('id'=>2, 'count'=>6),
        'competition' => array('id'=>5, 'count'=>5),
        'medium'      => array('id'=>4, 'count'=>5)
    );

    public function __construct() {
        parent::__construct();
        $this->load->model('posts_model');
    }

    /**
     * 首页home
     */
    public function index() {
        $lists = $this->lists;
        foreach($lists as $category => $value) {
            $top = $this->posts_model->get_top($value['id']);
            if ($top) {
                $data['top'][$category] = $top;
                $value['count'] = $value['count'] - 1;
                $top_id = $top->id;
            } else {
                $top_id = -1;
            }
            $data[$category] = $this->posts_model->get_posts(
                $value['id'], $value['count'], $top_id);
        }

        $projects = $this->posts_model->get_projects(8);

        foreach($projects as $project){
            $project->src = $this->posts_model->get_src($project->id);
        }
        $data['projects'] = $projects;

        $picture = $this->posts_model->get_picture_in_home();

        foreach($picture as $post) {
            $src = $this->tiqu($post->content);
            if (!$src) {
                continue;
            }
            $post->src = $src;
        }

        $data['picture'] = $picture;
        $this->twig->display('index.html', $data);
    }

    /**
     * 用正则表达式提取文章中的图片
     */
    public function tiqu($content){
        $str = $content;
        preg_match("/(src|SRC)=[\"|'| ]{0,}((http|HTTP):\/\/(.*)\.(gif|jpg|GIF|JPG|png)[\"| ])/isU",$str,$match);
        return $match;
    }
}
