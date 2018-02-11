<?php
class Accessories extends CSV_Model
{
    public $accessoryId;
    public $accessoryName;
    public $accessoryImg;
    public $accessoryComfort;
    public $accessorySpeed;
    public $accessoryProfessionality;
    public $categoryName;
    public $categoryId;

    public function __construct()
    {
        parent::__construct(APPPATH . "../data/Accessories.csv", "accessoryId", "accessories");
    }
}
