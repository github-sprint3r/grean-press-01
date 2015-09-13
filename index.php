<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>ระบบร้านขายหนังสือออนไลน์</title>
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<form action="" method="post">
		<fieldset>
			<legend>เลือกสินค้า ภายในร้าน</legend>
				<label>ประเภทลูกค้า</label><br/>
				<input type="radio" name="customer_type" id="customer_type_regular" value="regular"/>ลูกค้าทั่วไป
				<input type="radio" name="customer_type" id="customer_type_vip"value="vip"/>ลูกค้า VIP
				<hr/>
				<label>จำนวน Book</label>
				<input type="number" name="book_number" id="book_number"/><br/>
				<br/>
				<label>จำนวน CD</label>
				<input type="number" name="cd_number" id="cd_number"/>
				<hr/>
				<button type="submit" style="font-size:25px">Check Out </button>
			</fieldset>	
	</form>	
	<script type="text/javascript">
			$(document).ready(function(){
				
			});	
	</script>
</body>

</html>