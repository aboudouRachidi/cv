<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cv_model extends CI_Model {

    function __construct(){
    	
        parent::__construct();
        
    }
    
    /**
     * Permet d'inserer un nouveau profil avec ses données 
     * @param $data les données de l'utilisateurs
     */
	public function new_cv($data)
	{
		$this->db->insert('cv',$data);
	}
	
	/**
	 * Permet de recuperer les données
	 * @param $data les données du cv
	 */
	public function getData_cv($id)
	{
		$this->db->where('cv.idcv = '.$id);
		$Query = $this->db->get("cv");
		if($Query->num_rows() > 0 ){
			foreach ($Query->result() as $cvs)
			{
				$data[] = $cvs;
			}
		
			return $data;
		}
	}
	
	
	public function getCv($id){
	
		$this->db->where('cv.idcv = '.$id);
		$Query = $this->db->get("cv");
		if($Query->num_rows() > 0 ){
			foreach ($Query->result() as $cvs)
			{
				$data[] = $cvs;
			}
	
			return $data;
		}
	}
	
	/**
	 * Permet de mettre à jour les données de la table cv selon les parametres
	 * @param $id cv à trouver dans la base de données, $data données à modifier
	 */
	public function update_cv($idcv,$data)
	{
		$this->db->where('idcv', $idcv);
		$this->db->update('cv', $data);
		// Produces:
		//
		//      UPDATE mytable
		//      SET title = '{$title}', name = '{$name}', date = '{$date}'
		//
	}
	
	public function countCv($id){
		$this->db->select('idcv');
        $this->db->from('cv');
        $this->db->where('idutilisateur = '.$id);
        $query = $this->db->get();
        return $query->num_rows();
	}
	

}
