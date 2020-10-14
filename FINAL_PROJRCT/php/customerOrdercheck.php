<?php
	require_once("../services/managerService.php");
	if(isset($_POST['get'])){

		$getALL = getAllCustomerOrder();

		echo printAll($getALL);	
	}


	function printAll($getList){
		$doc = "";
		foreach ($getList as $order) {
			$doc .= "<tr>".
            "<td>{$order['id']}</td>".
            "<td>{$order['orderType']}</td>".
            "<td>{$order['detail']}</td>".
            "<td>{$order['customer_Id']}</td>".
            "<td>".
                "<a href='chef_order.php?id={$order['customer_Id']}'>Food</a> |".
                "<a href='staff_order.php?id={$order['customer_Id']}'>Other</a> |".
                "<a href='reject_order.php?id={$order['id']}'>Reject</a>".
            "</td>".
        "</tr>";
		}
		return $doc;
	}
?>