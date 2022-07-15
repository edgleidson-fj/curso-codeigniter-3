<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_controller{	

	public function index(){
		$data = array(
			'titulo'=>'Usuários',
			'sub_titulo'=>'Listando todos usuários cadastrados no banco de dados',
			'titulo_tabela'=>'Usuários cadastrados',
			'usuarios'=> $this->ion_auth->users()->result(), //Pegar todos Usuários
		);

		// echo '<pre>';
		// print_r($data);
		// exit;

		$this->load->view('layout/header', $data);
		$this->load->view('usuarios/index');
		$this->load->view('layout/footer');
	}
}
