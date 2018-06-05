<?php
if(!isset($_REQUEST['action']))
{
	include('1.php');
}
if(isset($_REQUEST['action']) && $_REQUEST['action']=="reg")
{
	include('reg.php');
}

if(isset($_REQUEST[ 'action']) && $_REQUEST['action']=="business")

{
	include('business.php');
}


?>