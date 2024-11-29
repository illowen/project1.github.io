<?php include_once('header.php') ?>

    <section class="album_teater_page">
        <div class="container">
            <div class="section_item">
                Альбом театра
            </div>

            <div class="teatre_page_head">
                <a href="#" class="news_teatre_link">Все новости</a>

                <div class="teatre_page_head_item">
                    "КОТ В САПОГАХ"
                </div>
            </div>

            <div class="album_teater_page_content">
                <div class="album_teater_page_content_item">
                    <p>Реж. Д.А.Лохов
                        Худ. Е.Ю.Николаева</p>
                </div>

                <div class="album_teater_page_gallery">
                    <?php for ($i = 1; $i <= 18; $i++) { ?>
                        <a data-fancybox="page1" href="./img/album_teater/gallery/page1/<?php echo $i; ?>.png">
                            <img src="./img/album_teater/gallery/page1/<?php echo $i; ?>.png" alt="">
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <div class="album_teater_decor">
        <div class="album_teater_decor_img1">
            <img src="./img/album_teater_decor1.png" alt="">
        </div>
        <div class="album_teater_decor_img2">
            <img src="./img/album_teater_decor2.png" alt="">
        </div>
    </div>

<?php include_once('footer.php') ?>