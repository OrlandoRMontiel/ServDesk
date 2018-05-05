<?php 
	header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
	if(!isset($_SESSION)) session_start();
 
	if(isset($_REQUEST['request'])) {	 
		
		$toDo = $_REQUEST['request'];
		unset($_REQUEST['request']);

		// Check the action to do according the request that was sent
		switch($toDo){
			case 'getTableData':
				include_once('system.class.php');
				$system = new System(); 
				echo $system->getTableData($_REQUEST);	
				break;   
			case 'saveCase':
				include_once('system.class.php');
				$system = new System(); 
				echo $system->saveCase($_REQUEST);	
				break; 
			case 'saveClient':
				include_once('system.class.php');
				$system = new System(); 
				echo $system->saveClient($_REQUEST);	
				break;
			case 'saveRegisterMedium':
				include_once('system.class.php');
				$system = new System(); 
				echo $system->saveRegisterMedium($_REQUEST);	
				break;
			case 'saveAgentThreat':
				include_once('system.class.php');
				$system = new System(); 
				echo $system->saveAgentThreat($_REQUEST);	
				break;
			case 'saveAgent':
				include_once('system.class.php');
				$system = new System(); 
				echo $system->saveAgent($_REQUEST);	
				break; 
			case 'login':
				include_once('login.class.php');
				$login = new Login(); 	 
				echo $login->startSession($_REQUEST);
				break; 
			case 'logout':
				include_once('login.class.php');
				$login = new Login(); 	 
				echo $login->closeSession($_REQUEST);
				break; 
			case 'getLoginStatus':
				include_once('login.class.php');
				$login = new Login(); 	 
				echo $login->verifySession($_REQUEST);
				break; 
			case 'getRiskCalculation':
				include_once('risk.class.php');
				$risk = new Risk(); 
				echo $risk->calculate("2018-04-17", date('Y-m-d', time()));	
				break;  
			case 'getCURPMetadata':
				include_once('curp.class.php');
				$curp = new Curp(); 
				echo $curp->getMetadata($_REQUEST['curp']);	
				break; 
		}
	} 
?>