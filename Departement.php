<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departement extends CI_Controller {


function __construct() {
	parent::__construct();
	$this->load->model('Departement_m');
}

	public function index()
	{
		$getdata = $this->Departement_m->getdata();
		$data =[
		'title' => 'Departement Data',
		'row' => $getdata
		];
		$this->template->load('template','Departement/Departementdata',$data);
	}


	public function Add()
	{
		 $this->form_validation->set_rules('nama', 'Nama Departement* ', 'required');
		 $this->form_validation->set_message('required', '{field}  Masih kosong, silakan di isi dulu?');
		 $this->form_validation->set_error_delimiters(' <span class="badge badge-danger"></span>');
		if ($this->form_validation->run() == FALSE) {
			$data = [
		'title' => 'Departement Form Add'
		];
		$this->template->load('template','Departement/Departementform',$data);
		}else{
			$post = $this->input->post(null, true);
			if (isset($_POST['add'])) {
			   $this->Departement_m->add($post);
			   if ($this->db->affected_rows() > 0) {
			      $this->session->set_flashdata('pesan','saved Success');
			      redirect('Departement');
			   }
			}else{
				$this->session->set_flashdata('error','saved Error');
			      redirect('Departement');
			}

		}
		
	}


	public function edit($id)
	{	
        $query = $this->Departement_m->getsdata($id);
		$data = [
		'title' => 'Departement Form edit',
		 'row' => $query
		];
			$this->template->load('template','Departement/Departementformedit',$data);
	}

	public function delete($id)
	{
		
		$this->Departement_m->delete($id);
			if ( $this->db->affected_rows() > 0 ) {
			      $this->session->set_flashdata('pesan','success Delete!');
		   }
		    redirect('Departement');
	}


	public function proses()
	{
		$post = $this->input->post(null, true);
			if (isset($_POST['edit'])) {
			   $this->Departement_m->edit($post);
			   if ($this->db->affected_rows() > 0) {
			      $this->session->set_flashdata('pesan','update Success');
			      redirect('Departement');
			   }else{
				$this->session->set_flashdata('error','update Error');
			      redirect('Departement');
			}
	}
}
}
