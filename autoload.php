<?php

function controllers_autoload($className){		
	$fileName =  'controllers/' . $className . '.php';
	if(is_file($fileName)) include_once $fileName;			
}

spl_autoload_register('controllers_autoload');

?>