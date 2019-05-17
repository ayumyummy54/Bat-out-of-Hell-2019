<?php
require_once 'inc/variables.php';
// Overide any page variables here
$title = "Error 404";
// Include header.php
require_once 'inc/header.php';
?>	
	<div class="container">
		<div class="col-xs-12 text-center">
			<h1>404</h1>
			<h2>Page not found, <a href="<?php echo $root; ?>">return to home page</a></h2>
		</div>
	</div>
<?php
// Include footer.php
require_once 'inc/footer.php';
?>