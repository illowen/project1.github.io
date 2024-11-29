<?php include_once('header.php') ?>

    <section class="reviews_page">
        <div class="container">
            <div class="section_item">
                Отзывы
            </div>

            <div class="reviews_page_wrapper">
                <div class="reviews_page_cont">
                    <a href="#" class="reviews_page_link">Все отзывы</a>

                    <div class="reviews_page_block">
                        <div class="reviews_page_head">
                            7 февраля 2023, Дегтева Ирина Викторовна
                        </div>
                        <div class="reviews_page_text">
                            5 февраля мы с ребятами 4А класса 52 школы побывали на чудесном спектакле "Каштанка". Взрослые и дети получили огромное удовольствие от игры актеров!!!Браво!!! Хочется выразить благодарность сотрудникам театра за теплый прием, экскурсию и добродушное отношение к нам.
                            Теперь планируем с классом посмотреть спектакль "Ведьма из чуланчика"))).
                        </div>
                    </div>
                </div>
                <div class="reviews_form">
                    <div class="reviews_item">
                        Оставить отзыв
                    </div>

                    <form action="">
                        <div class="reviews_form_block">
                            <label for="name">Ваше имя*</label>
                            <input id="name" type="text">
                        </div>
                        <div class="reviews_form_block">
                            <label for="mail">Email*</label>
                            <input id="mail" type="text">
                        </div>
                        <div class="reviews_form_block">
                            <label for="phone">Телефон*</label>
                            <input id="phone" type="tel">
                        </div>

                        <div class="reviews_form_block">
                            <label for="text">Ваш отзыв*</label>
                            <textarea id="text"></textarea>
                        </div>

                        <div class="contacts_form_checkbox">
                            <input type="checkbox" id="checkbox" class="checkbox">
                            <label for="checkbox"><span></span></label>

                            <p>Я даю согласие на обработку персональных данных.</p>
                        </div>

                        <button class="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="reviews_decor">
        <div class="reviews_decor_img1">
            <img src="./img/reviews_decor_img1.png" alt="">
        </div>
        <div class="reviews_decor_img2">
            <img src="./img/reviews_decor_img2.png" alt="">
        </div>
        <div class="reviews_decor_img3">
            <img src="./img/reviews_decor_img3.png" alt="">
        </div>
        <div class="reviews_decor_img4">
            <img src="./img/reviews_decor_img4.png" alt="">
        </div>
    </div>

<?php include_once('footer.php') ?>