<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>ระบบร้านขายหนังสือออนไลน์</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body>
	<form action="" method="post">
		<fieldset>
			<legend>เลือกสินค้า ภายในร้าน</legend>
				<label>ประเภทลูกค้า</label><br/>
				<input type="radio" name="customer_type" id="customer_type_regular" value="0" checked/>ลูกค้าทั่วไป
				<input type="radio" name="customer_type" id="customer_type_vip"value="1"/>ลูกค้า VIP
				<hr/>
				<label>จำนวน Book</label>
				<input type="number" name="book_number" id="book_number"/><br/>
				<br/>
				<label>จำนวน CD</label>
				<input type="number" name="cd_number" id="cd_number"/>
				<hr/>
				<button type="submit" style="font-size:25px" id="btnCheclout">Check Out </button>
			</fieldset>	
	</form>	
	<script type="text/javascript">
			$(document).ready(function(){								
				$('#btnCheclout').on('click',function(){
						var param_obj = {};

						var member_type = $('#customer_type_regular').is(":checked");					
						if(member_type){
							param_obj.number_type = $('#customer_type_regular').val();
						}else{
							param_obj.number_type = $('#customer_type_vip').val();
						}						
						param_obj.count_book = $('#book_number').val();
						param_obj.count_cd = $('#cd_number').val();

						var isConf = confirm(' ยืนยันการ สั่งซื้อ');
						if(isConf){
							console.log(param_obj);
							clickPurchase(param_obj);							
						}
						return false;
				});
			});	
	</script>
</body>

</html>