<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * 显示项目页面
 */
class Special extends CI_Controller {
    public function index() {
        $this->load->model('posts_model');
        @$category[0]->category = '';
        $data['category'] = $category;
        $projects = $this->posts_model->get_projects(3);
        foreach($projects as $project) {
            $project->src = $this->posts_model->get_src($project->id);
            if (!isset($project->src))
                $project->src = "#";
        }
        $data['projects'] = $projects;
        $this->twig->display('special.html', $data);
    }
}
