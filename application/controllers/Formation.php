<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formation extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('libelle','Libelle','trim|required|xss_clean');
		$this->form_validation->set_rules('etablissement','Etablissement','trim|required|xss_clean');
		$this->form_validation->set_rules('lieu','Lieu','trim|required|xss_clean');
		
		if ($this->form_validation->run()){
			$data = array(
					'libelle' =>$this->input->post('libelle'),
					'annee_debut' =>$this->input->post('dateD'),
					'annee_fin' =>$this->input->post('dateF'),
					'etablissement' =>$this->input->post('etablissement'),
					'lieu' =>$this->input->post('lieu'),
			);
		
			$this->Formation_model->new_formation($data);
		
			$data = $this->session->set_flashdata('info','La formation '.'<b> '.$this->input->post('libelle').'a été créer</b>');
			//$info['success'] = 'Insertion réussie';
		
		
		
		}else{
		
		
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('formation/formation_add');
			$this->load->view('templates/footer');
		}
		
	}
}
