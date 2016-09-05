<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Langue_model extends CI_Model {

    function __construct(){
    	
        parent::__construct();
        
    }
    
    /**
     * Permet d'inserer une nouvelle langue 
     * @param $data le libelle de la langue
     */
	public function new_langue($data)
	{
		$this->db->insert('langue',$data);
	}
	

}
