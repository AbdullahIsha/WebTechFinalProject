<?php
    require_once('../php/session_header.php');
	require_once("../services/managerService.php");
	if(isset($_POST['get'])){
		$id = $_SESSION['id'];
		$detail = getAllempDetail($id);

		echo printAll($detail);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $detail) {
			$doc .= "<tr>".
						"<td>{$detail['id']}</td>".
					    "<td>{$detail['balance']}</td>".
					    "<td>{$detail['bonus']}</td>".
					    "<td>{$detail['rating']}</td>".
					    "<td>{$detail['role']}</td>".
					    "<td>{$detail['salary']}</td>".
					"</tr>";
		}
		return $doc;
	}
?>





 