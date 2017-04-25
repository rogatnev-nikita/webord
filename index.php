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

        <title>СОЗДАНИЕ САЙТОВ | «WEBORD» Digital Agency</title>
        <meta name="description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится.">
        <meta name="keywords" content="">

        <!-- SHEMA.ORG MARKUP -->
        <meta itemprop="name" content="Создание сайтов | «WEBORD» Digital Agency">
        <meta itemprop="description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится.">
        <meta itemprop="image" content="./img/og/og.jpg">
        <!-- SHEMA.ORG MARKUP END -->

        <!-- TWITTER CARD DATA -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Создание сайтов | «WEBORD» Digital Agency">
        <meta name="twitter:description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится.">
        <meta name="twitter:image:src" content="./img/og/og.jpg">
        <!-- TWITTER CARD DATA END -->

        <!-- OPEN GRAPH DATA -->
        <meta property="og:title" content="Создание сайтов | «WEBORD» Digital Agency" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://webord.ru/" />
        <meta property="og:image" content="./img/og/og.jpg" />
        <meta property="og:image" content="./img/og/og-2.jpg" />
        <meta property="og:description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится."
        />
        <!-- OPEN GRAPH DATA END-->

        <!-- FAVICONS -->
        <link rel="apple-touch-icon" sizes="57x57" href="./img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="./img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="./img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="./img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="./img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="./img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="./img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="./img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
        <link rel="manifest" href="./img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="./img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- FAVICONS END -->

        <!-- STYLES -->
        <link rel="stylesheet" href="./css/style.min.css">
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
                    <a href="./">
                        <img src="./img/logo/logo.svg" alt="logo" width="152" height="40">
                    </a>
                </div>
                <button class="hamburger hamburger--collapse" type="button">
              <span class="hamburger__box">
                <span class="hamburger__inner"></span>
              </span>
            </button>
                <nav class="header__navigation header__navigation--closed">
                    <ul>
                        <li><a href="./landing/">Лендинги</a></li>
                        <li><a href="./promo/">Промо-сайты</a></li>
                        <li><a href="./vizitka/">Сайты-визитки</a></li>
                        <li><a href="./corporate/">Корпоративные</a></li>
                        <li><a href="./shop/">Интернет-магазины</a></li>
                        <li><a href="./portal/">Порталы</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- HEADER END -->

        <!-- PROMO -->
        <section class="promo">
            <video class="promo__video" preload="auto" loop="" autoplay="">
              <source type="video/webm" src="./video/promo__video.mp4">
              <source type="video/mp4" src="./video/promo__video.mp4">
            </video>
            <div class="promo__container">
                <div class="particle-slider">
                    <div id="particle-slider">
                        <div class="slides">
                            <div class="slide" data-src="./img/particle-slider/particle-slider.png"></div>
                        </div>
                        <canvas class="draw"></canvas>
                    </div>
                </div>
                <div class="promo__text">
                    <h1>Создаём хорошее и развиваем до лучшего. Боремся за пользу и здравый смысл.</h1>
                    <span>Москва, Санкт-Петербург</span>
                </div>
            </div>
        </section>
        <!-- PROMO END -->

        <!-- SERVICES -->
        <section class="services">
            <div class="services__container">
                <h2>Направления работы</h2>
                <p>Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится.</p>

                <!-- SERVICES ITEMS -->
                <div class="services__items">
                    <article class="services__item">
                        <h3>Посадочные страницы</h3>
                        <p>Посадочная страница - это возможность показать посетителю уникальное товарное предложение и легко осуществить заказ с помощью всего одной страницы.</p>
                        <a href="./landing/" class="btn">Подробнее</a>
                    </article>

                    <article class="services__item">
                        <h3>Промо-сайты</h3>
                        <p>Промо-сайт - яркая, сочная и бьющая прямо в голову страничка. Самое то для тех, чей бизнес построен на эмоциях и впечатлениях. Это отличный инструмент для формирования имиджа компании.</p>
                        <a href="./promo/" class="btn">Подробнее</a>
                    </article>

                    <article class="services__item">
                        <h3>Сайты-визитки</h3>
                        <p>Визитка - самый недорогой вид одностраничного сайта. Подходит, если Вам нужно заявить о своей компании, описать всего один товар или услугу и запустить контекстную рекламу.</p>
                        <a href="./vizitka/" class="btn">Подробнее</a>
                    </article>

                    <article class="services__item">
                        <h3>Корпоративные сайты</h3>
                        <p>Корпоративный сайт это ваш виртуальный офис, в котором работают лучшие сотрудники. Они расскажут обо всех достижениях и преимуществах компании, примут заказ и ответят на вопросы.</p>
                        <a href="./corporate/" class="btn">Подробнее</a>
                    </article>

                    <article class="services__item">
                        <h3>Интернет-магазины</h3>
                        <p>Интернет-магазин — не просто сайт, это значимая часть вашего бизнеса. Он разрабатывается, работает и развивается по своим специфичным законам, отличным от традиционных.</p>
                        <a href="./shop/" class="btn">Подробнее</a>
                    </article>

                    <article class="services__item">
                        <h3>Порталы</h3>
                        <p>Индивидуальные проекты по сложным техническим решениям. Наш опыт и профессионализм позволяет решить ваши индивидуальные задачи любой сложности.</p>
                        <a href="./portal/" class="btn">Подробнее</a>
                    </article>
                </div>
                <!-- SERVICES ITEMS END -->

            </div>
        </section>
        <!-- SERVICES END -->

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

        <!-- CLIENTS -->
        <section class="clients">
            <div class="clients__container">
                <h2>Мы сотрудничаем</h2>
                <div class="clients__items">
                    <img src="./img/clients/clients-1.png" alt="clients" class="clients__item" width="836" height="650">
                    <img src="./img/clients/clients-2.png" alt="clients" class="clients__item" width="832" height="650">
                </div>
            </div>
        </section>
        <!-- CLIENTS END -->

        <!-- FACTS -->
        <section class="facts">
            <div class="facts__container">
                <h2>Несколько фактов о студии</h2>
                <p>Мы являемся интернет-агентством полного цикла со своим штатом специалистов. Шесть главных фактов о нашей студии, которые вы обязательно должны знать.</p>

                <!-- FACTS ITEMS -->
                <div class="facts__items">
                    <article class="facts__item">
                        <h3>Фокусируемся на цели</h3>
                        <p>Главная гордость — красивый эффективный дизайн без лишних наворотов ради, собственно, дизайна. Мы работаем для решения вашей бизнес-задачи.</p>
                    </article>

                    <article class="facts__item">
                        <h3>Сложно оторваться</h3>
                        <p>Чтобы пользователь ни на секунду не остановился перед сделкой, нужен удобный сайт. Ваш будет как раз такой, буквально ведущий за руку до заказа.</p>
                    </article>

                    <article class="facts__item">
                        <h3>Телепат в штате</h3>
                        <p>Грамотный менеджмент и комплексные решения. Делаем сразу то, что вам понадобится завтра. Думаем о ваших потребностях основываясь на огромном опыте разработки сайтов.</p>
                    </article>

                    <article class="facts__item">
                        <h3>13 замкнутых очкариков</h3>
                        <p>Свои профессиональные разработчики, позволяющие написать с нуля всё самое сложное именно под вас. Мало кто так умеет: чаще предлагаются шаблонные решения.</p>
                    </article>

                    <article class="facts__item">
                        <h3>Косяки сразу закрываются</h3>
                        <p>Хорошая гарантия и поддержка. Мелкая проблема всплыла через полгода? Не вопрос, сразу поправим. Вы можете быть уверены в том, что всё будет работать так, как нужно вам.</p>
                    </article>

                    <article class="facts__item">
                        <h3>Глобальное погружение в вашу деятельность</h3>
                        <p>Перед стартом работы мы тщательно изучаем вашу нишу и ваших конкурентов. Таким образом мы полностью вникаем в суть вашего бизнеса лучше понимаем потребности клиентов.</p>
                    </article>
                </div>
                <!-- FACTS ITEMS END -->

            </div>
        </section>
        <!-- FACTS END -->

        <!-- PROJECTS -->
        <section class="projects">
            <div class="projects__container">
                <h2>Примеры работ</h2>
                <p>Нам нравится с нуля реализовывать ваши идеи: создавать неповторимый дизайн и внедрять необходимые функции. А комплексное продвижение и поддержка сайта будут способствовать стабильной работе, росту посещаемости и подъему в поисковых системах.</p>

                <!-- PROJECTS ITEMS -->
                <div class="projects__items">
                    <a href="http://putcar.ru/" target="_blank" class="projects__item"><img src="./img/projects/putcar.ru--preview.png" alt="projects item" width="540"></a>
                    <a href="http://vocord.ru/" target="_blank" class="projects__item"><img src="./img/projects/vocord.ru--preview.png" alt="projects item" width="540"></a>
                    <a href="https://airbnbopen.com/" target="_blank" class="projects__item"><img src="./img/projects/airbnbopen.com--preview.png" alt="projects item" width="540"></a>
                    <a href="http://positivecommunications.ru/" target="_blank" class="projects__item"><img src="./img/projects/positivecommunications.ru--preview.png" alt="projects item" width="540"></a>
                    <a href="http://xn----htbbcp8br.xn--p1ai/" target="_blank" class="projects__item"><img src="./img/projects/ер-дети.рф--preview.png" alt="projects item" width="540"></a>
                    <a href="http://sheridan.pro/" target="_blank" class="projects__item"><img src="./img/projects/sheridan.pro--preview.png" alt="projects item" width="540"></a>
                    <a href="https://eventgrid.com" target="_blank" class="projects__item"><img src="./img/projects/eventgrid--preview.png" alt="projects item" width="540"></a>
                    <a href="https://grubcrawl.com" target="_blank" class="projects__item"><img src="./img/projects/grub--preview.png" alt="projects item" width="540"></a>
                    <a href="http://artix.studio" target="_blank" class="projects__item"><img src="./img/projects/artix.studio--preview.png " alt="projects item" width="540"></a>
                    <a href="http://www.olesya-tattoo.ru" target="_blank" class="projects__item"><img src="./img/projects/olesya-tattoo.ru--preview.png" alt="projects item" width="540"></a>
                </div>
                <!-- PROJECTS ITEMS END -->

            </div>
        </section>
        <!-- PROJECTS END -->

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
                        <a href="./">
                            <img src="./img/logo/logo.svg" alt="logo" width="152" height="40">
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
        <script src="./js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="./js/particleslider-current.min.js"></script>
        <script type="text/javascript">
var ps = new ParticleSlider();
        </script>

        <!-- For File Upload -->
        <script src="./js/jquery.knob.js"></script>
        <script src="./js/jquery.ui.widget.js"></script>
        <script src="./js/jquery.iframe-transport.js"></script>
        <script src="./js/jquery.fileupload.js"></script>
        <script src="./js/all.js"></script>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
(function(d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter44248524 = new Ya.Metrika({
                id: 44248524,
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true,
                webvisor: true,
                trackHash: true
            });
        } catch (e) {}
    });
    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function() {
            n.parentNode.insertBefore(s, n);
        };
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://mc.yandex.ru/metrika/watch.js";
    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else {
        f();
    }
})(document, window, "yandex_metrika_callbacks");
        </script>
        <!-- SCRIPTS END -->

    </body>

    </html>
