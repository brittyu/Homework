<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Posts_model extends CI_Model{

    public function __construct(){
        parent::__construct();

    }


    public function posts_list($category_id, $num, $begin){
        $posts = $this->db->select('posts.id, title, date, posts.category_id, category.category')
                        ->where('category_id', $category_id)
                        ->join('category','category.id = posts.category_id')
                        ->order_by('date','desc')
                        ->get('posts',$num, $begin)
                        ->result();
        foreach($posts as $post) {
            $post->date = substr($post->date, 0, 10);
        }
        return $posts;

    }


    public function projects_list($num, $begin){
        return $this->db->select('id,title,intro')
            ->get('project_tag',$num,$begin)
            ->result();
    }


    public function get_src($project_id,$num = 1){
        $src =  $this->db->get_where('project_src',array('project_id'=>$project_id),$num)
            ->result();
        if ($src) {
            return $src[0]->src;
        }
        return NULL;
    }



    //获取最新资讯和通知公告
    public function get_picture_in_home(){
        $picture = $this->db->select('id, content, category_id')
            ->get_where('posts', array('picture'=>'1'), '4')
            ->result();
        return $picture;
    }


    //提取index中的文章
    public function get_posts($category_id, $count, $top_id = -1) {
        $posts = $this->db
                ->select('id, title, date, category_id')
                ->from('posts')
                ->where('category_id', $category_id)
                ->where('id !=', $top_id)
                ->limit($count)
                ->order_by('date', 'desc')
                ->get()
                ->result();
        foreach($posts as $post) {
            $post->date = substr($post->date, 0, 10);
        }
        return $posts;
    }

    public function get_top($category_id) {
        $result = $this->db
                ->select('top')
                ->get_where('category', array('id' => $category_id))
                ->result();

        if ($result[0]->top == NULL) {
            return false;
        }

        $top = $this->db
                ->select('id, title, date, category_id')
                ->from('posts')
                ->where('id', $result[0]->top)
                ->get()
                ->result();
        return $top[0];
    }
    public function update_zhiding($category_id, $post_id) {
        $this->db->where('id', $category_id)
            ->update('category', array('top'=>$post_id));
    }

    public function get_posts_in_news($category_id, $num){
        return $this->db->select('id,title,date')
            ->get_where('posts', array(
            'category_id'=>$category_id
            ), $num)
            ->result();
    }


    public function get_category_by_id($category_id){
        return $this->db
            ->get_where('category', array('id'=>$category_id))
            ->result();

    }


    public function get_all_category(){
        $not_in = array('3', '12', '13', '14', '15');

        return $this->db->where_not_in('id', $not_in)
            ->get('category')
            ->result();
    }


    //根据分类获取所有文章,做成在controller中做成分页
    public function get_posts_by_category($category_id){
        $posts = $this->db->select('id, title, date, category_id')
            ->where('category_id', $category_id)
            ->get('posts')
            ->result();

        return $posts;

    }
    public function get_post_by_category($category_id) {
        return $this->db->select('id, title, content, date')
            ->where('category_id', $category_id)
            ->get('posts')
            ->result();
    }


    public function get_project_by_id($project_id){
        return $this->db->select('*')
            ->get_where('project_tag', array(
            'id'=>$project_id
            ))
                ->result();
    }


    public function get_project_picture($project_id){
        return $this->db->get_where('project_src', array(
            'project_id'=>$project_id
            ))
            ->result();
    }


    public function get_tag($tag_id){
        return $this->db
            ->get_where('project_categories', array('id'=>$tag_id))
            ->result();
    }


    public function add_project($data) {
        $this->db->insert('project_tag', $data);

        return $this->db->insert_id();
    }
    public function add_project_src($data) {
        $this->db->insert('project_src', $data);
    }
    public function get_projects($sum){
        return $this->db->get('project_tag', $sum)
                ->result();
    }


    public function get_intro($category_id){
        return $this->db->select('*')
            ->join('category', 'category.id = posts.category_id')
            ->get_where('posts', array(
            'category_id'=>$category_id
            ))
            ->result();
    }


    public function get_posts_sum(){
        return $this->db
            ->get('posts')
            ->num_rows();
    }


    public function get_category_posts_sum($category_id){
        return $this->db
            ->get_where('posts', array(
                'category_id'=>$category_id
            ))
            ->num_rows();
    }


    public function get_projects_sum(){
        return $this->db->get('project_tag')
            ->num_rows();
    }


    public function get_post_by_id($post_id){
        return $this->db
                ->get_where('posts', array(
                    'id' => $post_id
                ))
                ->result();

    }


    public function get_news_category(){
        return $this->db->where('id', 4)
            ->or_where('id', 5)
            ->or_where('id', 6)
            ->get('category')
            ->result();
    }


    public function del_post($post_id){
        $this->db->delete('posts', array(
            'id' => $post_id
        ));
    }


    public function del_project($project_id){
        $this->db->delete('project_tag', array(
            'id' => $project_id
        ));
    }
    public function del_project_src($project_id) {
        $this->db
            ->delete('project_src', array(
                'project_id'=>$project_id
            ));
    }


    public function add_post($title, $content, $category_id, $picture = NULL){
        $data = array(
            'title'       => $title,
            'content'     => $content,
            'category_id' => $category_id,
            'picture'     => $picture
        );

        $this->db->insert('posts', $data);
        return $this->db->insert_id();
    }


    public function update_post($post_id, $title, $content, $picture){
        if($picture) $picture = 1;
        $data = array(
            'title'   => $title,
            'content' => $content,
            'picture' => $picture
        );

        $this->db->where('id', $post_id);
        $this->db->update('posts', $data);
    }

}
