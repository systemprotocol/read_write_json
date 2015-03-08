<?php
class Flatten{ //this is the php class 
	public function run(){ //this is the run function within the Flatten class
	global $output; //Make varibale global
		$json = file_get_contents('test.json'); //get all contents from json file 
		$decode = json_decode($json); //decode json file using php function
		$result = new RecursiveIteratorIterator(new RecursiveArrayIterator($decode));//flatten multidimensional array using php functions
		foreach ($result as $r ) { //start of loop
			$output.=$r.' '; //print each $r variable out separately 
		} // end foreach
	echo $output; //show all items in foreach loop assigned to variable $output
	}
	
	public function write(){
		global $output; //grab global variable
		//echo $output; //uncomment to check global variable 
		$flat = fopen('flat.json', 'w');  //open json file to write to 
		fwrite($flat, json_encode($output)); //write to specified opened json file
		fclose($flat); //close specified json file
	}
	
}
$flatten = new Flatten(); //create fresh class
$flatten->run(); //run function within fresh Flatten class
$flatten->write(); //write data to new json file
?>