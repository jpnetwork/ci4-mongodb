<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class MongoConfig extends BaseConfig
{
    
    public $db = "test";//ชื่อฐานข้อมูล
    public $hostname = '127.0.0.1'; 
    public $userName = "";
    public $password = "";
    public $prefix = "";
    public $port = 27017; 
    
}
