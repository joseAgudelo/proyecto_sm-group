<?php 

session_start();

if (isset($_SESSION['user'])) {
	// echo 'Has iniciado sesion' ,$_SESSION['user'];

session_destroy();
}else{
	session_start();
	session_destroy();
	header('location: index.php');
}

 ?>

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

            <div class="sesion">
                <strong><?php echo 'Hola ' ,$_SESSION['user']; ?></strong>
                <a href="index.php"><span>Salir</span></a>
            </div>
        </header>
     
	    <section>

	        <div class="list_user">
	        	<ol>
	        		<li>dsgsdg</li>
	        		<li>fdgdfgd</li>
	        		<li>fdgdfgd</li>
	        		<li>fdgdfgd</li>
	        		<li>fdgdfgd</li>
	        		<li>fdgdfgd</li>
	        		<li>fdgdfgd</li>
	        	</ol>
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

