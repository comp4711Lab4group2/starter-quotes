<?php

class First extends Application {
	function __construct()
	{
		parent::__construct();
	}
	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------
	function index()
    {
		$this->data['pagebody'] = 'justone';
		$record = $this->quotes->first();
		$this->data = array_merge($this->data, $record);
		
		$this->render();
	}
	function zzz()
    {
        $this->data['pagebody'] = 'justone';
  		$record = $this->quotes->first();
  		$this->data = array_merge($this->data, $record);
 		
  		$this->render();
    }
	
	function gimme($num) 
	{
		if(isset($num)) {
			$this->data['pagebody'] = 'justone';
			$record = $this->quotes->data[$num - 1];
			$this->data = array_merge($this->data, $record);
	
			$this->render();
		}
	}
         
}
