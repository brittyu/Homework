<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Posts extends CI_Controller {

    protected $pages = array(
        'base_url' => '',
        'total_rows' => 0,
    	'per_page' => 10,
        'first_link' => '首页',
        'last_link' => '尾页'
    );

    /**
     * 加载model还有分页方法
     * 验证用户是否登陆成功
     */
    public function __construct() {
        parent::__construct();

		$this->load->library('pagination');
        $this->load->model('user_model');
        $this->load->model('posts_model');
        $this->load->model('project_category_model');

        if (!$this->session->userdata('user_id')) {
            redirect('backend/user');
        }
    }

    /**
     * 获取全部分类在backend/index.html页面中显示
     */
    public function index() {
        $data['categories'] = $this->posts_model->get_all_category();

		$this->twig->display('backend/index.html', $data);
    }

    //显示project中的大小类
    public function show_project_categories() {
        $data['larger'] = $this->project_category_model->get_larger();
        $data['little'] = $this->project_category_model->get_little();

        $this->twig->display('backend/project_categories.html', $data);
    }

    //添加project中的大小类
    public function add_project_category() {
        $category = $this->input->post('category');
        $is_larger = $this->input->post('is_larger');
        $this->project_category_model->add_category($category, $is_larger);
        redirect('backend/posts/show_project_categories');
    }

    //删除project中的分类
    public function delete_category($category_id) {
        $this->project_category_model->delete_category($category_id);
        redirect('backend/posts/show_project_categories');
    }

    public function show_project_category($category_id) {
        $data['category_id'] = $category_id;
        $this->twig->display('backend/alter_project_category.html', $data);
    }

    public function alter_project_category($category_id) {
        $category = $this->input->post('category');
        $this->project_category_model->update_category($category_id, $category);
        redirect('backend/posts/show_project_categories');
    }
    /**
     * 文章分页显示
     */
    public function page($category_id, $begin = 0) {
		$config = $this->pages;

        //定义url中哪个部分包含页数
		$config['uri_segment'] = 5;
		$config['base_url'] = site_url("backend/posts/page/$category_id");
		$config['total_rows'] = $this->posts_model->get_category_posts_sum($category_id);

		$this->pagination->initialize($config);

        $data['posts_sum'] = $config['total_rows'];
        $data['posts'] = $this->posts_model->posts_list($category_id, $config['per_page'], $begin);

		$this->twig->display('backend/posts.html', $data);
    }

    /**
     * 项目分页显示
     */
    public function project_list($begin = 0) {
		$config = $this->pages;

		$config['uri_segement'] = 5;
		$config['base_url'] = site_url("backend/posts/project_list");
		$config['total_rows'] = $this->posts_model->get_projects_sum();

		$this->pagination->initialize($config);

		$data['posts_sum'] = $config['total_rows'];
		$data['posts'] = $this->posts_model->projects_list($config['per_page'], $begin);

		$this->twig->display('backend/project_list.html', $data);
    }

    /**
     * 获取项目内容
     */
    public function project($project_id) {
		$project = $this->posts_model
	    	->get_project_by_id($project_id);

		$project[0]->src = $this->posts_model
		    ->get_project_picture($project_id);

		$larger = $this->posts_model
		    ->get_tag($project[0]->larger_tag_id);
		$little = $this->posts_model
		    ->get_tag($project[0]->little_tag_id);

		$project[0]->larger = $larger[0]->category;
		$project[0]->little = $little[0]->category;

		$data['post'] = $project[0];

		$this->twig->display('backend/project.html', $data);
    }

    /**
     * 获取要更新的项目内容
     */
    public function alter_project($project_id) {
		$project = $this->posts_model
		    ->get_project_by_id($project_id);

		$project[0]->src = $this->posts_model
		    ->get_project_picture($project_id);

        $larger = $this->project_category_model->get_larger();
        $little = $this->project_category_model->get_little();

		$project[0]->larger = $larger;
		$project[0]->little = $little;

		$data['post'] = $project[0];
		$data['id'] = $project_id;

		$this->twig->display('backend/alter_project.html', $data);
    }

    /**
     * 更新项目的内容
     */
    public function alter_pro($project_id) {
		$title = $this->input->post('title');
		$intro = $this->input->post('intro');
		$detail = $this->input->post('detail');
		$award = $this->input->post('award');
		$larger = $this->input->post('larger');
		$little = $this->input->post('little');

		$data = array(
			'larger_tag_id'=>$larger,
			'little_tag_id'=>$little,
	    	'title'=>$title,
		    'intro'=>$intro,
		    'detail'=>$detail,
	    	'award'=>$award
		);

		$i = 1;
		while ($this->input->post("src$i")) {
			$shuju = array('src'=>($this->input->post("src$i")));
			$where = array('project_id'=>$project_id, 'src_id'=>$i);
			$this->db->where($where)
				->update('project_src', $shuju);
	    	$i++;
		}

		$this->db->where('id', $project_id)
			->update('project_tag', $data);
        //跳转到更新后项目的内容页
		redirect("backend/posts/project/$project_id");
    }

    /**
     * 显示添加项目页
     */
	public function add_project() {
        $data['larger'] = $this->project_category_model->get_larger();
        $data['little'] = $this->project_category_model->get_little();
		$this->twig->display('backend/add_project.html', $data);
	}

    /**
     * 添加项目
     */
	public function add_pro() {
		$title = $this->input->post('title');
		$intro = $this->input->post('intro');
		$detail = $this->input->post('detail');
		$award = $this->input->post('award');
		$larger = $this->input->post('larger');
		$little = $this->input->post('little');

		$data = array(
			'larger_tag_id'=>$larger,
			'little_tag_id'=>$little,
	    	'title'=>$title,
		    'intro'=>$intro,
		    'detail'=>$detail,
	    	'award'=>$award
		);
		$project_id = $this->posts_model->add_project($data);
		$i = 1;
		while ($this->input->post("src$i") != false && $this->input->post("src$i") != NULL && $this->input->post("src$i") != '') {
			$shuju = array(
				'project_id'=>$project_id,
				'src'=>($this->input->post("src$i")),
				'src_id'=>$i
			);
			$this->posts_model->add_project_src($shuju);
			$i++;
		}
		redirect("backend/posts/project/$project_id");
	}

    /**
     * 删除项目
     */
	public function del_project($project_id) {
		$this->posts_model->del_project($project_id);
		$this->posts_model->del_project_src($project_id);
		redirect('backend/posts/project_list');
	}

    /**
     * 获取单篇文章
     */
    public function post($post_id) {
        $data['post'] = $this->posts_model->get_post_by_id($post_id);

		$this->twig->display('backend/post.html', $data);
    }

    /**
     * 加载添加文章页面
     */
    public function add($category_id) {
        $data['category'] = $this->posts_model->get_category_by_id($category_id);

		$this->twig->display('backend/add.html', $data);
    }

    /**
     * 添加文章
     */
    public function add_post() {
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $category_id = $this->input->post('category_id');
        $zhiding = $this->input->post('zhiding');
        $picture = $this->input->post('picture');

        $post_id = $this->posts_model->add_post($title, $content, $category_id, $picture);
		if ($zhiding) {
			$this->posts_model->update($category_id, $post_id);
		}

        redirect("backend/posts/post/$post_id");
    }

    /**
     * 获取文章内容，然后更新
     */
    public function update($post_id) {
        $data['post'] = $this->posts_model->get_post_by_id($post_id);

		$this->twig->display('backend/update.html', $data);
    }

    /**
     * 更新文章
     */
    public function update_post($post_id) {
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $picture = $this->input->post('picture');

        $this->posts_model->update_post($post_id, $title, $content, $picture);

		if ($this->input->post('zhiding')) {
			$category_id = $this->input->post('category_id');
			$this->posts_model->update_zhiding($category_id, $post_id);
		}
		redirect("backend/posts/post/$post_id");
    }

    /**
     * 删除文章
     */
    public function del_post($category_id, $post_id) {
        $this->posts_model->del_post($post_id);

        redirect("backend/posts/page/$category_id");
    }
}
