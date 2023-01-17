<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
class Customer_model extends Model {

	public function auth($username, $password)
	{				
    	$row = $this->db->table('tblusers') 					
    					->where('username', $username)
    					->get();
		if($row)
		{
			if(password_verify($password, $row['password'])) {
				return $row;
			} else {
				return false;
			}
		}
	}

    public function passwordhash($password)
	{
		$options = array(
		'cost' => 4,
		);
		return password_hash($password, PASSWORD_BCRYPT, $options);
	}
	public function insert_customer($email,$password,$user_id,$token){
		$data = array(
			'username' => $email,
			'password' => $this->passwordhash($password),
			'role'=>"Customer",
			'status'=>"Not Verified",
			'user_id'=> $user_id,
			'token'=>$token

		);
		$row = $this->db->table('tblusers') 					
    					->where('username', $email)
    					->get();

    	if($row==0){
			$this->db->table('tblusers')->insert($data);
			return true;
		}
		else{
			return false;
		}
	}
	public function add_customer($lastname,$firstname,$middlename,$address,$gender,$birthday){
		$data = array(
			'lastname' => $lastname,
			'firstname' => $firstname,
			'middlename'=>$middlename,
			'address'=>$address,
			'gender'=>$gender,
			'birthday'=>$birthday

		);
		return $this->db->table('tbl_customer')->insert($data);
	}
	public function verification($email){
		$data = array(
			'status' => "Verified"
		);
		return $this->db->table('tblusers')->where('username', $email)->update($data);
	}
}

?>