<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TaulaPersones extends CI_Controller {
    
	public function index()
	{
		$this->load->library('SmartGrid/smartgrid');
		$sql = "SELECT * FROM persones ORDER BY Nom ASC";
		$columns = array("Nom"=>array("header"=>"Nom", "type"=>"label"),
			"Cognoms"=>array("header"=>"Cognoms", "type"=>"label"),
			"DNI"=>array("header"=>"DNI", "type"=>"label"),
			"Adreca"=>array("header"=>"Adreca", "type"=>"label")
		);

		$this->smartgrid->set_grid($sql, $columns);

		$data['grid_html'] = $this->smartgrid->render_grid();

		$this->load->view('TaulaPersones/TaulaPersones', $data);

	}
}
