<?php $this->title = '68 кейсов по развитию вовлеченности от ведущих компаний России'; ?>
<?php
$this->view->registerMetaTag(
	['name' => 'description', 'content' => 'Краткое описание страницы']
);
?>

<style>
    .topbanner {
        display: none;
    }

    header.page-header {
        top: 0;
    }

    label[for="respondents"] {
        font-size: 12px;
        display: block;
        margin-bottom: 2px;
    }

    label[for="respondents"]+select {
        background-color: #fff;
        margin-bottom: 10px;
    }

    @media (max-width: 1200px) {
        .-mobile {
            top: 62px;
        }
        /* ds */
    }

    .main-picture{
        display: block;
        aspect-ratio: 100 / 25;
        overflow: hidden;
        padding: 0;
        margin: 0 0 35px 0;
        border-bottom: 5px solid #e4e4e4;
    }

    .main-picture img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
    }

    @media(max-width: 577px){
        .main-picture{
            aspect-ratio: 100 / 67;
            border-bottom: 5px solid transparent;
        }
    }

    main ul.cases-68 li{
        list-style-type: none;
        padding-left: 1rem;
    }

    main ul.cases-68 > li:before{
        content: '';
        background: #61C13B;
        position: absolute;
        left: 0px;
        top: 9px;
        width: 9px;
        height: 2px;
        border-radius: 0;
    }

</style>

<div class="main-picture wide-container">
	<picture>
		<source srcset="/img/pages/68-rabotayushhikh-kejsov/banner_trends_mobile.png" media="(max-width: 577px)">
		<source srcset="/img/pages/68-rabotayushhikh-kejsov/banner_trends_tablet.png" media="(max-width: 1200px)">
		<img src="/img/pages/68-rabotayushhikh-kejsov/banner_trends_desktop.png" />
	</picture>
</div>

<div class="container mainc">
  <div class="row">
	<div class="col-12 col-md-9">

    <style>
        .breadcrumbs {
            padding: 0 0 2rem;
        }
        .breadcrumbs-list {
            position: relative;
            display: flex;
            gap: 1rem;
            align-items: center;
            margin: 0;
            padding: 0 !important;
            max-width: 100%;
            overflow: hidden;
            list-style-type: none;
        }
        .container.blog .breadcrumbs-list > li{
            list-style-type: none;
        }
        .breadcrumbs-list:after{
            content: '';
            display: block;
            position: absolute;
            width: 3rem;
            height: 3rem;
            right: 0;
            top: 0;
            background: rgb(255,255,255);
            background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.25253851540616246) 13%, rgba(255,255,255,0.6979166666666667) 29%, rgba(255,255,255,0.8463760504201681) 48%, rgba(255,255,255,0.8995973389355743) 65%, rgba(255,255,255,1) 83%);
        }

        .breadcrumbs-item{
            list-style-type: none;
            margin: 0;
            white-space: nowrap;
        }

        .breadcrumbs-item span[itemprop="name"]{
            overflow: visible;
            height: auto;
            display: inline;
            font-size: 14px;
            font-weight: 400;
        }


        .breadcrumbs-item > span[itemprop="name"]{
            color: #393A3C;
        }

        .breadcrumbs-item + .breadcrumbs-item:before{
            content: '';
            font-size: xx-small;
            vertical-align: middle;
            position: relative;
            display: inline-block;
            width: 1rem;
            min-width: 1rem;
            height: 1rem;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M7.15 21.1q-.375-.375-.375-.888q0-.512.375-.887L14.475 12l-7.35-7.35q-.35-.35-.35-.875t.375-.9q.375-.375.888-.375q.512 0 .887.375l8.4 8.425q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325L8.9 21.125q-.35.35-.862.35q-.513 0-.888-.375Z'/%3E%3C/svg%3E");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
            transform: translate(-5px, -1px);
            background-color: transparent;
            opacity: 0.3;
        }

        .breadcrumbs-link{
            color: #61c13a !important;
            text-decoration: none !important;
            border-bottom: none !important;
        }
        .breadcrumbs-link:hover{
            color: var(--c-link);
            text-decoration: none;
        }
        .breadcrumbs-link > span[itemprop="name"]{
            color: #61c13a;
            font-size: 14px;
        }

        .breadcrumbs-item span[itemprop="name"] br {
            display: none;
        }

        @media (min-width: 841px){
            .breadcrumbs-links-contacts,
            .breadcrumbs-links-metodika {
                cursor: pointer;
            }

            .breadcrumbs-links-contacts > span[itemprop="name"],
            .breadcrumbs-links-metodika > span[itemprop="name"]{
                color: #61c13a;
            }
        }

        @media (max-width: 575px) {
            .breadcrumbs {
                padding: 1.5rem 0 1rem;
            }
            .breadcrumbs-list {
                gap: 0.5rem;
            }
            .breadcrumbs-item {
                display: inline-flex;
                align-items: flex-start;
            }
            .breadcrumbs-item + .breadcrumbs-item:before{
                transform: translate(-3px, -3px);
            }
            .breadcrumbs-item > span[itemprop="name"]{
                transform: translate(2px, 1px);
            }
            .breadcrumbs-item:last-child{
                display: none;
            }
        }
    </style>

    <nav class="breadcrumbs">
      <ul class="breadcrumbs-list" itemscope="" itemtype="https://schema.org/BreadcrumbList">
        <li class="breadcrumbs-item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
          <a href="/" class="breadcrumbs-link" title="Вернуться на главную страницу" itemprop="item">
        <span itemprop="name">
          Главная</span>
          </a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumbs-item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
          <span itemprop="name">68 кейсов по развитию вовлеченности от ведущих компаний России</span>

          <meta itemprop="position" content="3">
        </li>
      </ul>
    </nav>

		<p>Привет! Это команда Happy Job - онлайн-платформы для исследования и развития вовлеченности, лояльности, удовлетворенности, eNPS.</p>
		<p>Наши клиенты — более 800 крупнейших коммерческих и государственных организаций из 32 отраслей.</p>
		<p>За время работы с ними у нас накопилось множество уникальных кейсов. Самые успешные мы упаковали в готовый буклет:</p>

		<ul class="cases-68">
			<li>Коворкинг на крыше</li>
			<li>Киберчемпионат</li>
			<li>Фабрика идей</li>
			<li>Встречи с руководителями без галстуков</li>
			<li>Образовательные марафоны</li>
			<li>И еще <b>60+</b> проверенных решений для создания продуктивных команд</li>
		</ul>

		<p>Изучите кейсы таких гигантов, как <b>Дикси, S7 Airlines, Газпромбанк, ГК Самолет, ВСК, СИБУР</b> и многих других!</p>
		<p><b>Бесценный настольный материал для HR-специалиста!</b></p>

		<p>Забирайте бесплатно, делитесь с коллегами и внедряйте с пользой.</p>

		<a class="trend-button">Скачать</a>


		<style>

        .trend-h3{
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 32px;
            line-height: 1.5;
        }

        .trend-h3 span{
            display: block;
            font-weight: normal;
            font-size: 16px;
            color: #888888;
        }

        .c-form-policy{
            display: none;
        }

        .trend-form .c-form {
            margin-bottom: 0;
        }

        .trend-form .c-form h2,
        .trend-form .c-form label,
        .trend-form .c-form-policy{
            display: none;
        }

        .trend-form .c-form-item {
            margin-bottom: 20px;

        }

        .trend-form .c-form input,
        .trend-form .c-form select,
        .trend-form .c-form textarea{
            font-size: 1rem;
            padding: 9px 10px 9px 11px;
            border-width: 0px;
            min-height: 40px;
            height: 40px;
        }

        .trend-button,
        .trend-form .c-form .button-default{
            background-color: #57BC20;
            display: inline-flex;
            height: 47px;
            line-height: 38px;
            border-bottom: none !important;
            border-radius: 6px;
            padding: 3px 2rem;
            text-decoration: none !important;
            font-weight: 300 !important;
            box-shadow: none;
        }

        .trend-button{
            font-weight: 300;
            color: #fff !important;
            margin-bottom: 22px;
        }

        .trend-form{
            background-color: #F5F6F8;
            border-radius: 10px;
            padding: 4px 24px 24px;
            max-width: 500px;
        }

        .trend-form.-collapsed{
            display: none;
        }

		</style>



		<div class="trend-form -collapsed" style="margin-bottom: 3rem;">

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
                height: 33px;
                background-color: #fff;
                border-width: 1px;
                border-style: solid;
                font-family: "Gotham Pro", -apple-system, BlinkMacSystemFont, "Segoe UI",Roboto, "Helvetica Neue", Arial, sans-serif;
                box-sizing: border-box;
            }

            .c-form select{
                padding-top: 8px;
            }

            .c-form-label{
                display: block;
                color: #777;
                font-size: 13px;
                margin-bottom: 0;
            }

            .c-form-label sup{
                color: red;
            }

            .c-form-list{
                padding: 0;
                margin: 0;
            }

            .c-form-item{
                list-style-type: none;
                margin-bottom: 0.75rem;
            }
            .c-form-item .parsley-errors-list{
                padding: 0;
            }
            .c-form-item .parsley-custom-error-message{
                list-style-type: none;
                font-size: 9px;
                color: red;
            }
            .c-form-item .parsley-custom-error-message:before{
                display: none !important;
                opacity: 0 !important;
            }

            .c-form-label{
                color: #777;
                font-size: 13px;
                margin-bottom: 0;
            }

            .c-form-policy {
                padding: 1rem 0 0;
            }

            .c-form-policy a:hover{
                color: var(--c-link);
            }

            .c-form textarea{
                height: 100px;
            }

            .c-form-policy p{
                font-size: 11px;
                margin: 1rem 0 0;
                letter-spacing: 0.2px;
            }

            .c-form-policy p strong{
                font-size: 150%;
            }

            .c-form-policy .icon{
                position: relative;
                top: 1px;
                width: 13px;
                height: 13px;
                right: inherit;
                margin-right: 4px;
                float: left;
            }

            .c-form-date{
                max-width: 300px;
                margin: 0 auto 2rem;
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto auto;
                grid-column-gap: 1rem;
                grid-row-gap: 0.5rem;
            }
            .c-form-date p{
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



        <form id="cases-68" class="c-form" data-parsley-validate="" novalidate="">
          <h2>Заголовок по умолчанию</h2>

          <ul class="c-form-list">
            <li class="c-form-item">
              <input type="hidden" name="form-id" value="cases-68">
            </li>
            <li class="c-form-item">
              <input type="hidden" name="check" value="bot" id="checkinput">
            </li>

            <li class="c-form-item">
              <label class="c-form-label">
                Ваше имя
                <sup>*</sup>
              </label>
              <input type="text" id="name" name="name" placeholder="Как к вам обращаться" required="" data-parsley-trigger="change" data-parsley-error-message="Укажите своё имя">
            </li>
            <li class="c-form-item">
              <label class="c-form-label">
                Компания
                <sup>*</sup>
              </label>
              <input type="text" id="company" name="company" placeholder="Ваша компания" required="" data-parsley-trigger="change" data-parsley-error-message="Укажите название компании">
            </li>
            <li class="c-form-item">
              <label class="c-form-label">
                Количество сотрудников
                <sup>*</sup>
              </label>
              <select id="number" name="number" required="" data-parsley-trigger="change" data-parsley-error-message="Укажите количество сотрудников">
                <option value="Количество сотрудников" selected="" disabled="">
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
              </select>
            </li>
            <li class="c-form-item">
              <label class="c-form-label">
                Телефон
                <sup>*</sup>
              </label>
              <input type="tel" id="phone" name="phone" placeholder="" required="" data-parsley-trigger="change" data-parsley-pattern="^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}$" data-parsley-error-message="Укажите номер телефона">
            </li>
            <li class="c-form-item">
              <label class="c-form-label">
                Корпоративный e-mail
                <sup>*</sup>
              </label>
              <input type="email" id="email" name="email" placeholder="Ваш e-mail" required="" data-parsley-trigger="change" data-parsley-pattern="/^(?!.*@(gmail\.com|yahoo\.com|rambler\.ru|mail\.ru|yandex\.ru|ya\.ru)$)[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/" data-parsley-error-message="Укажите корпоративный e-mail">
            </li>
          </ul>
          <button id="cases-68-submit" type="submit" class="button-default">Отправить</button>

          <div class="c-form-policy">
            <p>
              Нажимая на кнопку «Отправить», Вы даете согласие на обработку своих персональных данных.
              <br>
              <a href="/privacy-policy/"><i class="icon icon-lock"></i>Политика конфиденциальности</a>
            </p>
            <p>
              Или пишите нам на почту
              <br>
              <strong>
                <a href="mailto:sales@happy-inc.ru">sales@happy-inc.ru</a>
              </strong>
            </p>
          </div>
        </form>


        <!-- /12. Форма Протестируйте бесплатно -->

        <script>
          $(function() {

            const getSubDomain = (url) => {
              const urlObj = new URL(url);
              const segments = urlObj.pathname.split('/').filter(part => part.length > 0);
              return segments.length > 0 ? segments[0] : null;
            };

            const sendMetrik = (formNodeID, formURL) => {
              switch (formNodeID) {
                case 'compare-index':
                  dataLayer.push({
                    'event': 'GAevent',
                    'eventCategory': 'click',
                    'eventAction': 'index'
                  });
                  console.log('Метрика “Сравните себя” в отрасли')
                  break;
                case 'form-id':
                  dataLayer.push({'event': 'GAevent', 'eventCategory': 'form', 'eventAction': 'request'});
                  console.log('Метрика “Заполните заявку” на всех страницах сайта')
                  break;
                case 'free-demo':
                  dataLayer.push({'event': 'GAevent', 'eventCategory': 'form', 'eventAction': 'free_demo'});
                  console.log('Метрика “Протестируйте бесплатно” внизу страниц сайта')
                  break;
                case 'hrbrand':
                  dataLayer.push({'event': 'GAevent', 'eventCategory': 'form', 'eventAction': 'request'});
                  console.log('Метрика со страницы платформ')
                  break;
                case 'trend':
                  dataLayer.push({
                    'event': 'GAevent',
                    'eventCategory': 'trend',
                    'eventAction': 'reportform'
                  });
                  console.log('Метрика Типы исследований')
                  break;
                default:
                  switch (formURL) {
                    case 'types-of-surveys':
                      dataLayer.push({'event': 'GAevent', 'eventCategory': 'form', 'eventAction': 'request'});
                      console.log('Метрика со страницы платформ');
                      break;
                    default:
                      console.log('?? metrika ??')
                      break;
                  }
                  console.log('?? metrika ??')
                  break;
              }
            };

            const maskOptions = {
              mask: "+{7}(000)000-00-00",
              lazy: false,
              placeholderChar: "_",
            };

            let inputFields = document.querySelectorAll('#cases-68 input[type="tel"]');
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
                timeSelect.options[timeSelect.options.length - 1].selected = true;
              }
            }

            setOptions();

            currentDateInput.addEventListener('change', function() {
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
            const checkWorkTime = (formNodeID) => {
              const now = new Date();
              const startWorkTime = new Date();
              startWorkTime.setHours(9, 0, 0, 0);
              const endWorkTime = new Date();
              endWorkTime.setHours(18, 0, 0, 0);

              if (now >= startWorkTime && now <= endWorkTime && formNodeID === 'trend') {
                return "Менеджер направит отчет на указанную почту до конца рабочего дня";
              } else if(now >= startWorkTime && now <= endWorkTime) {
                return "Менеджер свяжется с вами в ближайшее время";
              }
              else {
                return "Наш менеджер свяжется с вами в рабочее время с 09:00 - 18:00 по Москве";
              }
            }

            const sendForm = (formNode, formData, formNodeID, formURL) => {
              fetch('/ajax', {
                method: 'POST',
                body: formData
              })
                .then(function(response) {
                  if (!response.ok) {
                    throw new Error('Ошибка HTTP: ' + response.status);
                  }

                  return response.json();
                })
                .then(function(data) {
                  if (data.status === 'error') {
                    Swal.fire('Ошибка отправки!', data.msg, data.status);
                  } else if (data.status === 'success') {
                    const timeStatus = checkWorkTime(formNodeID);
                    console.log(formNodeID);
                    sendMetrik(formNodeID, formURL);

                    if(formNodeID === 'trend'){
                      Swal.fire('Благодарим за заявку!', timeStatus, data.status);
                    } else {
                      Swal.fire('Благодарим за оставленную заявку!', timeStatus, data.status);
                    }
                  }
                  $("#cases-68").find('input[type="text"], input[type="phone"], textarea').val('');
                  inputFields = document.querySelectorAll('input[type="tel"]');
                  inputFields.forEach((input) => {
                    IMask(input, maskOptions);
                  });

                  ym(46152993, 'reachGoal', 'mainpage_send_topform');
                })
                .catch(function(error) {
                  console.log('sendForm :: errors (catch): ');
                  console.log(error);

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
            $('#cases-68 input').on('input', function() {
              const Form = $('#cases-68').parsley();
            });


            // 2
            $('#cases-68-submit').on('click', function(event){
              const Form = $('#cases-68').parsley();

              if (Form.isValid()) {
                formSubmitHandler(event)
              }
            })

            function formSubmitHandler(event) {
              event.preventDefault();

              $(document).find('.main-modal .is-close').trigger('click');
              $(document).find('#prices-form .is-close').trigger('click');
              const formNode = document.getElementById('cases-68');
              const formData = new FormData(formNode);
              const formNodeID ='cases-68';
              const formURL = window.location.href;
              sendForm(formNode, formData, formNodeID, formURL);
              console.log('Отправилось!'); // file?
              imaskArr.forEach((elem) => {
                elem.value = "";
                elem.updateValue();
              })
              formNode.reset();
            }
          });
        </script>    </div>


	</div>
</div>

</div>

<script>
  $(function () {

    $(".trend-button").on("click", function (event) {
      $('.trend-form').toggleClass('-collapsed');
      $(this).hide();
    });

    $(".form.trend-form").on("submit", function (event) {
      event.preventDefault();
      console.log('Блок');
      $(".form.trend-form button").prop("disabled", true);
      let formData = {};
      $(this).serializeArray().map(function (x) {
        formData[x.name] = x.value;
      })
      console.log(formData);
      $.ajax({
        url: "/ajax",
        method: "POST",
        dataType: "json",
        data: formData,
      }).done(function (resp) {
        console.log('Разблок');
        $(".form.trend-form button").prop("disabled", false);
        if (resp.status === "success") {
          Swal.fire(
            'Отчет будет выслан на указанный e-mail в ближайшее время.',
            'Благодарим за интерес.',
            'success'
          )
          $(".form.trend-form").find('input[type="text"], input[type="phone"], input[type="email"], textarea').val('');
          ym(46152993, 'reachGoal', 'trend_reportform');
          // var pdflink = document.createElement('a');
          // pdflink.setAttribute('href','/pdf/happy_job_trendy_vovlechennosti_i_loyalnosti.pdf');
          // pdflink.setAttribute('download','happy_job_trendy_vovlechennosti_i_loyalnosti');
          // pdflink.click();
        }
        else if (resp.status === "error") {
          let message = resp.msg;
          Swal.fire({
            icon: 'error',
            title: 'Упс!',
            text: message,
          });
        }
        else {
          let message = resp.msg;
          Swal.fire({
            icon: 'question',
            title: 'А вот это уже интересно',
            text: message,
          })
        }
      });
    });
  })
</script>