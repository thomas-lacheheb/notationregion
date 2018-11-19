<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion Région</title>
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Bootstrap/css/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Bootstrap/css/bootstrap.css" />
    
	<script src="<?php echo base_url(); ?>JS/mesFonctions.js"></script>
</head>
<body>
    <h3>Votre nom :</h3>
    <input type='text' id='txtNom'><br>
    <input type='button' onclick='connexion()' value='Connexion'>
    <br>

    <div id='divRegion'></div>
    <div id='divVille'></div>
</body>
</html>