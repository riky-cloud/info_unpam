<section>
    <header class="main">
        <h2><?php echo $detail->judul; ?></h2>
    </header>

    <center>
        <span class="image main"><img src="<?php echo base_url('image/view/'.$detail->foto); ?>" alt="" style="max-width:600px; max-height:400px;" /></span>
    </center>

    <?php echo $detail->isi; ?>

    <hr>
    <div class="row">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.10";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


    <div class="fb-comments" data-href="<?php echo base_url(uri_string()); ?>" data-numposts="5"></div>
    </div>
</section>
