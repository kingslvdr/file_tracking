<?php

class api extends Controller {

    // public function index(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/test_API.php';
	// }

	public function getUser(){
		$function = $this->loadModel('data');
		require 'application/views/api/getUser.php';
	}
    // public function login(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/login_API.php';
	// }


	// public function remove(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/remove_user.php';
	// }

	// public function pos_remove(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/remove_pos.php';
	// }

	// public function logout(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/logout_API.php';
	// }

	// public function new_user(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/add_user.php';
	// }

	// public function load_users(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/get_users.php';
	// }

	// public function load_pos(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/get_chickpos.php';
	// }

	// public function latest_version(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/version_control.php';
	// }

	

	// public function load_accounting_dashboard(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/get_account_dashboard.php';
	// }

	// public function auto_email(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/auto_email.php';
	// }


	// // public function add_pos(){
	// // 	$function = $this->loadModel('data');
	// // 	require 'application/views/api/add_new_pos.php';
	// // }

	// public function update_pos(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/update_new_pos.php';
	// }

	// public function update_pos_flag(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/update_pos_flag.php';
	// }



	// public function Login_Broiler_Checklist(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/login_API_BC.php';
	// }

	// public function Broiler_Checklist(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/BCL_DATA.php';
	// }

	// public function Farm_Broiler_Checklist(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/Farm_BCL_DATA.php';
	// }

	// public function Address_Broiler_Checklist(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/Address_BCL_DATA.php';
	// }

	// public function FHF_Broiler_Checklist(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/FHF_BCL_DATA.php';
	// }


	// public function REASON_Broiler_Checklist(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/REASON_BCL_DATA.php';
	// }

	// public function HEADER_Broiler_Checklist(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/HEADER_BCL_DATA.php';
	// }


	// public function INSERT_HEADER_Broiler_Checklist(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/INSERT_BCL_TRN_HEADER.php';
	// }

	// public function INSERT_DETAILS_Broiler_Checklist(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/INSERT_BCL_TRN_DETAILS.php';
	// }

	// public function INSERT_signature_Broiler_Checklist(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/INSERT_BCL_SIGNATURE.php';
	// }

	// public function TRANSACTION_Broiler_Checklist(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/TRANSACTION_BCL_DATA.php';
	// }

	// public function fetch_approver_info(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/fetch_approver_info.php';
	// }

	// public function fetch_checklist(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/fetch_checklist.php';
	// }

	// public function fetch_farm_name(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/fetch_farm_name.php';
	// }


	// public function APPROVER_SIGNATURE_Broiler_Checklist(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/INSERT_BCL_SIGNATURE_APPROVER.php';
	// }



	// public function APPROVER_SIGNATURE_Broiler_Checklist_Salesman(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/INSERT_BCL_SIGNATURE_SALESMAN.php';
	// }

	
	// public function UPDATE_BC_TRN_HEADER(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/UPDATE_BCL_HEADER.php';
	// }


	// public function UPDATE_BC_TRN_HEADER_SALESMAN(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/UPDATE_BCL_HEADER_SALESMAN.php';
	// }

	// public function role_Type(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/get_role_type.php';
	// }


	// public function INSERT_BCL_NEW_USER(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/INSERT_BCL_USER_AUTH.php';
	// }

	// public function GET_BCL_NEW_USER(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/GET_BCL_USERS.php';
	// }

	// public function GET_BCL_ORG_CODE(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/GET_BCL_ORG_CODE.php';
	// }

	// public function UPDATE_STATUS_FLAG(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/UPDATE_STATUS_FLAG.php';
	// }


	// public function UPDATE_BCL_USER_AUTH(){
	// 	$function = $this->loadModel('data');
	// 	require 'application/views/api/UPDATE_BCL_USER_AUTH.php';
	// }
}
