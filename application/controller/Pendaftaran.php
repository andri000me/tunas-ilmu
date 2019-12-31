<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	function index()
	{
		$this->load->view('pendaftaran/v_pendaftaran');
	}

	function dashboard()
	{
		$this->load->view('admin/v_awal_admin');
	}

	function data_santri()
	{
		$this->load->view('admin/v_data_santri');
	}
}