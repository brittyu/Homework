<?php

class MY_Controller extends CI_Controller {

    public $conn;

    function __construct() {
        parent::__construct();
        $this->load->config('mongo');
        $dbname = $this->config->item('mongo_dbname');
        $ci = &get_instance();
        $ci->db = $this->mongo;
        $this->conn = $this->mongo->$dbname;

    }

    function Twig($template, $data = array()) {
        return $this->twig->display(
            $template,
            $data = array()
        );
    }

    function Render($template, $data = array()) {
        $this->twig->render(
            $template,
            $data = array()
        );
    }

    function update($collection_name, $condition, $newdata, $options=array()) {
        $options['safe'] = 1;
        if (!isset($options['multiple'])) {
            $options['multiple'] = 0;
        }
        try {
            $this->conn->$collection_name->update($condition, $newdata, $options);
            return true;
        }
        catch (MongoCursorException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     *  删除记录
     *
     * 参数：
     * $colletion_name:表名
     * $condition:删除条件
     * $options:删除选择-justOne
     *
     * 返回值：
     * 成功：true
     * 失败：false
     */
    function remove($collection_name, $condition, $options=array()) {
        $options['safe'] = 1;
        try {
            $this->conn->$collection_name->remove($condition, $options);
            return true;
        }
        catch (MongoCursorException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     *
     * 查找记录
     *
     * 参数：
     *
     * $collection_name:表名
     * $query_condition:字段查找条件
     * $result_condition:查询结果限制条件-limit/sort等
     * $fields:获取字段
     *
     * 返回值：
     * 成功：记录集
     * 失败：false
     */

    function find($collection_name, $query_condition = array(), $result_condition=array(), $fields=array()) {
        $cursor = $this->conn->$collection_name->find($query_condition, $fields);

        foreach($result_condition as $key => $value) {
            if (! empty($value))
                $cursor->$key($value);
        }

        $result = array();
        try {
            while ($cursor->hasNext()) {
                $result[] = $cursor->getNext();
            }
        }
        catch (MongoConnectionException $e) {
            $this->error = $e->getMessage();
            return false;
        }
        catch (MongoCursorTimeoutException $e) {
            $this->error = $e->getMessage();
            return false;
        }
        return $result;
    }

    /**
     * 查找一条记录
     *
     * 参数：
     * $collection_name:表名
     * $condition:查找条件
     * $fields:获取字段
     *
     * 返回值：
     * 成功：一条记录
     * 失败：false
     */
    function findOne($collection_name, $condition, $fields=array()) {
        return $this->conn->$collection_name->findOne($condition, $fields);
    }
}
