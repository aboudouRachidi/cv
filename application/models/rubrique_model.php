<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rubrique_model extends CI_Model {

    function __construct(){
    	
        parent::__construct();
        
    }
    
    /**
     * Permet d'inserer un nouveau profil avec ses données 
     * @param $data les données de l'utilisateurs
     */
	public function new_rubrique($data)
	{
		$this->db->insert('rubrique',$data);
	}
	
	public function getAll_cv($id){
		
		$this->db->where('cv.idutilisateur = '.$id);
		$Query = $this->db->get("cv");
		if($Query->num_rows() > 0 ){
			foreach ($Query->result() as $cvs)
			{
				$data[] = $cvs;
			}
		
			return $data;
		}
	}

}
