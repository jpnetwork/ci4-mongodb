<?php
namespace App\Controllers;
use App\Models\MongoModel; 
use MongoDB\BSON;
class Mongo extends BaseController
{	
	
    
    function __construct()
    {
        $this->MongoModel = model('MongoModel'); 
        
    }

	public function index()
	{   
        //นับจำนวน documents
        $totalrow = $this->MongoModel->count('test'); 
        echo 'All total rows in DB: '.$totalrow.'<hr>';

        $insert_data = [
            'name' => 'Jpnet Radio streaming',
            'message' => 'ทำวิทยุออนไลน์',
            'phone' => '0614153456',
            "lastModified" => new \MongoDB\BSON\UTCDateTime(time()),
            'ipAddress' => $_SERVER['REMOTE_ADDR']
        ];
		
        //Insert new data เพิ่มข้อมูลใหม่
        $insert = $this->MongoModel->createOne('test',$insert_data);
        
        $stringID = (string)$insert;  //Return Inserted ID 
        echo 'Last inserted ObjectID : '.$stringID;

        
        //Query 20 แถวล่าสุด
        $options = ['sort' => ['lastModified' => -1],'limit' => 20];
        $query = $this->MongoModel->getList('test', [] , $options, [] ) ;
        echo '<pre>';
        
        foreach($query as $result) {
            echo date('Y-m-d H:i:s', (string)$result->lastModified);  echo ' ==> '; //แปลง timestamp ใน DB เป็นวันปัจจุบัน
            echo $result->_id.' ==> '.$result->name.' ==> '.$result->lastModified; echo '<br>';
        }
      
	}


	
}
