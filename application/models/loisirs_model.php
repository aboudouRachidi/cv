<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loisirs_model extends CI_Model {

    function __construct(){
    	
        parent::__construct();
        
    }
    
    /**
     * Permet d'inserer un nouveau profil avec ses données 
     * @param $data les données de l'utilisateurs
     */
	public function new_loisirs($data)
	{
		$this->db->insert('loisirs',$data);
	}
	

}
