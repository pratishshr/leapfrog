<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<form>
		Course: <br/><input type="text" name="cname"><br/>
		Description:
		<br/>
		<textarea rows="6" cols="30" name="description"></textarea>
		
		
		<br/>
		Amount: <br/><input type="number" name="amount" min="0"><br/>
		Duration: <br/>
		<select>
			<option>1 month</option>
			<option>2 months</option>
			<option>3 months</option>
			<option>4 months</option>
		</select>
		<br/>
		<input type="radio" name="rad" value="yes"> Yes
		<input type="radio" name="rad" value="no"> No
		<br/>
		<input type="submit" name="submit" value="Save">
	</form>
</body>
</html>