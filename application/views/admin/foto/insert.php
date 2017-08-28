
<?php $this->load->view('admin/shared/header'); ?>

<script src="<?php echo base_url(); ?>assets/plugin/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-mouse"></i> <span>Info</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- sidebar menu -->
            <?php $this->load->view('admin/shared/menu'); ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php $this->load->view('admin/shared/menu_footer'); ?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php $this->load->view('admin/shared/menu_top'); ?>
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
                    <br>
                    <form id="demo-form2" method="post" action="<?php echo base_url('admin/artikel/create_post'); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Kategori<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="id_kategori">
                                <?php
                                    foreach ($kategori as $value) {
                                        echo "<option value=".$value->id.">".$value->nama."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Judul <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="judul" name="judul" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Foto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <input type="text" id="foto" class="form-control" disabled>
                            <input type="text" id="id_foto" name="id_foto"  hidden>
                            <span class="input-group-btn">
                                <button id="openBtn" data-src="<?php echo base_url('image/picker');?>" data-toggle="modal" type="button" class="btn btn-primary"><i class="fa fa-picture-o"></i></button>
                            </span>
                          </div>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">isi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="isi" rows="8" cols="40"></textarea>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>


                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <?php $this->load->view('admin/shared/footer_text'); ?>
        <!-- /footer content -->
      </div>
    </div>


    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <iframe id="iframe-pick" width="100%" height="450" frameborder="0"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('admin/shared/footer'); ?>
<script type="text/javascript">
    function from_modal(img, id){
        $('#foto').val(img);
        $('#id_foto').val(id);
    }
    var src = $("#openBtn").attr('data-src');
    $('#openBtn').click(function(){
        $('#iframe-pick').attr("src",src);
        $('#myModal').modal({show:true})
        $("#myModal").on('hide.bs.modal', function () {
          $('#iframe-pick').attr("src","");
        });
    });

    function openModal(src){
        $('#iframe-view').attr("src",src);
        $('#myModal').modal({show:true})
        $("#myModal").on('hide.bs.modal', function () {
          $('#iframe-view').attr("src","");
        });
    };
</script>
