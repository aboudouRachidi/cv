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
					'position'=>$this->input->post('position'),
					'idcv' =>$this->input->post('idcv'),
			);
		
			$this->Rubrique_model->new_rubrique($data);
		
			$data = $this->session->set_flashdata('info','La rubrique <b>"'.$this->input->post('titre').'"</b> a été créer pour le CV <b>"'.$this->input->post('accroche').'"</b>');
		
			redirect(base_url('cv/viewCv/'.$this->uri->segment(3),$data));
		
		}else{
			//$data['users'] = $this->Rubrique_model->getUser_cv(1);
			$data['cvs'] = $this->Cv_model->getCv($this->uri->segment(3));
			$data['position'] = $this->Rubrique_model->getMaxPositionRubrique($this->uri->segment(3));
			
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
					
			);
	
			$this->Rubrique_model->update_rubrique($this->uri->segment(3),$data);
	
			$data = $this->session->set_flashdata('info','La rubrique <b>"'.$this->input->post('titre').'"</b> a été mis à jour');
	
			redirect(base_url('cv/viewCv/'.$this->uri->segment(4),$data));
	
		}else{
			$data['cvs'] = $this->Cv_model->getData_cv($this->uri->segment(3));
			$data['rubriques'] = $this->Rubrique_model->getRubriqueData($this->uri->segment(3));
			$data['users'] = $this->Utilisateur_model->getAll($_SESSION['auth']['id']);
			
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('rubrique/rubrique_update',$data);
			$this->load->view('templates/footer');
		}
	}
	
	public function deleteRubrique(){

		
		//if($this->Rubrique_model->DeleteRubrique($this->uri->segment(3))){
		$this->Rubrique_model->DeleteRubrique($this->uri->segment(3));
			$data = $this->session->set_flashdata('info', '<b>La rubrique a été supprimé</b>');
			redirect(base_url('cv/viewCv/'.$this->uri->segment(4),$data));
		//}
		/*
		else{
			$data = $this->session->set_flashdata('erreur', 'Impossible d\'effectuer cette opération');
			redirect(base_url('cv/viewCv/'.$this->uri->segment(4),$data));
		}
		*/
	}
	
	public function positionRubriqueDown(){
		
		//$PositionMin = $this->Rubrique_model->getMinPositionRubrique($this->uri->segment(3));
		$PositionMin = 0;
		
		if($this->uri->segment(5) == $PositionMin){
			
			$this->session->set_flashdata('erreur', '<b>La rubrique est déjà en première position</b>');
			redirect(base_url('cv/viewCv/'.$this->uri->segment(4),$data));
			
		}else{
		
		$this->Rubrique_model->updatePosition($this->uri->segment(5)- 1,$this->uri->segment(3));
	
		$data = $this->session->set_flashdata('info', '<b>Position modifié</b>');
		
		redirect(base_url('cv/viewCv/'.$this->uri->segment(4),$data));
		}
	}
	
	public function positionRubriqueUp(){
	
		$PositionMax = $this->Rubrique_model->getMaxPositionRubrique($this->uri->segment(4));
		
		if($this->uri->segment(5) == $PositionMax){
				
			$this->session->set_flashdata('erreur', '<b>La rubrique est déjà en dernière position</b>');
			
			redirect(base_url('cv/viewCv/'.$this->uri->segment(4),$data));
				
		}else{
			
			$this->Rubrique_model->updatePosition($this->uri->segment(5)+ 1,$this->uri->segment(3));
		
			$data = $this->session->set_flashdata('info', '<b>Position modifié '.$PositionMax.'</b>');
			
			redirect(base_url('cv/viewCv/'.$this->uri->segment(4),$data));
		
		}
	}
}
