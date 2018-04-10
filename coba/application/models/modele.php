<?php
/**
*  
*/
class Modele extends CI_Model
{
	public function getInformation(){
		$data=array(
				'name'=>array('firstname'=> "nabila",'lastname' => "rifda"),
				'address'=>"jl cms",
				'email'=>"nabilarifdaaa@gmail.com"
			);
		return $data;
	}
}
?>