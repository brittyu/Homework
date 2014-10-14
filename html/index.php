<?php

class post extends Mongo {
    public $mongo;
    function __construct() {
        var_dump(parent::__construct());
    }
}

$m = new post();
var_dump($m);
