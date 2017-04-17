    <div class="main-section bg-white" id="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                    <div class="second-title">
                        <h2>Контактная форма</h2>
                        <p>Вы смело можете связаться с нашей службой поддержки и сделать заказ. Если Вас интересует вопрос цены, сроков - мы с радостью обсудим с Вами все детали. При желании Вы можете сразу же заполнить наш <a href="#">бриф</a> на разработку сайта, чтобы мы смогли адекватно оценить временные и финансовые затраты на реализацию Вашего проекта.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                    <form method="post" action="javascript:void(0);" id="contactform" name="contactform" class="contact-form bg-dark-grey b-radius b-shadow">
                        <div class="form-img">
                            <img src="http://webord.ru/img/contacts/form.png" alt="form" width="120" height="120">
                        </div>
                        <div class="input-label">
                            <label for="name">Ваше имя</label>
                            <input type="text" name="name" value="" id="name" required>
                        </div>
                        <div class="input-label">
                            <label for="email">Ваш email</label>
                            <input type="email" name="email" value="" id="email" required>
                        </div>
                        <div class="input-label">
                            <label for="mess">Сообщение</label>
                            <textarea name="mess" id="mess" required=""></textarea>
                        </div>
                        <button type="submit" class="submit btn_transparent" id="submit" onclick="sendform();">Отправить</button>
                    </form>
                    <div class="divError" id="error"></div>
                </div>
            </div>
        </div>
    </div>