<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_controller{	

	public function index(){
		$data = array(
			'titulo'=>'Usuários',
			'sub_titulo'=>'Listando todos usuários cadastrados no banco de dados',
			'usuarios'=> $this->ion_auth->users()->result(), //Pegar todos Usuários

			'styles'=> array(
				'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
			),

			'scripts'=> array(
				'plugins/datatables.net/js/jquery.dataTables.min.js',
				'plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
				'js/datatables.js',
				'plugins/datatables.net/js/estacionamento.js',
			)
		);

		// echo '<pre>';
		// print_r($data);
		// exit;

		$this->load->view('layout/header', $data);
		$this->load->view('usuarios/index');
		$this->load->view('layout/footer');
	}
}
