<?php 
	require_once('../php/session_header.php');
	require_once('../services/managerService.php');

	//checkeIn
	if(isset($_POST['checkeIn'])){
		$name 	    = $_POST['name'];
		$nid 	    = $_POST['nid'];
		$inTime     = $_POST['inTime'];
		$outTime 	= $_POST['outTime'];

		if(empty($nid) || empty($name) || empty($inTime) || empty($outTime)){
			header('location: ../views/check_in_out.php?error=null_value');
		}else{

			$checkeIn = [
				'nid'       => $nid,
				'name'      => $name,
				'inTime'    => $inTime,
				'outTime'   => $outTime
			];

			$status = insertCheckeIn($checkeIn);

			if($status){
				header('location: ../views/check_in_out.php?success=done');
			}else{
				header('location: ../views/check_in_out.php?error=db_error');
			}
		}
	}

	if(isset($_POST['updateCheckedIn'])){
		$id  = $_POST['id'];

		if(empty($id)){
			header('location: ../views/checkOut.php?id={$id}');
		}else{

			$checkeIn = [
				
				'id' => $id
			];

			$status = updateCheckedIn($checkeIn);

			if($status){
				header('location: ../views/check_in_out.php?success=done');
			}else{
				header('location: ../views/checkOut.php?id={$id}');
			}
		}
	}

	if(isset($_POST['invoice'])){
		$id = $_POST['id'];

		if(empty($id)){
			header('location: ../views/invoicePay.php?id={$id}');
		}else{

			$invoice = [
				
				'id'=> $id
			];

			$status = deleteBill($invoice);

			if($status){
				header('location: ../views/invoice.php?success=done');
			}else{
				header('location: ../views/invoicePay.php?id={$id}');
			}
		}
	}

	if(isset($_POST['bookingAccept'])){
		$id  = $_POST['id'];

		if(empty($id)){
			header('location: ../views/bookingAccept.php?id={$id}');
		}else{

			$booking = [
				
				'id' => $id
			];

			$status = updateBookingAccept($booking);

			if($status){
				header('location: ../views/booking.php?success=done');
			}else{
				header('location: ../views/bookingAccept.php?id={$id}');
			}
		}
	}

	if(isset($_POST['bookingReject'])){
		$id  = $_POST['id'];

		if(empty($id)){
			header('location: ../views/bookingReject.php?id={$id}');
		}else{

			$booking = [
				
				'id' => $id
			];

			$status = updateBookingAccept($booking);

			if($status){
				header('location: ../views/booking.php?success=done');
			}else{
				header('location: ../views/bookingReject.php?id={$id}');
			}
		}
	}


	if(isset($_POST['chefOrder'])){
		$itemName 	= $_POST['itemName'];
		$quantity 	= $_POST['quantity'];
		$picture       = $_POST['picture'];

		if(empty($itemName) || empty($quantity) || empty($picture)){
			header('location: ../views/chef_order.php?error=null_value');
		}else{

			$chefOrder = [
				'itemName' => $itemName,
				'quantity' => $quantity,
				'picture'     => $picture
			];

			$status = insertChefOrder($chefOrder);

			if($status){
				header('location: ../views/order.php?success=done');
			}else{
				header('location: ../views/chef_order.php?error=db_error');
			}
		}
	}



	if(isset($_POST['staffOrder'])){ 
		$roomNumber 	= $_POST['roomNumber'];
		$service 	= $_POST['service'];

		if(empty($itemName) || empty($service) || empty($picture)){
			header('location: ../views/staff_order.php?error=null_value');
		}else{

			$staffOrder = [
				'roomNumber' => $roomNumber,
				'service' => $service
			];

			$status = insertChefOrder($staffOrder);

			if($status){
				header('location: ../views/order.php?success=done');
			}else{
				header('location: ../views/staff_order.php?error=db_error');
			}
		}
	}
	


	if(isset($_POST['rejectOrder'])){
		$id  = $_POST['id'];

		if(empty($id)){
			header('location: ../views/bookingReject.php?id={$id}');
		}else{

			$status = rejectCustomerOrder($id);

			if($status){
				header('location: ../views/booking.php?success=done');
			}else{
				header('location: ../views/bookingReject.php?id={$id}');
			}
		}
	}

	
	if(isset($_POST['AcceptParking'])){
		$id  = $_POST['id'];

		if(empty($id)){
			header('location: ../views/accept_parking.php?id={$id}');
		}else{

			$status = updateAcceptParking($id);

			if($status){
				header('location: ../views/cars.php?success=done');
			}else{
				header('location: ../views/accept_parking.php?id={$id}');
			}
		}
	}


	if(isset($_POST['HoldParking'])){
		$id  = $_POST['id'];

		if(empty($id)){
			header('location: ../views/hold_parking.php?id={$id}');
		}else{

			$status = updateAcceptParking($id);

			if($status){
				header('location: ../views/cars.php?success=done');
			}else{
				header('location: ../views/hold_parking.php?id={$id}');
			}
		}
	}


	if(isset($_POST['RejectParking'])){
		$id  = $_POST['id'];

		if(empty($id)){
			header('location: ../views/reject_parking.php?id={$id}');
		}else{

			$status = updateAcceptParking($id);

			if($status){
				header('location: ../views/cars.php?success=done');
			}else{
				header('location: ../views/reject_parking.php?id={$id}');
			}
		}
	}


	
	if(isset($_POST['reservationAccept'])){
		$id           = $_POST['id'];
		$customer_id  = $_POST['customer_id'];

		if(empty($id)){
			header('location: ../views/reservationAccept.php?id={$id}');
		}else{

			$status1 = insertReservationBill($customer_id);
			$status  = updatereservationAccept($id);
			

			if($status){
				if ($status1){
					header('location: ../views/car_reservation.php?success=done');
				}
				else{
					header('location: ../views/reservationAccept.php?id={$id}');
					return;
				}
			}
			else{
				header('location: ../views/reservationAccept.php?id={$id}');
			}
		}
	}



	if(isset($_POST['reservationReject'])){
		$id  = $_POST['id'];

		if(empty($id)){
			header('location: ../views/reservationReject.php?id={$id}');
		}else{

			$status = updatereservationReject($id);

			if($status){
				header('location: ../views/car_reservation.php?success=done');
			}else{
				header('location: ../views/reservationReject.php?id={$id}');
			}
		}
	}


	if(isset($_POST['complainReview'])){
		$id  = $_POST['id'];

		if(empty($id)){
			header('location: ../views/complain.php?id={$id}');
		}else{

			$status = updateComplain($id);

			if($status){
				header('location: ../views/review_complain.php?success=done');
			}else{
				header('location: ../views/complain.php?id={$id}');
			}
		}
	}
	
    
    if(isset($_POST['bookingRequestAccept'])){ 

		$newDepartureTime = $_POST['newDepartureTime'];
		$package 	= $_POST['package'];
		$customer_id = $_POST['customer_id'];
		$cost = $_POST['cost'];

		if(empty($newDepartureTime) || empty($package) || empty($customer_id) || empty($cost)){
			header('location: ../views/bookingRequestAccept.php?error=null_value');
		}else{

			$extendBooking = [
				'newDepartureTime' => $newDepartureTime,
				'package' => $package,
				'customer_id' => $customer_id,
				'cost'        => $cost
			];

			$status1 = insertBillExtendBooking($extendBooking);
			$status  = updateExtendBooking($extendBooking);

			if($status1){
				if ($status){
					header('location: ../views/booking.php?success=done');
				}
				else{
					header('location: ../views/bookingRequestAccept.php?error=db_error');
					return;
				}
			}
			else{
				header('location: ../views/bookingRequestAccept.php?error=db_error');
			}
			
		}
	}


	
	if(isset($_POST['bookingRequestReject'])){
		$id  = $_POST['id'];

		if(empty($id)){
			header('location: ../views/bookingRequestReject.php?id={$id}');
		}else{

			$status = updateExtendBookingReject($id);

			if($status){
				header('location: ../views/extend_booking.php?success=done');
			}else{
				header('location: ../views/bookingRequestReject.php?id={$id}');
			}
		}
	}



?>