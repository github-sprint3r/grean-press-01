
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

