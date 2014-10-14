<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Mongo extends MongoClient {

    /**
     * Create connection to mongo
     *
     * Change autoload.php
     * Add $autoload['libraries'] = array('mongo');
     */


    function __construct() {
        $ci = &get_instance();

        $ci->load->config('mongo');

        $server = $ci->config->item('mongo_server');
        $dbname = $ci->config->item('mongo_dbname');

        if ($server) {
            try {
                parent::__construct($erver);
            }
            catch (MongoConnectionException $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }

        else {
            try {
                parent::__construct();
            }
            catch (MongoConnectionException $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }
    }
}