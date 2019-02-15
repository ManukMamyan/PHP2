<?php

namespace app\models;

class Product extends Model
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $vendor_id;

    public function __constructor ($id, $name, $description, $price, $vendor_id) {
    	$this->id = $id;
    	$this->name = $name;
    	$this->description = $description;
    	$this->price = $price;
    	$this->vendor_id = $vendor_id;
    }

    public function getTableName():string
    {
        return 'products';
    }


}