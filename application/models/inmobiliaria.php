<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//el nombre de la clase en singular y upperCamelCase
class Inmueble extends CI_Model{
	public function extraer_inmuebles(){
		$res=$this->db->query("select * from inmuebles");
		//$res=$this->db->get('inmuebles');

		return ($res->num_rows()>0) ? $res->row_array() : FALSE;
		//return ($res->num_rows()>0) ? $res : FALSE;
	}
}