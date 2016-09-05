<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Langue extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('libelle','Libelle','trim|required|xss_clean');
		$this->form_validation->set_rules('niveau','Etablissement','trim|required|xss_clean');
		
		if ($this->form_validation->run()){
			$data = array(
					'libelle' =>$this->input->post('libelle'),
					'niveau' =>$this->input->post('niveau'),
			);
		
			$this->Langue_model->new_langue($data);
		
			$data = $this->session->set_flashdata('info','Une langue '.'<b> '.$this->input->post('libelle').'a été créer</b>');
			//$info['success'] = 'Insertion réussie';
		
		
		
		}else{
		
		
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('langue/langue_add');
			$this->load->view('templates/footer');
		}
		
	}
}
