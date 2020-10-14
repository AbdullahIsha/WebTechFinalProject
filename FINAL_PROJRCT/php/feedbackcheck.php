<?php
    require_once('../php/session_header.php');
	require_once("../services/managerService.php");
	if(isset($_POST['get'])){
		$id = $_SESSION['id'];
		$feedback = getAllfeedback($id);

		echo printAll($feedback);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $feedback) {
			$doc .= "<tr>".
						"<td>{$feedback['id']}</td>".
					    "<td>{$feedback['rating']}</td>".
					    "<td>{$feedback['comment']}</td>".
					    "<td>{$feedback['empId']}</td>".
					"</tr>";
		}
		return $doc;
	}
?>



 