<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends Application
{
	public function index()
	{
		$this->data['pagebody'] = 'welcome_message';
		$this->render(); 
	}

}