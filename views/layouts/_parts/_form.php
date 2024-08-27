<div class="main-modal" id="main-modal" style="display: none">
	<style>

      .fancybox__backdrop {
          background-color: rgba(0, 0, 0, .4) !important;
      }

      .fancybox__content>.f-button.is-close-btn{
          top: 0px;
          color: var(--fancybox-color, #000);
      }

      .fancybox__content>.f-button.is-close-btn:hover{
          top: 0px;
          color: var(--fancybox-color, #61C13B);
      }

      .main-modal{
          background-color: #fff;
          max-width: 500px;
          border-radius: 10px;
      }

      .button-default {
          display: inline-flex;
          line-height: 0.4;
          text-align: center;
          justify-content: center;
          font-size: clamp(1rem, 0.9464285714285714rem + 0.26785714285714285vw, 1.1875rem);
          color: #fff;
          background-color: #f5515a;
          border: none;
          border-bottom: 4px solid #f5515a;
          border-radius: 6px;
          padding: clamp(0.8125rem, 0.703125rem + 0.546875vw, 1.25rem) clamp(0.6875rem, 0.609375rem + 0.390625vw, 1rem) clamp(0.6875rem, 0.609375rem + 0.390625vw, 1rem);
          text-decoration: none !important;
          font-weight: bold;
          cursor: pointer;
          transition: background-color 0.2s;
          box-shadow: 0 5px 0 #c63839;
      }

      .c-form .button-default{
		      display: flex;
          margin: 0 auto;
      }

      .main-modal .c-form-policy {
          text-align: center;
          border-top: 1px solid #eee;
          padding: 0;
          margin-top: 2rem;
      }

      .main-modal .c-form-policy a{
          color: #61C13B;
          text-decoration: none;
          display: inline-block;
      }

			.c-form h2{
          font-size: 1.7rem;
          font-weight: bold;
          text-align: center;
          padding: 0;
			}

      .c-form input,
      .c-form select,
      .c-form textarea {
          width: 100%;
          font-size: 12.5px;
          padding: 9px 10px 9px 11px;
          border-radius: 4px;
          border-color: #dee2e5;
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
      .icon-lock {
          width: 32px;
          height: 32px;
          background-size: contain;
          background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M20 8h-3V6.21c0-2.61-1.91-4.94-4.51-5.19A5.008 5.008 0 0 0 7 6v2H4v14h16V8zm-8 9c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2zM9 8V6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9z'%3E%3C/path%3E%3C/svg%3E");
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
	<form id="form-id" class="c-form" data-parsley-validate>
		<h2>Заполните заявку</h2>
		<ul class="c-form-list">
			<li class="c-form-item">
				<input type="hidden" name="form-id" value="form-id"></li>
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
				       data-parsley-trigger="change" data-parsley-error-message="Укажите название компании"></li>
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
				<input type="tel" id="phone" name="phone" placeholder="" required data-parsley-trigger="change"
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
			<li class="c-form-item">
				<label class="c-form-label">
				</label>
				<div class="c-form-date" style="display:none;">
					<p>Вы также можете указать время,<br>в которое вам будет удобнее принять звонок </p>
					<div class="c-form-date-column">
						<input type="date" id="current-date" name="current-date" value="2023-10-04"
						       min="2023-10-04">
					</div>
					<div class="c-form-date-column">
						<select id="time" name="time">
							<option value="9:00">
								9:00
							</option>
							<option value="9:15">
								9:15
							</option>
							<option value="9:30">
								9:30
							</option>
							<option value="9:45">
								9:45
							</option>
							<option value="10:00">
								10:00
							</option>
							<option value="10:15">
								10:15
							</option>
							<option value="10:30">
								10:30
							</option>
							<option value="10:45">
								10:45
							</option>
							<option value="11:00">
								11:00
							</option>
							<option value="11:15">
								11:15
							</option>
							<option value="11:30">
								11:30
							</option>
							<option value="11:45">
								11:45
							</option>
							<option value="12:00">
								12:00
							</option>
							<option value="12:15">
								12:15
							</option>
							<option value="12:30">
								12:30
							</option>
							<option value="12:45">
								12:45
							</option>
							<option value="13:00">
								13:00
							</option>
							<option value="13:15">
								13:15
							</option>
							<option value="13:30">
								13:30
							</option>
							<option value="13:45">
								13:45
							</option>
							<option value="14:00">
								14:00
							</option>
							<option value="14:15">
								14:15
							</option>
							<option value="14:30">
								14:30
							</option>
							<option value="14:45">
								14:45
							</option>
							<option value="15:00">
								15:00
							</option>
							<option value="15:15">
								15:15
							</option>
							<option value="15:30">
								15:30
							</option>
							<option value="15:45">
								15:45
							</option>
							<option value="16:00">
								16:00
							</option>
							<option value="16:15">
								16:15
							</option>
							<option value="16:30">
								16:30
							</option>
							<option value="16:45">
								16:45
							</option>
							<option value="17:00">
								17:00
							</option>
							<option value="17:15">
								17:15
							</option>
							<option value="17:30">
								17:30
							</option>
							<option value="17:45">
								17:45
							</option>
							<option value="18:00">
								18:00
							</option>
						</select></div>
				</div>
			</li>
		</ul>
		<button id="form-id-submit" type="submit" class="button-default">Отправить</button>
		<div class="c-form-policy">
			<p>
				Нажимая на кнопку «Отправить», Вы даете согласие на обработку своих персональных данных.
				<br><a href="privacy-policy/index.html"><i class="icon icon-lock"></i>Политика
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
      let inputFields = document.querySelectorAll('#form-id input[type="tel"]');
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
            $("#form-id").find('input[type="text"], input[type="phone"], textarea').val('');
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
      $('#form-id input').on('input', function () {
        const Form = $('#form-id').parsley();
      });
      // 2
      $('#form-id-submit').on('click', function (event) {
        const Form = $('#form-id').parsley();
        if (Form.isValid()) {
          formSubmitHandler(event)
        }
      })

      function formSubmitHandler(event) {
        event.preventDefault();
        $(document).find('.main-modal .is-close').trigger('click');
        const formNode = document.getElementById('form-id');
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