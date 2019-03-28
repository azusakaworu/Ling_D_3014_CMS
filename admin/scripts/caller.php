<?php 
	require_once('config.php');

	if(isset($_GET['caller_id'])){
		$action = $_GET['caller_id'];

		switch($action){
			case 'logout':
				logged_out();
				break;
			
			case 'delete':
				$id = $_GET['id'];
				deleteUser($id);
				break;

				case 'deleteMovie':
				$id = $_GET['id'];
				deleteMovie($id);
				break;

				// case 'selectEdit':
				// $id = $_GET['id'];
				// selectEdit($id);
				// //editMovies($id,$cover,$title,$year,$run,$trailer,$release,$story);
				// break;

				
				// case 'selectEdit':
				// $tbl = $_GET['tbl'];
				// $col = $_GET['col'];
				// $value = $_GET['value'];

				// getSingle($tbl, $col, $value);
				// break;


				
				
		}
	}



	