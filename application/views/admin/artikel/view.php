
<?php $this->load->view('admin/shared/header'); ?>

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-mouse"></i> <span>Info</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- sidebar menu -->
            <?php //$this->load->view('admin/shared/menu'); ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php //$this->load->view('admin/shared/menu_footer'); ?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php //$this->load->view('admin/shared/menu_top'); ?>
        <!-- /top navigation -->

        <!-- page content -->

        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <h4>Judul</h4>
                      ini judul
                      <h4>isi</h4>
                      ini isi
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <?php //$this->load->view('admin/shared/footer_text'); ?>
        <!-- /footer content -->
      </div>
    </div>



<?php $this->load->view('admin/shared/footer'); ?>
