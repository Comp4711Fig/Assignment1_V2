<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends Application
{
    public function index()
    {
	$this->data['pagebody'] = 'aboutus';
	$this->render(); 
    }
}