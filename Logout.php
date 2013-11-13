<?php 
session_start();
session_destroy();
?>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
<meta http-equiv="content-language" content="th" /> 

<body>
	<div class="alert alert-info">
	Logout Successful !<br>
	</div>
</body>
</html>
<?php header('Refresh: 2; url=index.php'); ?>