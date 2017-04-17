<?
session_start();
$_SESSION['guid'] = substr(preg_replace('/[^A-Za-z]/',null,crypt(time()).crypt(time())),1,10);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Создание сайтов | «WEBORD» Digital Agency</title>
        <meta name="description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится.">
        <meta name="keywords" content="">

        <!-- SHEMA.ORG MARKUP -->
        <meta itemprop="name" content="Создание сайтов | «WEBORD» Digital Agency">
        <meta itemprop="description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится.">
        <meta itemprop="image" content="../img/og/og.jpg">
        <meta itemprop="image" content="../img/og/og-2.jpg">
        <!-- SHEMA.ORG MARKUP END -->

        <!-- TWITTER CARD DATA -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Создание сайтов | «WEBORD» Digital Agency">
        <meta name="twitter:description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится.">
        <meta name="twitter:image:src" content="../img/og/og.jpg">
        <!-- TWITTER CARD DATA END -->

        <!-- OPEN GRAPH DATA -->
        <meta property="og:title" content="Создание сайтов | «WEBORD» Digital Agency" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://webord.ru/" />
        <meta property="og:image" content="../img/og/og.jpg" />
        <meta property="og:description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится."
        />
        <!-- OPEN GRAPH DATA END-->

        <!-- FAVICONS -->
        <link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
        <link rel="manifest" href="../img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- FAVICONS END -->

        <!-- STYLES -->
        <link rel="stylesheet" href="../css/style.min.css">
        <!-- STYLES END -->

    </head>

    <body>

        <!-- PRELOADER -->
        <div id="hellopreloader">
            <div class="preloader" id="preloader"></div>
        </div>
        <!-- PRELOADER END -->

        <!-- HEADER -->
        <header class="header">
            <div class="header__container">
                <div class="logo">
                    <a href="../">
                        <img src="../img/logo/logo.svg" alt="logo" width="152" height="40">
                    </a>
                </div>
                <button class="hamburger hamburger--collapse" type="button">
              <span class="hamburger__box">
                <span class="hamburger__inner"></span>
              </span>
            </button>
                <nav class="header__navigation header__navigation--closed">
                    <ul>
                        <li><a href="../landing/">Лендинги</a></li>
                        <li><a href="../promo/" class="active">Промо-сайты</a></li>
                        <li><a href="../vizitka/">Сайты-визитки</a></li>
                        <li><a href="../corporate/">Корпоративные</a></li>
                        <li><a href="../shop/">Интернет-магазины</a></li>
                        <li><a href="../portal/">Порталы</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- HEADER END -->

        <!-- PROMO -->
        <section class="promo promo--promo">
            <div class="promo__container">
                <div class="particle-slider">
                    <div id="particle-slider">
                        <div class="slides">
                            <div class="slide" data-src="../img/particle-slider/particle-slider.png"></div>
                        </div>
                        <canvas class="draw"></canvas>
                    </div>
                </div>
                <div class="promo__text">
                    <h1>РАЗРАБОТКА ПРОМО-САЙТОВ - маленьких сайтов для больших событий</h1>
                    <span>Москва, Санкт-Петербург</span>
                </div>
            </div>
        </section>
        <!-- PROMO END -->

        <!-- SERVICE ABOUT -->
        <section class="service-about">
            <div class="service-about__container">
                <h2>Промо-сайты</h2>
                <p>Как правило, промо-сайты используются для привлечения внимания во время небольших по длительности рекламных кампаний или же формирования имиджевой составляющей деятельности фирмы. Обычно один промо-сайт посвящается одному продукту или
                    услуге и максимально фокусируется на взаимодействии с пользователями.</p>
                <img src="../img/service-about/service-about__promo.svg">
            </div>
        </section>
        <!-- SERVICE ABOUT -->

        <!-- SERVICE MORE -->
        <section class="service-more">
            <div class="service-more__container">
                <h2>Зачем мне промо-сайт?</h2>
                <p>Результатом создания и продвижения промо-сайта становится увеличение продаж за счёт увеличение узнаваемости продукта или услуге и получения о нём большего количества информации.</p>

                <!-- SERVICE MORE ITEMS -->
                <div class="service-more__items">
                    <article class="service-more__item">
                        <h3>Яркий имидж</h3>
                        <p>«ВАУ - эффект» гарантирован. Товар или услуга будет выделяться среди конкурентов</p>
                    </article>

                    <article class="service-more__item">
                        <h3>Интерес к продукту</h3>
                        <p>Возможность представления товаров лимитированными и уникальными</p>
                    </article>

                    <article class="service-more__item">
                        <h3>Повышение лояльности</h3>
                        <p>Размещение информации о том, что компания обладает целым набором преимуществ</p>
                    </article>

                    <article class="service-more__item">
                        <h3>Клиентскую базу</h3>
                        <p>Благодаря формированию клиентской базы из контактной формы можно увеличить продажи</p>
                    </article>
                </div>
                <!-- SERVICE MORE ITEMS END -->

            </div>
        </section>
        <!-- SERVICE MORE END -->

        <!-- MORE -->
        <section class="more">
            <div class="more__container">
                <h2>Чем еще мы можем помочь нашим клиентам</h2>
                <p>Мы предлагаем полный комплекс услуг для проектов любого уровня и любой стадии готовности — от начальной, когда есть лишь идея, нуждающаяся в разработке, создании инструментов и продвижении, до заключительной, когда ресурсу необходима только
                    поддержка.
                </p>

                <!-- MORE ITEMS -->
                <div class="more__items">
                    <article class="more__item">
                        <h3>Сопровождение <span>и поддержание</span></h3>
                        <p>Если же у вас уже есть сайт, но вы недовольны его работой, то мы с радостью примем его в наши заботливые руки и вдохнём в него новую жизнь.</p>
                    </article>

                    <article class="more__item">
                        <h3>Аудит <span>экспресс или полный</span></h3>
                        <p>Аудит сайта позволит достаточно быстро и точно определить причины, по которым сайт имеет или может иметь проблемы с продвижением или конверсией.</p>
                    </article>

                    <article class="more__item">
                        <h3>Оптимизация <span>перед продвижением</span></h3>
                        <p>Поисковая оптимизация - верный способ увеличить трафик на сайт в несколько раз, а также значительно повысить конверсию с сайта.</p>
                    </article>

                    <article class="more__item">
                        <h3>Айдентика <span>лого или фирменный стиль? Легко!</span></h3>
                        <p>Имея идею, зная социальный паспорт и специфику региона, мы разработаем для вас запоминающийся образ конкретного товара или всей компании.</p>
                    </article>

                    <article class="more__item">
                        <h3>Продвижение <span>в поисковых системах</span></h3>
                        <p>Продвижение в поисковых системах - самый дешевый целевой трафик на сайт. Увеличение количества посетителей на 100-200% в течение первого года.</p>
                    </article>

                    <article class="more__item">
                        <h3>Контекстная реклама <span>в Яндекс и Google</span></h3>
                        <p>Ищите стабильный источник целевых клиентов с первых дней создания сайта? Контекстная реклама в Яндекс и Google - то, что вам нужно!</p>
                    </article>

                    <article class="more__item">
                        <h3>Наполнение сайта <span>вашими материалами</span></h3>
                        <p>Сайт уже функционирует, а «товарные полки» пусты? Наполним сайт товарами с сопровождающими иллюстрациями и описаниями, добавим статьи.</p>
                    </article>

                    <article class="more__item">
                        <h3>Копирайтинг <span>напишем продающие тексты</span></h3>
                        <p>Напишем интересные и привлекательные статьи для вашего сайта или рекламные и информационные тексты для продвижения в поисковых системах.</p>
                    </article>
                </div>
                <!-- MORE ITEMS -->

            </div>
        </section>
        <!-- MORE END -->

        <!-- CTA -->
        <section class="cta">
            <div class="cta__container">
                <h2>Напишите нам на <a href="mailto:info@webord.ru">info@webord.ru</a> или заполните бриф онлайн. Вместе мы подберём решение и подходящий инструмент</h2>
                <div class="cta__btn">
                    <a href="./brief/" class="btn">Заполнить бриф</a>
                </div>
            </div>
        </section>
        <!-- CTA END -->

        <!-- CONTACTS -->
        <section class="contacts">
            <div class="contacts__container">
                <h2>Остались вопросы?</h2>
                <p>Не смотря на то, что мы находимся только в Москве и Санкт-Петербурге — это не мешает нам работать с клиентами из любой точки мира. Мы считаем и доказываем на практике, что создавать качественные сайты, на расстоянии возможно!</p>

                <div class="contacts__items">
                    <div class="contacts__item">
                        <h3>Написать e-mail</h3>
                        <p>Напишите нам на почту <a href="mailto:info@webord.ru">info@webord.ru</a> и мы обязательно ответим в течении 24 часов.</p>
                        <a href="mailto:info@webord.ru" class="btn">Написать</a>
                    </div>
                    <div class="contacts__item">
                        <h3>Контактная форма</h3>
                        <p>Вы можете задать любой интересующий вас вопрос нашему менеджеру через контактную форму ниже.</p>
                        <a href="#contact-form" class="btn">Заполнить форму</a>
                    </div>
                    <div class="contacts__item">
                        <h3>Позвонить</h3>
                        <p>Если вы не любитель писать, то позвоните нам в удобное для вас время по телефону <a href="tel:+74951426500">+7 (495) 142-65-00</a></p>
                        <a href="tel:+74951426500" class="btn">Позвонить</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- CONTACTS END -->

        <!-- CONTACT FORM -->
        <section class="contact-form" id="contact-form">
            <div class="contact-form__container">

                <div class="contact-form__intro">
                    <h2>Напишите нам</h2>
                    <div class="logo">
                        <a href="../">
                            <img src="../img/logo/logo.svg" alt="logo" width="152" height="40">
                        </a>
                    </div>
                </div>

                <form method="post" action="javascript:void(0);" id="contactform" name="contactform" class="contactform contact-form__form">
                    <label for="name">Ваше имя</label>
                    <input type="text" name="name" value="" id="name" required="">
                    <label for="email">Ваш email</label>
                    <input type="email" name="email" value="" id="email" required="">
                    <label for="mess">Сообщение</label>
                    <textarea name="mess" id="mess" required=""></textarea>
                    <button type="submit" class="btn" id="submit" onclick="sendform();">Отправить</button>
                    <div class="divError" id="error"></div>
                </form>

            </div>
        </section>
        <!-- CONTACT FORM END -->

        <!-- FOOTER -->
        <footer class="footer">
            <div class="footer__container">
                <span class="footer__copyright">&copy; 2017 webord.ru</span>
            </div>
        </footer>
        <!-- FOOTER END -->

        <!-- SCRIPTS -->
        <script src="../js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="../js/particleslider-current.min.js"></script>
        <script type="text/javascript">
var ps = new ParticleSlider();
        </script>

        <!-- For File Upload -->
        <script src="../js/jquery.knob.js"></script>
        <script src="../js/jquery.ui.widget.js"></script>
        <script src="../js/jquery.iframe-transport.js"></script>
        <script src="../js/jquery.fileupload.js"></script>
    		<script src="../js/all.js"></script>
        <!-- SCRIPTS END -->

    </body>

    </html>
