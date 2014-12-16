<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//el nombre de la clase en plural y UpperCase
class Inmuebles extends CI_Controller{
	public function ver_inmuebles(){
		$data=$this->Inmueble->extraer_inmuebles();
		if($data!=FALSE){
			$this->load->view('inmuebles/ver_inmuebles',$data);
			 
		}
	}
}