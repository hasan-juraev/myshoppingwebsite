<?php

// use to fetch product data
class ClassSearch
{

    public $db =null;
    public $search = '';

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }


    // fetch product data using getData Mehtod
    public function getData($table = 'product', $search)    
    {
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE `item_brand` LIKE '%$this->search%'");

        $resultArray = array();
        
        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){

            $resultArray[] = $item;
        }

        return $resultArray;
    }

}

// // Search object
$search = new ClassSearch($db);