<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Application
{
    function __construct() 
    {
        parent::__construct();
    }
    
    public function index()
    {
	$this->data['pagebody'] = 'historys';
        
        $source = $this->historys->all();
        $history = array();
        
        foreach($source as $record)
        {
            $history[] = array('id' => $record['id'], 
                                'purchase' =>$record['purchase'],
                                'assemblies' => $record['assemblies'], 
                                'shipment' =>$record['shipment'],
                                'transaction time' =>$record['transaction time']);
        }
        $this->data['historys'] = $history;
        $this->render();
    }
}
