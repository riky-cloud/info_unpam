<section>
    <header class="major">
        <h2><?php echo $title; ?></h2>
    </header>
    <div class="posts">
        <?php
            $i = 1;
            foreach ($data as $val) {
        ?>
        <article>
            <a href="#" class="image"><img src="<?php echo base_url('image/view/'.$val->foto); ?>" alt=" <?php echo $val->judul; ?>" style="max-height: 250px; min-height: 250px;"/></a>
            <h3><?php echo $val->judul; ?></h3>
            <p><?php echo $val->isi; ?></p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
                <li><?php echo $val->updated; ?></li>
            </ul>
        </article>
        <?php
            if($i == 6){
                break;
            }
        }
        ?>

    </div>
</section>

<ul class="pagination">
    <li><span class="button disabled">Prev</span></li>
    <li><a href="#" class="page active">1</a></li>
    <li><a href="#" class="page">2</a></li>
    <li><a href="#" class="page">3</a></li>
    <li><span>…</span></li>
    <li><a href="#" class="page">8</a></li>
    <li><a href="#" class="page">9</a></li>
    <li><a href="#" class="page">10</a></li>
    <li><a href="#" class="button">Next</a></li>
</ul>
