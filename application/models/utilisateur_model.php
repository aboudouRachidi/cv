<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_model extends CI_Model {

    function __construct(){
    	
        parent::__construct();
        
    }
    
    /**
     * Permet d'inserer un nouveau profil avec ses données 
     * @param $data les données de l'utilisateurs
     */
	public function new_profil($data)
	{
		$this->db->insert('utilisateur',$data);
	}
	
	/**
	 * Permet de recuperer les données d'un utilisateur
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
	
	function updateUser($id,$data){
		
		$this->db->where('idutilisateur', $id);
		$this->db->update('utilisateur', $data);
		// Produces:
		//
		//      UPDATE utilisateur
		//      SET nom = '{$nom}',....'
		//      WHERE idutillisateur = $id
	}
	
	function updatePassword($id,$data){
		$this->db->where('idutilisateur', $id);
		$this->db->update('utilisateur', $data);
	}
}
