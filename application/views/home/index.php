<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view('layout/navbar'); ?>
           

        <div class="page-wrap">

			<?php $this->load->view('layout/sidebar'); ?>
				
                
                <div class="main-content">
                    <div class="container-fluid">

						<h1>Home</h1>
                    </div>
                </div>

                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © <?php echo date('Y');?> ThemeKit v2.0. All Rights Reserved.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Customizado <i class="fa fa-car-side text-danger"></i> por <a href="http://lavalite.org/" class="text-dark" target="_blank">Edgleidson</a></span>
                    </div>
                </footer>
                
            </div>
        </div>

                