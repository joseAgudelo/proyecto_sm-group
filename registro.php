<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>SM Group</title>
		<link rel="shortcut icon" href="http://www.smdigital.com.co/wp-content/themes/smdigital/library/images/favicon.png">
		<link rel="stylesheet" href="css/style.css">
		<script src="http://www.colcafeteconsiente.com/wp-content/themes/colcafe/library/js/libs/modernizr.custom.min.js"></script>
	</head>

    <body>
    	

	    <header>
	    	<a href="http://www.smdigital.com.co/">
                <img src="http://www.smdigital.com.co/wp-content/themes/smdigital/library/images/smdigital-logo.png">
            </a>
        </header>
     
	    <section>

	        <div class="form-registro">
	        	<h1>Registro</h1>
	            <form id="form-registro" action="index.php?ruta=registro" method="POST">
				      
				    <p class="nombre">
				    	<label for="">Nombre</label>
				        <input name="user" type="text" class="" placeholder="nombre" autofocus required/>
				    </p>

				    <p class="e-mail">
				    	<label for="">E-mail</label>
				        <input name="email" type="email" class="" placeholder="correo" required/>
				    </p>

				    <p class="contraseña">
				    	<label for="">Password</label>
				        <input name="pass" type="password" class="" placeholder="password" />
				        <input name="registro" type="hidden" value="1 "/>
				    </p>
  
				    <div class="submit">
				        <input type="submit" value="Registrarse" id="button"/>
				    </div>

                </form>
	        </div>
	    </section>

	    <footer>
	    	<p>by joseAgudelo &copy; 2015</p>
	    	<a href="http://www.smdigital.com.co/">
                <img src="http://www.smdigital.com.co/wp-content/themes/smdigital/library/images/smgroup-logo.png">
            </a>
        </footer>

    </body>
    
</html>
