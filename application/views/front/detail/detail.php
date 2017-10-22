<section>
    <header class="main">
        <h2><?php echo $detail->judul; ?></h2>
    </header>

    <center>
        <span class="image main"><img src="<?php echo base_url('image/view/'.$detail->foto); ?>" alt="" style="max-width:600px; max-height:400px;" /></span>
    </center>

    <?php echo $detail->isi; ?>

    <hr>
    <?php $this->load->view('front/shared/comment_fb'); ?>
</section>
