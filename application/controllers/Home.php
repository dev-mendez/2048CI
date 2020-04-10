<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Table_Model');
		$this->load->model('Users_Model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
	}
	

	public function index()
	{
		if (isset($_SESSION['username'])) {
			redirect('/2048');
					}
		$this->load->view('home/login');
		
	}
	public function game(){
			if (isset($_SESSION['username'])) {
				$data = array(
					'user' => $this->Users_Model->getUser($_SESSION['username']),					
				);
			} else {
				redirect('');
			}
		$this->load->view('game/index',$data);
		
	}
	public function existUser(){
		$username = $this->input->get('REGusername');

		echo $this->Users_Model->existUser($username);
	}
	public function updatePoints(){

		$id  = $this->input->post('id');
		$record = $this->input->post('record');
		$data = $arrayName = array('id_user' => $id,'record'=>$record );
		$this->Table_Model->insertRecords($data);
	}

	public function scoreboard(){
		
		$this->load->view('game/scoreboard');
	}
	public function getRecords(){
		$data = $this->Table_Model->getRecords()->result();
		echo json_encode($data);
	}

	public function regUser(){
		$nickname = $this->input->post('REGusername');
		$phone = $this->input->post('phone');
		$password = $this->input->post('REGpassword');
		$province = $this->input->post('province');
		$data = array(
			'nickname' => $nickname,
			'password'=> sha1($password),
			'phone'=>$phone,
			'province'=>$province
		);
		if ($this->Users_Model->regUser($data)) {
			redirect('Home/badReg');
		}
		else {
			
			redirect('/');
					
		}

	}


	public function sha1Password(){
		echo sha1("123456");
	}

	public function logout()
	{
		session_destroy();
		redirect('', 'refresh');
	}

		public function checklogued()
	{
		$nickname = $this->input->post('loginnick');
		$pass = sha1($this->input->post('loginpassword'));

		echo $nickname.$pass;
		$this->form_validation->set_rules('loginnick', 'Loginnick', 'required');
		$this->form_validation->set_rules('loginpassword', 'Loginpassword', 'required|callback_ValidateUser');

		if ($this->form_validation->run() == false) {
			redirect('');
		} else {
			$username = $this->input->post('loginnick');
			$pass = sha1($this->input->post('loginpassword'));
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('logued', 'true');
			redirect('/2048');
		}
	}

		public function ValidateUser()
	{
		$nickname = $this->input->post('loginnick');
		$pass = sha1($this->input->post('loginpassword'));
		echo "$nickname.$password";

		if ($this->Users_Model->ValidateUser($nickname, $pass)) {
			return true;
	} else {
			return false;
		}
	}
	public function testTest(){
		$this->Table_Model->testRecord();
	}

	public function reg1User()
	{
		$province = $this->input->post('province', true);
		$username = $this->input->post('phone', true);
		$username = $this->input->post('username', true);

		$pass = sha1($this->input->post('password', true));
		$data = array(
			'username' => $username,
			'first_name' => $username,
			'email' => $email,
			'password' => $pass,
			'province_id' => $province,
			'location' => $state,
		);
		$this->Users_Model->regUser($data);
	}

}

/* End of file Home.php */

