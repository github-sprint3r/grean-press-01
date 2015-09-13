<!DOCTYPE html>
<html>
<head>
<title>Grean Press - Checkout</title>
</head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/app.js"></script>
	<style type="text/css">
		body {
			margin: 10px;
		}
		#tab {
			width: 70%;
			margin: 0 10px;
		}
		#tab td:first-child {
			width: 50px;
		}
	</style>
	<script type="text/javascript">
		ShowList();
	</script>
<body>
	<h1>List of Items</h1>
	<div id ="item">
	</div>
	<h2 id="result"></h2>
	<script type="text/javascript">
		$("#tab").addClass("table table-bordered");
	</script>
</body>
</html>