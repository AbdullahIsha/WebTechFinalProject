<?php
    require_once('../php/session_header.php');
	require_once("../services/managerService.php");
	if(isset($_POST['get'])){
		$id = $_SESSION['id'];
		$complain = getAllcomplain($id);

		echo printAll($complain);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $complain) {
			$doc .= "<tr>".
						"<td>{$complain['id']}</td>".
					    "<td>{$complain['topic']}</td>".
					    "<td>{$complain['detail']}</td>".
					    "<td>{$complain['customer_id']}</td>".
					     "<td>".
				                "<a href='review_complain.php?id={$complain['id']}'>Review</a> ".
				            "</td>".
					"</tr>";
		}
		return $doc;
	}
?>



 