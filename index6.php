<?php include_once('header.php') ?>

	<section class="spectakl">
        <div class="container">
            <div class="section_item">
                Репертуар
            </div>

            <div class="spectakl_item">
                <a href="#" class="spectakl_item_link">Весь репертуар</a>

                <div class="spectakl_title">
                    <span>"Добрый дом для собак"</span>
                </div>
            </div>

            <div class="spectakl_des">
                <span>Реж. Зас. арт. С.В.Михайлова <br> Худ. Е.Минина</span>
            </div>

            <div class="spectakl_gallery">
                <?php for ($i = 1; $i <= 12; $i++) { ?>
                    <a data-fancybox="gallery" href="./img/gallery/spectacl_2_imgs/<?php echo $i; ?>.png">
                        <img src="./img/gallery/spectacl_2_imgs/<?php echo $i; ?>.png" alt="">
                    </a>
                <?php } ?>
            </div>

            <div class="spectakl_content">
                <div class="spectakl_about">
                    <div class="spectakl_age_res">
                        <span>4+</span>
                    </div>
                    <div class="spectakl_about_item">
                        О спектакле:
                    </div>
                    <div class="spectakl_about_title">Опасаясь и терзаясь,
                        История Звездочки, которая так хотела быть нужной, что ради этого спустилась на землю.
                        Кто из обитателей дремучего леса сможет помочь маленькой Звездочке?..

                        <span>Рекомендация театра - для зрителей 4 лет и старше.</span>
                    </div>

                    <a href="#" class="btn"><span>Купить билет</span></a>
                </div>

                <div class="spectakl_text">
                    <div class="spectakl_text_item">
                        Люди спектакля:
                    </div>
                    <div class="spectakl_text_title">
                        <div>Автор: <span>Никита Шмитько</span></div>
                        <div>Режиссёр-постановщик: <span>Светлана Михайлова</span></div>
                        <div>Художник-постановщик: <span>Елена Минина</span></div>
                        <div>Композитор: <span>Александр Яничек</span></div>
                        <div>В спектакле заняты: <span>Галина Ястребова, Валентина Родькина, Ирина Воронина, Вячеслав Зоболев, Светлана Козленко, Алексей Бурмагин, Елена Антушева.</span></div>
                    </div>
                    <div class="spectakl_text_decor">
                        <img src="./img/spectakl_decor1.png" alt="">
                        <img src="./img/spectakl_decor2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once('footer.php') ?>