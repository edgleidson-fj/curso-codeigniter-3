<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Navbar-->
<?php $this->load->view('layout/navbar'); ?>
           

        <div class="page-wrap">

			<!-- Sidebar-->
			<?php $this->load->view('layout/sidebar'); ?>
				
                
				<!-- Main content-->
				<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-users bg-blue"></i>
                                        <div class="d-inline">
                                            <h5><?php echo $titulo; ?></h5>
                                            <span><?php echo $sub_titulo; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a title="Home" href="<?php echo (base_url('/')); ?>"><i class="ik ik-home"></i></a>
                                            </li>
                                            
                                            <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3><a class="btn btn-success" href="">Novo</a></h3></div>
                                    <div class="card-body">
										<!-- Tabela-->
                                        <table class="table data-table">
											<!-- Título da tabela-->
                                            <thead>
                                                <tr>
                                                    <th>#</th>
													<th>Usuário</th>
													<th>Email</th>
													<th>Nome</th> 
													<th>Ativo</th>                                                   
                                                    <th class="nosort">Ações</th>
                                                </tr>
                                            </thead>
											<!-- Corpo da tabela-->
                                            <tbody>
												<?php foreach ($usuarios as $u): ?>
													<tr>
														<td><?php echo $u->id ?></td>
														<td><?php echo $u->username ?></td>	
														<td><?php echo $u->email ?></td>
														<td><?php echo $u->first_name ?></td>
														<td><?php echo ($u->active == 1 ? '<span class="badge badge-pill badge-success mb-1">Sim</span>' : '<span class="badge badge-pill badge-warning mb-1">Não</span>'); ?></td>
														<td>
															<a href="" class="btn btn-icon btn-primary"><i class="ik ik-edit-2"></i></a> <!-- Botão Editar-->
															<a href="" class="btn btn-icon btn-danger"><i class="ik ik-trash-2"></i></a> <!-- Botão Excluir-->
														</td>													
													</tr>
												<?php endforeach; ?>                                                                                               
                                            </tbody>
                                        </table>
										<!-- Fim tabela-->
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
				<!-- Fim Main content-->

                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © <?php echo date('Y');?> ThemeKit v2.0. All Rights Reserved.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Customizado <i class="fa fa-car-side text-danger"></i> por <a href="http://lavalite.org/" class="text-dark" target="_blank">Edgleidson</a></span>
                    </div>
                </footer>
                
            <!--</div>-->
        </div>

                