<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class MongoConfig extends BaseConfig
{
    
    public $db = "DB"; //ชื่อฐานข้อมูล
    public $hostname = '127.0.0.1'; 
    public $userName = "test_user";
    public $password = "";
    public $prefix = "";
    public $port = 27017; 
    
}
