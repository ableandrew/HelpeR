<button><?=$Type?></button>
<?php
foreach ($data as $news) {
    extract($news);
    ?>
    <div class="product_list">
<center><h3><a href="<?=SITE?>/Product/goods/?productID=<?=$id?>"><?=$name?></a></h3></center>
        <center>  <p><?=$description?></p></center>
        <img src="<?=SITE?>/<?=$imagePath?>">
            <center>   <p>Цена - <?=$price?>$</p></center>
    </div>
<?php }

?>