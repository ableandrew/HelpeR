<script language="JavaScript">
    function myimage(pic)
    {
        document.images[1].src=pic
    }
</script>

<?php
$image1=$data['images'][0]['imagepath'];
    $image2=$data['images'][1]['imagepath'];
        $image3=$data['images'][2]['imagepath'];
extract($data["product"][0]);

?>
<div class="product">
<center><h2><?=$name?></h2></center><br>
    <center>  <p><?=$description?></p></center><br><br>
    <div class="gallery">
    <img src="<?=SITE?>/<?=$image1?>">
    <ul>
        <li><a href="javascript:myimage('<?=SITE?>/<?=$image1?>')"><img src="<?=SITE?>/<?=$image1?>"></a> </li>
        <li><a href="javascript:myimage('<?=SITE?>/<?=$image2?>')"><img src="<?=SITE?>/<?=$image2?>"></a> </li>
        <li><a href="javascript:myimage('<?=SITE?>/<?=$image3?>')"><img src="<?=SITE?>/<?=$image3?>"></a> </li>
    </ul>
    </div><br>
    <br> <p>Цена - <?=$price?>$</p><br>
    <form action="#">
        <span>Выберите размер:</span>
        <select name="size">
            <option>XS</option>
            <option>S</option>
            <option selected>M</option>
            <option>L</option>
            <option>XL</option>
            <option>XXL</option>
            <option>XXXL</option>
        </select><br><br>
    <input class="button_pr" type="submit" value="Оформить заказ">
    </form>
    <button class="button_pr">Добавить в корзину</button>






</div>


