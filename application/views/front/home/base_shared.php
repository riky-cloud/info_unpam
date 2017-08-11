<?php $this->load->view('front/shared/header'); ?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header main -->
                                <?php $this->load->view('front/shared/main_header'); ?>

							<!-- right mod 1 -->
                                <?php $this->load->view('front/shared/right_mod1'); ?>

							<!-- right mod 2 -->
                                <?php $this->load->view('front/shared/right_mod2'); ?>

							<!-- right list -->
                                <?php $this->load->view('front/shared/right_list'); ?>
								
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<?php $this->load->view('front/shared/search'); ?>

							<!-- Menu -->
								<?php $this->load->view('front/shared/menu'); ?>

							<!-- Section -->
                                <?php $this->load->view('front/shared/sidebar_mod1'); ?>

							<!-- Section -->
								<?php $this->load->view('front/shared/sidebar_mod2'); ?>

							<!-- Footer -->
                                <?php $this->load->view('front/shared/footer_text'); ?>

						</div>
					</div>

			</div>

<?php $this->load->view('front/shared/footer'); ?>
