<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

    public function ValidateUser($nickname, $password)
    {
        $query = $this->db->where('nickname', $nickname);
        $query = $this->db->where('password', $password);
        $query = $this->db->get('users');

        if ($query->row() != null) {
            return true;
        } else {
            return false;
        }
    }
    public function getUser($username){
    	$query = $this->db->where('nickname', $username);
        $query = $this->db->get('users');
        return $query->result();
    }

	public function existUser($username)
    {
        $query = $this->db->where('nickname', $username);
        $query = $this->db->get('users');
        $result = $query->row();

        if (isset($result)) {
            return "false";
        } else {
            return "true";
        }
    }
    public function checkemail($phone)
    {
        $query = $this->db->where('email', $email);
        $query = $this->db->get('users');
        $result = $query->row();
        if (isset($result)) {
            return "false";
        } else {
            return "true";
        }
    }
    public function regUser($data)
    {
        $this->db->insert('users', $data);
        $this->db->where('nickname',$data['nickname']);
        $query = $this->db->get('users');
        $result = $query->result();
        var_dump($result);
        $record = array(
            'id_user' => $result[0]->id , 
            'record'=>'0',
            'intents'=>'0'
             );
        return $this->db->insert('user_records',$record);
    }
	public function covid(){
        

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://covidapi.info/api/v1/country/CUB",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
    }
}

/* End of file User_Model.php */

