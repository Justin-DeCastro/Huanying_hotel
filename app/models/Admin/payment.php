<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
class Room_category_model extends Model {

	public function get_payment()
	{				
    	$row = $this->db->table('payment')->get_all();
		return $row;
	}


}

?>