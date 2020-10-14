<?php
	require_once("../services/managerService.php");
	if(isset($_POST['search'])){

		$search = $_POST['search'];

		$getALL = getAllCheckIn($search);

		echo printAll($getALL);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $checkIn) {
			$doc .= "<tr>".
            "<td>{$checkIn['id']}</td>".
            "<td>{$checkIn['name']}</td>".
            "<td>{$checkIn['nid']}</td>".
            "<td>{$checkIn['checkInTime']}</td>".
            "<td>{$checkIn['checkOutTime']}</td>".
            "<td>{$checkIn['status']}</td>".
            "<td>".
                "<a href='checkOut.php?id={$checkIn['id']}'>Check Out</a>".
            "</td>".
        "</tr>";
		}
		return $doc;
	}
?>
