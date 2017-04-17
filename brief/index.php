<?
// не удалять. нужно для загрузчика файлов
session_start();
$_SESSION['guid'] = substr(preg_replace('/[^A-Za-z]/',null,crypt(time()).crypt(time())),1,10);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta property="og:title" content="Интернет-агентство ПИКСЕЛъ" />
    <meta property="og:url" content="http://webord.ru/" />
    <meta property="og:image" content="http://webord.ru/img/ogp.png" />

    <title>Дизайн и разработка профессиональных сайтов | интернет-агентство ПИКСЕЛъ</title>
    <meta name="description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится.">
    <meta name="keywords" content="">
    <meta property="og:description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится." />
    <link rel="shortcut icon" href="http://webord.ru/img/favicon.ico">
    <link href="http://webord.ru/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>

<body style="background: url(http://webord.ru/img/bg/order_bg.png);background-repeat: repeat;">
    <header>
        <div class="container">
            <div class="logo">
                <a href="http://webord.ru/">
                    <img src="http://webord.ru/img/logo.svg" alt="logo" width="152" height="40">
                </a>
            </div>
            <div class="nav-menu-icon"><a href="#"><i></i></a>
            </div>
            <nav>
                <ul>
                    <li><a href="http://webord.ru/landing.php">Лендинги</a>
                    </li>
                    <li><a href="http://webord.ru/promo.php">Промо-сайты</a>
                    </li>
                    <li><a href="http://webord.ru/vizitka.php">Сайты-визитки</a>
                    </li>
                    <li><a href="http://webord.ru/corporate.php">Корпоративные</a>
                    </li>
                    <li><a href="http://webord.ru/shop.php">Интернет-магазины</a>
                    </li>
                    <li><a href="http://webord.ru/portal.php">Порталы</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="main-section order" class="order-form" style="padding: 140px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="second-title col-white">
                        <h2 class="pulsate">Вы можете узнать стоимость вашего проекта заполнив эту форму</h2>
                        <div class="block_order-form">
                        
                            <div method="post" id="<?php echo ($_REQUEST['custom_name']? $_REQUEST['custom_name'] : 'order_form'); ?>" name="order_form" class="order_form form">
                                <div class="step0_2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <input id="fast" type="checkbox" name="how_group[]" value="быстро">
                                                <label for="fast">быстро</label>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <input id="cheap" type="checkbox" name="how_group[]" value="дешево">
                                                <label for="cheap">дешево</label>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <input id="quality" type="checkbox" name="how_group[]" value="качественно">
                                                <label for="quality">качественно</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note_form">Вы можете выбрать только 2 пункта</div>
                                </div>
                                <div class="step2" style="display: none;">
                                    <div class="f_block">
                                        <h3>Что вы хотите сделать?</h3>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <input id="site1" type="radio" name="type_group" value="Посадочную страницу">
                                                    <label for="site1">Посадочную страницу</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <input id="site2" type="radio" name="type_group" value="Промо-сайт">
                                                    <label for="site2">Промо-сайт</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <input id="site3" type="radio" name="type_group" value="Сайт-визитку">
                                                    <label for="site3">Сайт-визитку</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <input id="site4" type="radio" name="type_group" value="Корпоративный сайт">
                                                    <label for="site4">Корпоративный сайт</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <input id="site5" type="radio" name="type_group" value="Интернет-магазин">
                                                    <label for="site5">Интернет-магазин</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <input id="site6" type="radio" name="type_group" value="Портал">
                                                    <label for="site6">Портал</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <input id="site7" type="radio" name="type_group" value="Не знаю">
                                                    <label for="site7">Не знаю</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="f_block cost">
                                            <h3>Стоимость</h3>
                                            <fieldset id="cost">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="cost1" type="radio" name="cost_group" value="ДО 50.000 Р">
                                                            <label for="cost1">ДО 50.000 Р</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="cost2" type="radio" name="cost_group" value="50.000 Р">
                                                            <label for="cost2">50.000 Р</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="cost3" type="radio" name="cost_group" value="75.000 Р">
                                                            <label for="cost3">75.000 Р</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="cost4" type="radio" name="cost_group" value="100.000 Р">
                                                            <label for="cost4">100.000 Р</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="cost5" type="radio" name="cost_group" value="125.000 Р">
                                                            <label for="cost5">125.000 Р</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="cost6" type="radio" name="cost_group" value="150.000 Р">
                                                            <label for="cost6">150.000 Р</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="cost7" type="radio" name="cost_group" value="175.000 Р">
                                                            <label for="cost7">175.000 Р</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="cost8" type="radio" name="cost_group" value="200.000 Р">
                                                            <label for="cost8">200.000 Р</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="cost9" type="radio" name="cost_group" value="деньги - бумага">
                                                            <label for="cost9">деньги - бумага</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="f_block date">
                                            <h3>Срок выполнения</h3>
                                            <fieldset id="date">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="date1" type="radio" name="date_group" value="месяц">
                                                            <label for="date1">месяц</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="date2" type="radio" name="date_group" value="2 месяца">
                                                            <label for="date2">2 месяца</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="date3" type="radio" name="date_group" value="3 месяца">
                                                            <label for="date3">3 месяца</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="date4" type="radio" name="date_group" value="4 месяца">
                                                            <label for="date4">4 месяца</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="date5" type="radio" name="date_group" value="6 месяцев">
                                                            <label for="date5">6 месяцев</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="date6" type="radio" name="date_group" value="я не спешу">
                                                            <label for="date6">я не спешу</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="f_block tz">
                                            <h3>Есть ли у вас техническое задание?</h3>
                                            <fieldset id="tz">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <input id="no_tz" type="radio" name="radio_tz" value="нет" checked>
                                                            <label for="no_tz">нет</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <input id="yes_tz" type="radio" name="radio_tz" value="да">
                                                            <label for="yes_tz">да</label>
                                                            <div class="load_tz upload_form" style="display: block;">
                                                                <form id="upload_tz" method="post" action="upload.php?act=tz" enctype="multipart/form-data">
                                                                    <div id="drop_tz">
                                                                        <a>Browse</a>
                                                                        <input type="file" name="upl[]" multiple="">
                                                                    </div>
                                                                    <ul></ul>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="f_block design">
                                            <h3>Понадобится ли дизайн?</h3>
                                            <fieldset id="design">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <input id="yes_design" type="radio" name="radio_design" value="да" checked>
                                                            <label for="yes_design">да</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <input id="load_design" type="radio" name="radio_design" value="нет">
                                                            <label for="load_design">нет</label>
                                                            <div class="load_design upload_form" style="display: block;">
                                                                <form id="upload_design" method="post" action="upload.php?act=design" enctype="multipart/form-data">
                                                                    <div id="drop_design">
                                                                        <a>Browse</a>
                                                                        <input type="file" name="upl[]" multiple="">
                                                                    </div>
                                                                    <ul></ul>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="step2" style="display: none;">
                                        <div class="f_block">
                                            <h3>Примеры и аналогичные проекты</h3>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <h4>Нравится</h4>
                                                        <ol>
                                                            <li>
                                                                <input type="text" name="good_project_1" placeholder="www.пример.рф"> </li>
                                                            <li>
                                                                <input type="text" name="good_project_2"> </li>
                                                            <li>
                                                                <input type="text" name="good_project_3"> </li>
                                                            <li>
                                                                <input type="text" name="good_project_4"> </li>
                                                            <li>
                                                                <input type="text" name="good_project_5"> </li>
                                                        </ol>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <h4>Не нравится</h4>
                                                        <ol>
                                                            <li>
                                                                <input type="text" name="bad_project_1" placeholder="www.пример.рф"> </li>
                                                            <li>
                                                                <input type="text" name="bad_project_2"> </li>
                                                            <li>
                                                                <input type="text" name="bad_project_3"> </li>
                                                            <li>
                                                                <input type="text" name="bad_project_4"> </li>
                                                            <li>
                                                                <input type="text" name="bad_project_5"> </li>
                                                        </ol>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <h4>Аналогичные</h4>
                                                        <ol>
                                                            <li>
                                                                <input type="text" name="same_project_1" placeholder="www.пример.рф"> </li>
                                                            <li>
                                                                <input type="text" name="same_project_2"> </li>
                                                            <li>
                                                                <input type="text" name="same_project_3"> </li>
                                                            <li>
                                                                <input type="text" name="same_project_4"> </li>
                                                            <li>
                                                                <input type="text" name="same_project_5"> </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="f_block services">
                                            <div class="b_service">
                                                <h3>Функциональность</h3>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="site_service1" type="checkbox" name="services_group[]" value="новости">
                                                            <label for="site_service1">новости</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="site_service2" type="checkbox" name="services_group[]" value="команда">
                                                            <label for="site_service2">команда</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="site_service3" type="checkbox" name="services_group[]" value="вакансии">
                                                            <label for="site_service3">вакансии</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="site_service4" type="checkbox" name="services_group[]" value="faq">
                                                            <label for="site_service4">faq</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="site_service5" type="checkbox" name="services_group[]" value="обратная связь">
                                                            <label for="site_service5">обратная связь</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="site_service6" type="checkbox" name="services_group[]" value="подписка на рассылку">
                                                            <label for="site_service6">подписка на рассылку</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="site_service7" type="checkbox" name="services_group[]" value="версия для печати">
                                                            <label for="site_service7">версия для печати</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="site_service8" type="checkbox" name="services_group[]" value="интерактивная карта">
                                                            <label for="site_service8">интерактивная карта</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="magaz_service1" type="checkbox" name="services_group[]" value="каталог товаров">
                                                            <label for="magaz_service1">каталог товаров</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="magaz_service2" type="checkbox" name="services_group[]" value="фильтр товаров">
                                                            <label for="magaz_service2">фильтр товаров</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="magaz_service3" type="checkbox" name="services_group[]" value="личный кабинет">
                                                            <label for="magaz_service3">личный кабинет</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="magaz_service4" type="checkbox" name="services_group[]" value="бренды">
                                                            <label for="magaz_service4">бренды</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="magaz_service5" type="checkbox" name="services_group[]" value="корзина">
                                                            <label for="magaz_service5">корзина</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="magaz_service6" type="checkbox" name="services_group[]" value="регистрация">
                                                            <label for="magaz_service6">регистрация</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="magaz_service7" type="checkbox" name="services_group[]" value="оформление заказа">
                                                            <label for="magaz_service7">оформление заказа</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="magaz_service8" type="checkbox" name="services_group[]" value="заказ без регистрации">
                                                            <label for="magaz_service8">заказ без регистрации</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="blog_service1" type="checkbox" name="services_group[]" value="посты">
                                                            <label for="blog_service1">посты</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="blog_service2" type="checkbox" name="services_group[]" value="рубрики">
                                                            <label for="blog_service2">рубрики</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="blog_service3" type="checkbox" name="services_group[]" value="авторы">
                                                            <label for="blog_service3">авторы</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="blog_service4" type="checkbox" name="services_group[]" value="регистрация">
                                                            <label for="blog_service4">регистрация</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="blog_service5" type="checkbox" name="services_group[]" value="комментарии">
                                                            <label for="blog_service5">комментарии</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="blog_service6" type="checkbox" name="services_group[]" value="рейтинги + оценки + карма">
                                                            <label for="blog_service6">рейтинги, оценки, карма</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="blog_service7" type="checkbox" name="services_group[]" value="rss">
                                                            <label for="blog_service7">rss</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="blog_service8" type="checkbox" name="services_group[]" value="Интеграция с соц. сетями">
                                                            <label for="blog_service8">Интеграция с соц. сетями</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="f_block platforms">
                                            <h3>Система управления содержимым</h3>
                                            <fieldset id="platforms">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="platform1" type="radio" name="platforms_group" value="1C - Битрикс">
                                                            <label for="platform1">1C - Битрикс</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="platform2" type="radio" name="platforms_group" value="WordPress">
                                                            <label for="platform2">WordPress</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="platform3" type="radio" name="platforms_group" value="Drupal">
                                                            <label for="platform3">Drupal</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="platform4" type="radio" name="platforms_group" value="ModX">
                                                            <label for="platform4">ModX</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="platform5" type="radio" name="platforms_group" value="Magento">
                                                            <label for="platform5">Magento</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="platform6" type="radio" name="platforms_group" value="UMI.CMS">
                                                            <label for="platform6">UMI.CMS</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="platform7" type="radio" name="platforms_group" value="Другая">
                                                            <label for="platform7">Другая</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="platform8" type="radio" name="platforms_group" value="Самописная">
                                                            <label for="platform8">Самописная</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="platform9" type="radio" name="platforms_group" value="не знаю">
                                                            <label for="platform9">не знаю</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <input id="platform10" type="radio" name="platforms_group" value="не нужна">
                                                            <label for="platform10">не нужна</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="f_block other">
                                            <h3>Дополнительные услуги</h3>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <input id="other1" type="checkbox" name="other_group[]" value="Сопровождение сайта">
                                                        <label for="other1">Сопровождение сайта</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <input id="other2" type="checkbox" name="other_group[]" value="Оптимизация">
                                                        <label for="other2">Оптимизация</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <input id="other3" type="checkbox" name="other_group[]" value="Аудит">
                                                        <label for="other3">Аудит</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <input id="other4" type="checkbox" name="other_group[]" value="Лого">
                                                        <label for="other4">Лого</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <input id="other5" type="checkbox" name="other_group[]" value="Фирменый стиль">
                                                        <label for="other5">Фирменый стиль</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <input id="other6" type="checkbox" name="other_group[]" value="Продвижение">
                                                        <label for="other6">Продвижение</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <input id="other7" type="checkbox" name="other_group[]" value="Контекстная реклама">
                                                        <label for="other7">Контекстная реклама</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <input id="other8" type="checkbox" name="other_group[]" value="Наполнение сайта">
                                                        <label for="other8">Наполнение сайта</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <input id="other9" type="checkbox" name="other_group[]" value="Копирайтинг">
                                                        <label for="other9">Копирайтинг</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step3 about" style="display: none;">
                                        <div class="f_block">
                                            <h3>Представьтесь, пожалуйста</h3>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <h4>ФИО</h4>
                                                        <input type="text" name="name"> </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <h4>Компания</h4>
                                                        <input type="text" name="company"> </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <h4>Должность</h4>
                                                        <input type="text" name="position"> </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <h4>E-mail</h4>
                                                        <input type="text" name="mail"> </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <h4>Телефон</h4>
                                                        <input type="text" name="tel"> </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                                        <h4>Skype</h4>
                                                        <input type="text" name="skype"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="f_block">
                                            <h3>Напишите всё, что считаете нужным</h3>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <textarea name="mess_order" class="mess_order"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divError" id="error_form"></div>
                                <div class="f_btn">
                                    <div class="btn_wrap">
                                        <a class="btn btn_step2 evaluate">ОЦЕНИТЬ ПРОЕКТ</a>
                                        <button class="btn_sendform js__sendform" type="submit" name="submit" style="display: none;" onclick="sendorderform('<?php echo ($_REQUEST['custom_name']? $_REQUEST['custom_name'] : 'order_form'); ?>');">ОТПРАВИТЬ!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://yastatic.net/jquery/2.1.4/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/idangerous.swiper.min.js"></script>
    <script src="./js/jquery.zaccordion.min.js"></script>

    <!-- For File Upload -->
    <script src="./js/jquery.knob.js"></script>
    <script src="./js/jquery.ui.widget.js"></script>
    <script src="./js/jquery.iframe-transport.js"></script>
    <script src="./js/jquery.fileupload.js"></script>

    <script src="./js/all.js"></script>
    <script src="//cdn.callbackhunter.com/cbh.js?hunter_code=f448d4494e021da85277dbb67b5cc90d"></script>
    <script type="text/javascript">
        (function(d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter32202054 = new Ya.Metrika({
                        id: 32202054,
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


</body>
</html>