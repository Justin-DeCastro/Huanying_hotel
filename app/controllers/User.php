<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {
	public function __construct(){
		parent:: __construct();
		}
	

	private function template($content = 'index', $data = NULL) {

		
		$this->call->view('User/includes/header', $data); // include the header, can also include sidebar or topbar
		if(!is_logged_in()){
			$this->call->view('User/includes/navbar', $data);
		}
		else{
			$this->call->view('User/includes/navbar_signout', $data);
		}
		$this->call->view($content, $data);	// main content
		$this->call->view('User/includes/footer', $data); // include footer, or footbar
		$this->call->view('User/includes/loader', $data); // include footer, or footbar
		
	}
	
	public function index() {
		$this->call->model('Admin/Room_category_model');
		$data = $this->Room_category_model->get_rooms();
		$this->template('User/home',$data);
		
	}
	public function check_room() {
		$category_id = $this->io->post('category_id');
		$datetime_from = $this->io->post('datetime_from');
		$datetime_to= $this->io->post('datetime_to');
		
		 $this->form_validation->name('datetime_from')->required();
         if($this->form_validation->run()){
		$this->call->model('Admin/Booking_model');
		$data[1] = $this->Booking_model->check_bookings($datetime_from,$datetime_to, $category_id);
		         $this->session->set_userdata(
                    array(
                        'datetime_from' => date('Y-m-d H:i:s', strtotime($datetime_from)),
                        'datetime_to'=> date('Y-m-d H:i:s', strtotime($datetime_to))
                    )
                );
		$this->call->model('Admin/Room_category_model');
		$data[2] = $this->Room_category_model->get_allrooms();
		$data[3]=$category_id;
		$this->template('User/available_rooms',$data);
	}
		
	}
	public function registration($room_id){
		$data['room_id']=$room_id;
		$user_id= $this->session->userdata('user_id');
		if($this->form_validation->submitted()) {
		$firstname = $this->io->post('firstname');
		$middlename = $this->io->post('middlename');
		$lastname= $this->io->post('lastname');
		$gender= $this->io->post('gender');
		$gender= $this->io->post('gender');
		$birthday=$this->io->post('birthday');
		$email=$this->io->post('email');
		$contact=$this->io->post('contact');
		$this->form_validation->name('email')->valid_email("Please enter a valid email");
        $this->form_validation->name('email')->required("All fields are required");
         if($this->form_validation->run()){
                    $this->call->model('Admin/Booking_model');
                    if($this->Booking_model->add_customer($user_id,$firstname,$middlename,$lastname,$gender,$birthday,$email,$contact)==true){
                    	$this->add_booking($data['room_id']);
                    	$_SESSION['status']="Book Successfully";
                        $_SESSION['status_code']="success";
                        redirect('User/index');
                    }
                    else{
                        $_SESSION['status']="Error on saving";
                        $_SESSION['status_code']="error";
                    }
             }
          else{
          	$_SESSION['status']=$this->form_validation->errors();
            $_SESSION['status_code']="warning";
          }
          }

		$this->template('User/registration',$data);
	}
	public function add_booking($room_id){
		$datetime_from=$this->session->userdata('datetime_from');
		$datetime_to=$this->session->userdata('datetime_to');
		$room_id=$room_id;
		$user_id=$this->session->userdata('user_id');
		 

		$this->call->model('Admin/Booking_model');
        $this->Booking_model->insert_bookings($datetime_from, $datetime_to, $room_id,$user_id);

        
	}

	public function room_details($category_id){
		$this->call->model('Admin/Room_category_model');
		$data = $this->Room_category_model->get_category_byId($category_id);
		$this->template('User/room_details.php',$data);
	}
	
	public function show_room(){
		$this->call->model('Admin/Room_category_model');
		$data = $this->Room_category_model->get_rooms();
		$this->template('User/rooms',$data);
		
	}
	public function payment(){
		$this->call->model('Admin/Booking_model');
		$data = $this->Booking_model->get_all_bookings_by_userid($user_id);
		$this->template('User/payment',$data);
	}
	public function insert_account(){
		$email = $this->io->post('email');
		$password = $this->io->post('password');
		$confirm_password = $this->io->post('confirm_password');
		$this->form_validation->name('email')->valid_email($email,"please enter a valid email");
		$this->form_validation->name('email')->required("this is a required field");

         if($this->form_validation->run()){
         	if($password==$confirm_password){
         		$this->call->model('auth/Customer_model');
				$data = $this->Customer_model->insert_customer($email,$password);


         	}else{
         		$this->session->set_flashdata(array('alert' => 'danger', 'message' => 'Password Confirmation does not match'));
         	}
         }
         redirect('User/booking');

	}
	public function add_customer(){
		$lastname = $this->io->post('lastname');
		$firstname = $this->io->post('firstname');
		$middlename = $this->io->post('middlename');
		$address = $this->io->post('address');
		$gender = $this->io->post('gender');
		$birthday = $this->io->post('birthday');
          $this->form_validation->name('lastname')->required();
         if($this->form_validation->run()){
         	
         	$this->call->model('Auth/Customer_model');
         	if ($this->Customer_model->add_customer($lastname,$firstname,$middlename,$address,$gender,$birthday)==true){
         		$_SESSION['status']="Added Successfully";
				$_SESSION['status_code']="success";
         	}         }
         redirect('User/booking');

	
}
	
	
	public function show_restaurant(){
		$this->template('User/restaurant');
	}
	public function booking(){
		$this->template('User/booking_steps');
	}
	public function show_about(){
		$this->template('USer/about');
	}
	public function show_blog(){
		$this->template('USer/blog');
	}
	public function show_contact(){
		$this->template('USer/contact');
	}
	public function show_payment(){
		$this->template('USer/payment');
	}
	
}

?>