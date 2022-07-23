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


	public function core($usuario_id = null){

		//Se não não existir $usuario_id, cadastre um novo, caso exista, tente editar
		if(!$usuario_id){
			exit('Pode cadastrar novo usuário');
		}
		else{
			//Se $usuario_id não existir no BD, exiba uma mensagem de observação, caso exista edita o usuário
			if(!$this->ion_auth->user($usuario_id)->row()){
				exit('Usuário não existe');
			}
			else{
				$data = array(
					'titulo'=>'Usuário',
					'sub_titulo'=>'Listando todos usuários cadastrados no banco de dados',
					'icone_view'=>'ik ik-user',
					'usuario'=> $this->ion_auth->users($usuario_id)->result(), //Pegar o Usuário
					'perfil_usuario'=>$this->ion_auth->get_users_groups($usuario_id)->row()	//Pegar o perfil/grupo	
				);	

				// echo'';
				// var_dump($data['perfil_usuario']);
				// exit;

				$this->load->view('layout/header', $data);
				$this->load->view('usuarios/core');
				$this->load->view('layout/footer');			
			};
		}

		
	}
}
