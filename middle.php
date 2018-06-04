<?php
if(!isset($_REQUEST['action']))
{
	include('1.php');
}
if(isset($_REQUEST['action']) && $_REQUEST['action'])
{
	include('reg.php');
}
?>