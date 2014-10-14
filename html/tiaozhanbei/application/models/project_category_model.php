<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

/**
 *  挑战杯后台
 *  用来操作项目展示的分类的
 */
class Project_category_model extends CI_Model {

    public function add_category($category, $is_larger) {
        $data = array(
            'category' => $category,
            'is_larger' => $is_larger
        );
        $this->db->insert('project_categories', $data);
    }

    public function delete_category($category_id)  {
        $this->db->delete('project_categories', array('id' => $category_id));
    }

    public function update_category($category_id, $category) {
        $this->db->where('id', $category_id);
        $this->db->update('project_categories', array('category' => $category));
    }

    public function get_larger() {
        $this->db->where('is_larger', 1);
        return $this->db
                ->get('project_categories')
                ->result();
    }

    public function get_little() {
        $this->db->where('is_larger', 0);
        return $this->db
                ->get('project_categories')
                ->result();
    }
}
