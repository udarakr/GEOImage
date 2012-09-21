<?php
require_once('config.php');

$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/', $_SERVER['SCRIPT_NAME']);
 
for($i= 0;$i < sizeof($scriptName);$i++){
      if ($requestURI[$i]     == $scriptName[$i])
              {
                unset($requestURI[$i]);
            }
      }
 
	$command = array_values($requestURI);
	$action	 = $command[1];

	//TODO remove following 2 lines 
	//print_r($command);
	//exit;
	if(file_exists('controllers/'.$command[0].'.php')){
	new $command[0]();
	}

	function __autoload($controller) {
	global $action;
	if(file_exists('controllers/'.$controller.'.php')){
		require_once 'controllers/'.$controller.'.php';
		$ctrlObj = new $controller();
	
		if(method_exists($ctrlObj, $action)){				
		$ctrlObj::$action();
		}else{
		echo "Invalid Function";
		}
			}
}
