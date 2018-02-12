<?php

class Accessories extends CSV_Model
{
	// Accessory Id
    public $accessoryId;
    
	// Accessory name
    public $accessoryName;
    
	// Accessory image path
    public $accessoryImg;
    
	// Accessory comfort
    public $accessoryComfort;
    
	// Accessory speed
    public $accessorySpeed;
    
	// Accessory professionality
    public $accessoryProfessionality;
	
    // Category id (foriegn key)
    public $categoryId;
	
    public function __construct()
    {
        parent::__construct(APPPATH . "../data/Accessories.csv", "accessoryId", "accessories");
    }
}
