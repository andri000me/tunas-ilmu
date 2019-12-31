<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		// load form and url helpers
        $this->load->helper(array('form', 'url'));
        // load form_validation library
        $this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('daftar/v_signup');
	}

	public function signup()
	{
		$output = array('error' => false);
		
		$this->form_validation->set_rules('nama','Nama Lengkap','trim|required|max_length[50]|alpha_spaces');
		$this->form_validation->set_rules('tgllahir','Tanggal Lahir','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user.email]');

		$this->form_validation->set_message('required','%s harus diisi !');
		$this->form_validation->set_message('exist_email','%s sudah ada di database, pilih email lain yang unik !');
		$this->form_validation->set_message('alpha_spaces', '%s harus alphabet');
		$this->form_validation->set_message('alpha_numeric', '%s Harus huruf/angka !');

		if ($this->form_validation->run() == FALSE) { 
        	$output['error'] = true;
            $output['message'] = validation_errors();
        } 
        else { 
            $user['nama'] = $_POST['nama'];
            $user['tgllahir'] = $_POST['tgllahir'];
            $user['email'] = $_POST['email'];

            $query = $this->users_model->register($user);

            if($query){
            	$output['message'] = 'Registrasi berhasil';
            }
            else{
                $output['error'] = true;
            	$output['message'] = 'Registrasi berhasil';
            }
        }

        echo json_encode($output);
	}
	
}

/*public function index()
	{
		if ($this->input->is_ajax_request()) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama','Nama Lengkap','trim|required|max_length[50]|alpha_spaces');
			$this->form_validation->set_rules('tgllahir','Tanggal Lahir','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user.email]');

			$this->form_validation->set_message('required','%s harus diisi !');
			$this->form_validation->set_message('exist_email','%s sudah ada di database, pilih email lain yang unik !');
			$this->form_validation->set_message('alpha_spaces', '%s harus alphabet');
			$this->form_validation->set_message('alpha_numeric', '%s Harus huruf / angka !');
			
			if ($this->form_validation->run() == TRUE) 
			{
				$username	= $this->input->post('username');
				$tgllahir 	= $this->input->post('password');
				$nama 		= $this->input->post('nama');
				$id_akses	= $this->input->post('id_akses');
				$status		= $this->input->post('status');

				$this->load->model('m_user');
				$signup = $this->m_user->signup($username, $tgllahir, $nama, $id_akses, $status);
				
				if($insert > 0)
					{
						echo json_encode(array(
							'status' => 1,
							'pesan' => "<i class='fa fa-check' style='color:green;'></i> Data User berhasil dismpan."
						));
					} else {
						$this->query_error("Oops, terjadi kesalahan, coba lagi !");
					}

			} else {
				$this->input_error();
			}
		} else {
			$this->load->view('daftar/v_signup');
		}
	}
	
	function input_error()
	{
		$json['status'] = 0;
		$json['pesan'] 	= "<div class='alert alert-warning'>" . validation_errors() . "</div>";
		echo json_encode($json);
	}

	function query_error($pesan = "Terjadi kesalahan, coba lagi !")
	{
		$json['status'] = 2;
		$json['pesan'] 	= "<div class='alert alert-danger'>" . $pesan . "</div>";
		echo json_encode($json);
	}*/