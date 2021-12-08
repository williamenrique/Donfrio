<?php
header('Access-Control-Allow-Origin: *');
class Home extends Controllers{
	public function __construct(){
		// session_start();
		// if (empty($_SESSION['login'])) {
		// 	header("Location:".base_url().'acceso/login');
		// }
		//invocar para que se ejecute el metodo de la herencia
		parent::__construct();
	}
	public function home(){
		$data['page_title'] = "Empresa de Refrigeracion";
		$data['page_link'] = "home";
		$data['page_menu_open'] = "empty";
		$data['page_cel'] = "+12 23456790";
		$data['page_email'] = "empty";
		$data['page_titulo'] = "Don Frio Refrigeracion Spa";
		$data['page_facebook'] = "empty";
		$data['page_instagram'] = "empty";
		$data['page_twitter'] = "empty";
		$data['page_function'] = "function.home.js";
		$this->views->getViews($this, "home",$data);
	}

}