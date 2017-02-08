<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Application
{
    public function index()
    {
	$this->data['pagebody'] = 'history';
	$this->render(); 
    }
}
