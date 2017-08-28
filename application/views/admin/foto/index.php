<?php $this->load->view('admin/shared/header'); ?>

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <!-- <a href="index.html" class="site_title"><i class="fa fa-mouse"></i> <span>Info</span></a> -->
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
                    <h2>Artikel</h2>


                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <?php
                      if(!empty($_SESSION['result'])){
                          echo '<div class="alert alert-info alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>'.$_SESSION['result'].'
                                </div>';
                      }
                      ?>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>File_name</th>
                          <th>keterangan</th>
                          <th>Created</th>
                          <th>Updated</th>
                          <th>status</th>
                          <th>Option</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i = 1;
                        foreach($list as $row){
                          ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row->file_name; ?></td>
                            <td><?php echo $row->keterangan; ?></td>
                            <td><?php echo $row->created_date; ?></td>
                            <td><?php echo $row->updated; ?></td>
                            <td><?php if($row->deleted == 0){echo "Publish";} else {echo "Unpublish";} ?></td>
                            <td>
                              <a onclick="openModal('<?php echo base_url('admin/foto/edit/'.$row->id);?>');" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="bottom" title data-original-title="Detail artikel">edit</a>
                            </td>
                          </tr>
                          <?php $i++; } ?>

                        </tbody>
                      </table>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="x_panel">
                              <div class="x_title">
                                  <h2>Insert Baru</h2>
                                  <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                                  <form id="demo-form2" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/foto/create_post'); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Foto <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="judul" name="foto" required="required" class="form-control col-md-7 col-xs-12">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="isi" rows="8" cols="60"></textarea>
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
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detail Artikel</h4>
              </div>
              <div class="modal-body">
                <iframe id="iframe-view" width="100%" height="450" frameborder="0"></iframe>
              </div>
              <div class="modal-footer">
                <button type="button"  class="btn btn-default" data-dismiss="modal" id="tutup"><a href="">Tutup</a></button>
              </div>
            </div>

          </div>
        </div>

<script type="text/javascript">
        function openModal(src){

            $('#iframe-view').attr("src",src);
            $('#myModal').modal({show:true})
            $("#myModal").on('hide.bs.modal', function () {
              $('#iframe-view').attr("src","");
            });
        };

</script>

<?php $this->load->view('admin/shared/footer'); ?>

<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/admin/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendors/pdfmake/build/vfs_fonts.js"></script>

<script type="text/javascript">
$('#tutup').click(function(){
    location.reload();
})
</script>
