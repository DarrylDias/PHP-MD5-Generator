<?php
/*

@Created by Darryl Dias
@aurthor-url: http://darryl.revryl.com/
@GitHub: https://github.com/DarrylDias/PHP-MD5-Generator
@Developed in Microsoft WebMatrix

*/

/*

Requirement:

PHP 5.3.x.
Apache,NginX or Lighttpd.

*/

error_reporting(0); # Disabled error reporting for production server.
#error_reporting(E_ALL); uncomment if running on development server.

if(isset($_POST['md5-input'])) { # checking if md5-input is set to $_POST.
    $md5 = md5($_POST['md5-input']); # placing md5 function into $md5 variable.

    if ($md5 == 'd41d8cd98f00b204e9800998ecf8427e') { # Preventing user from generating blank md5.
    	$error = 'Error!';
    } 
}



?>

<!DOCTYPE HTML>
<!--You liked the website soo much that you are reading this from the source -->

<!--

@Created by Darryl Dias
@Aurthor-URL: http://darryl.revryl.com/
-->

<html lang="en">
<head>
 <title>MD5 Generator</title>
 <meta charset="utf-8">
 <!--Twitter Bootstrap-->
 <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 <link rel="stylsheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
 <!---->
</head>
<body>
<div class="well">
<a href="index.php" class="btn btn">Home</a>
<a href="http://revryl.com" class="btn">RevRYL</a>
</div>
<div class="well-large">
<form action="?=generated" method="post" autocomplete="off">
    <input name="md5-input" id="md5-input" type="text" placeholder="Enter something..." class="span10" /><br>
    <input type="submit" value="Generate" class="btn btn-primary" /><br><br />
    <p>MD5 generated : <strong><?php if (empty($_POST ['md5-input'])) { echo $error; } else {echo $md5; } //displaying the md5 generated ?></strong></p>
    <a href="index.php?=clear" class="btn btn-warning">Clear</a>
</form>
</div>
</body>
</html>
