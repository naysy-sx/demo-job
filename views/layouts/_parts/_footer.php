<section class="free-test">
    <div class="free-test-scheme">
        <figure class="free-test-photo"><img src="../../img/happy-job/images/2022/alexey-klochkov.png"
                                             alt="Алексей Клочков, основатель Happy Job" loading="lazy"></figure>
        <article class="free-test-content"><h2 class="form-title">Протестируйте <span>бесплатно!</span></h2>
            <p>Получите полный доступ.</p>
            <ol>
                <li>Заполните форму заявки, и с вами свяжется консультант, чтобы обсудить старт исследования.
                </li>
                <li>Всё, что нужно предоставить — это список email-адресов сотрудников.</li>
                <li>Вы сможете оценить все возможности платформы и подготовиться к полноценному использованию.
                </li>
            </ol>
            <p style="margin-bottom: 0;">Количество респондентов в тестовой группе должно составлять не более 10% от
                общего числа
                сотрудников, но не менее 5 и не более 100 человек.</p>
        </article>
        <cite class="free-test-cite">
            <q>Я и мои коллеги уделяем полное внимание всем тестовым проектам.</q>
            <span>
				<a href="/aleksey-klochkov/" style="color: #61c13a;">
					<strong>Алексей Клочков</strong>
				</a>,
				основатель Happy Job.
			</span>
        </cite>
        <div class="free-test-form">
            <style>
                .c-form input,
                .c-form select,
                .c-form textarea {
                    width: 100%;
                    font-size: 12.5px;
                    padding: 9px 10px 9px 11px;
                    border-radius: 4px;
                    border-color: var(--c-border);
                    color: #313131;
                    min-height: 33px;
                    background-color: #fff;
                    border-width: 1px;
                    border-style: solid;
                    font-family: "Gotham Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                    box-sizing: border-box;
                }

                .c-form select {
                    padding-top: 8px;
                }

                .c-form-label {
                    display: block;
                    color: #777;
                    font-size: 13px;
                    margin-bottom: 0;
                }

                .c-form-label sup {
                    color: red;
                }

                .c-form-list {
                    padding: 0;
                    margin: 0;
                }

                .c-form-item {
                    list-style-type: none;
                    margin-bottom: 0.75rem;
                }

                .c-form-item .parsley-errors-list {
                    padding: 0;
                }

                .c-form-item .parsley-custom-error-message {
                    list-style-type: none;
                    font-size: 9px;
                    color: red;
                }

                .c-form-item .parsley-custom-error-message:before {
                    display: none !important;
                    opacity: 0 !important;
                }

                .c-form-label {
                    color: #777;
                    font-size: 13px;
                    margin-bottom: 0;
                }

                .c-form-policy {
                    padding: 1rem 0 0;
                }

                .c-form-policy a:hover {
                    color: var(--c-link);
                }

                .c-form textarea {
                    height: 100px;
                }

                .c-form-policy p {
                    font-size: 11px;
                    margin: 1rem 0 0;
                    letter-spacing: 0.2px;
                }

                .c-form-policy p strong {
                    font-size: 150%;
                }

                .c-form-policy .icon {
                    position: relative;
                    top: 1px;
                    width: 13px;
                    height: 13px;
                    right: inherit;
                    margin-right: 4px;
                    float: left;
                }

                .c-form-date {
                    max-width: 300px;
                    margin: 0 auto 2rem;
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    grid-template-rows: auto auto;
                    grid-column-gap: 1rem;
                    grid-row-gap: 0.5rem;
                }

                .c-form-date p {
                    grid-column: 1 / 3;
                    font-weight: bold;
                    text-align: center;
                    font-size: 12px;
                    font-style: italic;
                    padding-bottom: 5px;
                    color: #777;
                    margin: 0;
                }
            </style>
            <form id="free-demo" class="c-form" data-parsley-validate>
                <h2>Заголовок по умолчанию</h2>
                <ul class="c-form-list">
                    <li class="c-form-item">
                        <input type="hidden" name="form-id" value="free-demo"></li>
                    <li class="c-form-item">
                        <input type="hidden" name="check" value="bot" id="checkinput"></li>
                    <li class="c-form-item">
                        <label class="c-form-label">
                            Ваше имя
                            <sup>*</sup></label>
                        <input type="text" id="name" name="name" placeholder="Как к вам обращаться" required
                               data-parsley-trigger="change" data-parsley-error-message="Укажите своё имя"></li>
                    <li class="c-form-item">
                        <label class="c-form-label">
                            Компания
                            <sup>*</sup></label>
                        <input type="text" id="company" name="company" placeholder="Ваша компания" required
                               data-parsley-trigger="change" data-parsley-error-message="Укажите название компании">
                    </li>
                    <li class="c-form-item">
                        <label class="c-form-label">
                            Количество сотрудников
                            <sup>*</sup></label>
                        <select id="number" name="number" required data-parsley-trigger="change"
                                data-parsley-error-message="Укажите количество сотрудников">
                            <option value="Количество сотрудников" selected disabled>
                                Количество сотрудников
                            </option>
                            <option value="0-100">
                                0-100
                            </option>
                            <option value="100-500">
                                100-500
                            </option>
                            <option value="500-1500">
                                500-1500
                            </option>
                            <option value="1500-5000">
                                1500-5000
                            </option>
                            <option value="5000+">
                                5000+
                            </option>
                        </select></li>
                    <li class="c-form-item">
                        <label class="c-form-label">
                            Телефон
                            <sup>*</sup></label>
                        <input type="tel" id="phone" name="phone" placeholder="" required
                               data-parsley-trigger="change"
                               data-parsley-pattern="^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}$"
                               data-parsley-error-message="Укажите номер телефона"></li>
                    <li class="c-form-item">
                        <label class="c-form-label">
                            Корпоративный e-mail
                            <sup>*</sup></label>
                        <input type="email" id="email" name="email" placeholder="Ваш e-mail" required
                               data-parsley-trigger="change"
                               data-parsley-pattern="/^(?!.*@(mail\.ru|yandex\.ru|gmail\.com|rambler\.ru|yahoo\.com))[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/"
                               data-parsley-error-message="Укажите корпоративный e-mail"></li>
                    <li class="c-form-item">
                        <label class="c-form-label">
                            Комментарий
                        </label>
                        <textarea id="comment" name="comment"></textarea></li>
                </ul>
                <button id="free-demo-submit" type="submit" class="button-default">Отправить</button>
                <div class="c-form-policy">
                    <p>
                        Нажимая на кнопку «Отправить», Вы даете согласие на обработку своих персональных данных.
                        <br><a href="/privacy-policy/"><i class="icon icon-lock"></i>Политика
                            конфиденциальности</a>
                    </p>
                    <p>
                        Или пишите нам на почту
                        <br><strong>
                            <a href="mailto:sales@happy-job.ru">sales@happy-job.ru</a>
                        </strong>
                    </p>
                </div>
            </form>
            <script>
                $(function () {
                    const maskOptions = {
                        mask: "+{7}(000)000-00-00",
                        lazy: false,
                        placeholderChar: "_",
                    };
                    let inputFields = document.querySelectorAll('#free-demo input[type="tel"]');
                    console.log(inputFields)
                    let imaskArr = [];
                    inputFields.forEach((input) => {
                        imaskArr.push(IMask(input, maskOptions))
                    });
                    /* ОБРАБОТКА ПОЛЕЙ СО ВРЕМЕНЕМ */
                    const currentDateInput = document.getElementById('current-date');
                    const timeSelect = document.getElementById('time');
                    const currentDate = new Date().toISOString().slice(0, 10);
                    currentDateInput.value = currentDate;
                    currentDateInput.min = currentDate;

                    function setOptions() {
                        const currentTime = new Date().getHours() * 60 + new Date().getMinutes();
                        let closestTimeOption = null;
                        let closestTimeDiff = Infinity;
                        for (let i = 0; i < timeSelect.options.length; i++) {
                            const timeOption = timeSelect.options[i];
                            const timeValue = timeOption.value.split(':').map(Number);
                            const timeMinutes = timeValue[0] * 60 + timeValue[1];
                            if (currentDateInput.value === currentDate && timeMinutes <= currentTime) {
                                timeOption.disabled = true;
                                timeOption.hidden = true;
                            } else {
                                timeOption.disabled = false;
                                timeOption.hidden = false;
                                const timeDiff = timeMinutes - currentTime;
                                if (timeDiff > 0 && timeDiff < closestTimeDiff) {
                                    closestTimeDiff = timeDiff;
                                    closestTimeOption = timeOption;
                                }
                            }
                        }
                        if (closestTimeOption !== null) {
                            closestTimeOption.selected = true;
                        } else {
                            // Если нет доступного времени, выбрать последнюю опцию
                            timeSelect.options[timeSelect.options.length - 1].selected = true;
                        }
                    }

                    setOptions();
                    currentDateInput.addEventListener('change', function () {
                        const selectedDate = new Date(this.value);
                        const today = new Date();
                        const tomorrow = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 1);
                        const selectedTime = timeSelect.value;
                        let closestTimeOption = null;
                        let closestTimeDiff = Infinity;
                        for (let i = 0; i < timeSelect.options.length; i++) {
                            const timeOption = timeSelect.options[i];
                            const timeValue = timeOption.value.split(':').map(Number);
                            const timeMinutes = timeValue[0] * 60 + timeValue[1];
                            if (selectedDate < tomorrow) {
                                if (selectedDate.getTime() === today.getTime() && timeMinutes <= currentTime) {
                                    timeOption.disabled = true;
                                    timeOption.hidden = true;
                                } else {
                                    timeOption.disabled = false;
                                    timeOption.hidden = false;
                                    const timeDiff = timeMinutes - currentTime;
                                    if (timeDiff > 0 && timeDiff < closestTimeDiff) {
                                        closestTimeDiff = timeDiff;
                                        closestTimeOption = timeOption;
                                    }
                                }
                            } else {
                                timeOption.disabled = false;
                                timeOption.hidden = false;
                            }
                        }
                        if (closestTimeOption !== null) {
                            closestTimeOption.selected = true;
                        } else {
                            // Если нет доступного времени, выбрать последнюю опцию
                            timeSelect.options[timeSelect.options.length - 1].selected = true;
                        }
                    });
                    const checkWorkTime = () => {
                        const now = new Date();
                        const startWorkTime = new Date();
                        startWorkTime.setHours(9, 0, 0, 0);
                        const endWorkTime = new Date();
                        endWorkTime.setHours(18, 0, 0, 0);
                        if (now >= startWorkTime && now <= endWorkTime) {
                            return "Менеджер свяжется с вами в ближайшее время";
                        } else {
                            return "Наш менеджер свяжется с вами в рабочее время с 09:00 - 18:00 по Москве";
                        }
                    }
                    const sendForm = (formNode, formData) => {
                        fetch('/ajax.php', {
                            method: 'POST',
                            body: formData
                        })
                            .then(function (response) {
                                if (!response.ok) {
                                    throw new Error('Ошибка HTTP: ' + response.status);
                                }
                                return response.json();
                            })
                            .then(function (data) {
                                if (data.status === 'error') {
                                    Swal.fire('Ошибка отправки!', data.msg, data.status);
                                } else if (data.status === 'success') {
                                    const timeStatus = checkWorkTime();
                                    Swal.fire('Благодарим за оставленную заявку!', timeStatus, data.status);
                                }
                                $("#free-demo").find('input[type="text"], input[type="phone"], textarea').val('');
                                inputFields = document.querySelectorAll('input[type="tel"]');
                                inputFields.forEach((input) => {
                                    IMask(input, maskOptions);
                                });
                                ym(46152993, 'reachGoal', 'mainpage_send_topform');
                            })
                            .catch(function (error) {
                                console.error('Ошибка отправки данных на сервер:', error);
                                Swal.fire({
                                    icon: 'question',
                                    title: 'А вот это уже интересно',
                                    text: error.toString(),
                                });
                                ym(46152993, 'reachGoal', 'event_error');
                            });
                    };
                    // 1
                    $('#free-demo input').on('input', function () {
                        const Form = $('#free-demo').parsley();
                    });
                    // 2
                    $('#free-demo-submit').on('click', function (event) {
                        const Form = $('#free-demo').parsley();
                        if (Form.isValid()) {
                            formSubmitHandler(event)
                        }
                    })

                    function formSubmitHandler(event) {
                        event.preventDefault();
                        $(document).find('.main-modal .is-close').trigger('click');
                        const formNode = document.getElementById('free-demo');
                        const formData = new FormData(formNode);
                        sendForm(formNode, formData);
                        console.log('Отправилось!');
                        imaskArr.forEach((elem) => {
                            elem.value = "";
                            elem.updateValue();
                        })
                        formNode.reset();
                    }
                });
            </script>
        </div>
    </div>
</section>

<footer class="page-footer">
    <div class="page-footer-wrapper">
        <div class="page-footer-container">
            <ul class="page-footer-menu footer-menu">
                <li class="footer-menu-block footer-block ">
                    <strong class="footer-block-header">Продукты</strong>
                    <ul class="footer-submenu">
                        <li class="footer-submenu-item -logos">
                            <a href="/" class="footer-submenu-logo" title="Happy Job">
                                <img src="../../img/happy-job/images/logo.svg" style="max-width: 163px;"><br><small>Исследование
                                    и развитие вовлеченности и лояльности</small>
                            </a>
                        </li>
                        <li class="footer-submenu-item -logos">
                            <a href="/international/" class="footer-submenu-logo"
                               title="Happy Job International">
                                <img src="../../img/happy-job/images/logo-international.svg"
                                     style="max-width: 163px;"><br><small>Вовлеченность по любой методике</small>
                            </a>
                        </li>
                        <li class="footer-submenu-item -logos">
                            <a href="https://happy-inc.ru/happy-service/" class="footer-submenu-logo"
                               title="Happy Service">
                                <img src="../../img/logo/happy_service.svg" style="max-width: 213px;"><br><small>Взаимодействие
                                    подразделений. Качество внутренних процессов.</small>
                            </a>
                        </li>
                        <li class="footer-submenu-item -logos">
                            <a href="https://happy-inc.ru/feedbackx/" class="footer-submenu-logo" title="FeedbackX">
                                <img src="../../img/logo/feedbackx.svg" style="max-width: 156px;"><br><small>Опрос
                                    компетенций
                                    360<sup>0</sup>. Карьерные треки и Performance</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer-menu-block footer-block ">
                    <strong class="footer-block-header">Решения</strong>
                    <ul class="footer-submenu">
                        <li class="footer-submenu-item -logos">
                            <a href="https://happy-inc.ru/oproskin/" class="footer-submenu-logo" title="">
                                <img src="../../img/logo/oproskin.svg" style="max-width: 140px;"><br><small>150+ шаблонов
                                    корпоративных исследований с быстрым запуском.</small>
                            </a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/climate_survey" class="footer-submenu-link">Climate
                                Survey</a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/evp" class="footer-submenu-link">Бренд
                                работодателя и
                                EVP</a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/corporate_culture" class="footer-submenu-link">Уровень
                                корпоративной культуры</a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/dms" class="footer-submenu-link">Исследование
                                удовлетворенности ДМС</a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/safety" class="footer-submenu-link">Безопасность
                                и
                                охрана <br>труда</a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/change" class="footer-submenu-link">Восприятие и
                                оценка успеха изменений</a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="https://happy-inc.ru/oproskin/" class="footer-submenu-link">Ещё</a>
                        </li>
                    </ul>
                </li>
                <li class="footer-menu-block footer-block ">
                    <strong class="footer-block-header">Компания</strong>
                    <ul class="footer-submenu">
                        <li class="footer-submenu-item">
                            <a href="/news/" class="footer-submenu-link">Новости</a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="/clients/benchmarks/" class="footer-submenu-link">Клиенты</a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="/clients/reviews/" class="footer-submenu-link">Отзывы</a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="/advantages/" class="footer-submenu-link">Преимущества</a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="/video/" class="footer-submenu-link">Видео</a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="/cases/" class="footer-submenu-link">Кейсы</a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="/webinar/" class="footer-submenu-link">Вебинары</a>
                        </li>
                        <li class="footer-submenu-item">
                            <a href="/hr-blog/" class="footer-submenu-link">Блог</a>
                        </li>
                    </ul>
                </li>
                <li class="footer-menu-block footer-block -contacts">
                    <strong class="footer-block-header">Контакты</strong>
                    <div class="contacts-wrapper">
                        <ul class="footer-submenu">
                            <li class="footer-submenu-item">
                                <a href="/about-us/" class="footer-submenu-link">О нас</a>
                            </li>
                            <li class="footer-submenu-item">
                            <a href="/about-us/work/" class="footer-submenu-link">Карьера</a>
                            </li>
                            <li class="footer-submenu-item">
                                <a href="/contacts/support/" class="footer-submenu-link">Клиентская
                                    поддержка</a>
                            </li>
                            <li class="footer-submenu-item">
                                <a href="/contacts/sales/" class="footer-submenu-link">Отдел продаж</a>
                            </li>
                        </ul>
                        <div class="footer-contacts" itemscope itemtype="http://schema.org/Organization">
                            <p><a href="tel:+7(495)%20646-83-89" itemprop="telephone">+7(495) 646-83-89</a></p>
                            <p><a href="mailto:sales@happy-job.ru" itemprop="email">sales@happy-job.ru</a></p>
                            <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <a target="_blank"
                                   href="https://yandex.ru/maps/213/moscow/house/varshavskoye_shosse_118k1/Z04YcAZoSUYGQFtvfXpycHtkZw==/?indoorLevel=1&amp;ll=37.618031%2C55.631773&amp;z=17">
                                    <span itemprop="postalCode">117587</span>, Россия,
                                    <span itemprop="addressLocality">Москва</span>, <br><span
                                        itemprop="streetAddress">Варшавское ш., 118к1, 10эт</span>
                                </a>
                            </address>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="container -subfooter">
        <ul class="subfooter-list">
            <li class="footer-link">
                <a href="https://happy-inc.ru/clients/benchmarks/" target="_blank">
                    <img src="../../img/happy-job/images/benchmarks.png" loading="lazy" alt="Бенчмарки"><br>Бенчмарки
                </a>
            </li>
            <li class="footer-link">
                <a href="https://happy-inc.ru/infopages/" target="_blank">
                    <img src="../../img/happy-job/images/safety.png" loading="lazy" alt="О безопасности платформы"><br>О
                    безопасности платформы
                </a>
            </li>
            <li class="footer-link">
                <a href="https://reestr.digital.gov.ru/reestr/310009/?sphrase_id=1856359" target="_blank">
                    <img src="../../img/happy-job/images/reestr.png" loading="lazy" alt="В реестре разработчиков ПО"><br>В
                    реестре разработчиков ПО
                </a>
            </li>
            <li class="footer-link">
                <a href="https://pd.rkn.gov.ru/operators-registry/operators-list/?id=77-18-012108" target="_blank">
                    <img src="../../img/happy-job/images/reestr-operator.png" loading="lazy"
                         alt="В реестре операторов перс. данных"><br>В реестре операторов перс. данных
                </a>
            </li>
            <li class="footer-link">
												<span>
							<img src="../../img/happy-job/images/iso.png" loading="lazy" alt="Стандарты качества"><br>Стандарты качества
						</span>
            </li>
            <li class="footer-link">
                <a href="/about-us/" target="_blank">
                    <img src="../../img/happy-job/images/about-us.png" loading="lazy" alt="О команде Happy Job."><br>О
                    команде
                    Happy Job.
                </a>
            </li>
        </ul>
    </div>
    <hr class="page-footer-divider">
    <div class="container -copyright">
        <div class="copyright">
            <a href="/">
                <img src="../../img/happy-job/images/logo.svg" title="Happy Job"></a>
            <p>
                <a data-fancybox="" data-src="#main-modal" href="javascript:;">©</a>2013 -
                <?=date('Y')?>.
            </p>
            <a href="/privacy-policy/" class="copyright__policy">Политика конфиденциальности</a>
        </div>
        <div class="sitemap">
            <a href="/sitemap.xml">Карта сайта</a>
        </div>
    </div>
</footer>
