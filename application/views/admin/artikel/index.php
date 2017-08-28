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
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kategori</th>
                          <th>Foto</th>
                          <th>Judul</th>
                          <th>Created</th>
                          <th>Updated</th>
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
                            <td><?php echo $row->kategori; ?></td>
                            <td><?php echo $row->foto; ?></td>
                            <td><?php echo $row->judul; ?></td>
                            <td><?php echo $row->created_date; ?></td>
                            <td><?php echo $row->updated; ?></td>
                            <td>
                              <a href=''>edit</a>
                              <a onclick="openModal('<?php echo base_url('admin/artikel/view/'.$row->id);?>');" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="bottom" title data-original-title="Detail artikel">view</a>
                            </td>
                          </tr>
                          <?php $i++; } ?>

                        </tbody>
                      </table>
                      <h2><a class="btn btn-xs btn-primary" href="<?php echo base_url('admin/artikel/create'); ?>"> insert</a></h2>
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
                <button type="button"  class="btn btn-default" data-dismiss="modal">Tutup</button>
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
