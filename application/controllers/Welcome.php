<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends Application
{
    public function index()
    {
        $this->data['pagebody'] = 'catalog';
        $this->render();
    }
}
