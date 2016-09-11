<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cv extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('auth') ){
		
			redirect(base_url('accueil/login'));
		
		}
		$this->form_validation->set_rules('accroche','Accroche','trim|required|xss_clean');
		$this->form_validation->set_rules('version','Version','trim|required|xss_clean');
		
		if ($this->form_validation->run()){
			$data = array(
					'num_version' =>$this->input->post('version'),
					'accroche' =>$this->input->post('accroche'),
					'idutilisateur' =>$_SESSION['auth']['id'],
			);
		
			//$data['users'] = $this->Login_model->getAll($_SESSION['auth']['id']);
			$this->Cv_model->new_cv($data);
		
			$data = $this->session->set_flashdata('info','Le cv "'.'<b> '.$this->input->post('accroche').'" a été créer</b>');
		
			redirect(base_url('cv',$data));
		
		}else{
			$data['cvs'] = $this->Rubrique_model->getAll_cv($_SESSION['auth']['id']);
			
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('cv/cv_add',$data);
			$this->load->view('templates/footer');
		}
		
	}
	
	
	public function update_cv()
	{
		if(!$this->session->userdata('auth') ){
	
			redirect(base_url('accueil/login'));
	
		}
		$this->form_validation->set_rules('accroche','Accroche','trim|required|xss_clean');
		$this->form_validation->set_rules('version','Version','trim|required|xss_clean');
	
		if ($this->form_validation->run()){
			$data = array(
					'num_version' =>$this->input->post('version'),
					'accroche' =>$this->input->post('accroche'),
					'idutilisateur' =>$_SESSION['auth']['id'],
			);
	
			$this->Cv_model->update_cv($this->uri->segment(3),$data);
	
			$data = $this->session->set_flashdata('info','Le cv "'.'<b> '.$this->input->post('accroche').'" a été mis à jour</b>');
	
			redirect(base_url('cv',$data));
	
		}else{
			$data['cvs'] = $this->Cv_model->getData_cv($this->uri->segment(3));
			$data['users'] = $this->Utilisateur_model->getAll($_SESSION['auth']['id']);
			$data['rubriques'] = $this->Rubrique_model->getRubrique($this->uri->segment(3));
			
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('cv/cv_update',$data);
			$this->load->view('templates/footer');
		}
	}
	
	public function viewCv()
	{
		if(!$this->session->userdata('auth') ){
	
			redirect(base_url('accueil/login'));
	
		}
		$this->form_validation->set_rules('accroche','Accroche','trim|required|xss_clean');
		$this->form_validation->set_rules('version','Version','trim|required|xss_clean');
	
		if ($this->form_validation->run()){
			$data = array(
					'num_version' =>$this->input->post('version'),
					'accroche' =>$this->input->post('accroche'),
					'idutilisateur' =>$_SESSION['auth']['id'],
			);
	
			$this->Cv_model->update_cv($this->uri->segment(3),$data);
	
			$data = $this->session->set_flashdata('info','Le cv "'.'<b> '.$this->input->post('accroche').'" a été mis à jour</b>');
	
			redirect(base_url('cv',$data));
	
		}else{
			$data['cvs'] = $this->Cv_model->getData_cv($this->uri->segment(3));
			$data['users'] = $this->Utilisateur_model->getAll($_SESSION['auth']['id']);
			$data['rubriques'] = $this->Rubrique_model->getRubrique($this->uri->segment(3));
				
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('cv/cv_view',$data);
			$this->load->view('templates/footer');
		}
	}
}
