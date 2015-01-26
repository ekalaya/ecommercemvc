<?php
	include ('./config/config.php');
	$app = new Application();
	$app->setDefaultController('explorer');
	$app->setDefaultAction('index');
	$app->run();
?>