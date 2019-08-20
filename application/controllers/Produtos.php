<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index()
	{
		// CARREGANDO MODEL
		$this->load->model('ProdutosModel', 'produtos');
		// PEGANDO DADOS DA MODEL
		$data['produtos'] = $this->produtos->getProdutos();

		// RETORNANDO VIEW E OS DADOS DO BANCO
		$this->load->view('listarProdutos', $data);
	}

}
