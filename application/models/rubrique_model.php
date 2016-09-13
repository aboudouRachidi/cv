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
	
	
	/**
	 * Permet de mettre à jour les données de la table rubrique selon les parametres
	 * @param $id rubrique à trouver dans la base de données, $data données à modifier
	 */
	public function update_rubrique($idrubrique,$data)
	{
		$this->db->where('idrubrique', $idrubrique);
		$this->db->update('rubrique', $data);
		// Produces:
		//
		//      UPDATE mytable
		//      SET title = '{$title}', name = '{$name}', date = '{$date}'
		//
	}
	
	public function getRubrique($id){
		//$this->db->where('cv.idutilisateur = '.$id);
		$Query = $this->db->query('SELECT * 
				FROM rubrique,cv 
				WHERE cv.idcv = rubrique.idcv 
				AND cv.idcv = '.$id);
		if($Query->num_rows() > 0 ){
			foreach ($Query->result() as $rubriques)
			{
				$data[] = $rubriques;
			}
		
			return $data;
		}
		
	}
	
	public function getRubriqueData($id){
		//$this->db->where('cv.idutilisateur = '.$id);
		$Query = $this->db->query('SELECT *
				FROM rubrique
				WHERE rubrique.idrubrique = '.$id);
		if($Query->num_rows() > 0 ){
			foreach ($Query->result() as $rubriques)
			{
				$data[] = $rubriques;
			}
	
			return $data;
		}
	}
	
	/**
	 * Permet de supprimer une rubrique
	 * @param $id du rubrique dans la base de données
	 */
	public function DeleteRubrique($id){
		
		$this->db->where('idrubrique', $id);
		$this->db->delete('rubrique');
		
		// Produces:
		// DELETE FROM rubrique
		// WHERE idrubrique = $id
	
	}
	
	public function countRubrique($id){
		$this->db->select('idrubrique');
		$this->db->from('rubrique');
		$this->db->where('idcv = '.$id);
		$query = $this->db->get();
		return $query->num_rows();
	}

}
