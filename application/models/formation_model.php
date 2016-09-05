<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formation_model extends CI_Model {

    function __construct(){
    	
        parent::__construct();
        
    }
    
    /**
     * Permet d'inserer un nouveau profil avec ses données 
     * @param $data les données de l'utilisateurs
     */
	public function new_formation($data)
	{
		$this->db->insert('formation',$data);
	}
	

}
