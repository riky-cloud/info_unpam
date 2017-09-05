<?php $this->load->view('front/shared/header'); ?>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">


							<!-- headline -->
                                <?php //$this->load->view('front/shared/main_header', array('title' => 'Info Unpam')); ?>
                                <?php //$this->load->view('front/shared/right_mod1'); ?>


							<!-- terkini -->
                                <?php //$this->load->view('front/shared/right_list_2x2', array('title' => 'Terkini', 'data' => $list)); ?>
                                <?php $this->load->view('front/shared/right_list_3x3', array('title' => 'Terkini', 'data' => $list)); ?>


						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<?php //$this->load->view('front/shared/search'); ?>

							<!-- Menu -->
								<?php $this->load->view('front/shared/menu'); ?>

							<!-- Section -->
                                <?php //$this->load->view('front/shared/sidebar_mod1'); ?>

							<!-- Section -->
								<?php //$this->load->view('front/shared/sidebar_mod2'); ?>

							<!-- Footer -->
                                <?php //$this->load->view('front/shared/footer_text'); ?>

						</div>
					</div>

			</div>

<?php $this->load->view('front/shared/footer'); ?>
