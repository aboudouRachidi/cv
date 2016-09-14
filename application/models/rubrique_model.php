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
				AND cv.idcv = '.$id.' ORDER BY position');
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
	
	public function getMaxPositionRubrique($id){
		
		/*$this->db->where('rubrique.idcv  = '.$id);
		$this->db->select_max('position');
		$query = $this->db->get('rubrique');
		
		
		/*$Query = $this->db->query('SELECT max(position)
		FROM rubrique
		WHERE rubrique.idcv = '.$id);*/
	
		$query = $this->db->select_max('position')->where('rubrique.idcv  = '.$id)->get('rubrique')->result_array();
    	return (int) $query[0]['position'];
	}
	
	public function getMinPositionRubrique($id){
	
		$query = $this->db->select_min('position')->where('rubrique.idcv  = '.$id)->get('rubrique')->result_array();
		return (int) $query[0]['position'];
	}
	
	public function updatePosition($position1,$id){
		
		$this->db->set('position', $position1, FALSE);
		$this->db->where('rubrique.idrubrique', $id);
		$this->db->update('rubrique');
		
	}
	
	public function updateNewPosition($NewPosition,$id){
	
		$this->db->set('position', $NewPosition, FALSE);
		$this->db->where('rubrique.idrubrique', $id);
		$this->db->update('rubrique');
	
	}
	
	public function getNewPositionRubriqueId($position){
		
		$query = $this->db->select('idrubrique')->where('position  = '.$position)->get('rubrique')->result_array();
		return (int) $query[0]['idrubrique'];
		
	}

}
