<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends Application
{
	public function index()
	{
		$this->data['pagebody'] = 'welcome_message';
		$this->render(); 
	}

	public function category($key)
	{
		return $this->output
            ->set_content_type('application/json')
            ->set_status_header(500)
            ->set_output(json_encode(array(
                    'text' => 'Error 500',
                    'type' => 'danger'
            )));
	}
	
	public function catalog($key)
	{
		 
	}
	
	public function bundle($key)
	{
		
	}
}
