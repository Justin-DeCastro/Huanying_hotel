<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Bookings extends Controller {
	public function __construct() {
		parent:: __construct();

		$this->call->model('Admin/Booking_model');
	}

	public function check_room() {
		$this->call->model('Admin/Booking_model');
		$data[1] = $this->Booking_model->check_bookings('2023-01-01 07:00:00','2023-01-31 07:00:00');
		$this->call->model('Admin/Room_category_model');
		$data[2] = $this->Room_category_model->get_rooms();
		$this->template('Admin/available_rooms',$data);

		
	}
	public function available_room(){

	}

}
?>