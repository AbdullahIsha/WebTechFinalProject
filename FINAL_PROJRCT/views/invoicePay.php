<?php
	require_once('../php/session_header.php');
	require_once('../services/managerService.php');

	if (isset($_GET['id'])) {
		$invoice = getCountByInvoiceID($_GET['id']);	
	}else{
		header('location: invoice.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Recipe</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Edit Recipe</legend>
			<table>
					<tr>
						<td>
							<h1>Total :</h1>
					    </td>
						<td>
							<h1><?= $invoice?></h1>
						</td>
					</tr>
					<td>
						<br>
						<br>
						<input type="hidden" name="id" value="<?=$_GET['id']?>">
						<input type="submit" name="invoice" value="Pay"> 
						<a href="invoice.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>