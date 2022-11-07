<?php

class Database {
    public $config;

    public function __construct($config)
    {
        $this->config= $config;
    }

    function selectAll($table) {
        return fetchAllTasks(connectDB($this->config));
    }
}