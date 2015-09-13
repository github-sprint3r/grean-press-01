<?php

class CheckOut{
	/*
	Input: 
		- ???
	}
	*/
	function __construct(){

	}


	function checkUserVIP($uid){
		if($uid == 0){
			return json_encode(["vip" => TRUE]);
		}
		return json_encode(["vip" => FALSE]);
	}

}

?>