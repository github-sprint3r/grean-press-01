<?php

class CheckOut{
	$books = [
		"Real-World Solutions for Developing High-Quality PHP Framework and Applications",
		"Lean Architecture for Agile Software Development",
		"Patterns of Enterprise Application Architecture",
		"Don't make me think!",
		"101 Design Ingredients",
		"Extreme Programming Installed"
	];
	$disc = ["Bodyslam Album คราม"];
	$numbook;
	$numcd;
	$type_member;
	/*
	Input: 
		- ???
	}
	*/
	function __construct($numbook, $numcd, $type_member){
		$this->numbook = $numbook;
		$this->numcd = $numcd;
		$this->type_member = $type_member;
	}

	function getText(){
		// VIP ?
		if( ! checkUserVIP($this->type_member) ) return "เสียค่าจัดส่งสินค้า";
		if( $this->numbook < 5 ) return "เสียค่าจัดส่งสิ้นค้า";
		return "ฟรีค่าจัดส่งสินค้า";
	}

	function getBooks(){}


	function checkUserVIP($uid){
		if($uid == 1){
			return true; // VIP
		}
		return false; // regular member
	}

}

?>