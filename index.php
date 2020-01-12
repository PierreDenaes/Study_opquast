<?php 
include 'glossaire.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Glossaire Opquast</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="randomQ">
	    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	    <button type="submit" id="reload" name="reload" value="Reload" class="styleButton">New Rules</button>
		<form>
		<blockquote class="quoteArea">
<?php
if(!empty($_POST['reload'])) {
	echo "<h1>".$quoteTitle."</h1><br>"."<h2>".$quoteDescription."</h2>";   
	}
?>
		</blockquote>
  	</div>
</body>
</html>