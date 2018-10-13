<?php
	session_start();
	// print_r($_SESSION);
	if(!isset($_SESSION['project_name'])){
		header("location:index.php");
	}
	require_once 'header.php';
?>
<div class="container">
	<h2 class="tex-center">Contact US</h2>
	
</div>
<?php
	require_once 'footer.php';
?>