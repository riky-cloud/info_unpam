<section>
    <header class="major">
        <h2><?php echo $title; ?></h2>
    </header>
    <!-- <div class="row"> -->
        <?php
        $i = 1;
        foreach ($data as $val) {
            if($i == 1){
                echo '<div class="row">';
            }
        ?>
            <div class="4u 12u$(medium)">
                <article>
                    <a href="<?php echo base_url('home/detail/'.$val->id); ?>" class="image fit"><img src="<?php echo base_url('image/view/'.$val->foto); ?>" alt="<?php echo $val->judul; ?>" style="max-height: 150px; min-height: 150px;"/></a>
                    <h4><a href="<?php echo base_url('home/detail/'.$val->id); ?>" ><?php echo $val->judul; ?></a></h4>
                    <!-- <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p> -->
                    <ul class="actions">
                        <li><a href="<?php echo base_url('home/detail/'.$val->id); ?>" >view</a></li>
                        <li><?php echo $val->updated; ?></li>
                    </ul>
                </article>
            </div>

        <?php

            if(($i == 4) || count($data) < 3) {
                echo '</div>';
            }
            $i++;

            if($i == 4){
                $i = 1;
            }
            }
        ?>

    <!-- </div> -->
</section>

<!-- <ul class="pagination">
    <li><span class="button disabled">Prev</span></li>
    <li><a href="#" class="page active">1</a></li>
    <li><a href="#" class="page">2</a></li>
    <li><a href="#" class="page">3</a></li>
    <li><span>…</span></li>
    <li><a href="#" class="page">8</a></li>
    <li><a href="#" class="page">9</a></li>
    <li><a href="#" class="page">10</a></li>
    <li><a href="#" class="button">Next</a></li>
</ul> -->
