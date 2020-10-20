<?php
 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	require "Config/Autoload.php";
	require "Config/Config.php";

	use Config\Autoload as Autoload;
	use Config\Router 	as Router;
	use Config\Request 	as Request;
		
	Autoload::start();

	session_start();

	//TODO: checkear sesion
	require_once(VIEWS_PATH."header.php");
?>
	<div>
		<?php
			Router::Route(new Request());
		?>
	</div>
	
<?php
	require_once(VIEWS_PATH."footer.php");
?>