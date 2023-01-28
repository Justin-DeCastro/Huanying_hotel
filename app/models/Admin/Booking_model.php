<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
class Booking_model extends Model {
    public function check_bookings($date_from,$date_to,$room_id){
       $row= $this->db->table('bookings')->where('room_id',$room_id)->between('datetime_from', $date_from, $date_to)->or_between('datetime_to', $date_from, $date_to)->get_all();
       return $row;
    }
    public function add_customer($user_id,$firstname,$middlename,$lastname,$gender,$birthday,$email,$contact){
        $data=array(
            'user_id'=>$user_id,
            'firstname'=>$firstname,
            'middlename'=>$middlename,
            'lastname'=>$lastname,
            'gender'=>$gender,
            'birthday'=>$birthday,
            'email'=>$email,
            'contact'=>$contact        
        );
        $this->db->table('tbl_customer')->insert($data);
        return true;
    }
    public function insert_bookings($datetime_from, $datetime_to, $room_id,$user_id){
        $data=array(
            'datetime_from'=>$datetime_from,
            'datetime_to'=>$datetime_to,
            'room_id'=>$room_id,
            'user_id'=>$user_id,
            'payment'=>"pending",
            'status'=>"scheduled"
        );
        $this->db->table('bookings')->insert($data);
        return true;
    }
    public function get_all_bookings(){
        $row= $this->db->table('bookings as t')->left_join('tblrooms as f', 't.room_id=f.room_id')->get_all();
        return $row;
    }
    public function get_all_bookings_by_userid($user_id){
        $row= $this->db->table('bookings')->where('user_id', $user_id)->get_all();
        return $row;
    }
    public function delete_booking($booking_id){
        $del = $this->db->table('bookings')->where('booking_id', $booking_id)->delete();
        if($del){
            return true;

        }else{
            return false;
        }
    }
}

?>