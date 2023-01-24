<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {
	public function __construct() {
		parent:: __construct();

		if(!is_logged_in()){
			redirect();
		}
		if($this->session->userdata('role') != "administrator"){
            redirect();
		}
		
	}

	private function template($content = 'index', $data = NULL) {
		$this->call->view('Admin/includes/header', $data); // include the header
		$this->call->view('Admin/includes/sidebar', $data);// include the sidebar
		$this->call->view('Admin/includes/topbar', $data);// include the topbar
		$this->call->view($content, $data);	// main content
		$this->call->view('Admin/includes/footbar', $data); // include footbar
		$this->call->view('Admin/includes/footer', $data); // include footer
	}
	public function index() {
		$this->template('Admin/dashboard');
	}
	public function room_category() {
		 $this->call->model('Admin/Room_category_model');
		$data = $this->Room_category_model->get_rooms();
		$this->template('Admin/room_category',$data);
	}
	public function add_room_category(){
		$category_name = $this->io->post('category_name');
		$availability = $this->io->post('availability');
		$description = $this->io->post('description');
		$status = $this->io->post('status');
		$price = $this->io->post('price');
		$max_persons = $this->io->post('max_persons');
		$size = $this->io->post('size');
		$bed = $this->io->post('bed');
		 $this->form_validation->name('category_name')->required();
         if($this->form_validation->run()){
         	 // do upload
                $room_image = null;
                if ($_FILES["room_image"]['tmp_name'] != '' or $_FILES["room_image"]['name'] != '' ) {
					$this->call->library('upload', $_FILES["room_image"]);
					$this->upload->max_size(25)
								->set_dir('Files/room_category/')
								->allowed_extensions(array('jpg','png','jpeg'))
								->allowed_mimes(array('image/jpeg', 'image/png', 'image/jpg'))
								->is_image()
								->encrypt_name(); //encrypted filename
					if($this->upload->do_upload()) { 
						$room_image = $this->upload->get_filename();
					} else {
						$err = '';
						foreach($this->upload->get_errors() as $error) {
							$err = $err . ', ' . $error . '<br>';
						} 
						set_flash_alert('danger', $err);
						redirect();
					}
                }
                // end upload
         	$this->call->model('Admin/Room_category_model');
         	if ($this->Room_category_model->add_category($category_name,$availability,$description,$status,$room_image,$price,$max_persons,$size,$bed)==true){
         		$_SESSION['status']="Added Successfully";
				$_SESSION['status_code']="success";
         	}
         }
         else{
         		$_SESSION['status']="Record not saved";
				$_SESSION['status_code']="error";
         }


		redirect('Admin/room_category');
	}
	public function delete_category($category_id){
		$this->call->model('Admin/Room_category_model');
		 if($this->Room_category_model->delete_category($category_id)){
            $_SESSION['status']="Deleted Successfully";
				$_SESSION['status_code']="success";
        }else{
            $_SESSION['status']="Student ID is required";
			$_SESSION['status_code']="error";
		}
		redirect('Admin/room_category');

	}
	public function update_category(){
		$category_id = $this->io->post('category_id');
		$room_image_hidden = $this->io->post('room_image_hidden');
		$category_name = $this->io->post('category_name');
		$availability = $this->io->post('availability');
		$description = $this->io->post('description');
		$status = $this->io->post('status');
		$price = $this->io->post('price');
		$max_persons = $this->io->post('max_persons');
		$size = $this->io->post('size');
		$bed = $this->io->post('bed');

		 $this->form_validation->name('category_name')->required();
         if($this->form_validation->run()){
         	// do upload
                $room_image = $room_image_hidden;
                if ($_FILES["room_image"]['tmp_name'] != '' or $_FILES["room_image"]['name'] != '' ) {
					$this->call->library('upload', $_FILES["room_image"]);
					$this->upload->max_size(25)
								->set_dir('Files/room_category/')
								->allowed_extensions(array('jpg','png','jpeg'))
								->allowed_mimes(array('image/jpeg', 'image/png', 'image/jpg'))
								->is_image()
								->encrypt_name(); //encrypted filename
					if($this->upload->do_upload()) { 
						$room_image = $this->upload->get_filename();
					} else {
					$room_image = $room_image_hidden;
					}
                }
                // end upload
         	$this->call->model('Admin/Room_category_model');

         	if ($this->Room_category_model->update_category($category_id,$category_name,$availability,$description,$status,$price,$room_image,$max_persons,$size,$bed)==true){
         		$_SESSION['status']="Updated Successfully";
				$_SESSION['status_code']="success";
         	}
         }
         else{
         		$_SESSION['status']="Record not saved";
				$_SESSION['status_code']="error";
         }


		redirect('Admin/room_category');
	}
	public function show_staff(){
		$this->call->model('Admin/Room_category_model');
		$data = $this->Room_category_model->get_staff();
		$this->template('Admin/staff',$data);
	}
	public function show_rooms(){
		$this->call->model('Admin/Room_category_model');
		$data[1] = $this->Room_category_model->get_allrooms();
		$data[2]= $this->Room_category_model->get_rooms();
		$this->template('Admin/room',$data);
	}
		public function add_new_room(){
		$room_name = $this->io->post('room_name');
		$category_id = $this->io->post('category_id');
		 $this->form_validation->name('room_name')->required();
         if($this->form_validation->run()){
         	$this->call->model('Admin/Room_category_model');
         	if ($this->Room_category_model->add_room($room_name,$category_id)==true){
         		$_SESSION['status']="Added Successfully";
				$_SESSION['status_code']="success";
         	}
         }
         else{
         		$_SESSION['status']="Record not saved";
				$_SESSION['status_code']="error";
         }


		redirect('Admin/show_rooms');
	}
	public function delete_room($room_id){
		$this->call->model('Admin/Room_category_model');
		 if($this->Room_category_model->delete_room($room_id)){
            $_SESSION['status']="Deleted Successfully";
				$_SESSION['status_code']="success";
        }else{
            $_SESSION['status']="Student ID is required";
			$_SESSION['status_code']="error";
		}
		redirect('Admin/show_rooms');

	}
	public function add_new_staff(){
		$staff_name = $this->io->post('staff_name');
		$age = $this->io->post('age');
		$gender = $this->io->post('gender');
		$position = $this->io->post('position');

		 $this->form_validation->name('staff_name')->required();
         if($this->form_validation->run()){
         	$this->call->model('Admin/Room_category_model');
         	if ($this->Room_category_model->add_staff($staff_name,$age,$gender,$position)==true){
         		$_SESSION['status']="Added Successfully";
				$_SESSION['status_code']="success";
         	}
         }
         else{
         		$_SESSION['status']="Record not saved";
				$_SESSION['status_code']="error";
         }


		redirect('Admin/show_staff');

}
		public function delete_staff($staff_id){
		$this->call->model('Admin/Room_category_model');
		 if($this->Room_category_model->delete_staff($staff_id)){
            $_SESSION['status']="Deleted Successfully";
				$_SESSION['status_code']="success";
        }else{
            $_SESSION['status']="Student ID is required";
			$_SESSION['status_code']="error";
		}
		redirect('Admin/show_staff');

	}
	public function update_staff(){
		$staff_id = $this->io->post('staff_id');
		$staff_name = $this->io->post('staff_name');
		$age = $this->io->post('age');
		$gender = $this->io->post('gender');
		$position = $this->io->post('position');

		 $this->form_validation->name('staff_name')->required();
         if($this->form_validation->run()){
         	$this->call->model('Admin/Room_category_model');

         	if ($this->Room_category_model->update_staff($staff_id,$staff_name,$age,$gender,$position)==true){
         		$_SESSION['status']="Updated Successfully";
				$_SESSION['status_code']="success";
				 	}
         }
         else{
         		$_SESSION['status']="Record not saved";
				$_SESSION['status_code']="error";
         }


		redirect('Admin/show_staff');
	}

}
?>