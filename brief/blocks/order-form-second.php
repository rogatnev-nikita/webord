<div method="post" id="<?php echo ($_REQUEST['custom_name']? $_REQUEST['custom_name'] : 'order_form_2'); ?>" name="order_form_2" class="order_form_2 form">
    <div class="step0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <input id="fast_2" type="checkbox" name="how_group[]" value="быстро">
                    <label for="fast_2">быстро</label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <input id="cheap_2" type="checkbox" name="how_group[]" value="дешево">
                    <label for="cheap_2">дешево</label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <input id="quality_2" type="checkbox" name="how_group[]" value="качественно">
                    <label for="quality_2">качественно</label>
                </div>
            </div>
        </div>
        <div class="note_form_2">Вы можете выбрать только 2 пункта</div>
    </div>
    <div class="step1" style="display: none;">
        <div class="f_block">
            <h3>Что вы хотите сделать?</h3>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input id="site1_2" type="radio" name="type_group" value="Посадочную страницу">
                        <label for="site1_2">Посадочную страницу</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input id="site2_2" type="radio" name="type_group" value="Промо-сайт">
                        <label for="site2_2">Промо-сайт</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input id="site3_2" type="radio" name="type_group" value="Сайт-визитку">
                        <label for="site3_2">Сайт-визитку</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input id="site4_2" type="radio" name="type_group" value="Корпоративный сайт">
                        <label for="site4_2">Корпоративный сайт</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input id="site5_2" type="radio" name="type_group" value="Интернет-магазин">
                        <label for="site5_2">Интернет-магазин</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input id="site6_2" type="radio" name="type_group" value="Портал">
                        <label for="site6_2">Портал</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input id="site7_2" type="radio" name="type_group" value="Не знаю">
                        <label for="site7_2">Не знаю</label>
                    </div>
                </div>
            </div>
            <div class="f_block cost">
                <h3>Стоимость</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="cost1_2" type="radio" name="cost_group" value="ДО 50.000 Р">
                            <label for="cost1_2">ДО 50.000 Р</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="cost2_2" type="radio" name="cost_group" value="50.000 Р">
                            <label for="cost2_2">50.000 Р</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="cost3_2" type="radio" name="cost_group" value="75.000 Р">
                            <label for="cost3_2">75.000 Р</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="cost4_2" type="radio" name="cost_group" value="100.000 Р">
                            <label for="cost4_2">100.000 Р</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="cost5_2" type="radio" name="cost_group" value="125.000 Р">
                            <label for="cost5_2">125.000 Р</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="cost6_2" type="radio" name="cost_group" value="150.000 Р">
                            <label for="cost6_2">150.000 Р</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="cost7_2" type="radio" name="cost_group" value="175.000 Р">
                            <label for="cost7_2">175.000 Р</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="cost8_2" type="radio" name="cost_group" value="200.000 Р">
                            <label for="cost8_2">200.000 Р</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="cost9_2" type="radio" name="cost_group" value="деньги - бумага">
                            <label for="cost9_2">деньги - бумага</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f_block date">
                <h3>Срок выполнения</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="date1_2" type="radio" name="date_group" value="месяц">
                            <label for="date1_2">месяц</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="date2_2" type="radio" name="date_group" value="2 месяца">
                            <label for="date2_2">2 месяца</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="date3_2" type="radio" name="date_group" value="3 месяца">
                            <label for="date3_2">3 месяца</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="date4_2" type="radio" name="date_group" value="4 месяца">
                            <label for="date4_2">4 месяца</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="date5_2" type="radio" name="date_group" value="6 месяцев">
                            <label for="date5_2">6 месяцев</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="date6_2" type="radio" name="date_group" value="я не спешу">
                            <label for="date6_2">я не спешу</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f_block tz">
                <h3>Есть ли у вас техническое задание?</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input id="no_tz_2" type="radio" name="radio_tz" value="нет" checked>
                            <label for="no_tz_2">нет</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input id="yes_tz_2" type="radio" name="radio_tz" value="да">
                            <label for="yes_tz_2">да</label>
                            <div class="load_tz_2 upload_form" style="display: block;">
								<form id="upload_tz_2" method="post" action="upload.php?act=tz" enctype="multipart/form-data">
									<div id="drop_tz_2">
										<a>Browse</a>
										<input type="file" name="upl[]" multiple="">
									</div>
									<ul></ul>
								</form>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f_block design_2 design">
                <h3>Понадобится ли дизайн?</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input id="yes_design_2" type="radio" name="radio_design" value="да" checked>
                            <label for="yes_design_2">да</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input id="no_design_2" type="radio" name="radio_design" value="нет">
                            <label for="no_design_2">нет</label>
                            <div class="load_design_2 upload_form" style="display: block;">
								<form id="upload_design_2" method="post" action="upload.php?act=design" enctype="multipart/form-data">
									<div id="drop_design_2">
										<a>Browse</a>
										<input type="file" name="upl[]" multiple="">
									</div>
									<ul></ul>
								</form>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="step2_2 step2" style="display: block;">
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
                                <input id="site_service1_2" type="checkbox" name="services_group[]" value="новости">
                                <label for="site_service1_2">новости</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="site_service2_2" type="checkbox" name="services_group[]" value="команда">
                                <label for="site_service2_2">команда</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="site_service3_2" type="checkbox" name="services_group[]" value="вакансии">
                                <label for="site_service3_2">вакансии</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="site_service4_2" type="checkbox" name="services_group[]" value="faq">
                                <label for="site_service4_2">faq</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="site_service5_2" type="checkbox" name="services_group[]" value="обратная связь">
                                <label for="site_service5_2">обратная связь</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="site_service6_2" type="checkbox" name="services_group[]" value="подписка на рассылку">
                                <label for="site_service6_2">подписка на рассылку</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="site_service7_2" type="checkbox" name="services_group[]" value="версия для печати">
                                <label for="site_service7_2">версия для печати</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="site_service8_2" type="checkbox" name="services_group[]" value="интерактивная карта">
                                <label for="site_service8_2">интерактивная карта</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="magaz_service1_2" type="checkbox" name="services_group[]" value="каталог товаров">
                                <label for="magaz_service1_2">каталог товаров</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="magaz_service2_2" type="checkbox" name="services_group[]" value="фильтр товаров">
                                <label for="magaz_service2_2">фильтр товаров</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="magaz_service3_2" type="checkbox" name="services_group[]" value="личный кабинет">
                                <label for="magaz_service3_2">личный кабинет</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="magaz_service4_2" type="checkbox" name="services_group[]" value="бренды">
                                <label for="magaz_service4_2">бренды</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="magaz_service5_2" type="checkbox" name="services_group[]" value="корзина">
                                <label for="magaz_service5_2">корзина</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="magaz_service6_2" type="checkbox" name="services_group[]" value="регистрация">
                                <label for="magaz_service6_2">регистрация</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="magaz_service7_2" type="checkbox" name="services_group[]" value="оформление заказа">
                                <label for="magaz_service7_2">оформление заказа</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="magaz_service8_2" type="checkbox" name="services_group[]" value="заказ без регистрации">
                                <label for="magaz_service8_2">заказ без регистрации</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="blog_service1_2" type="checkbox" name="services_group[]" value="посты">
                                <label for="blog_service1_2">посты</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="blog_service2_2" type="checkbox" name="services_group[]" value="рубрики">
                                <label for="blog_service2_2">рубрики</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="blog_service3_2" type="checkbox" name="services_group[]" value="авторы">
                                <label for="blog_service3_2">авторы</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="blog_service4_2" type="checkbox" name="services_group[]" value="регистрация">
                                <label for="blog_service4_2">регистрация</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="blog_service5_2" type="checkbox" name="services_group[]" value="комментарии">
                                <label for="blog_service5_2">комментарии</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="blog_service6_2" type="checkbox" name="services_group[]" value="рейтинги, оценки, карма">
                                <label for="blog_service6_2">рейтинги, оценки, карма</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="blog_service7_2" type="checkbox" name="services_group[]" value="rss">
                                <label for="blog_service7_2">rss</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <input id="blog_service8_2" type="checkbox" name="services_group[]" value="Интеграция с соц. сетями">
                                <label for="blog_service8_2">Интеграция с соц. сетями</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f_block platforms">
                <h3>Система управления содержимым</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="platform1_2" type="radio" name="platforms_group" value="1C - Битрикс">
                            <label for="platform1_2">1C - Битрикс</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="platform2_2" type="radio" name="platforms_group" value="WordPress">
                            <label for="platform2_2">WordPress</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="platform3_2" type="radio" name="platforms_group" value="Drupal">
                            <label for="platform3_2">Drupal</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="platform4_2" type="radio" name="platforms_group" value="ModX">
                            <label for="platform4_2">ModX</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="platform5_2" type="radio" name="platforms_group" value="Magento">
                            <label for="platform5_2">Magento</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="platform6_2" type="radio" name="platforms_group" value="UMI.CMS">
                            <label for="platform6_2">UMI.CMS</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="platform7_2" type="radio" name="platforms_group" value="Другая">
                            <label for="platform7_2">Другая</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="platform8_2" type="radio" name="platforms_group" value="Самописная">
                            <label for="platform8_2">Самописная</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="platform9_2" type="radio" name="platforms_group" value="не знаю">
                            <label for="platform9_2">не знаю</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="platform10_2" type="radio" name="platforms_group" value="не нужна">
                            <label for="platform10_2">не нужна</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f_block other">
                <h3>Дополнительные услуги</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="other1_2" type="checkbox" name="other_group[]" value="Сопровождение сайта">
                            <label for="other1_2">Сопровождение сайта</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="other2_2" type="checkbox" name="other_group[]" value="Оптимизация">
                            <label for="other2_2">Оптимизация</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="other3_2" type="checkbox" name="other_group[]" value="Аудит">
                            <label for="other3_2">Аудит</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="other4_2" type="checkbox" name="other_group[]" value="Лого">
                            <label for="other4_2">Лого</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="other5_2" type="checkbox" name="other_group[]" value="Фирменый стиль">
                            <label for="other5_2">Фирменый стиль</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="other6_2" type="checkbox" name="other_group[]" value="Продвижение">
                            <label for="other6_2">Продвижение</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="other7_2" type="checkbox" name="other_group[]" value="Контекстная реклама">
                            <label for="other7_2">Контекстная реклама</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="other8_2" type="checkbox" name="other_group[]" value="Наполнение сайта">
                            <label for="other8_2">Наполнение сайта</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input id="other9_2" type="checkbox" name="other_group[]" value="Копирайтинг">
                            <label for="other9_2">Копирайтинг</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="step3_2 step3 about" style="display: none;">
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
        <div class="btn_wrap"> <a class="btn evaluate btn_step2">ОЦЕНИТЬ ПРОЕКТ</a>
            <button class="btn_sendform js__sendform" type="submit" name="submit" style="display: none;" onclick="sendorderform('<?php echo ($_REQUEST['custom_name']? $_REQUEST['custom_name'] : 'order_form_2'); ?>');">ОТПРАВИТЬ!</button>
        </div>
    </div>
</div>