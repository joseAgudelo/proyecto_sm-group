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

	        <div class="form">
	        	<h1>Entrar</h1>
	            <form action="index.php?ruta=login" method="POST">
				      
				    <p class="usuario">
				        <input name="user" type="text" class="" placeholder="Usuario" autofocus required/>
				    </p>

				    <p class="password">
				    	<input name="pass" type="password" class="" placeholder="Password" required/>
				    	<input name="login" type="hidden" value="1 "/>
				    </p>
				      
				    <div class="submit">
				        <input type="submit" value="Iniciar Sesion" id="button"/>
				    </div>

                </form>
                   
	        </div>
            	<a href="index.php?ruta=registro"><p class="link_registro">Registrate</p></a>
	    </section>
        
	    <footer>
	    	<p>by joseAgudelo &copy; 2015</p>
	    	<a href="http://www.smdigital.com.co/">
                <img src="http://www.smdigital.com.co/wp-content/themes/smdigital/library/images/smgroup-logo.png">
            </a>
        </footer>

    </body>
    
</html>
