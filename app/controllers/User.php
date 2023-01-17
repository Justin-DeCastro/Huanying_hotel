<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {
	

	private function template($content = 'index', $data = NULL) {

		
		$this->call->view('User/includes/header', $data); // include the header, can also include sidebar or topbar
		$this->call->view('User/includes/navbar', $data);
		$this->call->view($content, $data);	// main content
		$this->call->view('User/includes/footer', $data); // include footer, or footbar
		$this->call->view('User/includes/loader', $data); // include footer, or footbar
		
	}
	
	public function __construct(){
		parent:: __construct();
		$this->call->library('session');
		$this->call->library('form_validation');
	}


	public function index() {
		$this->template('User/home');
		
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
	public function show_login(){
		$this->call->view('user/login');
	}
	public function show_registration(){
		$this->call->view('user/registration');
	}
	
}

?>