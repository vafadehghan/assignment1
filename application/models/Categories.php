<?php
class Categories extends CSV_Model
{
    public $categoryId;
    public $categoryName;
    public $description;
    public $accessories;

    public function __construct()
    {
        parent::__construct(APPPATH . "../data/Categories.csv", "categoryId", "categories");
    }
}
