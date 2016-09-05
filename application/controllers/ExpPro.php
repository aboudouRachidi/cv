<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExpPro extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('entreprise','Entreprise','trim|required|xss_clean');
		$this->form_validation->set_rules('poste','Poste','trim|required|xss_clean');
		
		if ($this->form_validation->run()){
			$data = array(
					'entreprise' =>$this->input->post('entreprise'),
					'annee_debut' =>$this->input->post('dateD'),
					'annee_fin' =>$this->input->post('dateF'),
					'poste' =>$this->input->post('poste'),
			);
				
			$this->Exp_model->new_Exp($data);
		
			$data = $this->session->set_flashdata('info','L\'experience professionnelle '.'<b> '.$this->input->post('poste').'a été créer</b>');
			//$info['success'] = 'Insertion réussie';
				
		
				
		}else{
		
				
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('expPro/exp_add');
			$this->load->view('templates/footer');
		}
		
	}
}
