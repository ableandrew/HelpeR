<?php

foreach ($data as $news) {
    extract($news);
    ?>
    <div class="news_list">
        <br><center><h2><a href="<?=SITE?>/News/article/?newsID=<?=$id?>"><?=$title?></a></h2></center><br>
       <center><img class="news_img" src="http://helper/<?=$image?>"></center>
        <p align="center"<br><?=$description?></p><br>
        <div style="clear:both"><hr><h6 align="left">Дата публикации - <?=$date?><br>
            Категория - <a href="<?=SITE?>/News/<?=$section?>_news"><?=$section?></a> <br>
            Автор - <?=$author?></h6></div>
    </div>


<?php }

?>

