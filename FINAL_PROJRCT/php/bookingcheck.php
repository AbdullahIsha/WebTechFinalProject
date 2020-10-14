<?php
	require_once("../services/managerService.php");
	if(isset($_POST['get'])){

		$getALL = getAllBooking();

		echo printAll($getALL);	
	}


	function printAll($getList){
		$doc = "";
		foreach ($getList as $booking) {
			$doc .= "<tr>".
            "<td>{$booking['id']}</td>".
            "<td>{$booking['arrivalTime']}</td>".
            "<td>{$booking['departureTime']}</td>".
            "<td>{$booking['pakage']}</td>".
            "<td>{$booking['status']}</td>".
            "<td>".
                "<a href='bookingAccept.php?id={$booking['id']}'>Accept</a> |".
                "<a href='bookingReject.php?id={$booking['id']}'>Reject</a>".
            "</td>".
        "</tr>";
		}
		return $doc;
	}
?>
