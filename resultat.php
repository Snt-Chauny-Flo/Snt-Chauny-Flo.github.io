<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenue</title>
		<link rel="SHORTCUT ICON" href="images/picardie.ico"> 
		<link rel="stylesheet" href="style.css"/>
		<script>
			alert("Bienvenue!!!");
		</script>
    </head>

    <body style="font-size:1.1em">
		<p>Si tu n'est pas <?php  echo $_POST["prenom"];	?> ,
	
		<a href="formulaire.php">retourne </a> au formulaire...</p>
	
	</body>
</html>