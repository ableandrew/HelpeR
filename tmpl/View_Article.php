<?php

foreach ($data as $news) {
    extract($news);

    ?>
    <div class="article">
        <br><center><h2><?=$title?></h2></center><br>

        <p align="center"><?=$description?></p><br>

        <center><img width="500px" height="300px" class="news_img" src="<?=SITE?>/<?=$image?>"></center><br>
        <p align="center"><?=$text?></p><br><br>
        <h5>Категория - <a href="<?=SITE?>/News/<?=$section?>_news"><?=$section?></a></h5>
        <h5>Дата публикации - <?=$date?></h5>
        <h5>Автор - <?=$author?></h5>
        <hr>
    </div>




<?php }

