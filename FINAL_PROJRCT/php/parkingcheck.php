<?php
	require_once("../services/managerService.php");
	if(isset($_POST['get'])){

		$getALL = getAllParking();

		echo printAll($getALL);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $parking) {
			$doc .= "<tr>".
            "<td>{$parking['id']}</td>".
            "<td>{$parking['checkIntime']}</td>".
            "<td>{$parking['customerName']}</td>".
            "<td>{$parking['customer_id']}</td>".
            "<td>".
                "<a href='accept_parking.php?id={$parking['id']}'>Accept</a> |".
                "<a href='hold_parking.php?id={$parking['id']}'>Hold</a> |".
                "<a href='reject_parking.php?id={$parking['id']}'>Reject</a>".
            "</td>".
        "</tr>";
		}
		return $doc;
	}
?>