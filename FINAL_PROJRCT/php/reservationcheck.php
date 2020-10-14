<?php
	require_once("../services/managerService.php");
	if(isset($_POST['get'])){

		$getALL = getAllReservation();

		echo printAll($getALL);	
	}
	function printAll($getList){
		$doc = "";
		foreach ($getList as $reservation) {
			$doc .= "<tr>".
            "<td>{$reservation['id']}</td>".
            "<td>{$reservation['reservationDate']}</td>".
            "<td>{$reservation['nid']}</td>".
            "<td>{$reservation['customer_id']}</td>".
            "<td>{$reservation['status']}</td>".
            "<td>".
                "<a href='reservationAccept.php?id={$reservation['id']}'>Accept</a> |".
                "<a href='reservationReject.php?id={$reservation['id']}'>Reject</a>".
            "</td>".
        "</tr>";
		}
		return $doc;
	}
?>
