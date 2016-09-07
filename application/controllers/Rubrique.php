<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rubrique extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('auth') ){
		
			redirect(base_url('accueil/login'));
		
		}
		
		$this->form_validation->set_rules('titre','Titre','trim|required|xss_clean');
		$this->form_validation->set_rules('contenu','Contenu','trim|required|xss_clean');
		
		if ($this->form_validation->run()){
			$data = array(
					'titre' =>$this->input->post('titre'),
					'contenu' =>$this->input->post('contenu'),
					'idcv' =>$this->input->post('cv'),
			);
		
			$this->Rubrique_model->new_rubrique($data);
		
			$data = $this->session->set_flashdata('info','La rubrique "'.'<b> '.$this->input->post('titre').'" a été créer pour le CV selectionner</b>');
		
			redirect(base_url('rubrique',$data));
		
		}else{
			//$data['users'] = $this->Rubrique_model->getUser_cv(1);
			$data['cvs'] = $this->Rubrique_model->getAll_cv($_SESSION['auth']['id']);
			
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('rubrique/rubrique_add',$data);
			$this->load->view('templates/footer');
		}
	}
	
	public function update_rubrique()
	{
		if(!$this->session->userdata('auth') ){
	
			redirect(base_url('accueil/login'));
	
		}
		$this->form_validation->set_rules('titre','Titre','trim|required|xss_clean');
		$this->form_validation->set_rules('contenu','Contenu','trim|required|xss_clean');
	
		if ($this->form_validation->run()){
			$data = array(
					'titre' =>$this->input->post('titre'),
					'contenu' =>$this->input->post('contenu'),
					'idcv' =>$this->input->post('cv'),
			);
	
			$this->Rubrique_model->update_rubrique($this->uri->segment(3),$data);
	
			$data = $this->session->set_flashdata('info','La rubrique "'.'<b> '.$this->input->post('titre').'" a été mis à jour</b>');
	
			redirect(base_url('rubrique',$data));
	
		}else{
			$data['cvs'] = $this->Cv_model->getData_cv($this->uri->segment(3));
	
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('cv/cv_update',$data);
			$this->load->view('templates/footer');
		}
	}
}
