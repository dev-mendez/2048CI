<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Table_Model extends CI_Model {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
	}
	

	public function getRecords(){
		$query = $this->db->query('SELECT * from user_records INNER JOIN users ON users.id = user_records.id_user ORDER BY user_records.record DESC');
        return $query;
	}
    public function testRecord(){
        $query = $this->db->query('SELECT * From user_records WHERE id_user = 1 ');
        $query = $query->result();
        
    }
	
    public function insertRecords($data)
    {   
        $query = $this->db->query('SELECT * From user_records WHERE id_user = "'.$data['id_user'].'" ');
        $query = $query->result();

        if ($query[0]->record < $data['record']) {
            # code...
        
        if (isset($data)) {
        $intents = $query[0]->intents;
        $query = $this->db->where('id_user', $data['id_user']);
        $data['intents']=$intents+1;

        $query = $this->db->update('user_records', $data);
            return true;
        } else {
            return false;
        }
        }
        else{
        
        $intents = $query[0]->intents;
        $query = $this->db->where('id_user', $data['id_user']);
        var_dump($intents);
        $datica = array('intents' => $intents += 1 );
        var_dump($intents);
        $query = $this->db->update('user_records', $datica); 
        }
        

    }	

}

/* End of file ModelName.php**/

