<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Part extends Application
{    
    function __construct()
    {
	parent::__construct();
    }
    
    public function index()
    {
	$this->data['pagebody'] = 'parts';
        
        $source = $this->parts->all();
	$parts = array ();
        
	foreach ($source as $record)
	{
            $parts[] = array ('id' => $record['id'], 'partCode' => $record['partCode'], 'caCode' => $record['caCode'], 
                'plant' => $record['plant'], 'timeBuilt' => $record['timeBuilt'], 'mug' => $record['mug']);
        }

	$this->data['parts'] = $parts;

	$this->render(); 
    }
    
    public function getPart($id){
        $this->data['pagebody'] = 'single_part';	
	$source = $this->parts->get($id);
	$this->data = array_merge($this->data, $source);
        $this->render();
    }
}
