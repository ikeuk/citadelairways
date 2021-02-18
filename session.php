<?php
		session_start();

		function is_logged_in(){
			return isset($_SESSION['is_logged_in']);
			 }
			 	function comfirm_is_logged_in(){
			 		if (!is_logged_in()) {
			 			header('location:index.php');
			 		}
			 	}
			 function is_log_in(){
			 	return isset($_SESSION['is_log_in']);
			 }
			 function comfirm_is_log_in(){
			 	if (!is_log_in()) {
			 		header('location:index.php');
			 	}
			 }