<?php include_once('header.php') ?>

	<section class="spectakl">
        <div class="container">
            <div class="section_item">
                Афиша
            </div>

            <div class="spectakl_item">
                <a href="#" class="spectakl_item_link">Назад к афише</a>

                <div class="spectakl_title">
                    <span>"Считаю до пяти, или Трус, Герой и Красавица... "</span>
                </div>
            </div>

            <div class="spectakl_des">
                <span>Режиссер – Максим Эль, Художник – Захар Давыдов <br> Композитор – Александр Яничек</span>
            </div>

            <div class="spectakl_gallery">
                <?php for ($i = 1; $i <= 12; $i++) { ?>
                    <a data-fancybox="gallery" href="./img/gallery/spectacl_1_imgs/<?php echo $i; ?>.jpg">
                        <img src="./img/gallery/spectacl_1_imgs/<?php echo $i; ?>.jpg" alt="">
                    </a>
                <?php } ?>
            </div>

            <div class="spectakl_content">
                <div class="spectakl_about">
                    <div class="spectakl_age_res">
                        <span>6+</span>
                    </div>
                    <div class="spectakl_about_item">
                        О спектакле:
                    </div>
                    <div class="spectakl_about_title">Опасаясь и терзаясь,
                        Под кустами можно жить,
                        Но и заяц, оказалось,
                        Может подвиг совершить!

                        "Считаю до пяти..." - это не про арифметику. Это спектакль об очень важных вещах - об умении дружить и быть верным, о способности побороть страх, о том, что можно жить в хвастливой болтовне, а можно научиться совершать поступки. Все это актуально в любом возрасте - и для детей, и для взрослых.

                        И что особенно важно - театр об этих серьезных вещах говорит весело и с юмором. И не только говорит, но и поет, ведь "Считаю до пяти..." - музыкальная сказка.

                        <span>Рекомендация театра - для зрителей 6 лет и старше.</span>

                        Продолжительность спектакля - 50 минут. Спектакль идет без антракта.
                    </div>

                    <a href="#" class="btn"><span>Купить билет</span></a>
                </div>

                <div class="spectakl_text">
                    <div class="spectakl_text_item">
                        Люди спектакля:
                    </div>
                    <div class="spectakl_text_title">
                        <div>Автор: <span>Михаил Бартенев</span></div>
                        <div>Режиссёр-постановщик: <span>Максим Эль</span></div>
                        <div>Художник-постановщик: <span>Захар Давыдов - лауреат Национальной театральной премии "Золотая маска"</span></div>
                        <div>Композитор: <span>Александр Яничек</span></div>
                        <div>В спектакле заняты: <span>Татьяна Горшенина, Вячеслав Зоболев, Анатолий Шкляев, Алексей Бурмагин, Светлана Леткова, Илья Батурин, Полина Гапоненко, Алексей Тетенов.</span></div>

                        <div class="spectakl_text_premier">Премьера состоялась: <span>3 октября 2020 год</span></div>
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