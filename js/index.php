<? header("Content-Type:text/html;charset=UTF-8");?>

<!DOCTYPE HTML>
<html>
    <head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>Надежность пароля</title>
		
		<script src="js/jquery-1.10.1.min.js" type="text/javascript"></script>	
		<script src="js/script.js" type="text/javascript"></script>	
		<link rel="stylesheet" type="text/css" href="css/style.css" />				
	</head>
	
	<body>
		<div class="wrap">
			<h1>Проверка надежности пароля</h1>		
				<form>
					Пароль:
					<input name="password" id="pass" type="password"/>
				</form>
				
				<p id="result"></p>
				<p id="bg_res"></p>		
		</div>
	</body>
</html>