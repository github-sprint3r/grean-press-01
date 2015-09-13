<?php

class CheckOut{
	private $books = [ "Real-World Solutions for Developing High-Quality PHP Framework and Applications",
		"Lean Architecture for Agile Software Development",
		"Patterns of Enterprise Application Architecture",
		"Don't make me think!",
		"101 Design Ingredients",
		"Extreme Programming Installed"
	];
	private $disc = ["Bodyslam Album คราม"];
	private $numbook;
	private $numDisc;
	private $type_member;
	/*
	Input:
		- ???
	}
	*/
	function __construct( $numbook, $numDisc, $type_member){
		$this->numbook = $numbook;
		$this->numDisc = $numDisc;
		$this->type_member = $type_member;
	}

	function getText(){
		// VIP ?
		if( ! $this->checkUserVIP($this->type_member) ) return "เสียค่าจัดส่งสินค้า";
		if( $this->numbook < 5 ) return "เสียค่าจัดส่งสิ้นค้า";
		return "ฟรีค่าจัดส่งสินค้า";
	}

	function getBooks(){
		return array_slice($this->books, 0, $this->numbook);
	}

	function getDisc(){
		return array_slice($this->disc,0, $this->numDisc);
	}


	function checkUserVIP($uid){
		if($uid == 1){
			return true; // VIP
		}
		return false; // regular member
	}

}

?>