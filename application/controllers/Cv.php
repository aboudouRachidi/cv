<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cv extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('accroche','Accroche','trim|required|xss_clean');
		$this->form_validation->set_rules('version','Version','trim|required|xss_clean');
		
		if ($this->form_validation->run()){
			$data = array(
					'num_version' =>$this->input->post('version'),
					'accroche' =>$this->input->post('accroche'),
					'idutilisateur' =>$this->input->post('idUtilisateur'),
			);
		
			//$data['users'] = $this->Login_model->getAll($_SESSION['auth']['id']);
			$this->Cv_model->new_cv($data);
		
			$data = $this->session->set_flashdata('info','Le cv "'.'<b> '.$this->input->post('accroche').'" a été créer</b>');
		
			redirect(base_url('cv',$data));
		
		}else{
		
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('cv/cv_add');
			$this->load->view('templates/footer');
		}
		
	}
}
