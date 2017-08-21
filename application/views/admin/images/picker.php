<h4>Pilih Image</h4>
<div class="test">

</div>

<?php
foreach ($foto as $value) {
?>
<button type="button" name="button" class="pickme" onclick="parent.from_modal('<?php echo $value->file_name; ?>', <?php echo $value->id; ?>)">
<img src="<?php echo base_url('image/view/'.$value->file_name); ?>" style="max-width:200px; max-height: 100px"/>
</button>
<?php } ?>

<?php $this->load->view('admin/shared/footer'); ?>

<script type="text/javascript">
$('.pickme').click(function(){
    parent.$('#myModal').modal('hide');
});
</script>
