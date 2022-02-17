<!DOCTYPE html>
<html>
<head>
	<title>FreeMovies</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="shortcut icon" href="logo3.png" type="image/x-icon">
</head>
<body  style="background-color:dark";>

    <form method="post">
	<img src="logo3.png">
    	<h1>Registrate a FreeMovies</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>

         
</body>
</html>