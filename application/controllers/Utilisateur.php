<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    function __construct(){
        parent::__construct();
    }
	public function index()
	{
		if(!$this->session->userdata('auth') ){
		
			redirect(base_url('accueil/login'));
		
		}			

			//$data = $this->session->set_flashdata('info','Le profil de "'.'<b> '.$this->input->post('nom').'" a été créer</b>');
			$data['total_cv'] = $this->Cv_model->countCv($_SESSION['auth']['id']);
			
			$data['users'] = $this->Utilisateur_model->getAll($_SESSION['auth']['id']);
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('utilisateur/utilisateur_update',$data);
			$this->load->view('templates/footer');
		
		
		}
		
	public function newUser(){
		$this->form_validation->set_rules('nom','Nom','trim|required|xss_clean');
		$this->form_validation->set_rules('prenom','Prenom','trim|required|xss_clean');
		$this->form_validation->set_rules('pseudo','Pseudo','trim|required|xss_clean|callback_check_pseudo');
		$this->form_validation->set_rules('email','Email','trim|required|xss_clean|callback_check_email');
		$this->form_validation->set_rules('mdp','Mot de passe','trim|required|xss_clean|callback_check_mdp');
		
		if ($this->form_validation->run()){
			$data = array(
					'nom' =>$this->input->post('nom'),
					'prenom' =>$this->input->post('prenom'),
					'email' =>$this->input->post('email'),
					'pseudo' =>$this->input->post('pseudo'),
					'mdp' =>$this->input->post('mdp'),
			);
				
			$this->Utilisateur_model->new_Profil($data);
		
			$data = $this->session->set_flashdata('info','Le profil de "'.'<b> '.$this->input->post('nom').'"</b> a été créer');
				
			redirect(base_url('accueil/login',$data));
				
		
				
		}else{
		
				
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('index/login');
			$this->load->view('templates/footer');
		}
	}
		
	public function updateUser(){
		
		$this->form_validation->set_rules('nom','Nom','trim|required|xss_clean');
		$this->form_validation->set_rules('prenom','Prenom','trim|required|xss_clean');
		//$this->form_validation->set_rules('pseudo','Pseudo','trim|xss_clean|callback_check_pseudo');
		$this->form_validation->set_rules('adresse','Adresse','trim|xss_clean');
		$this->form_validation->set_rules('cp','Cp','trim|xss_clean');
		$this->form_validation->set_rules('ville','Ville','trim|xss_clean');
		
		if ($this->form_validation->run()){
			$data = array(
					'nom' =>$this->input->post('nom'),
					'prenom' =>$this->input->post('prenom'),
					'adresse' =>$this->input->post('adresse'),
					'cp' =>$this->input->post('cp'),
					'ville' =>$this->input->post('ville'),
					'fixe' =>$this->input->post('fixe'),
					'mobile' =>$this->input->post('mobile'),
					//'pseudo' =>$this->input->post('pseudo'),
			);
				
			$this->Utilisateur_model->updateUser($_SESSION['auth']['id'],$data);
		
			$data = $this->session->set_flashdata('info','<b>Les informations ont été mis à jour</b>');
				
			redirect(base_url('utilisateur',$data));
				
		
				
		}else{
		
			$data['users'] = $this->Utilisateur_model->getAll($_SESSION['auth']['id']);
			$data['total_cv'] = $this->Cv_model->countCv($_SESSION['auth']['id']);
			
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('utilisateur/utilisateur_update',$data);
			$this->load->view('templates/footer');
		}
	}

	public function updatePassword(){
		
		$this->form_validation->set_rules('mdp','Mot de passe','trim|required|xss_clean');
		$this->form_validation->set_rules('mdp','Mot de passe','trim|required|xss_clean|callback_check_mdp');
		
		if ($this->form_validation->run()){
			
			$data = array(
					'mdp' =>$this->input->post('mdp'),

			);
			
			$this->Utilisateur_model->updatePassword($_SESSION['auth']['id'],$data);
				
			$data = $this->session->set_flashdata('info','<b>Le mot de passe a été mis à jour</b>');
			
			redirect(base_url('utilisateur',$data));
			
			}else{
		
			$data = $this->session->set_flashdata('erreur','<b>Le Mot de passe n\'a pas été modifier</b>');
			$data['users'] = $this->Utilisateur_model->getAll($_SESSION['auth']['id']);
			$data['total_cv'] = $this->Cv_model->countCv($_SESSION['auth']['id']);
			
			
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('utilisateur/utilisateur_update',$data);
			$this->load->view('templates/footer');
		}
	}
	
	//fonction de call back
	/**
	 * Permet de verifier si l'adresse email est déjà utilisé
	 */
	function check_email(){
	
		if($this->input->post('email')){
				
			$this->db->select('idutilisateur');
			$this->db->from('utilisateur');
			$this->db->where('email',$this->input->post('email'));
			if($this->db->count_all_results()>0){
	
				$this->form_validation->set_message('check_email', 'Cet email est déjà utilisé');
	
				return false;
	
			}else{
	
				return true;
			}
		}
	}
	
	function check_pseudo(){
	
		if($this->input->post('pseudo')){
	
			$this->db->select('idutilisateur');
			$this->db->from('utilisateur');
			$this->db->where('pseudo',$this->input->post('pseudo'));
			if($this->db->count_all_results()>0){
	
				$this->form_validation->set_message('check_pseudo', 'Ce pseudo est déjà utilisé');
	
				return false;
	
			}else{
	
				return true;
			}
		}
	}
	
	/**
	 * Permet de verifier si les mots de passe sont identique
	 */
	function check_mdp(){
	
		if($this->input->post('mdp') !== $this->input->post('confirmMdp')){
	
			$this->form_validation->set_message('check_mdp', 'Les mots de passe ne correspondent pas');
	
			return false;
	
		}else{
	
			return true;
		}
	}

}
