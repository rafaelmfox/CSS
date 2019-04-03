<?php 
header("Pragma: no-cache");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, cachehack=".time());
header("Cache-Control: no-store, must-revalidate");
header("Cache-Control: post-check=-1, pre-check=-1", false); 

?>
<html>
<title>Titulo site</title>
<header>
    <link href="css/index.css" type="text/css" rel="stylesheet"> 
     <link href="css/box.css" type="text/css" rel="stylesheet"> 
</header>
<body>

	<form action="listararquivos.php" method="POST" class="box">
        <img src="logo.jpg" width="250" height="80" /><br><br>
        <input type="text" name="user" id="user" placeholder="Usuario">
        <input type="password" name="pass" id="pass" placeholder="Senha">
        <input type="submit" value="Login">
        <input type="reset" value="Limpar">
	</form>
</body>    
</html>