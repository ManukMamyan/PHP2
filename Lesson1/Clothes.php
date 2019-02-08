<?php
/**
 * Created by PhpStorm.
 * User: Манук
 * Date: 03.02.2019
 * Time: 15:37
 */

class Clothes
{
    public $id;
    public $name;
    public $brand;

    public function __construct($id = null, $name = null, $brand = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->brand = $brand;
    }

    public function getClotheId()
    {
        return $this->id;
    }
}