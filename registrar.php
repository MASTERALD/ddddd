
<?php 
include("con_db.php");



if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
			<a href="" class="btn-neon">
        <span style="background-color:red; "  id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        Presiona Este Boton Para Entrar
                 </a><br><br>

	    	<h3 class="ok">¡Te Has Registrado!</h3><br>
			
	      <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>