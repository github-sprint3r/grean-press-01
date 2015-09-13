
function ShowList(){
	var strTable;
	var Result = $.cookie("result");

	strTable = "<table id='tab'>";
	strTable = strTable+"<thread><tr>";
	strTable = strTable+"<td>No.</td>";
	strTable = strTable+"<td>Name</td></tr></thread>";

	for each (i=1;i<=Result.list_book.length;i++){
			strTable = strTable+"<tr><td>" + i +"</td>";
			strTable = strTable+"<td>" + Result.list_book[i] +"</td>";
			strTable = strTable+"</tr>"
	}
	strTable = strTable+"</table>" ;
	$("#item").append(strTable);

}

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
	  window.location = "./result.php";
	});

};