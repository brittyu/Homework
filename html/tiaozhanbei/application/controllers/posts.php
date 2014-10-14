<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * 文章的管理显示
 */

class Posts extends CI_Controller {

    protected $pages = array(
        'base_url'   => '',
        'total_rows' => 0,
        'per_page'   => 12,

        'first_link'      => '首页',
        'first_tag_open'  => '<li>',
        'first_tag_close' => '</li>',

        'last_link'      => '尾页',
        'last_tag_open'  => '<li>',
        'last_tag_close' => '</li>'
    );

    protected $news = array(
        '6' => array('id' => '6', 'category' => "活动快讯"),
        '4' => array('id' => '4', 'category' => "媒体聚焦"),
        '5' => array('id' => '5', 'category' => "竞赛花絮"),
        '2' => array('id' => '2', 'category' => '通知公告')
    );
    protected $tiaozhanbei = array(
        '9'  => array('id' => '9', 'category' => "历届回顾"),
        '11' => array('id' => '11', 'category' => "办赛理念"),
        '8'  => array('id' => '8', 'category' => "赛事简介"),
        '10' => array('id' => '10', 'category' => "赛事章程")
    );

    public function __construct() {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('posts_model');
    }

    /**
     * 文章分页
     */
    public function page_list($category_id, $begin = 0) {
        $category_id = addslashes($category_id);
        $begin = addslashes($begin);

        $list = $this->news;
        $config = $this->pages;
        $config['uri_segment'] = 3;
        $config['base_url'] = site_url("list/$category_id/");
        $config['total_rows'] = $this->posts_model->get_category_posts_sum($category_id);
        $this->pagination->initialize($config);
        $data['result'] = $this->posts_model->posts_list($category_id, $config['per_page'], $begin);
        $category['id'] = $category_id;

        //判断分类是否存在
        if (!isset($list[$category_id]['category']))
            redirect('404');

        $category['category'] = $list[$category_id]['category'];
        $data['category'] = $category;
        $project = $this->posts_model->projects_list('2', '0');
        foreach($project as $post){
            $post->src = $this->posts_model->get_src($post->id);
        }
        $data['project'] = $project;
        $data['page_name'] = 'list';
        $this->twig->display('inform.html', $data);
    }

    /**
     * 项目分页
     */
    public function project_list($begin = 0) {
        $category_id = 3;
        $begin = addslashes($begin);
        $config = $this->pages;
        $config['uri_segment'] = 2;
        $config['base_url'] = site_url("pro_list");
        $config['total_rows'] = $this->posts_model->get_projects_sum();
        $config['per_page'] = 8;
        $this->pagination->initialize($config);

        $result = $this->posts_model->projects_list($config['per_page'], $begin);
        foreach($result as $post) {
            $post->src = $this->posts_model->get_src($post->id);
        }
        $data['result'] = $result;
        $data['category'] = $this->posts_model->get_category_by_id($category_id);

        $this->twig->display('project.html', $data);
    }

    /**
     * 单篇文章显示
     */
    public function post($category_id, $post_id = NULL) {
        $category_id = addslashes($category_id);
        $post_id = addslashes($post_id);
        if ($post_id == 0) {
            $post = $this->posts_model
                ->get_post_by_category($category_id);
        } else {
            $post = $this->posts_model
                ->get_post_by_id($post_id);
        }

        if (!$post) {
            redirect('404');
        }

        $data['post'] = $post;
        $data['page_name'] = 'new_post';
        $list = $this->news;
        $view = 'news_post.html';
        foreach($list as $l) {
            if($l['id'] == $category_id) {
                $check = true;
                break;
            }
        }
        //检测是哪个页面的文章，获取不同的view文件
        if (!isset($check)) {
            $list = $this->tiaozhanbei;
            $view = 'brief.html';
            $data['page_name'] = 'brief';
            if ($category_id == 9) {
                $view = 'introduce.html';
                $posts = $this->posts_model->get_posts_by_category($category_id);
                $i = 1;
                foreach($posts as $post) {
                    $post->cid = $i;
                    $i++;
                }
                $data['posts'] = $posts;
                $data['page_name'] = 'introduce';
            }
        }
        $category['id'] = $category_id;
        if (!isset($list[$category_id]['category']))
            redirect('404');
        $category['category'] = $list[$category_id]['category'];
        $data['category'] = $category;
        $data['list'] = $list;
        $this->twig->display($view, $data);
    }

    /**
     * 获取项目文件
     */
    public function project($project_id) {
        $project_id = addslashes($project_id);
        $project = $this->posts_model
            ->get_project_by_id($project_id);

        if(!$project) {
            redirect('404');
        }

        $project[0]->src = $this->posts_model
            ->get_project_picture($project_id);

        $larger = $this->posts_model
            ->get_tag($project[0]->larger_tag_id);
        $little = $this->posts_model
            ->get_tag($project[0]->little_tag_id);

        $project[0]->larger = $larger[0]->category;
        $project[0]->little = $little[0]->category;

        $data['post'] = $project[0];

        $this->twig->display('example.html', $data);
    }
}
