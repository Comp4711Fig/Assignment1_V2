<?php

class Parts extends CI_Model {

    // Mock data
    var $data = array(
        array('id' => '1', 'partCode' => 'a1', 'caCode' => '111', 'plant' => 'Plant #1', 'timeBuilt' => '2010-01-01',
            'mug' => 'a1.jpeg'),
        array('id' => '2', 'partCode' => 'b2', 'caCode' => '222', 'plant' => 'Plant #2', 'timeBuilt' => '2011-01-01',
            'mug' => 'b2.jpeg'),
        array('id' => '3', 'partCode' => 'c3', 'caCode' => '333', 'plant' => 'Plant #3', 'timeBuilt' => '2012-01-01',
            'mug' => 'c3.jpeg'),
        array('id' => '4', 'partCode' => 'm1', 'caCode' => '444', 'plant' => 'Plant #4', 'timeBuilt' => '2013-01-01',
            'mug' => 'm1.jpeg'),
        array('id' => '5', 'partCode' => 'r2', 'caCode' => '555', 'plant' => 'Plant #5', 'timeBuilt' => '2014-01-01',
            'mug' => 'r2.jpeg'),
        array('id' => '6', 'partCode' => 'w3', 'caCode' => '666', 'plant' => 'Plant #6', 'timeBuilt' => '2015-01-01',
            'mug' => 'w3.jpeg')
    );

    public function __construct()
    {
	parent::__construct();
    }

    // get selected part
    public function get($which)
    {
	foreach ($this->data as $record) {
            if ($record['id'] == $which){
		return $record;
            }
        }
        
	return null;
    }

    // get all parts
    public function all()
    {
	return $this->data;
    }
}