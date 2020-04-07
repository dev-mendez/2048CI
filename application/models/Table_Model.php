<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Table_Model extends CI_Model {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
	}
	

	function getRecords(){
		$query = $this->db->get('user_records');
        return $query->row();
	}
	
    public function insertRecords($data)
    {
        if (isset($data)) {
            $this->db->insert('user_records', $data);
            return true;
        } else {
            return false;
        }
    }	

}

/* End of file ModelName.php**/

