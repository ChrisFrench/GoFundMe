<?php 


/*
easy CSV to array
*/

Class Restaurants {


	private $list = array();



	public function __construct() {

		$this->list = $this->csv_to_array(__dir__.'/restaurants.csv');


	}

	function getList() {
		return $this->list;
	}



	function csv_to_array($filename='', $delimiter=',')
	{	
		
	    if(!file_exists($filename) || !is_readable($filename))
	        return FALSE;

	    $header = NULL;
	    $data = array();
	    if (($handle = fopen($filename, 'r')) !== FALSE)
	    {
	        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
	        {
	            if(!$header)
	                $header = $row;
	            else
	                $data[] = array_combine($header, $row);
	        }
	        fclose($handle);
	    }
	    return $data;
	}
}