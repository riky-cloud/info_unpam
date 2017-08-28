
<?php $this->load->view('admin/shared/header'); ?>

<script src="<?php echo base_url(); ?>assets/plugin/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <?php
        if(!empty($_SESSION['result'])){
            echo '<div class="alert alert-info alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>'.$_SESSION['result'].'
                  </div>';
        }
        ?>
        <div class="x_title">
            <h2>Edit Kategori</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form id="demo-form2" method="post" action="<?php echo base_url('admin/kategori/update_post'); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                <input type="text" id="id_foto" name="id"  hidden value="<?php echo $detail->id; ?>">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="judul" name="nama" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $detail->nama; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea name="keterangan" rows="8" cols="60"><?php echo $detail->keterangan; ?></textarea>
                </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-5">
                      <select class="form-control" name="status">
                          <option value='0' <?php if($detail->deleted == '0'){echo "selected";} ?>>publish</option>
                          <option value='1' <?php if($detail->deleted == '1'){echo "selected";} ?>>unpublish</option>
                      </select>
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
