<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelku');
	}

	public function index()
	{
		$ses = $this->session->userdata;
		$data = array(
			"teks" => $ses
		);
		$this->load->view('user/index', $data);
	}

	public function log_out()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}

	public function page_about()
	{
		$this->load->view('user/about');
	}
	public function page_milestone()
	{
		$this->load->view('user/milestone');
	}
	public function page_products()
	{
		$this->load->view('user/product');
	}
	public function page_productDetail()
	{
		if ($this->session->userdata('status') != "Login") {
			redirect('auth');
		}
		$this->load->view('user/product-detail-1');
	}
	public function page_productDetail2()
	{
		if ($this->session->userdata('status') != "Login") {
			redirect('auth');
		}
		$this->load->view('user/product-detail-2');
	}
	public function page_team()
	{
		$this->load->view('user/team');
	}
	public function page_FAQ()
	{
		$this->load->view('user/QnA');
	}
}
