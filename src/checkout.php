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
	function __construct( $numbook, $numDisc, $type_member){
		$this->numbook = (int) $numbook;
		$this->numDisc = (int) $numDisc;
		$this->type_member = (int) $type_member;
	}

	function getText(){
		// VIP ?
		if( ! $this->checkUserVIP($this->type_member) ) return "เสียค่าจัดส่งสินค้า";
		if( $this->numbook < 5 ) return "เสียค่าจัดส่งสินค้า";
		return "ฟรีค่าจัดส่งสินค้า";
	}

	function getBooks(){
		return array_slice($this->books, 0, $this->numbook);
	}

	function getDisc(){
		return array_slice($this->disc,0, $this->numDisc);
	}

	// send to Front-End
	function checkOutResult(){
		return json_encode(
			[ 'list_book' => $this->getBooks(),
			  'list_cd' => $this->getDisc(),
			  'result_text' => $this->getText()
			 ]
			);
	}

	function checkUserVIP($uid){
		if($uid == 1){
			return true; // VIP
		}
		return false; // regular member
	}

}

if(isset($_POST['book_number'], $_POST['cd_number'], $_POST['customer_type'])){
	$count_book = (int) $_POST['book_number'];
	$count_cd = (int) $_POST['cd_number'];
	$customer_type = (int) $_POST['customer_type'];
	$checkout = new CheckOut($count_book, $count_cd, $customer_type);
	echo $checkout->checkOutResult();
}else{
	echo json_encode(["message" => "error"]);
}


?>
