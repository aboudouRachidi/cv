<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil_model extends CI_Model {

    function __construct(){
    	
        parent::__construct();
        
    }
    
    /**
     * Permet de verifier les données d'un client
     * @param $email,$mdp determiner la correspondance dans la base de données
     */
	function check_id($email,$mdp)
	{
		$this->db->where('email',$email);
		$this->db->where('mdp',$mdp);
		
		$query = $this->db->get('utilisateur');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $user)
			{
				$this->session->set_userdata(
						'auth',
						array(
								'id'   => $user->idutilisateur,
								'email' => $user->email,
								'logged'=>true
						)
						);
			return true;

			}

		}
	}
	
	/**
	 * Permet de recuperer les données de l'utilisateur
	 * @param $id utilisateur à trouver dans la base de données
	 * @return tableau $data['users'] contenant les données de l'utilisateur
	 */
	function getAll($id){
	
		$this->db->where('idutilisateur = '.$id);
		$Query = $this->db->get('utilisateur');
		if($Query->num_rows()>0)
		{
			foreach ($Query->result() as $users)
			{
				$data[] = $users;
			}
			return $data;
		}
	}
	

}
