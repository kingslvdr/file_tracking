<?php
 
class App extends Controller {


	public function index(){
		$function = $this->loadModel('data');
		require 'application/views/app/index.php';
	}

	public function Register(){
		$function = $this->loadModel('data');
		require 'application/views/app/register.php';
	}

	public function Dashboard(){
		$function = $this->loadModel('data');
		require 'application/views/app/dashboard.php';
	}
	// public function Chickpos(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/app/setup_chickpos.php';
	// }

	// public function accounting(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/app/accounting.php';
	// }

	

} 