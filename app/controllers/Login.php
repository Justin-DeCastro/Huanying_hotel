<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Login extends Controller {

    public function __construct() {
        parent:: __construct();
    }

    // login for admin
    public function index() {
        // --using is_logged_in function from app/helpers/common_helper.php
        if(is_logged_in())
            $this->check_login_user();

        if($this->form_validation->submitted()) {

            $username = $this->io->post('username');
            $password = $this->io->post('password');

            $this->call->model('auth/admin_model');

            $data = $this->admin_model->auth($username, $password);
            if(empty($data)) {
                
                $_SESSION['status']="Incorrect email or password";
                        $_SESSION['status_code']="error";
                        redirect('Login/registration');                     
            }else {

                $this->session->set_userdata(
                    array(
                        'logged_in' => 1,
                        'user_id' => $data['user_id'],
                        'username' => $data['username'],
                        'role' => 'administrator',
                    )
                );
                
                $this->check_login_user();
            }
        }

        $this->call->view('login');
	}
    /*-----------Logout---------*/
    public function logout(){
        $this->session->sess_destroy();
        redirect ('user');
    }
    /*-----------------Registration--------------*/
    public function registration(){
        $this->call->view('User/sign_up');
    }
    public function register(){
        if($this->form_validation->submitted()) {
            $email = $this->io->post('email');
            $password = $this->io->post('password');
            $confirm_password = $this->io->post('confirm_password');
            $user_id=rand(000000,999999);
            $token=rand(11111,99999);
            $this->form_validation->name('email')->valid_email("Please enter a valid email");
            $this->form_validation->name('email')->required("All fields are required");
            $this->form_validation->name('password')->required("All fields are required");
            $this->form_validation->name('confirm_password')->required("All fields are required");

             if($this->form_validation->run()){
                if($password==$confirm_password){
                    $this->call->model('auth/Customer_model');

                    if($this->Customer_model->insert_customer($email,$password,$user_id,$token)==true){
                    $this->send_email($email,$token);
                    }
                    else{
                        $_SESSION['status']="Email is already taken";
                        $_SESSION['status_code']="warning";
                        redirect('Login/registration');                    }


                }else{
                    $_SESSION['status']="Password Confirmation does not match";
                    $_SESSION['status_code']="warning";
                    redirect('Login/registration');
                }
             }
             else{
                    $_SESSION['status']=$this->form_validation->errors();
                    $_SESSION['status_code']="warning";

                 redirect('Login/registration');
                }
        }

    }

    /*--------------Send Email-----------------------*/
    public function sign_in(){
        // --using is_logged_in function from app/helpers/common_helper.php
        if(is_logged_in())
            $this->check_login_user();

        if($this->form_validation->submitted()) {

            $username = $this->io->post('username');
            $password = $this->io->post('password');

            $this->call->model('auth/admin_model');

            $data = $this->admin_model->auth($username, $password);
            if(empty($data)) {
                
                $_SESSION['status']="Incorrect email or password";
                        $_SESSION['status_code']="error";
                        
                
            }else {

                $this->session->set_userdata(
                    array(
                        'logged_in' => 1,
                        'user_id' => $data['user_id'],
                        'username' => $data['username'],
                        'role' => 'user'
                    )
                );
                
                $this->check_login_user();
            }
        }

        $this->call->view('User/login');
    }

    /*--------------Send Email-----------------------*/
    public function send_email($recipient,$token){
        $this->email->sender('huanyinghotel@gmail.com','Huanying Hotel');
        $this->email->recipient($recipient);
        $this->email->subject('Verification');
        $this->email->email_content("Welcome to Huanying Hotel Online, before you continue please verify your account using this pin ".$token);
        $this->email->send();
        $data['email']=$recipient;
        $data['token']=$token;
        $this->call->view('verification',$data);


    }

    /*--------------Verification-----------------------*/
    public function verification(){
        if($this->form_validation->submitted()) {

            $code = $this->io->post('code');
            $email = $this->io->post('email');
            $token=$this->io->post('token');

            if($code==$token){
            $this->call->model('auth/customer_model');

            $this->customer_model->verification($email);
            $_SESSION['status']="Registered Successfully!";
            $_SESSION['status_code']="success";
            redirect('Login/sign_in');
            }
            else {
                $_SESSION['status']="Incorrect verification code";
                $_SESSION['status_code']="error";
                 $this->call->view('verification');
                 
             }
        }

            }

    /*--------------Check login-----------------------*/
    public function check_login_user()
    {
        if($_SESSION['role'] == "administrator")
            redirect('Admin');
        elseif($this->session->userdata('role') == "user")
            redirect('User');
    }


}

?>