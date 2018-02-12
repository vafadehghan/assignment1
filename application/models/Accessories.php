<?php

class Accessories extends CSV_Model
{
    public function __construct()
    {
        parent::__construct(APPPATH . "../data/Accessories.csv", "accessoryId", "accessories");
    }
}
