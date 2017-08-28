
<?php $this->load->view('admin/shared/header'); ?>

    <div class="container body">
      <div class="main_container">

        <!-- page content -->

        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Preview</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <h4>foto</h4>
                      <img src="<?php echo base_url('image/view/'.$data->foto); ?>" alt=" <?php echo $data->judul; ?>" />

                      <h4>Judul</h4>
                      <?php echo $data->judul; ?>
                      <h4>isi</h4>
                      <?php echo $data->isi; ?>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>


<?php $this->load->view('admin/shared/footer'); ?>
