<?php
	require_once("../services/managerService.php");
	if(isset($_POST['get'])){

		$getALL = getAllBookingExtend();

		echo printAll($getALL);	
	}
	function printAll($getList){
		$doc = "";
		foreach ($getList as $bookingExtend) {
			$doc .= "<tr>".
            "<td>{$bookingExtend['id']}</td>".
            "<td>{$bookingExtend['newDepartureTime']}</td>".
            "<td>{$bookingExtend['package']}</td>".
            "<td>{$bookingExtend['status']}</td>".
            "<td>".
                "<a href='bookingExtendAccept.php?id={$bookingExtend['id']}'>Accept</a> |".
                "<a href='bookingExtendReject.php?id={$bookingExtend['id']}'>Reject</a>".
            "</td>".
        "</tr>";
		}
		return $doc;
	}
?>
