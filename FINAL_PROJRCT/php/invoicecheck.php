<?php
	require_once("../services/managerService.php");
	if(isset($_POST['customerId'])){

		$id = $_POST['customerId'];

		$getALL = getAllInvoice($id);

		echo printAll($getALL);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $invoice) {
			$doc .= "<tr>".
            "<td>{$invoice['id']}</td>".
            "<td>{$invoice['service']}</td>".
            "<td>{$invoice['bill']}</td>".
            "<td>".
                "<a href='invoicePay.php?id={$invoice['customer_Id']}'>Pay</a>".
            "</td>".
        "</tr>";
		}
		return $doc;
	}
?>
