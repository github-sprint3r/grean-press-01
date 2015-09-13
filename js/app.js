var clickPurchase = function(data){
	$.post( "./src/checkout.php", function( data ) {
	  /* 
	  	data = {
					count_book =  4,
					count_cd = 2,
					member_type = 'Regular' , 'VIP'
	  			}

	  */

	  $.cookie('result',data);
	});



};
