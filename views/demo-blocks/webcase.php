<style>

  .sections-flow{
      display: flex;
      flex-direction: column;
      gap: 64px;
  }

  .section-container{
      max-width: 1260px;
      margin-inline: auto;
      padding: 0 1rem;
  }

  .section-header{
      padding-bottom: 36px;
  }

  .section-title{
      font-size: 30px;
      text-align: center;
      font-weight: 300;
      line-height: 1.2;
  }

  .section-subtitle{
      font-size: 24px;
      text-align: center;
      font-weight: 400;
      line-height: 1.9;
      max-width: 100%;
  }

  .section-body{
      padding-bottom: 28px;
  }

  .section-footer{
      text-align: center;
      padding-bottom: 28px;
  }

  .section-button{
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #000000;
      border-radius: 6px;
      text-decoration: none;
      padding: 11px 33px;
      color: #000;
      font-size: 16px;
  }

  .webinars{
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 25px;
      max-width: 1090px;
      margin-inline: auto;
      margin-block: 0;
  }

  .webinar-column{
      border: 2px solid #EDEDED;
      border-radius: 20px;
      padding: 19px 19px 36px;
      display: flex;
      flex-direction: column;
      gap: 52px;
      margin-inline: auto;
      transition: background-color 0.3s;
  }
  .webinar-column:hover{
      background-color: #F0F8FC;
  }

  .webinar-column-header{
      background-color: #F0F8FC;
      border-radius: 100px;
      padding: 8px 5px;
  }

  .webinar-column-title{
      font-weight: 400;
      font-size: 25px;
      text-align: center;
      line-height: 1;
      letter-spacing: -0.4px;
  }

  .webinar-column-list{
      display: flex;
      flex-direction: column;
      gap: 40px;
  }

  .webinar-card,
  .webinar-card:hover{
      text-decoration: none;
  }

  .webinar-card-figure{
      display: flex;
      flex-direction: column;
      gap: 20px;
      text-align: center;
  }

  .webinar-card-figure img{
      width: 100%;
      aspect-ratio: 100 / 55;
      object-fit: cover;
      object-position: center;
      border-radius: 8px;
      /*box-shadow: 0 0 10px 0 rgba(0,0,0,0.25);*/
      transform: scale(1.1);
      transition: box-shadow 0.3s;
  }

  .webinar-card:hover .webinar-card-figure img{
      /*box-shadow: 0 0 15px 0 rgba(0,0,0,0.5);*/
  }

  .webinar-card-caption{
      color: #7D7D7D;
      font-size: 13px;
      line-height: 20px;
      letter-spacing: -0.2px;
      height: 64px;
      overflow: hidden;
  }

  .cases{
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 25px;
      max-width: 1090px;
      margin-inline: auto;
      margin-block: 0;
  }

  .cases-card{
      max-width: 320px;
      margin-inline: auto;
      height: 100%;
      background-color: #F0F8FC;
      border-radius: 20px;
      padding: 30px 19px 36px;
      display: grid;
      grid-template-rows: 60px auto auto 1fr auto;
      grid-gap: 20px;
      justify-items: center;
      text-align: center;
      transition: background-color 0.3s;
  }

  .cases-card-image{
      align-self: center;
  }

  .cases-card-image img{
      max-height: 53px;
      max-width: 210px;
      object-fit: contain;
      object-position: center;
  }

  .cases-card-amount{
      border-radius: 100px;
      max-width: 210px;
      background-color: #fff;
      padding: 5px 10px;
      width: 100%;

  }

  .cases-card-employees{
      display: flex;
      align-items: center;

  }

  .icon-employee{
      width: 24px;
      height: 24px;
      margin: -10px 7px -6px 0;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='%23C6C6C6' d='M12 12q-1.65 0-2.825-1.175T8 8t1.175-2.825T12 4t2.825 1.175T16 8t-1.175 2.825T12 12m-8 8v-2.8q0-.85.438-1.562T5.6 14.55q1.55-.775 3.15-1.162T12 13t3.25.388t3.15 1.162q.725.375 1.163 1.088T20 17.2V20z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center center;
  }

  .cases-card-growth{
      align-self: baseline;
      padding-top: 43px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
  }

  .cases-card-growth strong{
      font-size: 40px;
      font-weight: 700;
      line-height: 1.7;
  }

  .cases-card-footer a{
      text-decoration: none;
      color: #AEAEAE;
      display: flex;
      align-items: center;
      font-weight: 500;
  }

  .cases-card-footer a .icon-arrow{
      width: 24px;
      height: 24px;
      margin: -10px 0 -6px 5px;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='%23AEAEAE' d='M16.175 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.175l-4.9-4.9q-.3-.3-.288-.7t.313-.7q.3-.275.7-.288t.7.288l6.6 6.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-6.6 6.6q-.275.275-.687.275T11.3 19.3q-.3-.3-.3-.712t.3-.713z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center center;
  }

  .call-to-action{
      background-color: #EFF3F6;
      border-radius: 20px;
      display: grid;
      grid-template-columns: 92px 1fr auto;
      align-items: center;
      padding: 22px 36px;
      grid-gap: 48px;
      max-width: 1090px;
      margin-inline: auto;
  }

  .call-to-action-employee{
      display: flex;
      flex-direction: column;
      gap: 10px
  }

  .call-to-action-employee strong{
      font-size: 24px;
      font-weight: 500;
      line-height: 1;
  }
  
  .call-to-action-link{
      background-color: #57BC20;
      color: #fff;
      text-decoration: none;
      padding: 12px 35px;
      font-weight: 500;
      border-radius: 8px;
      display: inline-flex;
  }

  @media (max-width: 992px) {
      .call-to-action{
          grid-template-columns: 92px 1fr;
          grid-template-rows: auto auto;
          align-items: center;
          padding: 16px 24px;
          grid-gap: 20px;
      }
      .call-to-action-button{
          grid-column: 2 / 3;
          grid-row: 2 / 3;
      }
  }



</style>
<div class="sections-flow">
  <section class="section">
    <div class="section-container">
      <div class="section-header">
        <h2 class="section-title">Вебинары</h2>
      </div>
      <div class="section-body">
        <ul class="webinars">
          <!-- HR-опыт -->
          <li class="webinars-item">
            <div class="webinar-column">
              <div class="webinar-column-header">
                <h3 class="webinar-column-title">HR-опыт</h3>
              </div>
              <ul class="webinar-column-list">
                <li class="webinar-column-item">
                  <a class="webinar-card lightbox" data-fancybox="video-gallery"  href="https://vimeo.com/914775685">
                    <figure class="webinar-card-figure">
                      <img src="/static/images/webcase/1-1.png" alt="" class="webinar-card-image">
                      <figcaption class="webinar-card-caption">
                        PR на максимум: как провести блестящий PR перед опросом и вовлечь максимум сотрудников. Кейс Черкизово.
                      </figcaption>
                    </figure>
                  </a>
                </li>
                <li class="webinar-column-item">
                  <a class="webinar-card lightbox" data-fancybox="video-gallery"  href="https://vimeo.com/925013715">
                    <figure class="webinar-card-figure">
                      <img src="/static/images/webcase/1-2.png" alt="" class="webinar-card-image">
                      <figcaption class="webinar-card-caption">
                        СИБУР: Держи руку на пульсе! Непрерывное управление вовлеченностью.
                      </figcaption>
                    </figure>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <!-- /HR-опыт -->
          <!-- Экспертиза Happy Job -->
          <li class="webinars-item">
            <div class="webinar-column">
              <div class="webinar-column-header">
                <h3 class="webinar-column-title">Экспертиза Happy Job</h3>
              </div>
              <ul class="webinar-column-list">
                <li class="webinar-column-item">
                  <a class="webinar-card lightbox" data-fancybox="video-gallery"  href="https://vimeo.com/905589716">
                    <figure class="webinar-card-figure">
                      <img src="/static/images/webcase/2-1.png" alt="" class="webinar-card-image">
                      <figcaption class="webinar-card-caption">
                        Как HR и руководителям привлекать и удерживать специалистов в 2024
                      </figcaption>
                    </figure>
                  </a>
                </li>
                <li class="webinar-column-item">
                  <a class="webinar-card lightbox" data-fancybox="video-gallery"  href="https://vimeo.com/864400546">
                    <figure class="webinar-card-figure">
                      <img src="/static/images/webcase/2-2.png" alt="" class="webinar-card-image">
                      <figcaption class="webinar-card-caption">
                        HR-бенчмаркинг 2024: тренды и механизмы работы с бенчмарками
                      </figcaption>
                    </figure>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <!-- /Экспертиза Happy Job -->
          <!-- О платформе -->
          <li class="webinars-item">
            <div class="webinar-column">
              <div class="webinar-column-header">
                <h3 class="webinar-column-title">О платформе</h3>
              </div>
              <ul class="webinar-column-list">
                <li class="webinar-column-item">
                  <a class="webinar-card lightbox" data-fancybox="video-gallery"  href="https://vimeo.com/646129647">
                    <figure class="webinar-card-figure">
                      <img src="/static/images/webcase/3-1.png" alt="" class="webinar-card-image">
                      <figcaption class="webinar-card-caption">
                        Елена Блинова о платформе Happy Job
                      </figcaption>
                    </figure>
                  </a>
                </li>
                <li class="webinar-column-item">
                  <a class="webinar-card lightbox" data-fancybox="video-gallery"  href="https://vimeo.com/565569986/2fffe8e814">
                    <figure class="webinar-card-figure">
                      <img src="/static/images/webcase/3-2.png" alt="" class="webinar-card-image">
                      <figcaption class="webinar-card-caption">
                        Этапы запуска проекта и клиентская поддержка исследования Happy Job
                      </figcaption>
                    </figure>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <!-- /О платформе -->
        </ul>
      </div>
      <div class="section-footer">
        <a href="/video" class="section-button">Смотреть все</a>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="section-container">
      <div class="section-header">
        <h2 class="section-title">Кейсы клиентов</h2>
      </div>
      <div class="section-body">
        <ul class="cases">
          <!-- Магнит -->
          <li class="cases-item">
            <div class="cases-card">
              <div class="cases-card-image">
                <img src="/static/images/webcase/magnit-logo.png" alt="">
              </div>
              <div class="cases-card-amount">
                <strong>4 года</strong> с Happy Job
              </div>
              <div class="cases-card-employees">
                <b class="icon-employee"></b> 360 000 сотрудников
              </div>
              <div class="cases-card-growth">
                <span>рост eNPS</span>
                <strong>+19,9%</strong>
              </div>
              <div class="cases-card-footer">
                <a href="/hr-blog/praktika-razvitiya-enps-opyt-magnit/">Подробнее <b class="icon-arrow"></b></a>
              </div>
            </div>
          </li>
          <!-- /Магнит -->
          <!-- Ростелеком -->
          <li class="cases-item">
            <div class="cases-card">
              <div class="cases-card-image">
                <img src="/img/p/clients/clients-logo/rostelekom2.svg" width="300" height="78" alt="">
              </div>
              <div class="cases-card-amount">
                <strong>5 лет</strong> с Happy Job
              </div>
              <div class="cases-card-employees">
                <b class="icon-employee"></b> 120 000 сотрудников
              </div>
              <div class="cases-card-growth">
                <span>рост выручки и производительности <br><b>за счет развития eNPS</b></span>
                <strong>+13%</strong>
              </div>
              <div class="cases-card-footer">
                <a href="">Подробнее <b class="icon-arrow"></b></a>
              </div>
            </div>
          </li>
          <!-- /Ростелеком -->
          <!-- Ростелеком -->
          <li class="cases-item">
            <div class="cases-card">
              <div class="cases-card-image">
                <img src="/static/images/webcase/technonikol.png" alt="">
              </div>
              <div class="cases-card-amount">
                <strong>5 лет</strong> с Happy Job
              </div>
              <div class="cases-card-employees">
                <b class="icon-employee"></b> 1 700 сотрудников
              </div>
              <div class="cases-card-growth">
                <span>снижение уровня текучести</span>
                <strong>-50%</strong>
              </div>
              <div class="cases-card-footer">
                <a href="/hr-blog/Eto-rabotaet--kak-my-snizili-tekuchest-kadrov-na-19-8---razvivaya-vovlechennost-personala/">Подробнее <b class="icon-arrow"></b></a>
              </div>
            </div>
          </li>
          <!-- /Ростелеком -->
        </ul>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="section-container">
      <div class="section-header">
        <h2 class="section-title">Хотите добиться таких же результатов?</h2>
        <p class="section-subtitle">Запланируйте онлайн-встречу с нашим менеджером</p>
      </div>
      <div class="section-body">
        <div class="call-to-action">
          <img src="/static/images/webcase/employee.png" alt="">
          <p class="call-to-action-employee">
            <strong>Анастасия Любятинская</strong>
            <span>руководитель отдела продаж</span>
          </p>
          <div class="call-to-action-button">
            <a class="call-to-action-link" data-fancybox data-src="#main-modal">Запланировать встречу</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

