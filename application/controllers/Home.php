<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Table_Model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
	}
	

	public function index()
	{
		$this->load->view('home/index');
		
	}
	public function game(){

		$this->load->view('game/index');
		
	}
	public function updatePoints(){

		$name  = $this->input->post('name');
		$record = $this->input->post('record');
		$data = $arrayName = array('username' => $name,'record'=>$record );
		$this->Table_Model->insertRecords($data);
	}
	public function scoreboard(){
		$this->load->view('game/scoreboard');
	}

}

/* End of file Home.php */

