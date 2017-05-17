<?php
session_start();
use Classes\ConnectAdmin;
require_once '../vendor/autoload.php';


if (isset($_POST) && count($_POST) > 0)
{
	if ( isset( $_POST['co'] ) && isset( $_POST['pseudo'] ) && isset( $_POST['wordpass'] ) )
	{
		$log = new ConnectAdmin( $_POST['pseudo'], $_POST['wordpass'] );

		$verif = $log->verif();

		if ($verif == 'ok')
        {
	        if ( $log->session() )
	        {
		        header( 'Location: indexAdmin.php' );
		        exit();
	        }
        }
	}
	else
    {

        echo "c'est nul";
	}
}




?>

<form method="post" action="login.php">

	<input type="text" name="pseudo">
	<input type="text" name="wordpass">
	<input type="submit" name="co">

</form>
