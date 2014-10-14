<?php
class ceshi extends MongoClient {
    function __construct() {
        parent::__construct();
    }
}
$mongo = new ceshi();
if(is_object($mongo))
    echo "is";
else
    echo "not";
var_dump($mongo);
