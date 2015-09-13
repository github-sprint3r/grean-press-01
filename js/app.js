
var ShowList = function(){
	var strTable;
	var Nub=1;
	//var Result = $.cookie("result");
	//var Result ={ list_book:["ios","book","php"],list_cd : ['1','2'],member_type : ['free'] };
	var Result = localStorage.getItem("result");

	strTable = "<table id='tab'>";
	strTable = strTable+"<thread><tr>";
	strTable = strTable+"<td>No.</td>";
	strTable = strTable+"<td>Name</td></tr></thread>";

	for(i=1;i<Result.list_book.length;i++){
			strTable = strTable+"<tr><td>" + Nub +"</td>";
			strTable = strTable+"<td>" + Result.list_book[i] +"</td>";
			strTable = strTable+"</tr>"
			Nub++;
	}
	for(i=1;i<Result.list_cd.length;i++){
			strTable = strTable+"<tr><td>" + Nub +"</td>";
			strTable = strTable+"<td>" + Result.list_cd[i] +"</td>";
			strTable = strTable+"</tr>"
			Nub++;
	}
	strTable = strTable+"</table>" ;
	$("#item").append(strTable);



	$("#result").append(Result.result_text);
};

var clickPurchase = function(data){
	$.post( "/src/checkout.php", function( data ) {
	  /* 
	  	data = {
					count_book =  4,
					count_cd = 2,
					member_type = 'Regular' , 'VIP'
	  			}

	  */
	  localStorage.setItem("result", data);
	  window.location = "./result.php";
	});

};

