<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backoffice extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		

		$this->load->model('Backoffice_model');
			
		

	}

	
	public function index()
	{

		$data = array(

			"title" => "BackOffice",
			"breadcrumb" => "Dashboard Setia Samudera Abadi"

		);

		$this->load->view('template', $data);

	}

	public function Invoice()
	{

		$data = array(

			"title" => "Invoice",
			"breadcrumb" => "Invoice Setia Samudera Abadi"

		);

		$this->load->view('Input_invoice', $data);


	}

	public function Client()
	{

		$data = array(
			"title" => "Client",
			"breadcrumb" => "Master Client",
			"data_client" => $this->Backoffice_model->get_client()
		);

		$this->load->view('Master_client', $data);
	}


	public function simpan_client()
	{

		$data = array(
			"id_client" => $this->input->post('id_client'),
			"alamat" => $this->input->post('alamat'),
			"nama_client" => $this->input->post('nama_client'),
			"npwp" => $this->input->post('npwp'),
			"no_tlp" => $this->input->post('no_tlp'),
			"siup" => $this->input->post('siup'),
			"dll" => $this->input->post('dll') 
		);

		$this->Backoffice_model->save_client($data);

		$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                               </div>');
		//}
        
        redirect('Backoffice/Client');

	}

	public function edit_client($no_id)
	{

		$no_id = $this->uri->segment(3);


	}

	Public function no_surat()
	{
		$bulan = date('n');
		$tahun = date ('Y');
		$nomor = "/SPT/".$bulan."/".$tahun;
		return $nomor;

	}


}
