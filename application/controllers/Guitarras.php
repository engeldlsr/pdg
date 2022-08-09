<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guitarras extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}

	public function index()
	{
		// Titulo y descripcion de la pagina mostrada
		$data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.
		$this->load->model('categoria');
		$this->load->model('Productos');
		
		$data['items'] = $this->Productos->__select('tbl_producto', 'id_categoria', 10);

		$data['categorias'] = $this->categoria->findAll();

		$this->load->view('front/header', $data);
		$this->load->view('guitarras');
		$this->load->view('front/footer');
	}

}