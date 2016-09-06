<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    function __construct(){
        parent::__construct();
    }
	public function index()
	{

		
		$this->form_validation->set_rules('nom','Nom','trim|required|xss_clean');
		$this->form_validation->set_rules('prenom','Prenom','trim|required|xss_clean');
		$this->form_validation->set_rules('adresse','Adresse','trim|required|xss_clean');
		$this->form_validation->set_rules('cp','Cp','trim|required|xss_clean');
		$this->form_validation->set_rules('ville','Ville','trim|required|xss_clean');
		$this->form_validation->set_rules('email','Email','trim|required|xss_clean');
		
		if ($this->form_validation->run()){
			$data = array(
					'nom' =>$this->input->post('nom'),
					'prenom' =>$this->input->post('prenom'),
					'adresse' =>$this->input->post('adresse'),
					'cp' =>$this->input->post('cp'),
					'ville' =>$this->input->post('ville'),
					'fixe' =>$this->input->post('fixe'),
					'mobile' =>$this->input->post('mobile'),
					'email' =>$this->input->post('email'),
					'pseudo' =>$this->input->post('pseudo'),
					'mdp' =>$this->input->post('mdp'),
			);
			
			$this->Utilisateur_model->new_Profil($data);

			$data = $this->session->set_flashdata('info','Le profil de "'.'<b> '.$this->input->post('nom').'" a été créer</b>');
			
			redirect(base_url('utilisateur',$data));
			

			
		}else{

			
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('utilisateur/utilisateur_add');
			$this->load->view('templates/footer');
		}
		
		}
	
	

}