<!DOCTYPE html>
<html>
	<head>
		<title>Simple Table Class</title>
		<style>
		table {
			border-collapse: collapse;
		}
		td {
			min-width: 75px;
			height: 40px;
			padding: 5px;
		}
	</style>
	<script src="jquery.js"  type="application/javascript"></script>
	<script type="application/javascript">
		function Create() {
				var rows=$("#rows").val();
				var cols=$("#cols").val();
			jQuery.ajax({
				url: "result.php",
				data: {rows: rows, cols: cols},
				type: "POST",
				success: function(data) {
					$("#table").html(data)
				},
				error: function() {}
			});
			
		}
		
	</script>
	
	</head>
	
	<body>
		<form>
		How many Rows do you want?: <input type="text" name="rows" id="rows" /> <br>
		How many Columns do you want?: <input type="text" name="cols" id="cols" /> <br>
		<input type="button" onClick="Create();" value="Create Table" />
		</form>
	<br><hr><br>
	
	<table border=1 id="table">

	</table>
	</body>
</html>