<?php
/**
 * Created by PhpStorm.
 * User: Манук
 * Date: 03.02.2019
 * Time: 15:49
 */

class Shirt extends Clothes
{
    public $neckSize;
    public $sleeveLength;

    public function __construct($id = null, $name = null, $brand = null, $neckSize = null, $sleeveLength = null)
    {
        parent:: __construct($id = null, $name = null, $brand = null);
        $this->neckSize = $neckSize;
        $this->sleeveLength = $sleeveLength;
    }

    public function getShirtId()
    {
        parent::getClotheId();
    }
}