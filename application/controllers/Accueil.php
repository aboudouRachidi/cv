<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('auth') ){
		
			redirect(base_url('accueil/login'));
		
		}
		
		$data['users'] = $this->Utilisateur_model->getAll($_SESSION['auth']['id']);
		$data['cvs'] = $this->Rubrique_model->getAll_cv($_SESSION['auth']['id']);
		$data['rubriques'] = $this->Rubrique_model->getRubrique($_SESSION['auth']['id']);
		
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('index/accueil_view',$data);
		$this->load->view('templates/footer');
		
		
	}
	public function login()
	{
		if($this->session->userdata('auth') || $this->session->userdata('logged')){
				
			redirect(base_url('index/accueil_view'));
				
		}
			
		$this->form_validation->set_rules('email','Email','trim|required|xss_clean');
		$this->form_validation->set_rules('mdp','Mot de passe','trim|required|xss_clean');
		
		if($this->form_validation->run())
		{
			//$this->load->model('Login_model');
				
			if($this->Accueil_model->check_id($this->input->post('email'),$this->input->post('mdp')))
			{
		
				$data['users'] = $this->Accueil_model->getAll($_SESSION['auth']['id']);
				//$data = $this->session->set_flashdata('info','Connexion réussi "'.'<b>'.$this->input->post('email').'"</b>');
				
				redirect('accueil',$data);
		
			}else{

				$data = $this->session->set_flashdata('erreur','<b>Identifiant ou mot de passe incorrect</b>');
				$this->load->view('templates/header');
				$this->load->view('templates/menu');
				$this->load->view('index/login');
				$this->load->view('templates/footer');
			}
		
		}else{
			
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('index/login');
			$this->load->view('templates/footer');
		}
	}
	
	/**
	 * Permet de se deconnecter
	 */
	function logout(){
		$this->session->unset_userdata('auth');
		$this->session->unset_userdata('logged');
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
