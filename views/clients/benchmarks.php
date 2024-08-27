<?php $this->title = 'Клиенты и бенчмарки по отраслям | Happy Job'; ?>
<style>
    .join-button .button-default {
        padding: 0.6rem 1rem;
        background-color: var(--c-link) !important;
        border-bottom: #55a635;
        font-size: 1rem;
        line-height: 1.2;
        box-shadow: 0 5px 0 #55a635;
        transition: background-color 0.3s;
    }
</style>
<div class="container">
    <div class="row justify-content-md-center text-center">
        <div class="col-12">
            <div class="main-content">
                <h2 style="margin-bottom: -1rem;">Список <b style="font-weight: 700;">800+</b> клиентов по отраслям</h2>
                <p style="font-size: 1.4rem;" class="list-description">Крупнейшая и «<a href="/real-benchmarks/">настоящая</a>»
                                                                       база HR-бенчмарков в России и СНГ.</p>
                <p>Постоянство Клиентов 98%</p>

                <div class="join-button">
                    <a class="button-default" data-button-text="Присоединиться к своей отрасли" data-fancybox=""
                       data-src="#main-modal" href="javascript:;"
                       onclick="ym(46152993,'reachGoal','mainpage_click_button')">
                        Присоединиться к своей отрасли
                    </a>
                </div>

                <section class="clients-filter-wrapper">
                    <ul class="clients-filter">
                        <li class="clients-filter-item">
                            <a href="#" data-filter="*" class="current all">Компании России</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".government" class="government">Государственные компании</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".agroprom" class="agroprom">АПК</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".banks-top" class="banks-top">Банки топ 10</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".bank" class="bank">Банки и фин. услуги</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".develop" class="develop">Девелопмент и строительство</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".eCommerce" class="eCommerce">eCommerce</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".education" class="education">ED Tech и образование</a>
                        </li>
                    </ul>
                    <ul class="clients-filter">
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".it" class="it">IT</a>
                        </li>

                        <li class="clients-filter-item">
                            <a href="#" data-filter=".it-10" class="it-10">IT топ 10</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".it-500" class="it-500">IT до 500 чел.</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".it-1000" class="it-1000">IT от 500 до 1000 чел.</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".it-5000" class="it-5000">IT от 1000 до 5000 чел.</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".it-max" class="it-max">IT от 5000 чел.</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".leasing" class="leasing">Лизинговые компании</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".logist" class="logist">Логистика и транспорт</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".transportation" class="transportation">Авиа и ж/д перевозки</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".media" class="media">Медиа и реклама</a>
                        </li>
                    </ul>
                    <ul class="clients-filter">
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".metal" class="metal">Металлургия</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".oil" class="oil">Нефть. Газ. Энергетика</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".company" class="company">Производственные компании</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".food_production" class="food_production">Производство еды</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".build" class="build">Производство стройматериалов</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".service" class="service">Профессиональные услуги</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".auto" class="auto">Retail авто</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".moda" class="moda">Retail одежда и мода</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".electronica" class="electronica">Retail электроника</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".food" class="food">Retail food</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".nofood" class="nofood">Retail non food</a>
                        </li>
                    </ul>
                    <ul class="clients-filter">
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".sber" class="sber">Сбер Экосистема</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".insurance" class="insurance">Страховые компании</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".telekom" class="telekom">Телеком</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".fmcg" class="fmcg">FMCG</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".farm" class="farm">Фарм. и медиц. компании</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".horeca" class="horeca">HoReCa</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".hotels" class="hotels">Отели</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".other" class="other">Другие</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".kazakhstan" class="kazakhstan">Компании Казахстана</a>
                        </li>
                        <li class="clients-filter-item">
                            <a href="#" data-filter=".sng" class="sng">СНГ</a>
                        </li>
                    </ul>
                </section>

                <section class="clients-filter-mobile">
                    <p>Выбрать отрасль</p>
                    <select id="clients-filter-select" class="clients-filter-select">
                        <option value="all">Компании России</option>
                        <option value="government">Гос. компании</option>
                        <option value="agroprom">АПК</option>
                        <optgroup label="Банки">
                            <option value="banks-top">Банки топ 10</option>
                            <option value="bank">Банки и фин. услуги</option>
                        </optgroup>
                        <option value="develop">Девелопмент и строительство</option>
                        <option value="eCommerce">eCommerce</option>
                        <option value="education">ED Tech и образование</option>
                        <optgroup label="IT">
                            <option value="it">IT</option>
                            <option value="it-10">IT топ 10</option>
                            <option value="it-500">IT до 500</option>
                            <option value="it-1000">IT от 500 до 1000</option>
                            <option value="it-5000">IT от 1000 до 5000</option>
                            <option value="it-max">IT от 5000</option>
                        </optgroup>
                        <option value="leasing">Лизинговые компании</option>
                        <option value="logist">Логистика и транспорт</option>
                        <option value="transportation">Авиа и ж/д перевозки</option>
                        <option value="media">Медиа и реклама</option>
                        <option value="metal">Металлургия</option>
                        <option value="oil">Нефть. Газ. Энергетика</option>
                        <optgroup label="Производство">
                            <option value="company">Производственные компании</option>
                            <option value="food_production">Производство еды</option>
                            <option value="build">Производство стройматериалов</option>
                        </optgroup>
                        <option value="service">Профессиональные услуги</option>
                        <optgroup label="Retail">
                            <option value="auto">Retail авто</option>
                            <option value="moda">Retail одежда и мода</option>
                            <option value="electronica">Retail электроника</option>
                            <option value="food">Retail food</option>
                            <option value="nofood">Retail non food</option>
                        </optgroup>
                        <option value="sber">Сбер Экосистема</option>
                        <option value="insurance">Страховые компании</option>
                        <option value="telekom">Телеком</option>
                        <option value="fmcg">FMCG</option>
                        <option value="farm">Фарм. и медиц. компании</option>
                        <option value="horeca">HoReCa</option>
                        <option value="hotels">Отели</option>
                        <option value="other">Другие</option>
                        <option value="kazakhstan">Компании Казахстана</option>
                        <option value="sng">СНГ</option>
                    </select>
                </section>

                <script src="/jquery/niceSelect/jquery.nice-select.min.js"></script>

                <script>
                    $(document).ready(function () {
                        $(".clients-filter-select option").each(function (index, element) {
                            let category = $(this).attr("value");
                            if (category !== "all") {
                                let num = $(".clients-container ." + category).length;
                                let template = $(this).html() + " (" + num + ")";
                                $(this).html(template);
                            } else {
                            }
                        });
                        $('[data-filter="*"]').text("Компании России");
                        $("#clients-filter-select").niceSelect();
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center text-center">
        <div class="col-md-12 clients-col">
            <div class="main-content">
                <div class="clients-container">

                    <div class="clients-item  insurance" id="client1">
                        <img src="/img/p/clients/clients-logo/sogaz.svg" alt="СОГАЗ" title="СОГАЗ" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortinsurance">0</span>
                    </div>
                    <div class="clients-item  insurance" id="client2">
                        <img src="/img/p/clients/clients-logo/vsk_logo_0_12.png" alt="ВСК" title="ВСК" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortinsurance">1</span>
                    </div>
                    <div class="clients-item  insurance" id="client3">
                        <img src="/img/p/clients/clients-logo/logo_alfastrah.png" alt="АО «Альфа Страхование»"
                             title="АО «Альфа Страхование»" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortinsurance">2</span>
                    </div>
                    <div class="clients-item  insurance" id="client5">
                        <img src="/img/p/clients/clients-logo/soglasie.svg" alt="СК " title="СК " class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortinsurance">3</span>
                    </div>
                    <div class="clients-item  insurance" id="client7">
                        <img src="/img/p/clients/clients-logo/zetta.png" alt="ZETTA" title="ZETTA" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortinsurance">4</span>
                    </div>
                    <div class="clients-item  insurance" id="client8">
                        <img src="/img/p/clients/clients-logo/renesans.jpg" alt="Ренессанс Жизнь"
                             title="Ренессанс Жизнь" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortinsurance">5</span>
                    </div>
                    <div class="clients-item  insurance" id="client9">
                        <img src="/img/p/clients/clients-logo/absolute.png" alt="Абсолют Страхование"
                             title="Абсолют Страхование" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortinsurance">6</span>
                    </div>
                    <div class="clients-item  agroprom company food_production" id="client10">
                        <img src="/img/p/clients/clients-logo/rusagro.png" alt="Русагро" title="Русагро"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortagroprom">1</span><span style="display: none"
                                                                                       class="sortcompany">0</span><span
                                style="display: none" class="sortfood_production">10</span>
                    </div>
                    <div class="clients-item  company build" id="client11">
                        <img src="/img/p/clients/clients-logo/segezha-group.png" alt="Сегежа Групп" title="Сегежа Групп"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">1</span><span style="display: none"
                                                                                      class="sortbuild">0</span>
                    </div>
                    <div class="clients-item  company fmcg" id="client12">
                        <img src="/img/p/clients/clients-logo/splat_0.png" alt="SPLAT" title="SPLAT" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">2</span><span style="display: none"
                                                                                      class="sortfmcg">0</span>
                    </div>
                    <div class="clients-item  company" id="client13">
                        <img src="/img/p/clients/clients-logo/himprom.jpg" alt="ХИМПРОМ" title="ХИМПРОМ"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">3</span>
                    </div>
                    <div class="clients-item  agroprom company" id="client14">
                        <img src="/img/p/clients/clients-logo/agroinvest.svg" alt="Агроинвест" title="Агроинвест"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortagroprom">3</span><span style="display: none"
                                                                                       class="sortcompany">4</span>
                    </div>
                    <div class="clients-item  company build" id="client15">
                        <img src="/img/p/clients/clients-logo/lafargeholcim2.svg" alt="LafargeHolcim"
                             title="LafargeHolcim" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">5</span><span style="display: none"
                                                                                      class="sortbuild">1</span>
                    </div>
                    <div class="clients-item  company build nofood" id="client16">
                        <img src="/img/p/clients/clients-logo/technonikol.png" alt="ТЕХНОНИКОЛЬ" title="ТЕХНОНИКОЛЬ"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">6</span><span style="display: none"
                                                                                      class="sortbuild">2</span><span
                                style="display: none" class="sortnofood">9</span>
                    </div>
                    <div class="clients-item  farm company" id="client17">
                        <img src="/img/p/clients/clients-logo/valenta_vert.jpg" alt="Валента Фарм" title="Валента Фарм"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">0</span><span style="display: none"
                                                                                   class="sortcompany">7</span>
                    </div>
                    <div class="clients-item  company" id="client18">
                        <img src="/img/p/clients/clients-logo/kamalo.png" alt="ООО «Кама»" title="ООО «Кама»"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">8</span>
                    </div>
                    <div class="clients-item  company" id="client19">
                        <img src="/img/p/clients/clients-logo/yokohama.jpg" alt="Yokohama" title="Yokohama"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">9</span>
                    </div>
                    <div class="clients-item  metal company" id="client20">
                        <img src="/img/p/clients/clients-logo/ctpz.svg" alt="ЧТПЗ" title="ЧТПЗ" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortmetal">0</span><span style="display: none"
                                                                                    class="sortcompany">10</span>
                    </div>
                    <div class="clients-item  company fmcg" id="client21">
                        <img src="/img/p/clients/clients-logo/faberlic-original.png" alt="Faberlic" title="Faberlic"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">11</span><span style="display: none"
                                                                                       class="sortfmcg">1</span>
                    </div>
                    <div class="clients-item  company agroprom" id="client22">
                        <img src="/img/p/clients/clients-logo/avgust.png" alt="Август" title="Август" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">12</span><span style="display: none"
                                                                                       class="sortagroprom">4</span>
                    </div>
                    <div class="clients-item  company sng" id="client23">
                        <img src="/img/p/clients/clients-logo/unitsky2.png" alt="UST" title="UST" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">13</span><span style="display: none"
                                                                                       class="sortsng">11</span>
                    </div>
                    <div class="clients-item  nofood company" id="client24">
                        <img src="/img/p/clients/clients-logo/skl.gif" alt="SKL group" title="SKL group"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">15</span><span style="display: none"
                                                                                      class="sortcompany">14</span>
                    </div>
                    <div class="clients-item  company build" id="client25">
                        <img src="/img/p/clients/clients-logo/bergauf.svg" alt="Bergauf" title="Bergauf"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">15</span><span style="display: none"
                                                                                       class="sortbuild">3</span>
                    </div>
                    <div class="clients-item  company" id="client26">
                        <img src="/img/p/clients/clients-logo/wesmir.svg" alt="Весь мир" title="Весь мир"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">16</span>
                    </div>
                    <div class="clients-item  farm company" id="client28">
                        <img src="/img/p/clients/clients-logo/star-smile.png" alt="Star Smile" title="Star Smile"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">1</span><span style="display: none"
                                                                                   class="sortcompany">54</span>
                    </div>
                    <div class="clients-item  company" id="client29">
                        <img src="/img/p/clients/clients-logo/rakurs.png" alt="Ракурс-инжиниринг"
                             title="Ракурс-инжиниринг" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">17</span>
                    </div>
                    <div class="clients-item  company build" id="client30">
                        <img src="/img/p/clients/clients-logo/kckeramik.png" alt="Кирово-Чепецкий кирпичный завод"
                             title="Кирово-Чепецкий кирпичный завод" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">18</span><span style="display: none"
                                                                                       class="sortbuild">4</span>
                    </div>
                    <div class="clients-item  company" id="client31">
                        <img src="/img/p/clients/clients-logo/sds.svg" alt="Сибирский деловой союз"
                             title="Сибирский деловой союз" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">19</span>
                    </div>
                    <div class="clients-item  moda eCommerce retail nofood" id="client32">
                        <img src="/img/p/clients/clients-logo/sport.jpg" alt="СПОРТМАСТЕР" title="СПОРТМАСТЕР"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmoda">0</span><span style="display: none"
                                                                                   class="sorteCommerce">0</span><span
                                style="display: none" class="sortretail">0</span><span style="display: none"
                                                                                       class="sortnofood">0</span>
                    </div>
                    <div class="clients-item  eCommerce it-max it nofood" id="client33">
                        <img src="/img/p/clients/clients-logo/ozon.png" alt="OZON" title="OZON" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorteCommerce">1</span><span style="display: none"
                                                                                        class="sortit-max">1</span><span
                                style="display: none" class="sortit">3</span><span style="display: none"
                                                                                   class="sortnofood">1</span>
                    </div>
                    <div class="clients-item  moda nofood" id="client34">
                        <img src="/img/p/clients/clients-logo/childs_world.png" alt="ДЕТСКИЙ МИР" title="ДЕТСКИЙ МИР"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmoda">1</span><span style="display: none"
                                                                                   class="sortnofood">3</span>
                    </div>
                    <div class="clients-item  nofood electronica" id="client35">
                        <img src="/img/p/clients/clients-logo/citilink.svg" alt="Мерлион (Ситилинк)"
                             title="Мерлион (Ситилинк)" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">4</span><span style="display: none"
                                                                                     class="sortelectronica">1</span>
                    </div>
                    <div class="clients-item  nofood build" id="client36">
                        <img src="/img/p/clients/clients-logo/obi.svg" alt="OBI" title="OBI" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortnofood">5</span><span style="display: none"
                                                                                     class="sortbuild">10</span>
                    </div>
                    <div class="clients-item  nofood eCommerce" id="client37">
                        <img src="/img/p/clients/clients-logo/inventive2.png" alt="Inventive Retail Group"
                             title="Inventive Retail Group" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">6</span><span style="display: none"
                                                                                     class="sorteCommerce">2</span>
                    </div>
                    <div class="clients-item  moda nofood" id="client38">
                        <img src="/img/p/clients/clients-logo/snowqueen2.png" alt="Снежная королева"
                             title="Снежная королева" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmoda">2</span><span style="display: none"
                                                                                   class="sortnofood">7</span>
                    </div>
                    <div class="clients-item  nofood auto it-500 it" id="client39">
                        <img src="/img/p/clients/clients-logo/avilon3.png" alt="Авилон Авто" title="Авилон Авто"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">8</span><span style="display: none"
                                                                                     class="sortauto">0</span><span
                                style="display: none" class="sortit-500">0</span><span style="display: none"
                                                                                       class="sortit">29</span>
                    </div>
                    <div class="clients-item  nofood auto" id="client40">
                        <img src="/img/p/clients/clients-logo/maximum_auto.svg" alt="Максимум" title="Максимум"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">10</span><span style="display: none"
                                                                                      class="sortauto">1</span>
                    </div>
                    <div class="clients-item  nofood auto" id="client41">
                        <img src="/img/p/clients/clients-logo/autoretail2.png" alt="Авторитэйл" title="Авторитэйл"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">11</span><span style="display: none"
                                                                                      class="sortauto">2</span>
                    </div>
                    <div class="clients-item  nofood it-1000 it" id="client42">
                        <img src="/img/p/clients/clients-logo/luis.png" alt="Луис +" title="Луис +" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortnofood">12</span><span style="display: none"
                                                                                      class="sortit-1000">0</span><span
                                style="display: none" class="sortit">16</span>
                    </div>
                    <div class="clients-item  moda nofood" id="client43">
                        <img src="/img/p/clients/clients-logo/12storeez.png" alt="12 Storeez" title="12 Storeez"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmoda">3</span><span style="display: none"
                                                                                   class="sortnofood">13</span>
                    </div>
                    <div class="clients-item  nofood" id="client44">
                        <img src="/img/p/clients/clients-logo/loksitan.svg" alt="Л'Окситан" title="Л'Окситан"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">14</span>
                    </div>
                    <div class="clients-item  it it-5000 eCommerce sber" id="client45">
                        <img src="/img/p/clients/clients-logo/sbermarket.svg" alt="СберМаркет" title="СберМаркет"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">23</span><span style="display: none"
                                                                                  class="sortit-5000">0</span><span
                                style="display: none" class="sorteCommerce">3</span><span style="display: none"
                                                                                          class="sortsber">0</span>
                    </div>
                    <div class="clients-item  nofood" id="client46">
                        <img src="/img/p/clients/clients-logo/lada-image.png" alt="Лада-Имидж" title="Лада-Имидж"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">16</span>
                    </div>
                    <div class="clients-item  nofood" id="client47">
                        <img src="/img/p/clients/clients-logo/pandora.svg" alt="Pandora" title="Pandora"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">17</span>
                    </div>
                    <div class="clients-item  nofood auto sng" id="client48">
                        <img src="/img/p/clients/clients-logo/avtoidea.jpg" alt="Автоидея" title="Автоидея"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">18</span><span style="display: none"
                                                                                      class="sortauto">3</span><span
                                style="display: none" class="sortsng">8</span>
                    </div>
                    <div class="clients-item  food food_production" id="client49">
                        <img src="/img/p/clients/clients-logo/magnit.svg" alt="Магнит" title="Магнит" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfood">0</span><span style="display: none"
                                                                                   class="sortfood_production">0</span>
                    </div>
                    <div class="clients-item  food food_production" id="client50">
                        <img src="/img/p/clients/clients-logo/dixi.svg" alt="Дикси" title="Дикси" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfood">1</span><span style="display: none"
                                                                                   class="sortfood_production">11</span>
                    </div>
                    <div class="clients-item  food" id="client51">
                        <img src="/img/p/clients/clients-logo/x5_new.png" alt="X5" title="X5" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfood">2</span>
                    </div>
                    <div class="clients-item  food food_production" id="client52">
                        <img src="/img/p/clients/clients-logo/Pyaterochka_2020.svg" alt="Пятёрочка" title="Пятёрочка"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfood">3</span><span style="display: none"
                                                                                   class="sortfood_production">13</span>
                    </div>
                    <div class="clients-item  food food_production" id="client53">
                        <img src="/img/p/clients/clients-logo/perekrestok.svg" alt="Перекрёсток" title="Перекрёсток"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfood">4</span><span style="display: none"
                                                                                   class="sortfood_production">14</span>
                    </div>
                    <div class="clients-item  food food_production" id="client54">
                        <img src="/img/p/clients/clients-logo/azbuka-vkusa.png" alt="Азбука Вкуса" title="Азбука Вкуса"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfood">6</span><span style="display: none"
                                                                                   class="sortfood_production">6</span>
                    </div>
                    <div class="clients-item  food food_production" id="client55">
                        <img src="/img/p/clients/clients-logo/partner-komandor.jpg" alt="Командор" title="Командор"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfood">7</span><span style="display: none"
                                                                                   class="sortfood_production">15</span>
                    </div>
                    <div class="clients-item  food" id="client56">
                        <img src="/img/p/clients/clients-logo/spar.svg" alt="SPAR" title="SPAR" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfood">8</span>
                    </div>
                    <div class="clients-item  food food_production" id="client57">
                        <img src="/img/p/clients/clients-logo/krasniy-yar.png" alt="Красный Яр" title="Красный Яр"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfood">9</span><span style="display: none"
                                                                                   class="sortfood_production">8</span>
                    </div>
                    <div class="clients-item  eCommerce food" id="client58">
                        <img src="/img/p/clients/clients-logo/vprok.png" alt="Перекресток Впрок"
                             title="Перекресток Впрок" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteCommerce">4</span><span style="display: none"
                                                                                        class="sortfood">10</span>
                    </div>
                    <div class="clients-item  food food_production" id="client59">
                        <img src="/img/p/clients/clients-logo/slata.png" alt="Слата" title="Слата" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfood">11</span><span style="display: none"
                                                                                    class="sortfood_production">9</span>
                    </div>
                    <div class="clients-item  it" id="client60">
                        <img src="/img/p/clients/clients-logo/mail-logo.png" alt="Mail.ru Group" title="Mail.ru Group"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">0</span>
                    </div>
                    <div class="clients-item  it-max it-10 it" id="client61">
                        <img src="/img/p/clients/clients-logo/lanit.jpg" alt="Ланит" title="Ланит" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit-max">2</span><span style="display: none"
                                                                                     class="sortit-10">1</span><span
                                style="display: none" class="sortit">1</span>
                    </div>
                    <div class="clients-item  government telekom it it-max it-10" id="client62">
                        <img src="/img/p/clients/clients-logo/rostelekom2.svg" alt="Ростелеком" title="Ростелеком"
                             style="transform: translateY(-7px);" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">10</span><span style="display: none"
                                                                                          class="sorttelekom">0</span><span
                                style="display: none" class="sortit">2</span><span style="display: none"
                                                                                   class="sortit-max">5</span><span
                                style="display: none" class="sortit-10">4</span>
                    </div>
                    <div class="clients-item  eCommerce telekom electronica nofood" id="client63">
                        <img src="/img/p/clients/clients-logo/beeline.jpg" alt="Билайн" title="Билайн" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorteCommerce">5</span><span style="display: none"
                                                                                        class="sorttelekom">2</span><span
                                style="display: none" class="sortelectronica">2</span><span style="display: none"
                                                                                            class="sortnofood">19</span>
                    </div>
                    <div class="clients-item  eCommerce it it-5000 education" id="client64">
                        <img src="/img/p/clients/clients-logo/skyeng-3.svg" alt="Skyeng" title="Skyeng" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorteCommerce">6</span><span style="display: none"
                                                                                        class="sortit">4</span><span
                                style="display: none" class="sortit-5000">1</span><span style="display: none"
                                                                                        class="sorteducation">0</span>
                    </div>
                    <div class="clients-item  it-5000 it-10 it" id="client65">
                        <img src="/img/p/clients/clients-logo/softline.svg" alt="Softline" title="Softline"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-5000">2</span><span style="display: none"
                                                                                      class="sortit-10">2</span><span
                                style="display: none" class="sortit">5</span>
                    </div>
                    <div class="clients-item  logist it-5000 it" id="client66">
                        <img src="/img/p/clients/clients-logo/x5_new.png" alt="X5 БЕ Технологии"
                             title="X5 БЕ Технологии" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortlogist">1</span><span style="display: none"
                                                                                     class="sortit-5000">3</span><span
                                style="display: none" class="sortit">6</span>
                    </div>
                    <div class="clients-item  it-5000 it" id="client68">
                        <img src="/img/p/clients/clients-logo/otr.png" alt="ОТР" title="ОТР" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit-5000">4</span><span style="display: none"
                                                                                      class="sortit">7</span>
                    </div>
                    <div class="clients-item  it-5000 it-10 it" id="client69">
                        <img src="/img/p/clients/clients-logo/ocsdistributon.png" alt="OCS" title="OCS" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit-5000">5</span><span style="display: none"
                                                                                      class="sortit-10">3</span><span
                                style="display: none" class="sortit">8</span>
                    </div>
                    <div class="clients-item  eCommerce it" id="client71">
                        <img src="/img/p/clients/clients-logo/yandex_market.png" alt="Яндекс Маркет"
                             title="Яндекс Маркет" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteCommerce">7</span><span style="display: none"
                                                                                        class="sortit">9</span>
                    </div>
                    <div class="clients-item  it-5000 it" id="client72">
                        <img src="/img/p/clients/clients-logo/indriver.png" alt="inDriver" title="inDriver"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-5000">6</span><span style="display: none"
                                                                                      class="sortit">10</span>
                    </div>
                    <div class="clients-item  eCommerce it-5000 it" id="client74">
                        <img src="/img/p/clients/clients-logo/header_logo_0.png" alt="Lamoda" title="Lamoda"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteCommerce">8</span><span style="display: none"
                                                                                        class="sortit-5000">7</span><span
                                style="display: none" class="sortit">11</span>
                    </div>
                    <div class="clients-item  it" id="client75">
                        <img src="/img/p/clients/clients-logo/rostelekom-it.png" alt="Ростелеком ИТ"
                             title="Ростелеком ИТ" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">12</span>
                    </div>
                    <div class="clients-item  it-5000 it" id="client76">
                        <img src="/img/p/clients/clients-logo/gwinec.png" alt="АО ГНИВЦ" title="АО ГНИВЦ"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-5000">8</span><span style="display: none"
                                                                                      class="sortit">13</span>
                    </div>
                    <div class="clients-item  it-5000 it sber" id="client77">
                        <img src="/img/p/clients/clients-logo/cloud.ru.svg" alt="SberCloud" title="SberCloud"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-5000">9</span><span style="display: none"
                                                                                      class="sortit">14</span><span
                                style="display: none" class="sortsber">2</span>
                    </div>
                    <div class="clients-item  it-1000 it" id="client78">
                        <img src="/img/p/clients/clients-logo/rostelekom-solar.svg" alt="Ростелеком Солар"
                             title="Ростелеком Солар" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-1000">1</span><span style="display: none"
                                                                                      class="sortit">15</span>
                    </div>
                    <div class="clients-item  it-5000 it" id="client79">
                        <img src="/img/p/clients/clients-logo/simbirsoft.png" alt="SimbirSoft" title="SimbirSoft"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-5000">11</span><span style="display: none"
                                                                                       class="sortit">17</span>
                    </div>
                    <div class="clients-item  it-1000 it" id="client80">
                        <img src="/img/p/clients/clients-logo/nspk2.png" alt="НСПК" title="НСПК" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit-1000">2</span><span style="display: none"
                                                                                      class="sortit">18</span>
                    </div>
                    <div class="clients-item  eCommerce it it-1000" id="client81">
                        <img src="/img/p/clients/clients-logo/ali.png" alt="Алиэкспресс" title="Алиэкспресс"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteCommerce">9</span><span style="display: none"
                                                                                        class="sortit">19</span><span
                                style="display: none" class="sortit-1000">15</span>
                    </div>
                    <div class="clients-item  it-1000 sber it" id="client83">
                        <img src="/img/p/clients/clients-logo/delivery2.png" alt="Delivery Club" title="Delivery Club"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-1000">3</span><span style="display: none"
                                                                                      class="sortsber">3</span><span
                                style="display: none" class="sortit">21</span>
                    </div>
                    <div class="clients-item  eCommerce it-1000 it" id="client84">
                        <img src="/img/p/clients/clients-logo/merlion.svg" alt="Мерлион (ИТ)" title="Мерлион (ИТ)"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteCommerce">10</span><span style="display: none"
                                                                                         class="sortit-1000">4</span><span
                                style="display: none" class="sortit">22</span>
                    </div>
                    <div class="clients-item  it-1000 it" id="client85">
                        <img src="/img/p/clients/clients-logo/m2logo.svg" alt="Метр квадратный" title="Метр квадратный"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-1000">17</span><span style="display: none"
                                                                                       class="sortit">24</span>
                    </div>
                    <div class="clients-item  it-1000 it" id="client86">
                        <img src="/img/p/clients/clients-logo/krok.png" alt="КРОК" title="КРОК" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit-1000">5</span><span style="display: none"
                                                                                      class="sortit">25</span>
                    </div>
                    <div class="clients-item  it-1000 it" id="client87">
                        <img src="/img/p/clients/clients-logo/myoffice.png" alt="Мой офис" title="Мой офис"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-1000">6</span><span style="display: none"
                                                                                      class="sortit">26</span>
                    </div>
                    <div class="clients-item  telekom it-500 it" id="client88">
                        <img src="/img/p/clients/clients-logo/obit.jpg" alt="ОБИТ" title="ОБИТ" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorttelekom">4</span><span style="display: none"
                                                                                      class="sortit-500">1</span><span
                                style="display: none" class="sortit">27</span>
                    </div>
                    <div class="clients-item  it-1000 it" id="client89">
                        <img src="/img/p/clients/clients-logo/3logicgroup.png" alt="3Logic Group" title="3Logic Group"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-1000">21</span><span style="display: none"
                                                                                       class="sortit">28</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client90">
                        <img src="/img/p/clients/clients-logo/foodplex.svg" alt="FoodPlex" title="FoodPlex"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">2</span><span style="display: none"
                                                                                     class="sortit">30</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client91">
                        <img src="/img/p/clients/clients-logo/vividmoney.png" alt="Vivid Money" title="Vivid Money"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">3</span><span style="display: none"
                                                                                     class="sortit">31</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client92">
                        <img src="/img/p/clients/clients-logo/datsteam2.png" alt="Dats.Team" title="Dats.Team"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">4</span><span style="display: none"
                                                                                     class="sortit">32</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client93">
                        <img src="/img/p/clients/clients-logo/axoft.png" alt="Axoft" title="Axoft" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit-500">5</span><span style="display: none"
                                                                                     class="sortit">33</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client94">
                        <img src="/img/p/clients/clients-logo/docrobot.svg" alt="Docrobot" title="Docrobot"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">6</span><span style="display: none"
                                                                                     class="sortit">34</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client95">
                        <img src="/img/p/clients/clients-logo/soft-wise.svg" alt="Softwise" title="Softwise"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">7</span><span style="display: none"
                                                                                     class="sortit">35</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client97">
                        <img src="/img/p/clients/clients-logo/mvsgrup.svg" alt="MVS Group" title="MVS Group"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">8</span><span style="display: none"
                                                                                     class="sortit">36</span>
                    </div>
                    <div class="clients-item  it it-500" id="client98">
                        <img src="/img/p/clients/clients-logo/atisu.svg" alt="ati.su" title="ati.su" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">37</span><span style="display: none"
                                                                                  class="sortit-500">9</span>
                    </div>
                    <div class="clients-item  kazakhstan it-500 it sng" id="client99">
                        <img src="/img/p/clients/clients-logo/bts_digital.svg" alt="BTS DIgital" title="BTS DIgital"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortkazakhstan">0</span><span style="display: none"
                                                                                         class="sortit-500">10</span><span
                                style="display: none" class="sortit">38</span><span style="display: none"
                                                                                    class="sortsng">0</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client100">
                        <img src="/img/p/clients/clients-logo/pixonic.svg" alt="Pixonic" title="Pixonic"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">11</span><span style="display: none"
                                                                                      class="sortit">39</span>
                    </div>
                    <div class="clients-item  education it-500 it" id="client101">
                        <img src="/img/p/clients/clients-logo/geekbrains.svg" alt="GeekBrains" title="GeekBrains"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteducation">1</span><span style="display: none"
                                                                                        class="sortit-500">12</span><span
                                style="display: none" class="sortit">40</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client102">
                        <img src="/img/p/clients/clients-logo/competent.png" alt="Competentum" title="Competentum"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">13</span><span style="display: none"
                                                                                      class="sortit">41</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client103">
                        <img src="/img/p/clients/clients-logo/comitas.svg" alt="Comitas" title="Comitas"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">14</span><span style="display: none"
                                                                                      class="sortit">42</span>
                    </div>
                    <div class="clients-item  telekom" id="client104">
                        <img src="/img/p/clients/clients-logo/novyye-bashni.png" alt="Новые башни" title="Новые башни"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttelekom">5</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client105">
                        <img src="/img/p/clients/clients-logo/nvision.png" alt="NVision CZ" title="NVision CZ"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">15</span><span style="display: none"
                                                                                      class="sortit">43</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client106">
                        <img src="/img/p/clients/clients-logo/virtuozzo.png" alt="Virtuozzo" title="Virtuozzo"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">16</span><span style="display: none"
                                                                                      class="sortit">44</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client107">
                        <img src="/img/p/clients/clients-logo/eset.png" alt="ESET" title="ESET" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit-500">17</span><span style="display: none"
                                                                                      class="sortit">45</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client108">
                        <img src="/img/p/clients/clients-logo/ppr.svg" alt="Программный продукт"
                             title="Программный продукт" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">18</span><span style="display: none"
                                                                                      class="sortit">46</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client109">
                        <img src="/img/p/clients/clients-logo/flant.png" alt="Флант" title="Флант" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit-500">19</span><span style="display: none"
                                                                                      class="sortit">49</span>
                    </div>
                    <div class="clients-item  it" id="client110">
                        <img src="/img/p/clients/clients-logo/szb-logo.svg" alt="Сберзвук бизнес"
                             title="Сберзвук бизнес" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">50</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client111">
                        <img src="/img/p/clients/clients-logo/customcard.png" alt="Таможенная карта"
                             title="Таможенная карта" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">20</span><span style="display: none"
                                                                                      class="sortit">51</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client112">
                        <img src="/img/p/clients/clients-logo/fin-logo.png" alt="Ассоциация ФИНТЕХ"
                             title="Ассоциация ФИНТЕХ" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">21</span><span style="display: none"
                                                                                      class="sortit">52</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client113">
                        <img src="/img/p/clients/clients-logo/iss.png" alt="ISS" title="ISS" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit-500">22</span><span style="display: none"
                                                                                      class="sortit">53</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client114">
                        <img src="/img/p/clients/clients-logo/aerodisk.png" alt="АЭРОДИСК" title="АЭРОДИСК"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">23</span><span style="display: none"
                                                                                      class="sortit">54</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client115">
                        <img src="/img/p/clients/clients-logo/hotger.png" alt="Hotger" title="Hotger" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit-500">24</span><span style="display: none"
                                                                                      class="sortit">55</span>
                    </div>
                    <div class="clients-item  government bank banks-top" id="client116">
                        <img src="/img/p/clients/clients-logo/vtb.png" alt="ВТБ" title="ВТБ" style="margin: 0 auto"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">2</span><span style="display: none"
                                                                                         class="sortbank">0</span><span
                                style="display: none" class="sortbanks-top">0</span>
                    </div>
                    <div class="clients-item  bank banks-top" id="client117">
                        <img src="/img/p/clients/clients-logo/alfa.png" alt="Альфа-Банк" title="Альфа-Банк"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">1</span><span style="display: none"
                                                                                   class="sortbanks-top">1</span>
                    </div>
                    <div class="clients-item  bank banks-top" id="client118">
                        <img src="/img/p/clients/clients-logo/logo_gazprombank.png" alt="Газпромбанк"
                             title="Газпромбанк" style="max-height: 30px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">2</span><span style="display: none"
                                                                                   class="sortbanks-top">2</span>
                    </div>
                    <div class="clients-item  bank banks-top" id="client119">
                        <img src="/img/p/clients/clients-logo/otkritie.png" alt="Открытие" title="Открытие"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">3</span><span style="display: none"
                                                                                   class="sortbanks-top">3</span>
                    </div>
                    <div class="clients-item  government bank banks-top" id="client120">
                        <img src="/img/p/clients/clients-logo/rosselhosbank.png" alt="Россельхзбанк"
                             title="Россельхзбанк" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">9</span><span style="display: none"
                                                                                         class="sortbank">4</span><span
                                style="display: none" class="sortbanks-top">4</span>
                    </div>
                    <div class="clients-item  government bank banks-top" id="client121">
                        <img src="/img/p/clients/clients-logo/psb_logo.png" alt="ПСБ" title="ПСБ"
                             style="max-height: 40px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">12</span><span style="display: none"
                                                                                          class="sortbank">5</span><span
                                style="display: none" class="sortbanks-top">5</span>
                    </div>
                    <div class="clients-item  bank banks-top" id="client122">
                        <img src="/img/p/clients/clients-logo/mkb.png" alt="mkb" title="mkb" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortbank">7</span><span style="display: none"
                                                                                   class="sortbanks-top">6</span>
                    </div>
                    <div class="clients-item  bank banks-top" id="client70">
                        <img src="/img/p/clients/clients-logo/mosbir.png" alt="Мосбиржа" title="Мосбиржа"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">8</span><span style="display: none"
                                                                                   class="sortbanks-top">7</span>
                    </div>
                    <div class="clients-item  bank it-5000" id="client123">
                        <img src="/img/p/clients/clients-logo/logo-mts-bank.png" alt="МТС БАНК" title="МТС БАНК"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">10</span><span style="display: none"
                                                                                    class="sortit-5000">15</span>
                    </div>
                    <div class="clients-item  bank" id="client124">
                        <img src="/img/p/clients/clients-logo/uralsib.svg" alt="Уралсиб" title="Уралсиб"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">9</span>
                    </div>
                    <div class="clients-item  bank" id="client126">
                        <img src="/img/p/clients/clients-logo/inbank.svg" alt="Инбанк" title="Инбанк" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortbank">11</span>
                    </div>
                    <div class="clients-item  service leasing" id="client127">
                        <img src="/img/p/clients/clients-logo/zao-region-lizing.jpg" alt="Регион" title="Регион"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">9</span><span style="display: none"
                                                                                      class="sortleasing">2</span>
                    </div>
                    <div class="clients-item  bank" id="client128">
                        <img src="/img/p/clients/clients-logo/expobank.svg" alt="Экспобанк" title="Экспобанк"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">12</span>
                    </div>
                    <div class="clients-item  bank" id="client129">
                        <img src="/img/p/clients/clients-logo/atb.png" alt="ATB" title="ATB" style="max-width: 120px"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">13</span>
                    </div>
                    <div class="clients-item  bank sng" id="client130">
                        <img src="/img/p/clients/clients-logo/idbank.png" alt="IDbank" title="IDbank" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortbank">14</span><span style="display: none"
                                                                                    class="sortsng">9</span>
                    </div>
                    <div class="clients-item  bank" id="client132">
                        <img src="/img/p/clients/clients-logo/sbi-bank.png" alt="SBI Bank" title="SBI Bank"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">15</span>
                    </div>
                    <div class="clients-item  bank" id="client133">
                        <img src="/img/p/clients/clients-logo/blanc.svg" alt="Бланк Банк" title="Бланк Банк"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">16</span>
                    </div>
                    <div class="clients-item  leasing" id="client134">
                        <img src="/img/p/clients/clients-logo/alfalizing.png" alt="Альфа-лизинг" title="Альфа-лизинг"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortleasing">1</span>
                    </div>
                    <div class="clients-item  leasing" id="client135">
                        <img src="/img/p/clients/clients-logo/baltlease.png" alt="Балтийский лизинг"
                             title="Балтийский лизинг" style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortleasing">5</span>
                    </div>
                    <div class="clients-item  bank" id="client136">
                        <img src="/img/p/clients/clients-logo/equifax.png" alt="Эквифакс" title="Эквифакс"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">17</span>
                    </div>
                    <div class="clients-item  leasing" id="client137">
                        <img src="/img/p/clients/clients-logo/logo-2.png" alt="Европлан" title="Европлан"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortleasing">0</span>
                    </div>
                    <div class="clients-item  develop" id="client138">
                        <img src="/img/p/clients/clients-logo/1dsk-1.jpg" alt="1dsk" title="1dsk" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortdevelop">6</span>
                    </div>
                    <div class="clients-item  logist transportation" id="client139">
                        <img src="/img/p/clients/clients-logo/1gruz.png" alt="1gruz" title="1gruz" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortlogist">3</span><span style="display: none"
                                                                                     class="sorttransportation">1</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client140">
                        <img src="/img/p/clients/clients-logo/media/22.png" alt="2x2" title="2x2" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorttv">0</span><span style="display: none"
                                                                                 class="sortrpt">0</span><span
                                style="display: none" class="sortmedia">2</span>
                    </div>
                    <div class="clients-item  nofood" id="client141">
                        <img src="/img/p/clients/clients-logo/4lapy.svg" alt="4лапы" title="4лапы" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortnofood">20</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client142">
                        <img src="/img/p/clients/clients-logo/5kanal.svg" alt="5 канал" title="5 канал" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorttv">1</span><span style="display: none"
                                                                                 class="sortrpt">1</span><span
                                style="display: none" class="sortmedia">3</span>
                    </div>
                    <div class="clients-item  pressa rpt media" id="client143">
                        <img src="/img/p/clients/clients-logo/media/7days.png" alt="7 дней" title="7 дней"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortpressa">0</span><span style="display: none"
                                                                                     class="sortrpt">2</span><span
                                style="display: none" class="sortmedia">4</span>
                    </div>
                    <div class="clients-item  pressa rpt media" id="client144">
                        <img src="/img/p/clients/clients-logo/media/7daysru.png" alt="7 дней RU" title="7 дней RU"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortpressa">1</span><span style="display: none"
                                                                                     class="sortrpt">3</span><span
                                style="display: none" class="sortmedia">5</span>
                    </div>
                    <div class="clients-item  develop" id="client145">
                        <img src="/img/p/clients/clients-logo/large_a101_logo.png" alt="A101" title="A101"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">7</span>
                    </div>
                    <div class="clients-item  farm" id="client146">
                        <img src="/img/p/clients/clients-logo/twitter-card_1.png" alt="Acino" title="Acino"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">2</span>
                    </div>
                    <div class="clients-item  develop" id="client147">
                        <img src="/img/p/clients/clients-logo/adggroup.svg" alt="ADG Group" title="ADG Group"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">8</span>
                    </div>
                    <div class="clients-item  fmcg" id="client148">
                        <img src="/img/p/clients/clients-logo/ahmad.png" alt="Ahmad Tea" title="Ahmad Tea"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfmcg">2</span>
                    </div>
                    <div class="clients-item  develop company build sng" id="client149">
                        <img src="/img/p/clients/clients-logo/akfa.png" alt="AKFA Group" title="AKFA Group"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">9</span><span style="display: none"
                                                                                      class="sortcompany">20</span><span
                                style="display: none" class="sortbuild">5</span><span style="display: none"
                                                                                      class="sortsng">10</span>
                    </div>
                    <div class="clients-item  company build " id="client150">
                        <img src="/img/p/clients/clients-logo/akkerman.png" alt="Akkerman" title="Akkerman"
                             style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">21</span><span style="display: none"
                                                                                       class="sortbuild">6</span>
                    </div>
                    <div class="clients-item  company metal " id="client151">
                        <img src="/img/p/clients/clients-logo/amp.png" alt="amrbk" title="amrbk" style="height: 100%"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">22</span><span style="display: none"
                                                                                       class="sortmetal">1</span>
                    </div>
                    <div class="clients-item  media" id="client152">
                        <img src="/img/p/clients/clients-logo/amedia.png" alt="Arrow Media" title="Arrow Media"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmedia">6</span>
                    </div>
                    <div class="clients-item  company develop" id="client153">
                        <img src="/img/p/clients/clients-logo/atomsk.jpg" alt="atomsk" title="atomsk" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">56</span><span style="display: none"
                                                                                       class="sortdevelop">10</span>
                    </div>
                    <div class="clients-item  service" id="client155">
                        <img src="/img/p/clients/clients-logo/voxys.svg" alt="Voxys" title="Voxys" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortservice">0</span>
                    </div>
                    <div class="clients-item  it-1000 it " id="client156">
                        <img src="/img/p/clients/clients-logo/garage-eight.png" alt="garage eight" title="garage eight"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-1000">7</span><span style="display: none"
                                                                                      class="sortit">56</span>
                    </div>
                    <div class="clients-item  it it-500 " id="client159">
                        <img src="/img/p/clients/clients-logo/brl.png" alt="brl" title="brl" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">57</span><span style="display: none"
                                                                                  class="sortit-500">25</span>
                    </div>
                    <div class="clients-item  farm" id="client160">
                        <img src="/img/p/clients/clients-logo/canon.jpg" alt="canon-farm" title="canon-farm"
                             style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">3</span>
                    </div>
                    <div class="clients-item  develop" id="client161">
                        <img src="/img/p/clients/clients-logo/capital-group.png" alt="capitalgroup" title="capitalgroup"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">11</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client162">
                        <img src="/img/p/clients/clients-logo/media/ComedyClub.png" alt="ComedyClub" title="ComedyClub"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttv">2</span><span style="display: none"
                                                                                 class="sortrpt">4</span><span
                                style="display: none" class="sortmedia">7</span>
                    </div>
                    <div class="clients-item  radio rpt media" id="client163">
                        <img src="/img/p/clients/clients-logo/media/comedyradio.png" alt="comedyradio"
                             title="comedyradio" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortradio">0</span><span style="display: none"
                                                                                    class="sortrpt">5</span><span
                                style="display: none" class="sortmedia">8</span>
                    </div>
                    <div class="clients-item  logist" id="client164">
                        <img src="/img/p/clients/clients-logo/corex.png" alt="corex" title="corex" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortlogist">4</span>
                    </div>
                    <div class="clients-item  media" id="client165">
                        <img src="/img/p/clients/clients-logo/cros.png" alt="cros" title="cros" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortmedia">9</span>
                    </div>
                    <div class="clients-item  it-500 it " id="client166">
                        <img src="/img/p/clients/clients-logo/sberzvuk.svg" alt="Сберзвук" title="Сберзвук"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">26</span><span style="display: none"
                                                                                      class="sortit">58</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client167">
                        <img src="/img/p/clients/clients-logo/ctcmedia.png" alt="CТС Медиа" title="CТС Медиа"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttv">3</span><span style="display: none"
                                                                                 class="sortrpt">6</span><span
                                style="display: none" class="sortmedia">10</span>
                    </div>
                    <div class="clients-item  electronica" id="client169">
                        <img src="/img/p/clients/clients-logo/dns.svg" alt="DNS" title="DNS" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortelectronica">3</span>
                    </div>
                    <div class="clients-item  develop" id="client170">
                        <img src="/img/p/clients/clients-logo/dns_development.jpeg" alt="DNS Девелопмент"
                             title="DNS Девелопмент" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">12</span>
                    </div>
                    <div class="clients-item  it-500 it " id="client171">
                        <img src="/img/p/clients/clients-logo/eapteka.svg" alt="Eapteka" title="Eapteka"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">27</span><span style="display: none"
                                                                                      class="sortit">59</span>
                    </div>
                    <div class="clients-item  media" id="client172">
                        <img src="/img/p/clients/clients-logo/easy-media.svg" alt="Easy-media" title="Easy-media"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmedia">11</span>
                    </div>
                    <div class="clients-item  nofood" id="client173">
                        <img src="/img/p/clients/clients-logo/ekonika.png" alt="ekonika" title="ekonika"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">21</span>
                    </div>
                    <div class="clients-item  farm" id="client174">
                        <img src="/img/p/clients/clients-logo/emc-investor.svg" alt="EMC" title="EMC" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfarm">4</span>
                    </div>
                    <div class="clients-item  service" id="client175">
                        <img src="/img/p/clients/clients-logo/images.png" alt="Equifax" title="Equifax" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortservice">1</span>
                    </div>
                    <div class="clients-item  other" id="client176">
                        <img src="/img/p/clients/clients-logo/exportcenter.png" alt="exportcenter" title="exportcenter"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortother">0</span>
                    </div>
                    <div class="clients-item  media" id="client178">
                        <img src="/img/p/clients/clients-logo/media/gazprommedia.png" alt="gazprommedia"
                             title="gazprommedia" style="padding: 0" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmedia">1</span>
                    </div>
                    <div class="clients-item  farm" id="client181">
                        <img src="/img/p/clients/clients-logo/generium.png" alt="Generium" title="Generium"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">5</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client183">
                        <img src="/img/p/clients/clients-logo/media/GoodStory.png" alt="Good Story" title="Good Story"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttv">4</span><span style="display: none"
                                                                                 class="sortrpt">7</span><span
                                style="display: none" class="sortmedia">12</span>
                    </div>
                    <div class="clients-item  media" id="client185">
                        <img src="/img/p/clients/clients-logo/group.png" alt="group" title="group" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortmedia">13</span>
                    </div>
                    <div class="clients-item  media" id="client186">
                        <img src="/img/p/clients/clients-logo/havas.jpg" alt="havas" title="havas" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortmedia">14</span>
                    </div>
                    <div class="clients-item  company metal" id="client187">
                        <img src="/img/p/clients/clients-logo/russdragmet.png" alt="russdragmet" title="russdragmet"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">23</span><span style="display: none"
                                                                                       class="sortmetal">4</span>
                    </div>
                    <div class="clients-item  it-1000 it " id="client190">
                        <img src="/img/p/clients/clients-logo/innostage.png" alt="Innostage" title="Innostage"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-1000">8</span><span style="display: none"
                                                                                      class="sortit">60</span>
                    </div>
                    <div class="clients-item  kazakhstan sng telekom" id="client193">
                        <img src="/img/p/clients/clients-logo/kcell.svg" alt="Kcell" title="Kcell" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortkazakhstan">1</span><span style="display: none"
                                                                                         class="sortsng">1</span><span
                                style="display: none" class="sorttelekom">7</span>
                    </div>
                    <div class="clients-item  develop" id="client195">
                        <img src="/img/p/clients/clients-logo/level-logo.svg" alt="Level" title="Level"
                             style="max-height: 55px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">3</span>
                    </div>
                    <div class="clients-item  it-500 it " id="client196">
                        <img src="/img/p/clients/clients-logo/lifepay.png" alt="LifePay" title="LifePay"
                             style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">28</span><span style="display: none"
                                                                                      class="sortit">61</span>
                    </div>
                    <div class="clients-item  radio rpt media" id="client197">
                        <img src="/img/p/clients/clients-logo/media/likefm.png" alt="likefm" title="likefm"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortradio">1</span><span style="display: none"
                                                                                    class="sortrpt">8</span><span
                                style="display: none" class="sortmedia">15</span>
                    </div>
                    <div class="clients-item  logist develop " id="client200">
                        <img src="/img/p/clients/clients-logo/mammut2.svg" alt="Mammoet" title="Mammoet"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortlogist">5</span><span style="display: none"
                                                                                     class="sortdevelop">13</span>
                    </div>
                    <div class="clients-item  kazakhstan sng fmcg" id="client201">
                        <img src="/img/p/clients/clients-logo/mareven-new.png" alt="mareven" title="mareven"
                             style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortkazakhstan">2</span><span style="display: none"
                                                                                         class="sortsng">2</span><span
                                style="display: none" class="sortfmcg">16</span>
                    </div>
                    <div class="clients-item  it-5000 it-10 it logist" id="client202">
                        <img src="/img/p/clients/clients-logo/fplus.png" alt="Fplus" title="Fplus" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit-5000">10</span><span style="display: none"
                                                                                       class="sortit-10">5</span><span
                                style="display: none" class="sortit">62</span><span style="display: none"
                                                                                    class="sortlogist">6</span>
                    </div>
                    <div class="clients-item  fmcg" id="client203">
                        <img src="/img/p/clients/clients-logo/maxxium.jpg" alt="maxxium" title="maxxium"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfmcg">3</span>
                    </div>
                    <div class="clients-item  electronica nofood " id="client205">
                        <img src="/img/p/clients/clients-logo/mvideo-eldorado.svg" alt="М.ВидеоЭльдорадо"
                             title="М.ВидеоЭльдорадо" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortelectronica">0</span><span style="display: none"
                                                                                          class="sortnofood">2</span>
                    </div>
                    <div class="clients-item  moda nofood " id="client206">
                        <img src="/img/p/clients/clients-logo/nike.png" alt="nike" title="nike" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortmoda">4</span><span style="display: none"
                                                                                   class="sortnofood">22</span>
                    </div>
                    <div class="clients-item  develop" id="client207">
                        <img src="/img/p/clients/clients-logo/novard.svg" alt="novard" title="novard" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortdevelop">5</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client208">
                        <img src="/img/p/clients/clients-logo/media/ntv-plus.png" alt="ntv-plus" title="ntv-plus"
                             style="padding: 0" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttv">5</span><span style="display: none"
                                                                                 class="sortrpt">9</span><span
                                style="display: none" class="sortmedia">16</span>
                    </div>
                    <div class="clients-item  company" id="client209">
                        <img src="/img/p/clients/clients-logo/onrg.svg" alt="onrg" title="onrg" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">24</span>
                    </div>
                    <div class="clients-item  develop horeca" id="client210">
                        <img src="/img/p/clients/clients-logo/orangegroup.svg" alt="Orange Group" title="Orange Group"
                             style="max-height: 55px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">14</span><span style="display: none"
                                                                                       class="sorthoreca">10</span>
                    </div>
                    <div class="clients-item  it-500 it " id="client211">
                        <img src="/img/p/clients/clients-logo/p2p.svg" alt="p2p" title="p2p" style="max-width: 120px"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">29</span><span style="display: none"
                                                                                      class="sortit">63</span>
                    </div>
                    <div class="clients-item  it it-1000 " id="client212">
                        <img src="/img/p/clients/clients-logo/petroplus-new.png" alt="Передовые Платежные Решения"
                             title="Передовые Платежные Решения" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">64</span><span style="display: none"
                                                                                  class="sortit-1000">9</span>
                    </div>
                    <div class="clients-item  kazakhstan sng" id="client213">
                        <img src="/img/p/clients/clients-logo/pg-kazakhstan.png" alt="PG Kazakhstan"
                             title="PG Kazakhstan" style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortkazakhstan">3</span><span style="display: none"
                                                                                         class="sortsng">3</span>
                    </div>
                    <div class="clients-item  farm" id="client214">
                        <img src="/img/p/clients/clients-logo/pharmstandart-logo.png" alt="pharmstandart"
                             title="pharmstandart" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">6</span>
                    </div>
                    <div class="clients-item  it-500 it " id="client215">
                        <img src="/img/p/clients/clients-logo/pixagon.svg" alt="Pixagon" title="Pixagon"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">30</span><span style="display: none"
                                                                                      class="sortit">65</span>
                    </div>
                    <div class="clients-item  it" id="client216">
                        <img src="/img/p/clients/clients-logo/media/premier2.png" alt="premier" title="premier"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">66</span>
                    </div>
                    <div class="clients-item  moda nofood " id="client217">
                        <img src="/img/p/clients/clients-logo/ralfringer.svg" alt="Ralf Ringer" title="Ralf Ringer"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmoda">5</span><span style="display: none"
                                                                                   class="sortnofood">23</span>
                    </div>
                    <div class="clients-item  service develop " id="client218">
                        <img src="/img/p/clients/clients-logo/realty4sale.svg" alt="realty4sale" title="realty4sale"
                             style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">2</span><span style="display: none"
                                                                                      class="sortdevelop">15</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client219">
                        <img src="/img/p/clients/clients-logo/media/red-media.png" alt="red-media" title="red-media"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttv">6</span><span style="display: none" class="sortrpt">10</span><span
                                style="display: none" class="sortmedia">17</span>
                    </div>
                    <div class="clients-item  it it-1000 " id="client220">
                        <img src="/img/p/clients/clients-logo/reg-ru.svg" alt="regru" title="regru" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">67</span><span style="display: none"
                                                                                  class="sortit-1000">16</span>
                    </div>
                    <div class="clients-item  radio rpt media" id="client221">
                        <img src="/img/p/clients/clients-logo/media/relaxfm.png" alt="relaxfm" title="relaxfm"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortradio">2</span><span style="display: none"
                                                                                    class="sortrpt">11</span><span
                                style="display: none" class="sortmedia">18</span>
                    </div>
                    <div class="clients-item  insurance" id="client222">
                        <img src="/img/p/clients/clients-logo/reso.png" alt="reso" title="reso" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortinsurance">7</span>
                    </div>
                    <div class="clients-item  electronica nofood " id="client223">
                        <img src="/img/p/clients/clients-logo/restore.png" alt="restore" title="restore"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortelectronica">4</span><span style="display: none"
                                                                                          class="sortnofood">24</span>
                    </div>
                    <div class="clients-item  other auto" id="client227">
                        <img src="/img/p/clients/clients-logo/rusbisness.jpg" alt="rusbisness" title="rusbisness"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortother">1</span><span style="display: none"
                                                                                    class="sortauto">6</span>
                    </div>
                    <div class="clients-item  transportation it" id="client229">
                        <img src="/img/p/clients/clients-logo/s7.svg" alt="S7" title="S7" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorttransportation">0</span><span style="display: none"
                                                                                             class="sortit">68</span>
                    </div>
                    <div class="clients-item  electronica nofood " id="client230">
                        <img src="/img/p/clients/clients-logo/svg-logo.png" alt="Samsung" title="Samsung"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortelectronica">5</span><span style="display: none"
                                                                                          class="sortnofood">25</span>
                    </div>
                    <div class="clients-item  farm kazakhstan sng" id="client231">
                        <img src="/img/p/clients/clients-logo/santo.svg" alt="Santo" title="Santo"
                             style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">7</span><span style="display: none"
                                                                                   class="sortkazakhstan">4</span><span
                                style="display: none" class="sortsng">4</span>
                    </div>
                    <div class="clients-item  sber" id="client232">
                        <img src="/img/p/clients/clients-logo/sberapteka.png" alt="Sber Eapteka" title="Sber Eapteka"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortsber">4</span>
                    </div>
                    <div class="clients-item  nofood" id="client233">
                        <img src="/img/p/clients/clients-logo/sb-kids.png" alt="sb-kids" title="sb-kids"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">26</span>
                    </div>
                    <div class="clients-item  it-1000 it " id="client234">
                        <img src="/img/p/clients/clients-logo/semrush_logo.png" alt="semrush" title="semrush"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-1000">10</span><span style="display: none"
                                                                                       class="sortit">69</span>
                    </div>
                    <div class="clients-item  farm" id="client235">
                        <img src="/img/p/clients/clients-logo/sens.png" alt="Sentiss" title="Sentiss" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfarm">8</span>
                    </div>
                    <div class="clients-item  it-1000 education it" id="client236">
                        <img src="/img/p/clients/clients-logo/skillbox.png" alt="SkillBox" title="SkillBox"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-1000">11</span><span style="display: none"
                                                                                       class="sorteducation">3</span><span
                                style="display: none" class="sortit">70</span>
                    </div>
                    <div class="clients-item  education" id="client237">
                        <img src="/img/p/clients/clients-logo/skolkovo.svg" alt="skolkovo" title="skolkovo"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteducation">4</span>
                    </div>
                    <div class="clients-item  nofood eCommerce company" id="client240">
                        <img src="/img/p/clients/clients-logo/sokolov_logo.jpg" alt="Sokolov" title="Sokolov"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">27</span><span style="display: none"
                                                                                      class="sorteCommerce">11</span><span
                                style="display: none" class="sortcompany">48</span>
                    </div>
                    <div class="clients-item  it-500 it " id="client242">
                        <img src="/img/p/clients/clients-logo/specpoint.svg" alt="specpoint" title="specpoint"
                             style="max-width: 130px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">31</span><span style="display: none"
                                                                                      class="sortit">71</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client243">
                        <img src="/img/p/clients/clients-logo/media/sportbox.png" alt="sportbox" title="sportbox"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttv">7</span><span style="display: none" class="sortrpt">12</span><span
                                style="display: none" class="sortmedia">19</span>
                    </div>
                    <div class="clients-item  company food_production " id="client244">
                        <img src="/img/p/clients/clients-logo/ssnab.png" alt="ssnab" title="ssnab" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">25</span><span style="display: none"
                                                                                       class="sortfood_production">1</span>
                    </div>
                    <div class="clients-item  moda nofood " id="client245">
                        <img src="/img/p/clients/clients-logo/street-beat-logo.jpg" alt="street-beat"
                             title="street-beat" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmoda">6</span><span style="display: none"
                                                                                   class="sortnofood">28</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client246">
                        <img src="/img/p/clients/clients-logo/media/super.png" alt="super" title="super"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttv">8</span><span style="display: none" class="sortrpt">13</span><span
                                style="display: none" class="sortmedia">20</span>
                    </div>
                    <div class="clients-item  it it-10 it-max" id="client247">
                        <img src="/img/p/clients/clients-logo/t1.png" alt="T1" title="T1" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">72</span><span style="display: none"
                                                                                  class="sortit-10">6</span><span
                                style="display: none" class="sortit-max">7</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client248">
                        <img src="/img/p/clients/clients-logo/media/tnt.png" alt="tnt" title="tnt" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorttv">9</span><span style="display: none" class="sortrpt">14</span><span
                                style="display: none" class="sortmedia">21</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client249">
                        <img src="/img/p/clients/clients-logo/media/tnt4.png" alt="tnt4" title="tnt4" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorttv">10</span><span style="display: none" class="sortrpt">15</span><span
                                style="display: none" class="sortmedia">22</span>
                    </div>
                    <div class="clients-item  media" id="client250">
                        <img src="/img/p/clients/clients-logo/total_view.png" alt="Total View" title="Total View"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmedia">23</span>
                    </div>
                    <div class="clients-item  oil" id="client251">
                        <img src="/img/p/clients/clients-logo/tplusgroup.png" alt="Tplusgroup" title="Tplusgroup"
                             style="max-width: 140px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortoil">2</span>
                    </div>
                    <div class="clients-item  transportation logist" id="client252">
                        <img src="/img/p/clients/clients-logo/trasko.png" alt="Trasko" title="Trasko" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorttransportation">5</span><span style="display: none"
                                                                                             class="sortlogist">7</span>
                    </div>
                    <div class="clients-item  it-500 it " id="client253">
                        <img src="/img/p/clients/clients-logo/travelline.png" alt="travelline" title="travelline"
                             style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">32</span><span style="display: none"
                                                                                      class="sortit">73</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client254">
                        <img src="/img/p/clients/clients-logo/media/tv3.png" alt="tv3" title="tv3" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorttv">11</span><span style="display: none" class="sortrpt">16</span><span
                                style="display: none" class="sortmedia">24</span>
                    </div>
                    <div class="clients-item  radio rpt media" id="client257">
                        <img src="/img/p/clients/clients-logo/media/umorfm.png" alt="umorfm" title="umorfm"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortradio">3</span><span style="display: none"
                                                                                    class="sortrpt">17</span><span
                                style="display: none" class="sortmedia">25</span>
                    </div>
                    <div class="clients-item  nofood" id="client258">
                        <img src="/img/p/clients/clients-logo/unode50.png" alt="UNO" title="UNO" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortnofood">29</span>
                    </div>
                    <div class="clients-item  it-max it it-10" id="client259">
                        <img src="/img/p/clients/clients-logo/vk.svg" alt="Vk" title="Vk" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit-max">4</span><span style="display: none"
                                                                                     class="sortit">74</span><span
                                style="display: none" class="sortit-10">0</span>
                    </div>
                    <div class="clients-item  food food_production" id="client260">
                        <img src="/img/p/clients/clients-logo/vkusvill.png" alt="vkusvill" title="vkusvill"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfood">5</span><span style="display: none"
                                                                                   class="sortfood_production">12</span>
                    </div>
                    <div class="clients-item  company" id="client261">
                        <img src="/img/p/clients/clients-logo/vzpp.png" alt="vzpp" title="vzpp" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">26</span>
                    </div>
                    <div class="clients-item  it-500 it" id="client262">
                        <img src="/img/p/clients/clients-logo/wanna-fashion.png" alt="Wanna Fashion"
                             title="Wanna Fashion" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">33</span><span style="display: none"
                                                                                      class="sortit">47</span>
                    </div>
                    <div class="clients-item  telekom" id="client263">
                        <img src="/img/p/clients/clients-logo/westcall.jpg" alt="westcall" title="westcall"
                             style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttelekom">6</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client264">
                        <img src="/img/p/clients/clients-logo/media/whitenight.png" alt="whitenight" title="whitenight"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttv">12</span><span style="display: none" class="sortrpt">18</span><span
                                style="display: none" class="sortmedia">26</span>
                    </div>
                    <div class="clients-item  service" id="client265">
                        <img src="/img/p/clients/clients-logo/worldclass.jpg" alt="World Class" title="World Class"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">3</span>
                    </div>
                    <div class="clients-item  it-500 it service" id="client266">
                        <img src="/img/p/clients/clients-logo/zarplata-ru.svg" alt="zarplata" title="zarplata"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">34</span><span style="display: none"
                                                                                      class="sortit">75</span><span
                                style="display: none" class="sortservice">10</span>
                    </div>
                    <div class="clients-item  develop" id="client267">
                        <img src="/img/p/clients/clients-logo/a100development.png" alt="А-100 девелопмент"
                             title="А-100 девелопмент" style="max-height: 50px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">16</span>
                    </div>
                    <div class="clients-item  it it-max eCommerce" id="client268">
                        <img src="/img/p/clients/clients-logo/avito.svg" alt="Авито" title="Авито" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">76</span><span style="display: none"
                                                                                  class="sortit-max">6</span><span
                                style="display: none" class="sorteCommerce">12</span>
                    </div>
                    <div class="clients-item  radio rpt media" id="client269">
                        <img src="/img/p/clients/clients-logo/media/autoradio.png" alt="Авторадио" title="Авторадио"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortradio">4</span><span style="display: none"
                                                                                    class="sortrpt">19</span><span
                                style="display: none" class="sortmedia">27</span>
                    </div>
                    <div class="clients-item  agroprom food_production" id="client270">
                        <img src="/img/p/clients/clients-logo/agropromkomplectaciya.png" alt="Агропромкомплектация"
                             title="Агропромкомплектация" style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortagroprom">5</span><span style="display: none"
                                                                                       class="sortfood_production">7</span>
                    </div>
                    <div class="clients-item  agroprom" id="client271">
                        <img src="/img/p/clients/clients-logo/agroterra.svg" alt="Агротерра" title="Агротерра"
                             style="max-width: 100px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortagroprom">6</span>
                    </div>
                    <div class="clients-item  media" id="client272">
                        <img src="/img/p/clients/clients-logo/adv_group2.jpg" alt="АДВ" title="АДВ"
                             style="max-height: 70px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmedia">28</span>
                    </div>
                    <div class="clients-item  it it-500 " id="client273">
                        <img src="/img/p/clients/clients-logo/i-tat.jpg" alt="Айтат" title="Айтат" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">77</span><span style="display: none"
                                                                                  class="sortit-500">35</span>
                    </div>
                    <div class="clients-item  horeca" id="client274">
                        <img src="/img/p/clients/clients-logo/academy.png" alt="Академия Кофе" title="Академия Кофе"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthoreca">4</span>
                    </div>
                    <div class="clients-item  food" id="client275">
                        <img src="/img/p/clients/clients-logo/alley-new.jpg" alt="Аллея" title="Аллея" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfood">12</span>
                    </div>
                    <div class="clients-item  develop" id="client276">
                        <img src="/img/p/clients/clients-logo/almacor.svg" alt="АльмакорГруп" title="АльмакорГруп"
                             style="max-height: 55px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">17</span>
                    </div>
                    <div class="clients-item  kazakhstan sng" id="client277">
                        <img src="/img/p/clients/clients-logo/alfabank-kazakhstan.png" alt="Альфа-Банк Казахстан"
                             title="Альфа-Банк Казахстан" style="max-height: 40px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortkazakhstan">5</span><span style="display: none"
                                                                                         class="sortsng">5</span>
                    </div>
                    <div class="clients-item  logist transportation" id="client280">
                        <img src="/img/p/clients/clients-logo/bts.png" alt="БалтТрансСервис" title="БалтТрансСервис"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortlogist">8</span><span style="display: none"
                                                                                     class="sorttransportation">3</span>
                    </div>
                    <div class="clients-item  it-500 it " id="client281">
                        <img src="/img/p/clients/clients-logo/banki-ru.svg" alt="Банки.ру" title="Банки.ру"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">36</span><span style="display: none"
                                                                                      class="sortit">78</span>
                    </div>
                    <div class="clients-item  agroprom fmcg food_production" id="client282">
                        <img src="/img/p/clients/clients-logo/belaya_dacha.svg" alt="Белая дача" title="Белая дача"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortagroprom">2</span><span style="display: none"
                                                                                       class="sortfmcg">4</span><span
                                style="display: none" class="sortfood_production">2</span>
                    </div>
                    <div class="clients-item  fmcg agroprom" id="client283">
                        <img src="/img/p/clients/clients-logo/gorki.jpg" alt="Ближние горки" title="Ближние горки"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfmcg">5</span><span style="display: none"
                                                                                   class="sortagroprom">7</span>
                    </div>
                    <div class="clients-item  develop" id="client284">
                        <img src="/img/p/clients/clients-logo/britanika.svg" alt="Британика" title="Британика"
                             style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">18</span>
                    </div>
                    <div class="clients-item  horeca food_production" id="client285">
                        <img src="/img/p/clients/clients-logo/burgerking.svg" alt="Бургер Кинг" title="Бургер Кинг"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthoreca">0</span><span style="display: none"
                                                                                     class="sortfood_production">16</span>
                    </div>
                    <div class="clients-item  fmcg" id="client286">
                        <img src="/img/p/clients/clients-logo/veld21.png" alt="Вельд-21" title="Вельд-21"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfmcg">6</span>
                    </div>
                    <div class="clients-item  government" id="client287">
                        <img src="/img/p/clients/clients-logo/vodokanal.jpg" alt="Водоканал" title="Водоканал"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">6</span>
                    </div>
                    <div class="clients-item  eCommerce nofood build" id="client289">
                        <img src="/img/p/clients/clients-logo/vseinstrumenti.png" alt="Все инструменты"
                             title="Все инструменты" style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteCommerce">13</span><span style="display: none"
                                                                                         class="sortnofood">30</span><span
                                style="display: none" class="sortbuild">11</span>
                    </div>
                    <div class="clients-item  oil" id="client290">
                        <img src="/img/p/clients/clients-logo/1210.jpg" alt="Газпром" title="Газпром" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortoil">3</span>
                    </div>
                    <div class="clients-item  develop" id="client291">
                        <img src="/img/p/clients/clients-logo/hals.png" alt="ГАЛС" title="ГАЛС" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortdevelop">2</span>
                    </div>
                    <div class="clients-item  company nofood " id="client292">
                        <img src="/img/p/clients/clients-logo/taipit.png" alt="ГК Тайпит" title="ГК Тайпит"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">27</span><span style="display: none"
                                                                                       class="sortnofood">31</span>
                    </div>
                    <div class="clients-item  develop" id="client293">
                        <img src="/img/p/clients/clients-logo/logo-fsk.svg" alt="ГК ФСК" title="ГК ФСК"
                             style="width: 100px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">19</span>
                    </div>
                    <div class="clients-item  develop" id="client294">
                        <img src="/img/p/clients/clients-logo/glavstrlogo.jpg" alt="Главстрой" title="Главстрой"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">4</span>
                    </div>
                    <div class="clients-item  radio rpt media" id="client295">
                        <img src="/img/p/clients/clients-logo/media/childradio.png" alt="Детское радио"
                             title="Детское радио" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortradio">5</span><span style="display: none"
                                                                                    class="sortrpt">20</span><span
                                style="display: none" class="sortmedia">29</span>
                    </div>
                    <div class="clients-item  fmcg " id="client296">
                        <img src="/img/p/clients/clients-logo/dmitrovskii.png" alt="Дмитрогорский продукт"
                             title="Дмитрогорский продукт" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfmcg">7</span>
                    </div>
                    <div class="clients-item  agroprom company" id="client297">
                        <img src="/img/p/clients/clients-logo/evrohim.svg" alt="Еврохим" title="Еврохим"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortagroprom">8</span><span style="display: none"
                                                                                       class="sortcompany">55</span>
                    </div>
                    <div class="clients-item  oil" id="client298">
                        <img src="/img/p/clients/clients-logo/zarubezneft.png" alt="Зарубежнефть" title="Зарубежнефть"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortoil">4</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client299">
                        <img src="/img/p/clients/clients-logo/igora.png" alt="Игора" title="Игора"
                             style="height: 35px; max-width: 100%; " class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">2</span><span style="display: none"
                                                                                     class="sorthoreca">7</span>
                    </div>
                    <div class="clients-item  pressa rpt media" id="client300">
                        <img src="/img/p/clients/clients-logo/iz.png" alt="Известия" title="Известия" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortpressa">2</span><span style="display: none"
                                                                                     class="sortrpt">21</span><span
                                style="display: none" class="sortmedia">30</span>
                    </div>
                    <div class="clients-item  develop" id="client301">
                        <img src="/img/p/clients/clients-logo/sminex.png" alt="Sminex-Интеко" title="Sminex-Интеко"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">20</span>
                    </div>
                    <div class="clients-item  government media" id="client303">
                        <img src="/img/p/clients/clients-logo/tass.jpg" alt="ИТАР-ТАСС" title="ИТАР-ТАСС"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">4</span><span style="display: none"
                                                                                         class="sortmedia">31</span>
                    </div>
                    <div class="clients-item  pressa rpt media" id="client304">
                        <img src="/img/p/clients/clients-logo/media/karavan.png" alt="Караван" title="Караван"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortpressa">3</span><span style="display: none"
                                                                                     class="sortrpt">22</span><span
                                style="display: none" class="sortmedia">32</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client305">
                        <img src="/img/p/clients/clients-logo/media/kit.png" alt="КИТ" title="КИТ" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorttv">13</span><span style="display: none" class="sortrpt">23</span><span
                                style="display: none" class="sortmedia">33</span>
                    </div>
                    <div class="clients-item  develop" id="client306">
                        <img src="/img/p/clients/clients-logo/kamastroiinvest.png" alt="Кмастройинвест"
                             title="Кмастройинвест" style="max-width: 130px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">21</span>
                    </div>
                    <div class="clients-item  develop" id="client307">
                        <img src="/img/p/clients/clients-logo/koldi.png" alt="КОЛДИ" title="КОЛДИ" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortdevelop">22</span>
                    </div>
                    <div class="clients-item  company nofood " id="client308">
                        <img src="/img/p/clients/clients-logo/mar21.svg" alt="Кухни Мария" title="Кухни Мария"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">28</span><span style="display: none"
                                                                                       class="sortnofood">32</span>
                    </div>
                    <div class="clients-item  farm" id="client309">
                        <img src="/img/p/clients/clients-logo/lancet.png" alt="Ланцет" title="Ланцет" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfarm">9</span>
                    </div>
                    <div class="clients-item  it other it-5000" id="client311">
                        <img src="/img/p/clients/clients-logo/ligastavok.svg" alt="Лига ставок" title="Лига ставок"
                             style="height: 100%" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">79</span><span style="display: none"
                                                                                  class="sortother">2</span><span
                                style="display: none" class="sortit-5000">13</span>
                    </div>
                    <div class="clients-item  develop" id="client312">
                        <img src="/img/p/clients/clients-logo/lider-invest.png" alt="Лидер Инвест" title="Лидер Инвест"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">23</span>
                    </div>
                    <div class="clients-item  company" id="client314">
                        <img src="/img/p/clients/clients-logo/loko.png" alt="ЛокоТех" title="ЛокоТех" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">29</span>
                    </div>
                    <div class="clients-item  transportation" id="client315">
                        <img src="/img/p/clients/clients-logo/vnukovo2.png" alt="МА Внуково" title="МА Внуково"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttransportation">4</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client316">
                        <img src="/img/p/clients/clients-logo/match-tv.png" alt="МАТЧ" title="МАТЧ" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorttv">14</span><span style="display: none" class="sortrpt">24</span><span
                                style="display: none" class="sortmedia">34</span>
                    </div>
                    <div class="clients-item  telekom electronica nofood" id="client317">
                        <img src="/img/p/clients/clients-logo/megafon.png" alt="Мегафон" title="Мегафон"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttelekom">3</span><span style="display: none"
                                                                                      class="sortelectronica">6</span><span
                                style="display: none" class="sortnofood">33</span>
                    </div>
                    <div class="clients-item  media" id="client318">
                        <img src="/img/p/clients/clients-logo/media1.png" alt="Медиа1" title="Медиа1" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortmedia">35</span>
                    </div>
                    <div class="clients-item  media" id="client319">
                        <img src="/img/p/clients/clients-logo/m-p.svg" alt="Михайлов и партнеры"
                             title="Михайлов и партнеры" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmedia">36</span>
                    </div>
                    <div class="clients-item  government oil" id="client320">
                        <img src="/img/p/clients/clients-logo/mosoblgas.png" alt="Мособлгаз" title="Мособлгаз"
                             style="transform: translateY(-12px);" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">5</span><span style="display: none"
                                                                                         class="sortoil">5</span>
                    </div>
                    <div class="clients-item  telekom it-max electronica nofood it" id="client321">
                        <img src="/img/p/clients/clients-logo/mts-new-logo.svg" alt="МТС" title="МТС"
                             style="max-height: 45px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttelekom">1</span><span style="display: none"
                                                                                      class="sortit-max">3</span><span
                                style="display: none" class="sortelectronica">7</span><span style="display: none"
                                                                                            class="sortnofood">34</span><span
                                style="display: none" class="sortit">80</span>
                    </div>
                    <div class="clients-item  " id="client322">
                        <img src="/img/p/clients/clients-logo/mts-rozn-1.png" alt="МТС розничная сеть"
                             title="МТС розничная сеть" class="lazyload" loading="lazy">

                    </div>
                    <div class="clients-item  it-500 it " id="client323">
                        <img src="/img/p/clients/clients-logo/multibonus.svg" alt="Мультибонус" title="Мультибонус"
                             style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">37</span><span style="display: none"
                                                                                      class="sortit">81</span>
                    </div>
                    <div class="clients-item  media" id="client324">
                        <img src="/img/p/clients/clients-logo/nmg.png" alt="Национальная Медиа Группа"
                             title="Национальная Медиа Группа" style="padding: 0" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmedia">0</span>
                    </div>
                    <div class="clients-item  media" id="client325">
                        <img src="/img/p/clients/clients-logo/nra.svg" alt="Национальный Рекламный Альянс"
                             title="Национальный Рекламный Альянс" style="padding: 0" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmedia">37</span>
                    </div>
                    <div class="clients-item  develop" id="client326">
                        <img src="/img/p/clients/clients-logo/neftehim.svg" alt="Нефтехим" title="Нефтехим"
                             style="max-width: 120px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">24</span>
                    </div>
                    <div class="clients-item  media it-5000" id="client328">
                        <img src="/img/p/clients/clients-logo/nsc.png" alt="Новая Сервисная Компания"
                             title="Новая Сервисная Компания" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmedia">38</span><span style="display: none"
                                                                                     class="sortit-5000">14</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client329">
                        <img src="/img/p/clients/clients-logo/media/ntv.png" alt="НТВ" title="НТВ" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorttv">15</span><span style="display: none" class="sortrpt">25</span><span
                                style="display: none" class="sortmedia">39</span>
                    </div>
                    <div class="clients-item  government agroprom" id="client331">
                        <img src="/img/p/clients/clients-logo/ozk2.png" alt="Объединенная зерновая компания"
                             title="Объединенная зерновая компания" style="max-height: 29px" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortgovernment">8</span><span style="display: none"
                                                                                         class="sortagroprom">9</span>
                    </div>
                    <div class="clients-item  sber other " id="client332">
                        <img src="/img/p/clients/clients-logo/OKB_Logo.png" alt="Обьединённое кредитное бюро"
                             title="Обьединённое кредитное бюро" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortsber">5</span><span style="display: none"
                                                                                   class="sortother">3</span>
                    </div>
                    <div class="clients-item  it-500 it " id="client333">
                        <img src="/img/p/clients/clients-logo/ok.png" alt="Одноклассники" title="Одноклассники"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">38</span><span style="display: none"
                                                                                      class="sortit">82</span>
                    </div>
                    <div class="clients-item  company fmcg food_production" id="client336">
                        <img src="/img/p/clients/clients-logo/orimi2.jpg" alt="Орими Трэйд" title="Орими Трэйд"
                             style="max-height: 55px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">30</span><span style="display: none"
                                                                                       class="sortfmcg">8</span><span
                                style="display: none" class="sortfood_production">18</span>
                    </div>
                    <div class="clients-item  company develop" id="client337">
                        <img src="/img/p/clients/clients-logo/oteko.png" alt="Отэко" title="Отэко" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">31</span><span style="display: none"
                                                                                       class="sortdevelop">25</span>
                    </div>
                    <div class="clients-item  pressa rpt media" id="client338">
                        <img src="/img/p/clients/clients-logo/pantv.svg" alt="Панорама ТВ" title="Панорама ТВ"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortpressa">4</span><span style="display: none"
                                                                                     class="sortrpt">26</span><span
                                style="display: none" class="sortmedia">40</span>
                    </div>
                    <div class="clients-item  nofood eCommerce build" id="client339">
                        <img src="/img/p/clients/clients-logo/petr.png" alt="Петрович" title="Петрович" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortnofood">35</span><span style="display: none"
                                                                                      class="sorteCommerce">14</span><span
                                style="display: none" class="sortbuild">7</span>
                    </div>
                    <div class="clients-item  company metal" id="client340">
                        <img src="/img/p/clients/clients-logo/petropavlovsk-logo-ru.png" alt="Петропавловск"
                             title="Петропавловск" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">32</span><span style="display: none"
                                                                                       class="sortmetal">2</span>
                    </div>
                    <div class="clients-item  fmcg food" id="client341">
                        <img src="/img/p/clients/clients-logo/piv-ko.png" alt="Пив&Ко" title="Пив&Ко" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfmcg">9</span><span style="display: none"
                                                                                   class="sortfood">17</span>
                    </div>
                    <div class="clients-item  eCommerce sber" id="client343">
                        <img src="/img/p/clients/clients-logo/prosv_new.svg" alt="Просвещение" title="Просвещение"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteCommerce">15</span><span style="display: none"
                                                                                         class="sortsber">6</span>
                    </div>
                    <div class="clients-item  logist transportation" id="client344">
                        <img src="/img/p/clients/clients-logo/logo11_350.jpg" alt="ПЭК" title="ПЭК"
                             style="max-height: 55px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortlogist">9</span><span style="display: none"
                                                                                     class="sorttransportation">2</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client345">
                        <img src="/img/p/clients/clients-logo/media/pitnicha.png" alt="Пятница" title="Пятница"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttv">16</span><span style="display: none" class="sortrpt">27</span><span
                                style="display: none" class="sortmedia">41</span>
                    </div>
                    <div class="clients-item  radio rpt media" id="client346">
                        <img src="/img/p/clients/clients-logo/media/Radio_Romantika.png" alt="Радио Романтика"
                             title="Радио Романтика" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortradio">6</span><span style="display: none"
                                                                                    class="sortrpt">28</span><span
                                style="display: none" class="sortmedia">42</span>
                    </div>
                    <div class="clients-item  radio rpt media" id="client347">
                        <img src="/img/p/clients/clients-logo/media/radioenergy.png" alt="Радио Энерджи"
                             title="Радио Энерджи" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortradio">7</span><span style="display: none"
                                                                                    class="sortrpt">29</span><span
                                style="display: none" class="sortmedia">43</span>
                    </div>
                    <div class="clients-item  radio rpt media" id="client348">
                        <img src="/img/p/clients/clients-logo/media/radioecho.png" alt="Радио ЭХО" title="Радио ЭХО"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortradio">8</span><span style="display: none"
                                                                                    class="sortrpt">30</span><span
                                style="display: none" class="sortmedia">44</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client349">
                        <img src="/img/p/clients/clients-logo/rentv.png" alt="Рен ТВ" title="Рен ТВ" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorttv">17</span><span style="display: none" class="sortrpt">31</span><span
                                style="display: none" class="sortmedia">45</span>
                    </div>
                    <div class="clients-item  government service" id="client353">
                        <img src="/img/p/clients/clients-logo/rst.jpeg" alt="РСТ" title="РСТ" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortgovernment">7</span><span style="display: none"
                                                                                         class="sortservice">4</span>
                    </div>
                    <div class="clients-item  company fmcg " id="client354">
                        <img src="/img/p/clients/clients-logo/russtandard.jpg" alt="Русский Стандарт"
                             title="Русский Стандарт" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">33</span><span style="display: none"
                                                                                       class="sortfmcg">10</span>
                    </div>
                    <div class="clients-item  farm" id="client355">
                        <img src="/img/p/clients/clients-logo/rfarm.jpg" alt="Р-Фарм" title="Р-Фарм" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfarm">10</span>
                    </div>
                    <div class="clients-item  " id="client356">
                        <img src="/img/p/clients/clients-logo/minenergo.png" alt="РЭА МИНЭНЕРГО" title="РЭА МИНЭНЕРГО"
                             class="lazyload" loading="lazy">

                    </div>
                    <div class="clients-item  develop" id="client357">
                        <img src="/img/p/clients/clients-logo/city21.jpg" alt="Сity" title="Сity" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortdevelop">26</span>
                    </div>
                    <div class="clients-item  develop" id="client358">
                        <img src="/img/p/clients/clients-logo/sbd.svg" alt="СБД" title="СБД" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortdevelop">27</span>
                    </div>
                    <div class="clients-item  kazakhstan sng bank" id="client359">
                        <img src="/img/p/clients/clients-logo/BEREKE_BANK.png" alt="Bereke Bank" title="Bereke Bank"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortkazakhstan">6</span><span style="display: none"
                                                                                         class="sortsng">6</span><span
                                style="display: none" class="sortbank">31</span>
                    </div>
                    <div class="clients-item  company" id="client363">
                        <img src="/img/p/clients/clients-logo/sibur.png" alt="Сибур" title="Сибур" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">34</span>
                    </div>
                    <div class="clients-item  farm" id="client364">
                        <img src="/img/p/clients/clients-logo/sogaz-med.jpg" alt="Согаз Мед" title="Согаз Мед"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">11</span>
                    </div>
                    <div class="clients-item  pressa rpt media" id="client365">
                        <img src="/img/p/clients/clients-logo/sport_express.svg" alt="Спорт-Экспресс"
                             title="Спорт-Экспресс" style="padding: 0" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortpressa">5</span><span style="display: none"
                                                                                     class="sortrpt">32</span><span
                                style="display: none" class="sortmedia">46</span>
                    </div>
                    <div class="clients-item  agroprom fmcg food_production" id="client366">
                        <img src="/img/p/clients/clients-logo/stepagro.svg" alt="Степь Агрохолдинг"
                             title="Степь Агрохолдинг" style="height: 50px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortagroprom">10</span><span style="display: none"
                                                                                        class="sortfmcg">11</span><span
                                style="display: none" class="sortfood_production">3</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client369">
                        <img src="/img/p/clients/clients-logo/che.png" alt="Телеканал ЧЕ" title="Телеканал ЧЕ"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttv">18</span><span style="display: none" class="sortrpt">33</span><span
                                style="display: none" class="sortmedia">47</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client371">
                        <img src="/img/p/clients/clients-logo/tochka.svg" alt="Точка на карте" title="Точка на карте"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">1</span><span style="display: none"
                                                                                     class="sorthoreca">6</span>
                    </div>
                    <div class="clients-item  metal" id="client372">
                        <img src="/img/p/clients/clients-logo/translom.svg" alt="Транслом" title="Транслом"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmetal">3</span>
                    </div>
                    <div class="clients-item  service" id="client373">
                        <img src="/img/p/clients/clients-logo/trans-2.png" alt="Транснефть" title="Транснефть"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">5</span>
                    </div>
                    <div class="clients-item  kazakhstan sng" id="client375">
                        <img src="/img/p/clients/clients-logo/fortebank.png" alt="Форте-Банк" title="Форте-Банк"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortkazakhstan">7</span><span style="display: none"
                                                                                         class="sortsng">7</span>
                    </div>
                    <div class="clients-item  food" id="client377">
                        <img src="/img/p/clients/clients-logo/about-mission.jpg" alt="Хороший" title="Хороший"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfood">13</span>
                    </div>
                    <div class="clients-item  tv rpt media" id="client379">
                        <img src="/img/p/clients/clients-logo/media/center.png" alt="Централ партнершип"
                             title="Централ партнершип" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttv">19</span><span style="display: none" class="sortrpt">34</span><span
                                style="display: none" class="sortmedia">48</span>
                    </div>
                    <div class="clients-item  eCommerce it-500 it" id="client380">
                        <img src="/img/p/clients/clients-logo/cian.png" alt="Циан" title="Циан" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorteCommerce">16</span><span style="display: none"
                                                                                         class="sortit-500">39</span><span
                                style="display: none" class="sortit">83</span>
                    </div>
                    <div class="clients-item  it it-5000" id="client381">
                        <img src="/img/p/clients/clients-logo/zyfra2.png" alt="Цифра" title="Цифра" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">84</span><span style="display: none"
                                                                                  class="sortit-5000">12</span>
                    </div>
                    <div class="clients-item  it-500 it bank" id="client383">
                        <img src="/img/p/clients/clients-logo/cft.svg" alt="ЦФТ" title="ЦФТ" style="max-width: 120px"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit-500">40</span><span style="display: none"
                                                                                      class="sortit">85</span><span
                                style="display: none" class="sortbank">22</span>
                    </div>
                    <div class="clients-item  company food_production fmcg agroprom" id="client384">
                        <img src="/img/p/clients/clients-logo/cherkizov.png" alt="Черкизово" title="Черкизово"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">35</span><span style="display: none"
                                                                                       class="sortfood_production">4</span><span
                                style="display: none" class="sortfmcg">12</span><span style="display: none"
                                                                                      class="sortagroprom">0</span><span
                                style="display: none" class="sortagroprom">11</span>
                    </div>
                    <div class="clients-item  food" id="client385">
                        <img src="/img/p/clients/clients-logo/chizhik.png" alt="Чижик" title="Чижик" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfood">14</span>
                    </div>
                    <div class="clients-item  education" id="client386">
                        <img src="/img/p/clients/clients-logo/letovo.png" alt="Школа Летово" title="Школа Летово"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteducation">5</span>
                    </div>
                    <div class="clients-item  service" id="client387">
                        <img src="/img/p/clients/clients-logo/ebc.png" alt="ЭБК System" title="ЭБК System"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">6</span>
                    </div>
                    <div class="clients-item  service" id="client390">
                        <img src="/img/p/clients/clients-logo/etagi.svg" alt="Этажи" title="Этажи" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortservice">7</span>
                    </div>
                    <div class="clients-item  develop" id="client391">
                        <img src="/img/p/clients/clients-logo/391262.png" alt="Юнистрой" title="Юнистрой"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">28</span>
                    </div>
                    <div class="clients-item  farm" id="client392">
                        <img src="/img/p/clients/clients-logo/olive-nn.png" alt="Клиника O'LIVE" title="Клиника O'LIVE"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">12</span>
                    </div>
                    <div class="clients-item  education" id="client393">
                        <img src="/img/p/clients/clients-logo/skillfactory.svg" alt="Scillfactory" title="Scillfactory"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteducation">2</span>
                    </div>
                    <div class="clients-item  bank" id="client394">
                        <img src="/img/p/clients/clients-logo/bsc.svg" alt="БСК" title="БСК" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortbank">18</span>
                    </div>
                    <div class="clients-item  moda" id="client395">
                        <img src="/img/p/clients/clients-logo/ekonica.png" alt="Эконика" title="Эконика"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmoda">7</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client397">
                        <img src="/img/p/clients/clients-logo/lesresort.svg" alt="lesresort" title="lesresort"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">0</span><span style="display: none"
                                                                                     class="sorthoreca">5</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client399">
                        <img src="/img/p/clients/clients-logo/dachawintera.png" alt="Дача Винтера Dachawintera"
                             title="Дача Винтера Dachawintera" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">3</span><span style="display: none"
                                                                                     class="sorthoreca">8</span>
                    </div>
                    <div class="clients-item  horeca" id="client400">
                        <img src="/img/p/clients/clients-logo/blok-restaurant.png"
                             alt="Ресторан Мясной Блок blok-restaurant" title="Ресторан Мясной Блок blok-restaurant"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthoreca">9</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client401">
                        <img src="/img/p/clients/clients-logo/cosmos.png" alt="Ресторан Мясной Блок blok-restaurant"
                             title="Ресторан Мясной Блок blok-restaurant" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">4</span><span style="display: none"
                                                                                     class="sorthoreca">11</span>
                    </div>
                    <div class="clients-item  farm" id="client402">
                        <img src="/img/p/clients/clients-logo/unifarm.png" alt="unipharm" title="unipharm"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">13</span>
                    </div>
                    <div class="clients-item  leasing" id="client403">
                        <img src="/img/p/clients/clients-logo/autogpbl.png" alt="Газпромбанк автолизинг autogpbl.ru"
                             title="Газпромбанк автолизинг autogpbl.ru" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortleasing">4</span>
                    </div>
                    <div class="clients-item  bank service" id="client404">
                        <img src="/img/p/clients/clients-logo/vashinvestor.png" alt="Ваш инвестор" title="Ваш инвестор"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">19</span><span style="display: none"
                                                                                    class="sortservice">31</span>
                    </div>
                    <div class="clients-item  education" id="client405">
                        <img src="/img/p/clients/clients-logo/karpov.png" alt="Курсы Карпова karpov.courses"
                             title="Курсы Карпова karpov.courses" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteducation">6</span>
                    </div>
                    <div class="clients-item  company build" id="client406">
                        <img src="/img/p/clients/clients-logo/rockwool.png" alt="rockwool.com" title="rockwool.com"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">36</span><span style="display: none"
                                                                                       class="sortbuild">8</span>
                    </div>
                    <div class="clients-item  fmcg" id="client407">
                        <img src="/img/p/clients/clients-logo/phillip-morris.svg" alt="phillip morris"
                             title="phillip morris" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfmcg">13</span>
                    </div>
                    <div class="clients-item  nofood" id="client408">
                        <img src="/img/p/clients/clients-logo/iqos-seeklogo.com.svg" alt="iqos" title="iqos"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">36</span>
                    </div>
                    <div class="clients-item  bank" id="client409">
                        <img src="/img/p/clients/clients-logo/metallinvestbank.svg" alt="metallinvestbank"
                             title="metallinvestbank" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">20</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client410">
                        <img src="/img/p/clients/clients-logo/hotel1.png" alt="Art Court" title="Art Court"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">5</span><span style="display: none"
                                                                                     class="sorthoreca">12</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client411">
                        <img src="/img/p/clients/clients-logo/hotel2.png" alt="Realliance" title="Realliance"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">6</span><span style="display: none"
                                                                                     class="sorthoreca">13</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client412">
                        <img src="/img/p/clients/clients-logo/hotel3.png" alt="Renartiss" title="Renartiss"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">7</span><span style="display: none"
                                                                                     class="sorthoreca">14</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client413">
                        <img src="/img/p/clients/clients-logo/hotel4.png" alt="Звёзды Арбата" title="Звёзды Арбата"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">8</span><span style="display: none"
                                                                                     class="sorthoreca">15</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client414">
                        <img src="/img/p/clients/clients-logo/wone-hotels.svg" alt="Wone Hotels" title="Wone Hotels"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">9</span><span style="display: none"
                                                                                     class="sorthoreca">16</span>
                    </div>
                    <div class="clients-item  fmcg company" id="client415">
                        <img src="/img/p/clients/clients-logo/cedo.svg" alt="cedo" title="cedo" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfmcg">14</span><span style="display: none"
                                                                                    class="sortcompany">37</span>
                    </div>
                    <div class="clients-item  it it-500" id="client416">
                        <img src="/img/p/clients/clients-logo/getcourse.png" alt="getcourse" title="getcourse"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">86</span><span style="display: none"
                                                                                  class="sortit-500">41</span>
                    </div>
                    <div class="clients-item  it it-500" id="client417">
                        <img src="/img/p/clients/clients-logo/omp.svg" alt="omp.ru" title="omp.ru" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">87</span><span style="display: none"
                                                                                  class="sortit-500">42</span>
                    </div>
                    <div class="clients-item  company" id="client418">
                        <img src="/img/p/clients/clients-logo/ekf.svg" alt="omp.ru" title="omp.ru" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">38</span>
                    </div>
                    <div class="clients-item  company food_production" id="client419">
                        <img src="/img/p/clients/clients-logo/mareven.png" alt="mareven" title="mareven"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">39</span><span style="display: none"
                                                                                       class="sortfood_production">5</span>
                    </div>
                    <div class="clients-item  service it" id="client421">
                        <img src="/img/p/clients/clients-logo/citydrive.svg" alt="citydrive" title="citydrive"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">26</span><span style="display: none"
                                                                                       class="sortit">88</span>
                    </div>
                    <div class="clients-item  company" id="client422">
                        <img src="/img/p/clients/clients-logo/mdm-light.svg" alt="citydrive" title="citydrive"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">40</span>
                    </div>
                    <div class="clients-item  bank" id="client423">
                        <img src="/img/p/clients/clients-logo/pochtabank.png" alt="pochtabank" title="pochtabank"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">6</span>
                    </div>
                    <div class="clients-item  agroprom company" id="client424">
                        <img src="/img/p/clients/clients-logo/greenlines.png" alt="Зелёные линии Калуга greenlines"
                             title="Зелёные линии Калуга greenlines" style="width: 110px; max-height: fit-content;"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortagroprom">12</span><span style="display: none"
                                                                                        class="sortcompany">41</span>
                    </div>
                    <div class="clients-item  logist" id="client425">
                        <img src="/img/p/clients/clients-logo/dellin.jpg" alt="Деловые линии dellin.ru"
                             title="Деловые линии dellin.ru" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortlogist">2</span>
                    </div>
                    <div class="clients-item  farm" id="client426">
                        <img src="/img/p/clients/clients-logo/rafarma.ru.png" alt="Рафарма rafarma.ru"
                             title="Рафарма rafarma.ru" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">14</span>
                    </div>
                    <div class="clients-item  farm" id="client427">
                        <img src="/img/p/clients/clients-logo/sotex2.jpg" alt="Сотекс sotex.ru Ye"
                             title="Сотекс sotex.ru Ye" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">15</span>
                    </div>
                    <div class="clients-item  leasing" id="client428">
                        <img src="/img/p/clients/clients-logo/carcade.ru.png" alt="Каркаде carcade.ru"
                             title="Каркаде carcade.ru" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortleasing">6</span>
                    </div>
                    <div class="clients-item  insurance" id="client429">
                        <img src="/img/p/clients/clients-logo/rosbank_.png"
                             alt="Росбанк страхование rosbankinsurance.ru"
                             title="Росбанк страхование rosbankinsurance.ru" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortinsurance">8</span>
                    </div>
                    <div class="clients-item  oil company" id="client430">
                        <img src="/img/p/clients/clients-logo/suek-logo-ru.svg" alt="СУЭК www.suek.ru"
                             title="СУЭК www.suek.ru" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortoil">6</span><span style="display: none"
                                                                                  class="sortcompany">42</span>
                    </div>
                    <div class="clients-item  it-1000 it" id="client431">
                        <img src="/img/p/clients/clients-logo/bizone.svg" alt="BIZONE" title="BIZONE" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit-1000">12</span><span style="display: none"
                                                                                       class="sortit">89</span>
                    </div>
                    <div class="clients-item  service" id="client432">
                        <img src="/img/p/clients/clients-logo/kipmaster.svg" alt="Кипмастер kipmaster"
                             title="Кипмастер kipmaster" style="max-height: 80px; margin-top: -0.2rem;" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortservice">8</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client433">
                        <img src="/img/p/clients/clients-logo/metropol-moscow.png" alt="Метрополь metropol-moscow.ru"
                             title="Метрополь metropol-moscow.ru" style="max-height: 70px; transform:scale(0.95);"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">10</span><span style="display: none"
                                                                                      class="sorthoreca">17</span>
                    </div>
                    <div class="clients-item  develop it it-500" id="client434">
                        <img src="/img/p/clients/clients-logo/pridex.png" alt="pridex" title="pridex"
                             style="max-height: 70px;" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">29</span><span style="display: none"
                                                                                       class="sortit">90</span><span
                                style="display: none" class="sortit-500">65</span>
                    </div>
                    <div class="clients-item  develop" id="client435">
                        <img src="/img/p/clients/clients-logo/aksioma71.png" alt="Аксиома aksioma71"
                             title="Аксиома aksioma71" style="max-height: 70px;" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">30</span>
                    </div>
                    <div class="clients-item  develop" id="client436">
                        <img src="/img/p/clients/clients-logo/n-systems-blue.png" alt="Эн-Системс n-systems"
                             title="Эн-Системс n-systems" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">31</span>
                    </div>
                    <div class="clients-item  oil" id="client437">
                        <img src="/img/p/clients/clients-logo/ues.png" alt="УралЭнергоСбыт uralsbyt.ru"
                             title="УралЭнергоСбыт uralsbyt.ru" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortoil">7</span>
                    </div>
                    <div class="clients-item  nofood" id="client438">
                        <img src="/img/p/clients/clients-logo/tsvetnoy.svg" alt="Цветной tsvetnoy.com"
                             title="Цветной tsvetnoy.com" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">37</span>
                    </div>
                    <div class="clients-item  oil" id="client439">
                        <img src="/img/p/clients/clients-logo/sibgenco.png" alt="ООО «Сибирская генерирующая компания»"
                             title="ООО «Сибирская генерирующая компания»" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortoil">8</span>
                    </div>
                    <div class="clients-item  company build" id="client440">
                        <img src="/img/p/clients/clients-logo/linni-max.jpg" alt="LINNIMAX" title="LINNIMAX"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">43</span><span style="display: none"
                                                                                       class="sortbuild">9</span>
                    </div>
                    <div class="clients-item  develop" id="client441">
                        <img src="/img/p/clients/clients-logo/pik.svg" alt="ПИК" title="ПИК" style="max-height: 80px"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">0</span>
                    </div>
                    <div class="clients-item  bank" id="client442">
                        <img src="/img/p/clients/clients-logo/spvb.svg" alt="Санкт-Петербургская Валютная Биржа"
                             title="Санкт-Петербургская Валютная Биржа" style="max-width: 130px" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortbank">21</span>
                    </div>
                    <div class="clients-item  education it it-500" id="client443">
                        <img src="/img/p/clients/clients-logo/uchi.ru.svg" alt="Учи.ру" title="Учи.ру"
                             style="width: 100px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteducation">7</span><span style="display: none"
                                                                                        class="sortit">99</span><span
                                style="display: none" class="sortit-500">48</span>
                    </div>
                    <div class="clients-item  it it-500" id="client444">
                        <img src="/img/p/clients/clients-logo/iiko.png" alt="iiko" title="iiko" style="margin-top: 7px;"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">91</span><span style="display: none"
                                                                                  class="sortit-500">43</span>
                    </div>
                    <div class="clients-item  oil service" id="client445">
                        <img src="/img/p/clients/clients-logo/grys-power.png" alt="GRYS Power" title="GRYS Power"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortoil">9</span><span style="display: none"
                                                                                  class="sortservice">15</span>
                    </div>
                    <div class="clients-item  company" id="client446">
                        <img src="/img/p/clients/clients-logo/knorr-bremse.svg" alt="Knorr Bremse" title="Knorr Bremse"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">44</span>
                    </div>
                    <div class="clients-item  develop" id="client447">
                        <img src="/img/p/clients/clients-logo/rbi.png" alt="RBI" title="RBI" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortdevelop">32</span>
                    </div>
                    <div class="clients-item  logist" id="client448">
                        <img src="/img/p/clients/clients-logo/pervaya-portovaya.svg" alt="Первая Портовая Компания"
                             title="Первая Портовая Компания" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortlogist">10</span>
                    </div>
                    <div class="clients-item  develop" id="client449">
                        <img src="/img/p/clients/clients-logo/samolet.svg" alt="Самолет" title="Самолет"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">1</span>
                    </div>
                    <div class="clients-item  media" id="client450">
                        <img src="/img/p/clients/clients-logo/interfaks.png" alt="Интерфакс" title="Интерфакс"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmedia">49</span>
                    </div>
                    <div class="clients-item  auto nofood it it-500" id="client451">
                        <img src="/img/p/clients/clients-logo/klyuchavto.svg" alt="Ключавто" title="Ключавто"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortauto">4</span><span style="display: none"
                                                                                   class="sortnofood">38</span><span
                                style="display: none" class="sortit">139</span><span style="display: none"
                                                                                     class="sortit-500">77</span>
                    </div>
                    <div class="clients-item  sber it it-1000 eCommerce" id="client452">
                        <img src="/img/p/clients/clients-logo/sbermegamarket.svg" alt="СберМегаМаркет"
                             title="СберМегаМаркет" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortsber">1</span><span style="display: none" class="sortit">100</span><span
                                style="display: none" class="sortit-1000">18</span><span style="display: none"
                                                                                         class="sorteCommerce">18</span>
                    </div>
                    <div class="clients-item  fmcg company food_production" id="client453">
                        <img src="/img/p/clients/clients-logo/poetti.svg" alt="Милфудс" title="Милфудс" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfmcg">15</span><span style="display: none"
                                                                                    class="sortcompany">45</span><span
                                style="display: none" class="sortfood_production">17</span>
                    </div>
                    <div class="clients-item  it it-500" id="client454">
                        <img src="/img/p/clients/clients-logo/renue-logo.png" alt="Renue" title="Renue" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">92</span><span style="display: none"
                                                                                  class="sortit-500">44</span>
                    </div>
                    <div class="clients-item  farm" id="client455">
                        <img src="/img/p/clients/clients-logo/heel.png" alt="Хеель Рус" title="Хеель Рус"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">16</span>
                    </div>
                    <div class="clients-item  farm" id="client456">
                        <img src="/img/p/clients/clients-logo/rusbiofarm.svg" alt="Русбиофарм" title="Русбиофарм"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">17</span>
                    </div>
                    <div class="clients-item  oil" id="client457">
                        <img src="/img/p/clients/clients-logo/el5-energo.svg" alt="ЭЛ5-Энерго" title="ЭЛ5-Энерго"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortoil">10</span>
                    </div>
                    <div class="clients-item  auto" id="client458">
                        <img src="/img/p/clients/clients-logo/lada.svg" alt="Lada" title="Lada" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortauto">5</span>
                    </div>
                    <div class="clients-item  develop" id="client459">
                        <img src="/img/p/clients/clients-logo/osk1520.svg" alt="ОСК 1520" title="ОСК 1520"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">33</span>
                    </div>
                    <div class="clients-item  it it-500" id="client460">
                        <img src="/img/p/clients/clients-logo/web-proshkola.svg" alt="ПроШкола" title="ПроШкола"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">93</span><span style="display: none"
                                                                                  class="sortit-500">45</span>
                    </div>
                    <div class="clients-item  oil company" id="client461">
                        <img src="/img/p/clients/clients-logo/schneider-electric.svg" alt="Schneider Electric"
                             title="Schneider Electric" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortoil">11</span><span style="display: none"
                                                                                   class="sortcompany">46</span>
                    </div>
                    <div class="clients-item  logist transportation" id="client462">
                        <img src="/img/p/clients/clients-logo/nawinia.svg" alt="Nawinia" title="Nawinia"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortlogist">11</span><span style="display: none"
                                                                                      class="sorttransportation">7</span>
                    </div>
                    <div class="clients-item  logist" id="client463">
                        <img src="/img/p/clients/clients-logo/demetra.svg" alt="Деметра-Холдинг" title="Деметра-Холдинг"
                             style="max-height: 60px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortlogist">12</span>
                    </div>
                    <div class="clients-item  farm" id="client464">
                        <img src="/img/p/clients/clients-logo/akrikhin-logo.png" alt="Акрихин" title="Акрихин"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">18</span>
                    </div>
                    <div class="clients-item  government it-max" id="client465">
                        <img src="/img/p/clients/clients-logo/roskomnadzor.png" alt="Роскомнадзор" title="Роскомнадзор"
                             style="max-width: 125px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">0</span><span style="display: none"
                                                                                         class="sortit-max">0</span>
                    </div>
                    <div class="clients-item  company" id="client467">
                        <img src="/img/p/clients/clients-logo/mirtek.svg" alt="Миртек" title="Миртек" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">47</span>
                    </div>
                    <div class="clients-item  insurance" id="client468">
                        <img src="/img/p/clients/clients-logo/puls-strahovanie.svg" alt="Пульс жизни"
                             title="Пульс жизни" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortinsurance">9</span>
                    </div>
                    <div class="clients-item  transportation" id="client469">
                        <img src="/img/p/clients/clients-logo/uralskaya-transportnaya-kompaniya.png"
                             alt="Уральская транспортная компания" title="Уральская транспортная компания"
                             style="max-height: 70px;" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttransportation">6</span>
                    </div>
                    <div class="clients-item  leasing" id="client470">
                        <img src="/img/p/clients/clients-logo/urallizing.jpg" alt="Ураллизинг" title="Ураллизинг"
                             style="max-height: 70px;" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortleasing">7</span>
                    </div>
                    <div class="clients-item  leasing" id="client471">
                        <img src="/img/p/clients/clients-logo/psb-lizing.svg" alt="ПСБЛ" title="ПСБЛ" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortleasing">3</span>
                    </div>
                    <div class="clients-item  food_production fmcg" id="client472">
                        <img src="/img/p/clients/clients-logo/baltika.png" alt="Балтика" title="Балтика"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfood_production">19</span><span style="display: none"
                                                                                               class="sortfmcg">17</span>
                    </div>
                    <div class="clients-item  farm" id="client473">
                        <img src="/img/p/clients/clients-logo/puls-farm.svg" alt="Пульс" title="Пульс" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfarm">19</span>
                    </div>
                    <div class="clients-item  government it it-500" id="client474">
                        <img src="/img/p/clients/clients-logo/goznak.jpg" alt="Гознак" title="Гознак" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortgovernment">13</span><span style="display: none"
                                                                                          class="sortit">104</span><span
                                style="display: none" class="sortit-500">50</span>
                    </div>
                    <div class="clients-item  bank" id="client475">
                        <img src="/img/p/clients/clients-logo/renessans-bank.svg" alt="Ренессанс Банк"
                             title="Ренессанс Банк" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">23</span>
                    </div>
                    <div class="clients-item  food develop" id="client476">
                        <img src="/img/p/clients/clients-logo/maksi-1.png" alt="Макси" title="Макси" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfood">15</span><span style="display: none"
                                                                                    class="sortdevelop">35</span>
                    </div>
                    <div class="clients-item  it it-500" id="client477">
                        <img src="/img/p/clients/clients-logo/beri-zaryad.svg" alt="Бери заряд" title="Бери заряд"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">94</span><span style="display: none"
                                                                                  class="sortit-500">51</span>
                    </div>
                    <div class="clients-item  government" id="client478">
                        <img src="/img/p/clients/clients-logo/ekonomika-moskvy.jpg" alt="Экономика Москвы"
                             title="Экономика Москвы" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">1</span>
                    </div>
                    <div class="clients-item  it it-500" id="client479">
                        <img src="/img/p/clients/clients-logo/aurora-it.png" alt="Аврора" title="Аврора"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">95</span><span style="display: none"
                                                                                  class="sortit-500">46</span>
                    </div>
                    <div class="clients-item  insurance" id="client480">
                        <img src="/img/p/clients/clients-logo/yugoriya.svg" alt="ГСК Югория" title="ГСК Югория"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortinsurance">10</span>
                    </div>
                    <div class="clients-item  company" id="client481">
                        <img src="/img/p/clients/clients-logo/innovatsii-detyam.svg" alt="Инновации Детям"
                             title="Инновации Детям" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">49</span>
                    </div>
                    <div class="clients-item  service" id="client482">
                        <img src="/img/p/clients/clients-logo/zenit.svg" alt="Юридическая компания Зенит"
                             title="Юридическая компания Зенит" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">11</span>
                    </div>
                    <div class="clients-item  develop" id="client483">
                        <img src="/img/p/clients/clients-logo/vira-1.jpg" alt="Группа компаний ВИРА"
                             title="Группа компаний ВИРА" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">43</span>
                    </div>
                    <div class="clients-item  farm" id="client484">
                        <img src="/img/p/clients/clients-logo/klinika-mendeleyev.svg"
                             alt="Стоматологическая клиника Менделеев" title="Стоматологическая клиника Менделеев"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfarm">20</span>
                    </div>
                    <div class="clients-item  service" id="client485">
                        <img src="/img/p/clients/clients-logo/vsn-realty.svg" alt="VSN Realty" title="VSN Realty"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">13</span>
                    </div>
                    <div class="clients-item  company nofood" id="client486">
                        <img src="/img/p/clients/clients-logo/mixit.svg" alt="Mixit" title="Mixit" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">50</span><span style="display: none"
                                                                                       class="sortnofood">40</span>
                    </div>
                    <div class="clients-item  government" id="client487">
                        <img src="/img/p/clients/clients-logo/giprosvyaz.png" alt="Гипросвязь" title="Гипросвязь"
                             style="max-height: 65px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">14</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client488">
                        <img src="/img/p/clients/clients-logo/Grand-Autograph-Hotel-Novosibirsk.png"
                             alt="Grand Autograph Hotel Novosibirsk" title="Grand Autograph Hotel Novosibirsk"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">11</span><span style="display: none"
                                                                                      class="sorthoreca">18</span>
                    </div>
                    <div class="clients-item  it it-1000" id="client489">
                        <img src="/img/p/clients/clients-logo/it-astra.jpg" alt="ГК Астра" title="ГК Астра"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">96</span><span style="display: none"
                                                                                  class="sortit-1000">13</span>
                    </div>
                    <div class="clients-item  nofood fmcg" id="client490">
                        <img src="/img/p/clients/clients-logo/plonq.png" alt="Plonq" title="Plonq" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortnofood">41</span><span style="display: none"
                                                                                      class="sortfmcg">20</span>
                    </div>
                    <div class="clients-item  agroprom kazakhstan sng" id="client491">
                        <img src="/img/p/clients/clients-logo/KAZCHEM.svg" alt="KAZCHEM" title="KAZCHEM"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortagroprom">13</span><span style="display: none"
                                                                                        class="sortkazakhstan">9</span><span
                                style="display: none" class="sortsng">12</span>
                    </div>
                    <div class="clients-item  logist" id="client492">
                        <img src="/img/p/clients/clients-logo/nxtk.svg" alt="НХТК" title="НХТК" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortlogist">13</span>
                    </div>
                    <div class="clients-item  bank" id="client494">
                        <img src="/img/p/clients/clients-logo/agroros-bank-1.png" alt="Агророс Банк"
                             title="Агророс Банк" style="max-width: 140px;" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">24</span>
                    </div>
                    <div class="clients-item  company" id="client495">
                        <img src="/img/p/clients/clients-logo/kuybyshev-azot.png" alt="ПАО КуйбышевАзот"
                             title="ПАО КуйбышевАзот" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">51</span>
                    </div>
                    <div class="clients-item  it it-500" id="client496">
                        <img src="/img/p/clients/clients-logo/atol.png" alt="АТОЛ" title="АТОЛ" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">97</span><span style="display: none"
                                                                                  class="sortit-500">47</span>
                    </div>
                    <div class="clients-item  it it-1000 other" id="client497">
                        <img src="/img/p/clients/clients-logo/bet-boom.svg" alt="BetBoom" title="BetBoom"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">98</span><span style="display: none"
                                                                                  class="sortit-1000">14</span><span
                                style="display: none" class="sortother">4</span>
                    </div>
                    <div class="clients-item  food" id="client498">
                        <img src="/img/p/clients/clients-logo/globus.png" alt="Globus" title="Globus" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfood">16</span>
                    </div>
                    <div class="clients-item  it it-1000" id="client499">
                        <img src="/img/p/clients/clients-logo/moy-ofis.svg" alt="Мой Офис" title="Мой Офис"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">101</span><span style="display: none"
                                                                                   class="sortit-1000">19</span>
                    </div>
                    <div class="clients-item  it it-1000" id="client500">
                        <img src="/img/p/clients/clients-logo/ivi-new.png" alt="иви" title="иви" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">102</span><span style="display: none"
                                                                                   class="sortit-1000">20</span>
                    </div>
                    <div class="clients-item  it it-500 service" id="client502">
                        <img src="/img/p/clients/clients-logo/smartway.svg" alt="Smartway" title="Smartway"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">103</span><span style="display: none"
                                                                                   class="sortit-500">49</span><span
                                style="display: none" class="sortservice">14</span>
                    </div>
                    <div class="clients-item  oil logist develop" id="client503">
                        <img src="/img/p/clients/clients-logo/nipigaz.svg" alt="НИПИГАЗ" title="НИПИГАЗ"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortoil">12</span><span style="display: none"
                                                                                   class="sortlogist">14</span><span
                                style="display: none" class="sortdevelop">34</span>
                    </div>
                    <div class="clients-item  develop" id="client504">
                        <img src="/img/p/clients/clients-logo/talan.png" alt="Талан" title="Талан" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortdevelop">36</span>
                    </div>
                    <div class="clients-item  develop" id="client505">
                        <img src="/img/p/clients/clients-logo/msy-1.svg" alt="МСУ -1" title="МСУ -1" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortdevelop">37</span>
                    </div>
                    <div class="clients-item  it it-500 telekom" id="client506">
                        <img src="/img/p/clients/clients-logo/informtehnika.png" alt="Информтехника"
                             title="Информтехника" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">105</span><span style="display: none"
                                                                                   class="sortit-500">52</span><span
                                style="display: none" class="sorttelekom">8</span>
                    </div>
                    <div class="clients-item  it it-500" id="client507">
                        <img src="/img/p/clients/clients-logo/wone-it.svg" alt="Wone IT" title="Wone IT"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">106</span><span style="display: none"
                                                                                   class="sortit-500">53</span>
                    </div>
                    <div class="clients-item  it it-500" id="client508">
                        <img src="/img/p/clients/clients-logo/urbantech.svg" alt="Урбантех" title="Урбантех"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">107</span><span style="display: none"
                                                                                   class="sortit-500">54</span>
                    </div>
                    <div class="clients-item  it it-500" id="client509">
                        <img src="/img/p/clients/clients-logo/zvuk.svg" alt="Звук" title="Звук" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">108</span><span style="display: none"
                                                                                   class="sortit-500">55</span>
                    </div>
                    <div class="clients-item  it it-500" id="client510">
                        <img src="/img/p/clients/clients-logo/iyno-1.svg" alt="IYNO" title="IYNO" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">109</span><span style="display: none"
                                                                                   class="sortit-500">56</span>
                    </div>
                    <div class="clients-item  it it-500" id="client511">
                        <img src="/img/p/clients/clients-logo/propellerAbs.svg" alt="Propellerads" title="Propellerads"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">110</span><span style="display: none"
                                                                                   class="sortit-500">57</span>
                    </div>
                    <div class="clients-item  it it-500 media" id="client512">
                        <img src="/img/p/clients/clients-logo/stream.svg" alt="Стрим" title="Стрим" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">111</span><span style="display: none"
                                                                                   class="sortit-500">58</span><span
                                style="display: none" class="sortmedia">50</span>
                    </div>
                    <div class="clients-item  it it-500" id="client513">
                        <img src="/img/p/clients/clients-logo/dzen.svg" alt="Дзен" title="Дзен" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">112</span><span style="display: none"
                                                                                   class="sortit-500">59</span>
                    </div>
                    <div class="clients-item  develop" id="client515">
                        <img src="/img/p/clients/clients-logo/marks-company-group.png" alt="Marks Group"
                             title="Marks Group" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">38</span>
                    </div>
                    <div class="clients-item  bank it it-500" id="client516">
                        <img src="/img/p/clients/clients-logo/idf-eurasia.svg" alt="IDF Eurasia" title="IDF Eurasia"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">25</span><span style="display: none"
                                                                                    class="sortit">113</span><span
                                style="display: none" class="sortit-500">64</span>
                    </div>
                    <div class="clients-item  bank" id="client517">
                        <img src="/img/p/clients/clients-logo/money-man.svg" alt="MoneyMan" title="MoneyMan"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">26</span>
                    </div>
                    <div class="clients-item  bank kazakhstan sng it it-1000" id="client518">
                        <img src="/img/p/clients/clients-logo/solva.svg" alt="Solva" title="Solva" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortbank">27</span><span style="display: none"
                                                                                    class="sortkazakhstan">8</span><span
                                style="display: none" class="sortsng">14</span><span style="display: none"
                                                                                     class="sortit">120</span><span
                                style="display: none" class="sortit-1000">23</span>
                    </div>
                    <div class="clients-item  eCommerce" id="client519">
                        <img src="/img/p/clients/clients-logo/prodex.png" alt="Prodex" title="Prodex" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorteCommerce">19</span>
                    </div>
                    <div class="clients-item  company" id="client520">
                        <img src="/img/p/clients/clients-logo/ilim.svg" alt="Илим" title="Илим" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">52</span>
                    </div>
                    <div class="clients-item  it it-500" id="client521">
                        <img src="/img/p/clients/clients-logo/ntechlab.jpg" alt="NtechLab" title="NtechLab"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">114</span><span style="display: none"
                                                                                   class="sortit-500">60</span>
                    </div>
                    <div class="clients-item  horeca" id="client522">
                        <img src="/img/p/clients/clients-logo/unirest.jpg" alt="KFC" title="KFC" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorthoreca">1</span>
                    </div>
                    <div class="clients-item  it it-500" id="client523">
                        <img src="/img/p/clients/clients-logo/gri.svg" alt="GRI" title="GRI" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">115</span><span style="display: none"
                                                                                   class="sortit-500">61</span>
                    </div>
                    <div class="clients-item  it it-500" id="client524">
                        <img src="/img/p/clients/clients-logo/viasat.svg" alt="ВИАСАТ" title="ВИАСАТ" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">116</span><span style="display: none"
                                                                                   class="sortit-500">62</span>
                    </div>
                    <div class="clients-item  company food_production" id="client525">
                        <img src="/img/p/clients/clients-logo/agroimpex.svg" alt="Agroimpex" title="Agroimpex"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">53</span><span style="display: none"
                                                                                       class="sortfood_production">20</span>
                    </div>
                    <div class="clients-item  government oil" id="client526">
                        <img src="/img/p/clients/clients-logo/transneft-privolga.jpg" alt="Транснефть - Приволга"
                             title="Транснефть - Приволга" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">11</span><span style="display: none"
                                                                                          class="sortoil">0</span>
                    </div>
                    <div class="clients-item  it it-5000 sng eCommerce" id="client527">
                        <img src="/img/p/clients/clients-logo/uzum-market.svg" alt="Uzum market" title="Uzum market"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">117</span><span style="display: none"
                                                                                   class="sortit-5000">16</span><span
                                style="display: none" class="sortsng">13</span><span style="display: none"
                                                                                     class="sorteCommerce">17</span>
                    </div>
                    <div class="clients-item  government it it-1000" id="client528">
                        <img src="/img/p/clients/clients-logo/rossiyskiy-eksportnyy-tsentr.svg"
                             alt="Российский экспортный центр" title="Российский экспортный центр"
                             style="max-width: 130px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">15</span><span style="display: none"
                                                                                          class="sortit">118</span><span
                                style="display: none" class="sortit-1000">22</span>
                    </div>
                    <div class="clients-item  logist" id="client529">
                        <img src="/img/p/clients/clients-logo/npk.png" alt="Новая перевозочная компания"
                             title="Новая перевозочная компания" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortlogist">15</span>
                    </div>
                    <div class="clients-item  oil" id="client530">
                        <img src="/img/p/clients/clients-logo/wolf.svg" alt="Wolf" title="Wolf" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortoil">13</span>
                    </div>
                    <div class="clients-item  service" id="client531">
                        <img src="/img/p/clients/clients-logo/srg.png" alt="SRG" title="SRG" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortservice">16</span>
                    </div>
                    <div class="clients-item  nofood moda" id="client532">
                        <img src="/img/p/clients/clients-logo/mbase.png" alt="MBase" title="MBase" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortnofood">42</span><span style="display: none"
                                                                                      class="sortmoda">8</span>
                    </div>
                    <div class="clients-item  service" id="client533">
                        <img src="/img/p/clients/clients-logo/fokus-m.jpg" alt="Фокус-М" title="Фокус-М"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">17</span>
                    </div>
                    <div class="clients-item  government oil" id="client534">
                        <img src="/img/p/clients/clients-logo/transneftenergo.svg" alt="Транснефтьэнерго"
                             title="Транснефтьэнерго" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">16</span><span style="display: none"
                                                                                          class="sortoil">1</span>
                    </div>
                    <div class="clients-item  oil" id="client535">
                        <img src="/img/p/clients/clients-logo/besk-logo.svg" alt="Башкирская электросетевая компания"
                             title="Башкирская электросетевая компания" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortoil">14</span>
                    </div>
                    <div class="clients-item  it it-500" id="client536">
                        <img src="/img/p/clients/clients-logo/liis.svg" alt="ЛИИС Инженерные решения"
                             title="ЛИИС Инженерные решения" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">119</span><span style="display: none"
                                                                                   class="sortit-500">63</span>
                    </div>
                    <div class="clients-item  service develop" id="client537">
                        <img src="/img/p/clients/clients-logo/parallaks-povolzhye.svg" alt="Параллакс Поволжье"
                             title="Параллакс Поволжье" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">18</span><span style="display: none"
                                                                                       class="sortdevelop">48</span>
                    </div>
                    <div class="clients-item  bank" id="client538">
                        <img src="/img/p/clients/clients-logo/houm-bank.svg" alt="Хоум Банк" title="Хоум Банк"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">28</span>
                    </div>
                    <div class="clients-item  transportation" id="client539">
                        <img src="/img/p/clients/clients-logo/svo.svg" alt="Международный аэропорт Шереметьево"
                             title="Международный аэропорт Шереметьево" style="max-width: 120px" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorttransportation">8</span>
                    </div>
                    <div class="clients-item  leasing" id="client540">
                        <img src="/img/p/clients/clients-logo/deltaLizing.svg" alt="ДельтаЛизинг" title="ДельтаЛизинг"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortleasing">8</span>
                    </div>
                    <div class="clients-item  company food_production" id="client541">
                        <img src="/img/p/clients/clients-logo/maslenitsa.png" alt="Масленица" title="Масленица"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">57</span><span style="display: none"
                                                                                       class="sortfood_production">21</span>
                    </div>
                    <div class="clients-item  nofood moda" id="client542">
                        <img src="/img/p/clients/clients-logo/familia.png" alt="Familia" title="Familia"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">43</span><span style="display: none"
                                                                                      class="sortmoda">9</span>
                    </div>
                    <div class="clients-item  company build" id="client543">
                        <img src="/img/p/clients/clients-logo/cemros.png" alt="ЦЕМРОС" title="ЦЕМРОС" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">58</span><span style="display: none"
                                                                                       class="sortbuild">12</span>
                    </div>
                    <div class="clients-item  nofood auto" id="client544">
                        <img src="/img/p/clients/clients-logo/brineks.jpg" alt="Бринэкс" title="Бринэкс"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">44</span><span style="display: none"
                                                                                      class="sortauto">7</span>
                    </div>
                    <div class="clients-item  oil" id="client545">
                        <img src="/img/p/clients/clients-logo/transneft-diaskan.png" alt="Транснефть Диаскан"
                             title="Транснефть Диаскан" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortoil">15</span>
                    </div>
                    <div class="clients-item  logist transportation" id="client546">
                        <img src="/img/p/clients/clients-logo/nefteTransServis.png" alt="НефтеТрансСервис"
                             title="НефтеТрансСервис" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortlogist">16</span><span style="display: none"
                                                                                      class="sorttransportation">9</span>
                    </div>
                    <div class="clients-item  company it it-5000" id="client547">
                        <img src="/img/p/clients/clients-logo/npp-prima.svg" alt="НПП ПРИМА" title="НПП ПРИМА"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">59</span><span style="display: none"
                                                                                       class="sortit">121</span><span
                                style="display: none" class="sortit-5000">17</span>
                    </div>
                    <div class="clients-item  fmcg food_production" id="client548">
                        <img src="/img/p/clients/clients-logo/big-lunch.svg" alt="Торговый дом Кухня без границ"
                             title="Торговый дом Кухня без границ" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfmcg">18</span><span style="display: none"
                                                                                    class="sortfood_production">22</span>
                    </div>
                    <div class="clients-item  fmcg company food_production" id="client549">
                        <img src="/img/p/clients/clients-logo/storck.svg" alt="Storck" title="Storck" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfmcg">19</span><span style="display: none"
                                                                                    class="sortcompany">60</span><span
                                style="display: none" class="sortfood_production">23</span>
                    </div>
                    <div class="clients-item  nofood" id="client550">
                        <img src="/img/p/clients/clients-logo/komus.jpg" alt="Комус" title="Комус" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortnofood">45</span>
                    </div>
                    <div class="clients-item  it it-5000 company" id="client551">
                        <img src="/img/p/clients/clients-logo/sitronics.svg" alt="Ситроникс" title="Ситроникс"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">122</span><span style="display: none"
                                                                                   class="sortit-5000">18</span><span
                                style="display: none" class="sortcompany">66</span>
                    </div>
                    <div class="clients-item  bank kazakhstan sng" id="client552">
                        <img src="/img/p/clients/clients-logo/bank-TsentrKredit.svg" alt="Банк ЦентрКредит"
                             title="Банк ЦентрКредит" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">29</span><span style="display: none"
                                                                                    class="sortkazakhstan">10</span><span
                                style="display: none" class="sortsng">15</span>
                    </div>
                    <div class="clients-item  service" id="client553">
                        <img src="/img/p/clients/clients-logo/paper-planes.svg" alt="Paper Planes" title="Paper Planes"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">19</span>
                    </div>
                    <div class="clients-item  logist" id="client554">
                        <img src="/img/p/clients/clients-logo/fm-logistic.svg" alt="FM Logistic" title="FM Logistic"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortlogist">17</span>
                    </div>
                    <div class="clients-item  it it-500" id="client555">
                        <img src="/img/p/clients/clients-logo/start-videoservis.svg" alt="Видеосервис START"
                             title="Видеосервис START" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">123</span><span style="display: none"
                                                                                   class="sortit-500">66</span>
                    </div>
                    <div class="clients-item  nofood auto" id="client556">
                        <img src="/img/p/clients/clients-logo/business-car.svg" alt="БИЗНЕС КАР" title="БИЗНЕС КАР"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortnofood">46</span><span style="display: none"
                                                                                      class="sortauto">8</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client557">
                        <img src="/img/p/clients/clients-logo/rosa-springs.svg" alt="Life Balance отель ROSA SPRINGS"
                             title="Life Balance отель ROSA SPRINGS" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">12</span><span style="display: none"
                                                                                      class="sorthoreca">19</span>
                    </div>
                    <div class="clients-item  develop service" id="client558">
                        <img src="/img/p/clients/clients-logo/pergaev-bureau.png" alt="Pergaev Bureau"
                             title="Pergaev Bureau" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">39</span><span style="display: none"
                                                                                       class="sortservice">28</span>
                    </div>
                    <div class="clients-item  agroprom" id="client559">
                        <img src="/img/p/clients/clients-logo/agrotek.svg" alt=" ГК Агротек" title=" ГК Агротек"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortagroprom">14</span>
                    </div>
                    <div class="clients-item  develop" id="client560">
                        <img src="/img/p/clients/clients-logo/natsproyektstroy.svg" alt="Нацпроектстрой"
                             title="Нацпроектстрой" style="max-height: 75px;" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">40</span>
                    </div>
                    <div class="clients-item  telekom" id="client561">
                        <img src="/img/p/clients/clients-logo/trikolor.svg" alt="Триколор" title="Триколор"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttelekom">9</span>
                    </div>
                    <div class="clients-item  media" id="client562">
                        <img src="/img/p/clients/clients-logo/avtorskiye-media.jpg" alt="Авторские Медиа"
                             title="Авторские Медиа" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmedia">51</span>
                    </div>
                    <div class="clients-item  company fmcg food_production" id="client563">
                        <img src="/img/p/clients/clients-logo/kukhnya-bez-granitsjpg.jpg"
                             alt="Торговый дом Кухня без границ" title="Торговый дом Кухня без границ" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">61</span><span style="display: none"
                                                                                       class="sortfmcg">21</span><span
                                style="display: none" class="sortfood_production">24</span>
                    </div>
                    <div class="clients-item  company" id="client564">
                        <img src="/img/p/clients/clients-logo/uralresurs.svg" alt="УралРесурс" title="УралРесурс"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">62</span>
                    </div>
                    <div class="clients-item  it it-500" id="client565">
                        <img src="/img/p/clients/clients-logo/mst.svg" alt="MST" title="MST" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">124</span><span style="display: none"
                                                                                   class="sortit-500">67</span>
                    </div>
                    <div class="clients-item  company fmcg" id="client566">
                        <img src="/img/p/clients/clients-logo/ktg.png" alt="KT&G" title="KT&G" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">63</span><span style="display: none"
                                                                                       class="sortfmcg">23</span>
                    </div>
                    <div class="clients-item  company food_production" id="client567">
                        <img src="/img/p/clients/clients-logo/allwin.svg" alt="Allwin" title="Allwin" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">64</span><span style="display: none"
                                                                                       class="sortfood_production">25</span>
                    </div>
                    <div class="clients-item  horeca" id="client568">
                        <img src="/img/p/clients/clients-logo/irb.kfc.png" alt="IRB.KFC" title="IRB.KFC"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthoreca">2</span>
                    </div>
                    <div class="clients-item  it it-500 company" id="client569">
                        <img src="/img/p/clients/clients-logo/c3solutions.svg" alt="C3 Solutions" title="C3 Solutions"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">125</span><span style="display: none"
                                                                                   class="sortit-500">68</span><span
                                style="display: none" class="sortcompany">65</span>
                    </div>
                    <div class="clients-item  it it-1000" id="client570">
                        <img src="/img/p/clients/clients-logo/mts-link.jpg" alt="Webinar Group" title="Webinar Group"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">126</span><span style="display: none"
                                                                                   class="sortit-1000">24</span>
                    </div>
                    <div class="clients-item  service oil" id="client571">
                        <img src="/img/p/clients/clients-logo/akros.png" alt="Нефтесервисная буровая компания АКРОС"
                             title="Нефтесервисная буровая компания АКРОС" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">25</span><span style="display: none"
                                                                                       class="sortoil">20</span>
                    </div>
                    <div class="clients-item  it it-500" id="client572">
                        <img src="/img/p/clients/clients-logo/ebk-system.svg" alt="ЭБК system" title="ЭБК system"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">127</span><span style="display: none"
                                                                                   class="sortit-500">69</span>
                    </div>
                    <div class="clients-item  farm" id="client573">
                        <img src="/img/p/clients/clients-logo/rigla.svg" alt="Ригла" title="Ригла" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfarm">21</span>
                    </div>
                    <div class="clients-item  oil" id="client574">
                        <img src="/img/p/clients/clients-logo/teboil.svg" alt="Teboil" title="Teboil" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortoil">16</span>
                    </div>
                    <div class="clients-item  other it it-500" id="client575">
                        <img src="/img/p/clients/clients-logo/pari.svg" alt="Букмекерская Компания ПАРИ"
                             title="Букмекерская Компания ПАРИ" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortother">5</span><span style="display: none"
                                                                                    class="sortit">138</span><span
                                style="display: none" class="sortit-500">76</span>
                    </div>
                    <div class="clients-item  metal" id="client578">
                        <img src="/img/p/clients/clients-logo/ugmk.png" alt="УГМК" title="УГМК" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortmetal">5</span>
                    </div>
                    <div class="clients-item  service" id="client579">
                        <img src="/img/p/clients/clients-logo/pravovoye-izmereniye.png" alt="Правовое измерение"
                             title="Правовое измерение" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">20</span>
                    </div>
                    <div class="clients-item  it it-1000" id="client580">
                        <img src="/img/p/clients/clients-logo/selectel.svg" alt="Selectel" title="Selectel"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">128</span><span style="display: none"
                                                                                   class="sortit-1000">25</span>
                    </div>
                    <div class="clients-item  other" id="client581">
                        <img src="/img/p/clients/clients-logo/soyuzmultfilm.svg" alt="Союзмультфильм"
                             title="Союзмультфильм" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortother">6</span>
                    </div>
                    <div class="clients-item  company" id="client582">
                        <img src="/img/p/clients/clients-logo/petrobumaga.png" alt="Петробумага" title="Петробумага"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">67</span>
                    </div>
                    <div class="clients-item  service" id="client583">
                        <img src="/img/p/clients/clients-logo/tripster.png" alt="Tripster" title="Tripster"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">21</span>
                    </div>
                    <div class="clients-item  hotels horeca" id="client584">
                        <img src="/img/p/clients/clients-logo/azimut.svg" alt="AZIMUT Hotels" title="AZIMUT Hotels"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthotels">13</span><span style="display: none"
                                                                                      class="sorthoreca">20</span>
                    </div>
                    <div class="clients-item  it it-1000 company" id="client585">
                        <img src="/img/p/clients/clients-logo/atom-auto.svg" alt="Атом" title="Атом" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">129</span><span style="display: none"
                                                                                   class="sortit-1000">26</span><span
                                style="display: none" class="sortcompany">68</span>
                    </div>
                    <div class="clients-item  service" id="client586">
                        <img src="/img/p/clients/clients-logo/get-experts.svg" alt="Get Experts" title="Get Experts"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">22</span>
                    </div>
                    <div class="clients-item  food_production company" id="client587">
                        <img src="/img/p/clients/clients-logo/virtex-food.png" alt="VIRTEX-FOOD" title="VIRTEX-FOOD"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfood_production">26</span><span style="display: none"
                                                                                               class="sortcompany">69</span>
                    </div>
                    <div class="clients-item  government logist" id="client588">
                        <img src="/img/p/clients/clients-logo/pochta-rossii.svg" alt="Почта России" title="Почта России"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortgovernment">17</span><span style="display: none"
                                                                                          class="sortlogist">18</span>
                    </div>
                    <div class="clients-item  logist" id="client589">
                        <img src="/img/p/clients/clients-logo/rulog.svg" alt="Rulog" title="Rulog" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortlogist">19</span>
                    </div>
                    <div class="clients-item  develop" id="client590">
                        <img src="/img/p/clients/clients-logo/glorax.svg" alt="Glorax" title="Glorax" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortdevelop">41</span>
                    </div>
                    <div class="clients-item  logist" id="client591">
                        <img src="/img/p/clients/clients-logo/fesco.svg" alt="FESCO" title="FESCO" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortlogist">20</span>
                    </div>
                    <div class="clients-item  service" id="client592">
                        <img src="/img/p/clients/clients-logo/ctp-aero.png" alt="Центр Технических Проектов"
                             title="Центр Технических Проектов" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">23</span>
                    </div>
                    <div class="clients-item  auto nofood" id="client593">
                        <img src="/img/p/clients/clients-logo/vostochnaya-tekhnika.png" alt="Восточная Техника"
                             title="Восточная Техника" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortauto">9</span><span style="display: none"
                                                                                   class="sortnofood">48</span>
                    </div>
                    <div class="clients-item  it it-500" id="client594">
                        <img src="/img/p/clients/clients-logo/gurtam.svg" alt="Gurtam" title="Gurtam" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">130</span><span style="display: none"
                                                                                   class="sortit-500">70</span>
                    </div>
                    <div class="clients-item  company food_production" id="client595">
                        <img src="/img/p/clients/clients-logo/renna.png" alt="Ренна" title="Ренна" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortcompany">70</span><span style="display: none"
                                                                                       class="sortfood_production">27</span>
                    </div>
                    <div class="clients-item  oil" id="client596">
                        <img src="/img/p/clients/clients-logo/krasnodargorgaza-new.jpg" alt="Краснодаргоргаз"
                             title="Краснодаргоргаз" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortoil">17</span>
                    </div>
                    <div class="clients-item  company" id="client597">
                        <img src="/img/p/clients/clients-logo/muromskiy-strelochnyy-zavod.png"
                             alt="Муромский стрелочный завод" title="Муромский стрелочный завод"
                             style="max-height: 60px" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">71</span>
                    </div>
                    <div class="clients-item  company nofood" id="client598">
                        <img src="/img/p/clients/clients-logo/askona-new.svg" alt="ТД Аскона" title="ТД Аскона"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">72</span><span style="display: none"
                                                                                       class="sortnofood">47</span>
                    </div>
                    <div class="clients-item  it it-500" id="client599">
                        <img src="/img/p/clients/clients-logo/hr-link.svg" alt="HRlink" title="HRlink" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortit">131</span><span style="display: none"
                                                                                   class="sortit-500">71</span>
                    </div>
                    <div class="clients-item  company" id="client600">
                        <img src="/img/p/clients/clients-logo/uglichkabel.png" alt="Угличкабель" title="Угличкабель"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">73</span>
                    </div>
                    <div class="clients-item  develop" id="client601">
                        <img src="/img/p/clients/clients-logo/alex-villas.jpg" alt="Alex Villas" title="Alex Villas"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">42</span>
                    </div>
                    <div class="clients-item  transportation" id="client602">
                        <img src="/img/p/clients/clients-logo/aeroflot.png" alt="Аэрофлот" title="Аэрофлот"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorttransportation">10</span>
                    </div>
                    <div class="clients-item  it it-500" id="client603">
                        <img src="/img/p/clients/clients-logo/fork-it.jpg" alt="Форк ИТ" title="Форк ИТ"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">132</span><span style="display: none"
                                                                                   class="sortit-500">72</span>
                    </div>
                    <div class="clients-item  service" id="client604">
                        <img src="/img/p/clients/clients-logo/fersol.jpg" alt="Fersol" title="Fersol" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortservice">24</span>
                    </div>
                    <div class="clients-item  it it-500" id="client605">
                        <img src="/img/p/clients/clients-logo/angara-security.svg" alt="Angara Security"
                             title="Angara Security" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">133</span><span style="display: none"
                                                                                   class="sortit-500">73</span>
                    </div>
                    <div class="clients-item  company oil" id="client606">
                        <img src="/img/p/clients/clients-logo/ridan.png" alt="Ридан трейд" title="Ридан трейд"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">74</span><span style="display: none"
                                                                                       class="sortoil">18</span>
                    </div>
                    <div class="clients-item  oil" id="client607">
                        <img src="/img/p/clients/clients-logo/vdk-energo.jpg" alt="ВДК Энерго" title="ВДК Энерго"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortoil">19</span>
                    </div>
                    <div class="clients-item  company food_production" id="client608">
                        <img src="/img/p/clients/clients-logo/lesaffre.svg" alt="Lesaffre" title="Lesaffre"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">75</span><span style="display: none"
                                                                                       class="sortfood_production">28</span>
                    </div>
                    <div class="clients-item  company it it-5000" id="client609">
                        <img src="/img/p/clients/clients-logo/s8-capital.jpg" alt="S8 Capital" title="S8 Capital"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">76</span><span style="display: none"
                                                                                       class="sortit">134</span><span
                                style="display: none" class="sortit-5000">19</span>
                    </div>
                    <div class="clients-item  it it-500" id="client610">
                        <img src="/img/p/clients/clients-logo/userGate.svg" alt="UserGate" title="UserGate"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">135</span><span style="display: none"
                                                                                   class="sortit-500">74</span>
                    </div>
                    <div class="clients-item  company build" id="client611">
                        <img src="/img/p/clients/clients-logo/lasselsberger-group.svg" alt="Lasselsberger Group"
                             title="Lasselsberger Group" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">77</span><span style="display: none"
                                                                                       class="sortbuild">13</span>
                    </div>
                    <div class="clients-item  bank" id="client612">
                        <img src="/img/p/clients/clients-logo/rosbank.svg" alt="Росбанк" title="Росбанк"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">30</span>
                    </div>
                    <div class="clients-item  company agroprom" id="client613">
                        <img src="/img/p/clients/clients-logo/grainrus.svg" alt="Грейнрус" title="Грейнрус"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">78</span><span style="display: none"
                                                                                       class="sortagroprom">15</span>
                    </div>
                    <div class="clients-item  develop" id="client614">
                        <img src="/img/p/clients/clients-logo/yedinyy-zakazchik.png" alt="ППК Единый заказчик"
                             title="ППК Единый заказчик" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">45</span>
                    </div>
                    <div class="clients-item  develop service" id="client615">
                        <img src="/img/p/clients/clients-logo/one-moscow.png" alt="One Moscow" title="One Moscow"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">44</span><span style="display: none"
                                                                                       class="sortservice">32</span>
                    </div>
                    <div class="clients-item  horeca" id="client616">
                        <img src="/img/p/clients/clients-logo/tanukifamily.svg" alt="ТанукиFamily" title="ТанукиFamily"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthoreca">3</span>
                    </div>
                    <div class="clients-item  develop" id="client617">
                        <img src="/img/p/clients/clients-logo/strana.png" alt="Страна Девелопмент"
                             title="Страна Девелопмент" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortdevelop">46</span>
                    </div>
                    <div class="clients-item  metal" id="client618">
                        <img src="/img/p/clients/clients-logo/sgmk.png" alt="Сибирская горно-металлургическая компания"
                             title="Сибирская горно-металлургическая компания" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmetal">6</span>
                    </div>
                    <div class="clients-item  other" id="client619">
                        <img src="/img/p/clients/clients-logo/russkiy-krab.svg" alt="Русского Краба"
                             title="Русского Краба" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortother">7</span>
                    </div>
                    <div class="clients-item  service" id="client620">
                        <img src="/img/p/clients/clients-logo/grinfin.jpg" alt="Гринфин" title="Гринфин"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">27</span>
                    </div>
                    <div class="clients-item  service" id="client621">
                        <img src="/img/p/clients/clients-logo/ayaks.jpg" alt="АЯКС" title="АЯКС" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortservice">29</span>
                    </div>
                    <div class="clients-item  service develop" id="client622">
                        <img src="/img/p/clients/clients-logo/pride.jpg" alt="ТПО Прайд" title="ТПО Прайд"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortservice">30</span><span style="display: none"
                                                                                       class="sortdevelop">47</span>
                    </div>
                    <div class="clients-item  agroprom company food_production" id="client623">
                        <img src="/img/p/clients/clients-logo/volkov-grupp.svg" alt="ВОЛКОВ ГРУПП" title="ВОЛКОВ ГРУПП"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortagroprom">16</span><span style="display: none"
                                                                                        class="sortcompany">79</span><span
                                style="display: none" class="sortfood_production">29</span>
                    </div>
                    <div class="clients-item  education" id="client624">
                        <img src="/img/p/clients/clients-logo/universal-university.svg" alt="Universal University"
                             title="Universal University" class="lazyload" loading="lazy">
                        <span style="display: none" class="sorteducation">8</span>
                    </div>
                    <div class="clients-item  farm company" id="client625">
                        <img src="/img/p/clients/clients-logo/boiron.jpg" alt="Boiron" title="Boiron" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sortfarm">22</span><span style="display: none"
                                                                                    class="sortcompany">80</span>
                    </div>
                    <div class="clients-item  company" id="client626">
                        <img src="/img/p/clients/clients-logo/novopackbb.svg" alt="Ново Пакаджинг ББ"
                             title="Ново Пакаджинг ББ" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">81</span>
                    </div>
                    <div class="clients-item  fmcg" id="client627">
                        <img src="/img/p/clients/clients-logo/gradient.svg" alt="Градиент" title="Градиент"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortfmcg">22</span>
                    </div>
                    <div class="clients-item  it it-500" id="client628">
                        <img src="/img/p/clients/clients-logo/sl-soft.png" alt="SL Soft" title="SL Soft"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">136</span><span style="display: none"
                                                                                   class="sortit-500">75</span>
                    </div>
                    <div class="clients-item  it it-1000" id="client629">
                        <img src="/img/p/clients/clients-logo/uralaytekh.jpg" alt="Уралайтех" title="Уралайтех"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">137</span><span style="display: none"
                                                                                   class="sortit-1000">27</span>
                    </div>
                    <div class="clients-item  eCommerce company" id="client630">
                        <img src="/img/p/clients/clients-logo/zetter.jpg" alt="Zetter" title="Zetter" class="lazyload"
                             loading="lazy">
                        <span style="display: none" class="sorteCommerce">20</span>
                    </div>
                    <div class="clients-item  bank" id="client631">
                        <img src="/img/p/clients/clients-logo/it-invest.png" alt="IT invest" title="IT invest"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">33</span>
                    </div>
                    <div class="clients-item  leasing" id="client632">
                        <img src="/img/p/clients/clients-logo/expoMobility.png" alt="ExpoMobility" title="ExpoMobility"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortleasing">9</span>
                    </div>
                    <div class="clients-item  media" id="client633">
                        <img src="/img/p/clients/clients-logo/sky-alliance.png" alt="SkyTec Media" title="SkyTec Media"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortmedia">52</span>
                    </div>
                    <div class="clients-item  horeca hotels" id="client634">
                        <img src="/img/p/clients/clients-logo/sibir-tsentr.png" alt="Сибирь Центр" title="Сибирь Центр"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthoreca">21</span><span style="display: none"
                                                                                      class="sorthotels">14</span>
                    </div>
                    <div class="clients-item  horeca" id="client635">
                        <img src="/img/p/clients/clients-logo/ts-group.png" alt="ТС ГРУПП" title="ТС ГРУПП"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sorthoreca">22</span>
                    </div>
                    <div class="clients-item  company build" id="client636">
                        <img src="/img/p/clients/clients-logo/cherepovetskiy-fanerno-mebelnyy-kombinat.png"
                             alt="Череповецкий фанерно-мебельный комбинат"
                             title="Череповецкий фанерно-мебельный комбинат" class="lazyload" loading="lazy">
                        <span style="display: none" class="sortcompany">82</span><span style="display: none"
                                                                                       class="sortbuild">14</span>
                    </div>
                    <div class="clients-item  it it-500" id="client637">
                        <img src="/img/p/clients/clients-logo/stellar.svg" alt="Stellar" title="Stellar"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortit">140</span><span style="display: none"
                                                                                   class="sortit-500">78</span>
                    </div>
                    <div class="clients-item  bank" id="client638">
                        <img src="/img/p/clients/clients-logo/otpbank.svg" alt="ОТП Банк" title="ОТП Банк"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">34</span>
                    </div>
                    <div class="clients-item  bank" id="client639">
                        <img src="/img/p/clients/clients-logo/act-broker.png" alt="АСТ Брокер" title="АСТ Брокер"
                             class="lazyload" loading="lazy">
                        <span style="display: none" class="sortbank">35</span>
                    </div>

                </div>
                <script>
                    $(function () {
                        $("a[data-filter]").each(function (index, element) {
                            let category = $(this).attr("data-filter");
                            let count = 0;
                            $(category).each(function (index, element) {
                                if ($(this).hasClass("clients-item")) {
                                    count++;
                                }
                            });
                            let template =
                                $(this).html() +
                                ' <span class="filter-num">(' +
                                count +
                                ")";
                            $(this).html(template);
                        });

                        $('[data-filter="*"]').text("Компании России");
                    });
                </script>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .main-content {
        padding-left: 0;
    }

    .clients-filter-wrapper {
        display: grid;
        grid-template-columns: auto auto auto auto;
        gap: 2rem;
        padding: 2rem 0;
    }

    .clients-filter {
        margin: 0;
        padding: 0;
    }

    @media (max-width: 1200px) {
        .clients-filter-wrapper {
            padding: 2rem 0;
            display: block;
            column-count: 2;
        }

        .clients-filter {
            display: inline-block;
            width: 100%;
        }

        .clients-filter .all {
            margin-bottom: 1.5rem;
        }
    }

    .main-content .clients-filter-item {
        list-style-type: none;
        text-align: left;
        padding: 0;
        margin: 0;
    }

    .clients-filter a {
        display: inline-block;
        position: relative;
        color: #777;
        font-size: 14px;
        white-space: nowrap;
        font-weight: 500;
        padding: 3px 8px;
        letter-spacing: -0.3px;
    }

    .clients-filter .filter-num {
        opacity: 0.5;
    }

    .clients-filter a:after {
        content: "";
        border-bottom: 2px dotted #61c13a;
        height: 2px;
        display: inline-block;
        position: absolute;
        bottom: 1px;
        left: 0;
        margin: 0 5px;
        right: 0;
    }

    .clients-filter a:hover {
        text-decoration: none;
        background: #61c13a;
        color: #fff;
        border-radius: 3px;
    }

    .clients-filter a.current {
        background: #61c13a;
        color: #f9f9f9;
        border-radius: 3px;
    }

    .clients-container {
        display: flex;
        flex-flow: row wrap;
        justify-content: space-between;
        margin-bottom: 2rem;
    }

    .clients-item {
        flex: 0 0 20%;
        margin-top: 12px;
        width: 150px !important;
        height: 78px !important;
        cursor: pointer;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .clients-item::before {
        content: "";
        position: absolute;
        width: calc(100% - 12px);
        height: calc(100% - 4px);
        border: 1px solid #777;
        border-radius: 8px;
    }

    .clients-container:hover img {
        filter: grayscale(0);
    }

    .clients-item img {
        padding: 0;
        margin: auto;
        max-width: inherit;
        width: auto;
        max-height: 50px;
        max-width: 120px;
    }

    .clients-container img {
        transition: all 0.2s ease-in;
        filter: grayscale(1);
    }

    .clients-filter.clients-filter_left {
        height: 0;
        visibility: hidden;
        transition: all 0.5s ease-in-out;
        transform-origin: left top;
        transform: scaleY(0);
    }

    .isotope-hidden.isotope-item {
        pointer-events: none;
        z-index: 1;
    }

    .isotope,
    .isotope .isotope-item {
        -webkit-transition-duration: 0.8s;
        -moz-transition-duration: 0.8s;
        transition-duration: 0.8s;
    }

    .isotope {
        -webkit-transition-property: height, width;
        -moz-transition-property: height, width;
        transition-property: height, width;
    }

    .isotope .isotope-item {
        -webkit-transition-property: -webkit-transform, opacity;
        -moz-transition-property: -moz-transform, opacity;
        transition-property: transform, opacity;
    }

    /*
	.clients-item.media img ,
	.clients-item.pressa img,
	.clients-item.tv img,
	.clients-item.radio img{
	    padding: 15px;
	}
	*/
    @media (max-width: 1200px) {
        .clients-col {
            max-width: 780px;
        }

        .clients-col .main-content {
            padding-left: 0;
        }
    }

    @media (max-width: 767px) {
        .clients-filter a:hover {
            color: #777;
            background: none;
        }

        .clients-filter a.current {
            background: #61c13a;
            border: 1px solid #61c13a;
            color: #f9f9f9;
        }

        .clients-container {
            max-width: 300px;
            margin: 0 auto;
        }
    }

    .clients-filter-mobile {
        max-width: 320px;
        margin: 2rem auto 0;
        padding: 1rem 1rem 4rem;
        border-radius: 12px;
        background-color: #f8f8f8;
    }

    .clients-filter-mobile p {
        margin-bottom: 0.5rem;
        font-size: 12px;
        font-weight: bold;
    }

    @media (max-width: 576px) {
        .clients-filter-wrapper {
            display: none;
        }

        #title_1 + p {
            text-align: center;
        }
    }

    @media (min-width: 576px) {
        .clients-filter-mobile {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .clients-filter-mobile p {
            font-size: 1rem;
            color: #fff;
            font-weight: normal;
        }

        .clients-filter-mobile {
            background-color: #fff;
            max-width: 100%;
            margin: 2rem auto 0;
            padding: 1rem 21px 64px;
            border-radius: 10px;
            background-color: #46A758;
        }

        .nice-select {
            font-size: 1rem;
        }
    }

</style>

<script type="text/javascript">
    $(window).ready(function () {
        $.getScript("/jquery/isotope.pkgd.js", function (data, textStatus, jqxhr) {
            var currentHash = window.location.hash.replace("#", "");
            var $container = $(".clients-container").isotope({
                filter: "*",
                animationOptions: {
                    duration: 750,
                    easing: "linear",
                    queue: false,
                },
            });

            if (currentHash.length > 0) {
                $(".clients-filter .current").removeClass("current");
                var currentElem = "." + currentHash;
                $(currentElem).addClass("current");

                var selector = $(currentElem).attr("data-filter");

                $(selector).addClass("current");
                // $('#title_1')[0].scrollIntoView({block: "center", behavior: "smooth"});

                var offset = $("#title_1").offset();

                setTimeout(function () {
                    $("html, body").animate(
                        {
                            scrollTop: offset.top,
                        },
                        1000
                    );
                }, 1000);

                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: "linear",
                        queue: false,
                    },
                });
            }

            $(".clients-filter a").click(function () {
                $(".clients-filter .current").removeClass("current");
                $(this).addClass("current");

                var selector = $(this).attr("data-filter");
                if (selector != "*") {
                    $(selector).addClass("current");
                } else {
                    $(".all").addClass("current");
                }

                $(".solution-banner.active, .galleries-item.active").removeClass(
                    "active"
                );
                if (selector != "*") $(".solution-banner" + selector).addClass("active");

                var sliders = selector.substring(1);

                if (sliders == "eCommerce")
                    $(".galleries-item.ecommerce").addClass("active");
                if (sliders == "nofood") $(".galleries-item.nofood").addClass("active");
                if (selector == "*") {
                    $(".galleries-item.all").addClass("active");
                }
                $container.isotope({
                    filter: selector,
                    getSortData: {
                        number: '.sort' + sliders + ' parseInt',
                    },
                    sortBy: 'number',
                    animationOptions: {
                        duration: 750,
                        easing: "linear",
                        queue: false,
                    },
                });
                $container.isotope('updateSortData').isotope();
                return false;
            });

            $("#clients-filter-select").on("change", function () {
                var selector = this.value;
                if (selector !== "all") {
                    var selector = "." + this.value;
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: "linear",
                            queue: false,
                        },
                    });
                } else {
                    $container.isotope({
                        filter: "*",
                        animationOptions: {
                            duration: 750,
                            easing: "linear",
                            queue: false,
                        },
                    });
                }
            });
        });
    });
</script>

<section class="galleries">
    <div class="galleries-item ecommerce">
        <section class="gallery gallery--desktop">
            <div class="slider-photo">
                <div>
                    <div href="/" class="insert-block">
                        <h3>Опрос <span>в компании</span></h3>
                        <img src="/img/p/departments/sportmaster/sportmaster-logo.png"
                             title="Логотип компании Спортмастер" alt="Логотип компании спортмастер">
                        <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 62.59 18.83" width="60" height="18">
                <defs>
                  <style>
                    .cls-1 {
                        fill: #45494f;
                    }
                  </style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_1-2" data-name="Layer 1">
                    <path class="cls-1"
                          d="M.29,3.75C5.22,10.42,13,13.87,21,15.26c9.12,1.59,19,1.26,27.42-2.88A28.31,28.31,0,0,0,59.19,3.31C60.3,1.72,57.7.22,56.6,1.79,52,8.38,44.12,11.9,36.29,12.83s-16.53.06-23.77-3.18A24,24,0,0,1,2.88,2.24C1.74.7-.86,2.2.29,3.75Z"></path>
                    <path class="cls-1"
                          d="M41.81,7.1A75.12,75.12,0,0,0,61.48,3L59.79.76a100.25,100.25,0,0,0-8.63,15.83,1.56,1.56,0,0,0,.54,2.05,1.51,1.51,0,0,0,2-.54A100.16,100.16,0,0,1,62.38,2.28,1.52,1.52,0,0,0,60.69.07a72.22,72.22,0,0,1-18.88,4c-1.91.15-1.93,3.15,0,3Z"></path>
                  </g>
                </g>
              </svg>
            </span>
                    </div>
                </div>
                <div>
                    <img src="/img/p/departments/sportmaster/1.jpg" title="Опрос в компании Спортмастер"
                         alt="Опрос в компании Спортмастер">
                </div>
                <div>
                    <img src="/img/p/departments/sportmaster/2.jpg" title="Опрос в компании Спортмастер"
                         alt="Опрос в компании Спортмастер">
                </div>
                <div>
                    <img src="/img/p/departments/sportmaster/3.jpg" title="Опрос в компании Спортмастер"
                         alt="Опрос в компании Спортмастер">
                </div>
                <div>
                    <div href="/" class="insert-block">
                        <h3>Опрос <span>в компании</span></h3>
                        <img src="/img/p/departments/sbermarket/sbermarket-logo.png" title="Логотип сбермаркет"
                             alt="Логотип Сбермаркет">
                        <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 62.59 18.83" width="60" height="18">
                <defs>
                  <style>
                    .cls-1 {
                        fill: #45494f;
                    }
                  </style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_1-2" data-name="Layer 1">
                    <path class="cls-1"
                          d="M.29,3.75C5.22,10.42,13,13.87,21,15.26c9.12,1.59,19,1.26,27.42-2.88A28.31,28.31,0,0,0,59.19,3.31C60.3,1.72,57.7.22,56.6,1.79,52,8.38,44.12,11.9,36.29,12.83s-16.53.06-23.77-3.18A24,24,0,0,1,2.88,2.24C1.74.7-.86,2.2.29,3.75Z"></path>
                    <path class="cls-1"
                          d="M41.81,7.1A75.12,75.12,0,0,0,61.48,3L59.79.76a100.25,100.25,0,0,0-8.63,15.83,1.56,1.56,0,0,0,.54,2.05,1.51,1.51,0,0,0,2-.54A100.16,100.16,0,0,1,62.38,2.28,1.52,1.52,0,0,0,60.69.07a72.22,72.22,0,0,1-18.88,4c-1.91.15-1.93,3.15,0,3Z"></path>
                  </g>
                </g>
              </svg>
            </span>
                    </div>
                </div>
                <div>
                    <img src="/img/p/departments/sbermarket/1.jpg" title="Опрос в компании Сбермаркет"
                         alt="Опрос в компании Сбермаркет">
                </div>
                <div>
                    <img src="/img/p/departments/sbermarket/2.jpg" title="Опрос в компании Сбермаркет"
                         alt="Опрос в компании Сбермаркет">
                </div>
                <div>
                    <img src="/img/p/departments/sbermarket/3.jpg" title="Опрос в компании Сбермаркет"
                         alt="Опрос в компании Сбермаркет">
                </div>
                <div>
                    <img src="/img/p/departments/sbermarket/4.jpg" title="Опрос в компании Сбермаркет"
                         alt="Опрос в компании Сбермаркет">
                </div>
            </div>
        </section>
    </div>

    <div class="galleries-item nofood">
        <section class="gallery gallery--desktop">
            <div class="slider-photo">
                <div>
                    <div class="insert-block">
                        <h3>Опрос <span>в компании</span></h3>
                        <img src="/img/p/departments/sportmaster/sportmaster-logo.png"
                             title="Логотип компании Спортмастер" alt="Логотип компании Спортмастер">
                        <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 62.59 18.83" width="60" height="18">
                <defs>
                  <style>
                    .cls-1 {
                        fill: #45494f;
                    }
                  </style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_1-2" data-name="Layer 1">
                    <path class="cls-1"
                          d="M.29,3.75C5.22,10.42,13,13.87,21,15.26c9.12,1.59,19,1.26,27.42-2.88A28.31,28.31,0,0,0,59.19,3.31C60.3,1.72,57.7.22,56.6,1.79,52,8.38,44.12,11.9,36.29,12.83s-16.53.06-23.77-3.18A24,24,0,0,1,2.88,2.24C1.74.7-.86,2.2.29,3.75Z"></path>
                    <path class="cls-1"
                          d="M41.81,7.1A75.12,75.12,0,0,0,61.48,3L59.79.76a100.25,100.25,0,0,0-8.63,15.83,1.56,1.56,0,0,0,.54,2.05,1.51,1.51,0,0,0,2-.54A100.16,100.16,0,0,1,62.38,2.28,1.52,1.52,0,0,0,60.69.07a72.22,72.22,0,0,1-18.88,4c-1.91.15-1.93,3.15,0,3Z"></path>
                  </g>
                </g>
              </svg>
            </span>
                    </div>
                </div>
                <div>
                    <img src="/img/p/departments/sportmaster/3.jpg" title="Опрос в компании Спортмастер"
                         alt="Опрос в компании Спортмастер">
                </div>
                <div>
                    <img src="/img/p/departments/sportmaster/1.jpg" title="Опрос в компании Спортмастер"
                         alt="Опрос в компании Спортмастер">
                </div>
                <div>
                    <img src="/img/p/departments/sportmaster/2.jpg" title="Опрос в компании Спортмастер"
                         alt="Опрос в компании Спортмастер">
                </div>

                <div>
                    <div class="insert-block">
                        <h3>Опрос <span>в компании</span></h3>
                        <img src="/img/p/departments/childworld/child-world-logo.png" title="Логотип Детский мир"
                             alt="Логотип Детский мир">
                        <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 62.59 18.83" width="60" height="18">
                <defs>
                  <style>
                    .cls-1 {
                        fill: #45494f;
                    }
                  </style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_1-2" data-name="Layer 1">
                    <path class="cls-1"
                          d="M.29,3.75C5.22,10.42,13,13.87,21,15.26c9.12,1.59,19,1.26,27.42-2.88A28.31,28.31,0,0,0,59.19,3.31C60.3,1.72,57.7.22,56.6,1.79,52,8.38,44.12,11.9,36.29,12.83s-16.53.06-23.77-3.18A24,24,0,0,1,2.88,2.24C1.74.7-.86,2.2.29,3.75Z"></path>
                    <path class="cls-1"
                          d="M41.81,7.1A75.12,75.12,0,0,0,61.48,3L59.79.76a100.25,100.25,0,0,0-8.63,15.83,1.56,1.56,0,0,0,.54,2.05,1.51,1.51,0,0,0,2-.54A100.16,100.16,0,0,1,62.38,2.28,1.52,1.52,0,0,0,60.69.07a72.22,72.22,0,0,1-18.88,4c-1.91.15-1.93,3.15,0,3Z"></path>
                  </g>
                </g>
              </svg>
            </span>
                    </div>
                </div>
                <div>
                    <img src="/img/p/departments/childworld/1.jpg" title="Опрос в компании Детский мир"
                         alt="Опрос в компании Детский мир">
                </div>
                <div>
                    <img src="/img/p/departments/childworld/2.jpg" title="Опрос в компании Детский мир"
                         alt="Опрос в компании Детский мир">
                </div>
                <div>
                    <img src="/img/p/departments/childworld/3.jpg" title="Опрос в компании Детский мир"
                         alt="Опрос в компании Детский мир">
                </div>
                <div>
                    <img src="/img/p/departments/childworld/4.jpg" title="Опрос в компании Детский мир"
                         alt="Опрос в компании Детский мир">
                </div>
            </div>
        </section>
    </div>

    <div class="galleries-item all active">
        <section class="gallery gallery--desktop">
            <div class="slider-photo">
                <div>
                    <div class="insert-block">
                        <h3>Опрос <span>в компании</span></h3>
                        <img src="/img/p/departments/ugmk/ugmk.png" alt="UGMK логотип">
                        <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 62.59 18.83" width="60" height="18">
                <defs>
                  <style>
                    .cls-1 {
                        fill: #45494f;
                    }
                  </style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_1-2" data-name="Layer 1">
                    <path class="cls-1"
                          d="M.29,3.75C5.22,10.42,13,13.87,21,15.26c9.12,1.59,19,1.26,27.42-2.88A28.31,28.31,0,0,0,59.19,3.31C60.3,1.72,57.7.22,56.6,1.79,52,8.38,44.12,11.9,36.29,12.83s-16.53.06-23.77-3.18A24,24,0,0,1,2.88,2.24C1.74.7-.86,2.2.29,3.75Z"></path>
                    <path class="cls-1"
                          d="M41.81,7.1A75.12,75.12,0,0,0,61.48,3L59.79.76a100.25,100.25,0,0,0-8.63,15.83,1.56,1.56,0,0,0,.54,2.05,1.51,1.51,0,0,0,2-.54A100.16,100.16,0,0,1,62.38,2.28,1.52,1.52,0,0,0,60.69.07a72.22,72.22,0,0,1-18.88,4c-1.91.15-1.93,3.15,0,3Z"></path>
                  </g>
                </g>
              </svg>
            </span>
                    </div>
                </div>
                <div>
                    <img src="/img/p/departments/ugmk/1.jpg" title="Опрос в компании UGMK" alt="Опрос в компании UGMK">
                </div>
                <div>
                    <img src="/img/p/departments/ugmk/2.jpg" title="Опрос в компании UGMK" alt="Опрос в компании UGMK">
                </div>
                <div>
                    <img src="/img/p/departments/ugmk/3.jpg" title="Опрос в компании UGMK" alt="Опрос в компании UGMK">
                </div>
                <div>
                    <img src="/img/p/departments/ugmk/4.jpg" title="Опрос в компании UGMK" alt="Опрос в компании UGMK">
                </div>
                <div>
                    <img src="/img/p/departments/ugmk/5.jpg" title="Опрос в компании UGMK" alt="Опрос в компании UGMK">
                </div>

                <div>
                    <div class="insert-block">
                        <h3>Опрос <span>в компании</span></h3>
                        <img src="/img/p/departments/sportmaster/sportmaster-logo.png"
                             alt="Логотип компании Спортмастер" title="Логотип компании Спортмастер">
                        <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 62.59 18.83" width="60" height="18">
                <defs>
                  <style>
                    .cls-1 {
                        fill: #45494f;
                    }
                  </style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_1-2" data-name="Layer 1">
                    <path class="cls-1"
                          d="M.29,3.75C5.22,10.42,13,13.87,21,15.26c9.12,1.59,19,1.26,27.42-2.88A28.31,28.31,0,0,0,59.19,3.31C60.3,1.72,57.7.22,56.6,1.79,52,8.38,44.12,11.9,36.29,12.83s-16.53.06-23.77-3.18A24,24,0,0,1,2.88,2.24C1.74.7-.86,2.2.29,3.75Z"></path>
                    <path class="cls-1"
                          d="M41.81,7.1A75.12,75.12,0,0,0,61.48,3L59.79.76a100.25,100.25,0,0,0-8.63,15.83,1.56,1.56,0,0,0,.54,2.05,1.51,1.51,0,0,0,2-.54A100.16,100.16,0,0,1,62.38,2.28,1.52,1.52,0,0,0,60.69.07a72.22,72.22,0,0,1-18.88,4c-1.91.15-1.93,3.15,0,3Z"></path>
                  </g>
                </g>
              </svg>
            </span>
                    </div>
                </div>
                <div>
                    <img src="/img/p/departments/sportmaster/3.jpg" title="Опрос в компании Спортмастер"
                         alt="Опрос в компании Спортмастер">
                </div>
                <div>
                    <img src="/img/p/departments/sportmaster/1.jpg" title="Опрос в компании Спортмастер"
                         alt="Опрос в компании Спортмастер">
                </div>
                <div>
                    <img src="/img/p/departments/sportmaster/2.jpg" title="Опрос в компании Спортмастер"
                         alt="Опрос в компании Спортмастер">
                </div>

                <div>
                    <div class="insert-block">
                        <h3>Опрос <span>в компании</span></h3>
                        <img src="/img/p/departments/childworld/child-world-logo.png" title="Логотип Детский мир"
                             alt="Логотип Детский мир">
                        <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 62.59 18.83" width="60" height="18">
                <defs>
                  <style>
                    .cls-1 {
                        fill: #45494f;
                    }
                  </style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_1-2" data-name="Layer 1">
                    <path class="cls-1"
                          d="M.29,3.75C5.22,10.42,13,13.87,21,15.26c9.12,1.59,19,1.26,27.42-2.88A28.31,28.31,0,0,0,59.19,3.31C60.3,1.72,57.7.22,56.6,1.79,52,8.38,44.12,11.9,36.29,12.83s-16.53.06-23.77-3.18A24,24,0,0,1,2.88,2.24C1.74.7-.86,2.2.29,3.75Z"></path>
                    <path class="cls-1"
                          d="M41.81,7.1A75.12,75.12,0,0,0,61.48,3L59.79.76a100.25,100.25,0,0,0-8.63,15.83,1.56,1.56,0,0,0,.54,2.05,1.51,1.51,0,0,0,2-.54A100.16,100.16,0,0,1,62.38,2.28,1.52,1.52,0,0,0,60.69.07a72.22,72.22,0,0,1-18.88,4c-1.91.15-1.93,3.15,0,3Z"></path>
                  </g>
                </g>
              </svg>
            </span>
                    </div>
                </div>
                <div>
                    <img src="/img/p/departments/childworld/1.jpg" title="Опрос в компании Детский мир"
                         alt="Опрос в компании Детский мир">
                </div>
                <div>
                    <img src="/img/p/departments/childworld/2.jpg" title="Опрос в компании Детский мир"
                         alt="Опрос в компании Детский мир">
                </div>
                <div>
                    <img src="/img/p/departments/childworld/3.jpg" title="Опрос в компании Детский мир"
                         alt="Опрос в компании Детский мир">
                </div>
                <div>
                    <img src="/img/p/departments/childworld/4.jpg" title="Опрос в компании Детский мир"
                         alt="Опрос в компании Детский мир">
                </div>

                <div>
                    <div href="/" class="insert-block">
                        <h3>Опрос <span>в компании</span></h3>
                        <img src="/img/p/departments/sbermarket/sbermarket-logo.png" title="Логотип компании Сбермаркет"
                             alt="Логотип компании Сбермаркет">
                        <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 62.59 18.83" width="60" height="18">
                <defs>
                  <style>
                    .cls-1 {
                        fill: #45494f;
                    }
                  </style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_1-2" data-name="Layer 1">
                    <path class="cls-1"
                          d="M.29,3.75C5.22,10.42,13,13.87,21,15.26c9.12,1.59,19,1.26,27.42-2.88A28.31,28.31,0,0,0,59.19,3.31C60.3,1.72,57.7.22,56.6,1.79,52,8.38,44.12,11.9,36.29,12.83s-16.53.06-23.77-3.18A24,24,0,0,1,2.88,2.24C1.74.7-.86,2.2.29,3.75Z"></path>
                    <path class="cls-1"
                          d="M41.81,7.1A75.12,75.12,0,0,0,61.48,3L59.79.76a100.25,100.25,0,0,0-8.63,15.83,1.56,1.56,0,0,0,.54,2.05,1.51,1.51,0,0,0,2-.54A100.16,100.16,0,0,1,62.38,2.28,1.52,1.52,0,0,0,60.69.07a72.22,72.22,0,0,1-18.88,4c-1.91.15-1.93,3.15,0,3Z"></path>
                  </g>
                </g>
              </svg>
            </span>
                    </div>
                </div>
                <div>
                    <img src="/img/p/departments/sbermarket/1.jpg" title="Опрос в компании Сбермаркет"
                         alt="Опрос в компании Сбермаркет">
                </div>
                <div>
                    <img src="/img/p/departments/sbermarket/2.jpg" title="Опрос в компании Сбермаркет"
                         alt="Опрос в компании Сбермаркет">
                </div>
                <div>
                    <img src="/img/p/departments/sbermarket/3.jpg" title="Опрос в компании Сбермаркет"
                         alt="Опрос в компании Сбермаркет">
                </div>
                <div>
                    <img src="/img/p/departments/sbermarket/4.jpg" title="Опрос в компании Сбермаркет"
                         alt="Опрос в компании Сбермаркет">
                </div>
            </div>
        </section>
    </div>
</section>

<style>
    .galleries-item {
        display: none;
    }

    .galleries-item.active {
        display: block;
    }

    .gallery {
        position: relative;
        max-height: 300px;
        overflow: hidden;
        margin: 5rem 0 0;
    }

    .gallery .slick-slide {
        height: 100%;
    }

    .gallery-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1;
        padding: 1rem;
        background-color: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: all 0.3s;
    }

    .gallery-arrow:hover {
        background-color: rgba(255, 255, 255, 0.9);
    }

    .gallery-arrow--prev {
        left: 2rem;
        transform: translateY(-50%) scale(-1, 1);
    }

    .gallery-arrow--next {
        right: 2rem;
    }

    .gallery-arrow--prev:hover {
        left: 1.5rem;
    }

    .gallery-arrow--next:hover {
        right: 1.5rem;
    }

    .slider-photo .slick-list,
    .slider-photo .slick-track {
        height: 100%;
    }

    .slider-photo img {
        width: 100%; /* Ширина изображений */
        height: 100%; /* Высота изображении */
        object-fit: cover; /* Вписываем фотографию в область */
    }


    .insert-block {
        position: relative;
        display: flex;
        width: 300px;
        min-height: 300px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
        background-color: #d3d6db;
        text-decoration: none;
        text-align: center;
        color: #212529;
        transition: background-color 0.3s;
    }

    .insert-block:before {
        content: "";
        display: block;
        position: absolute;
        width: 2rem;
        left: 0;
        top: 0;
        bottom: 0;
        background: -moz-linear-gradient(
                left,
                rgba(0, 0, 0, 0.65) 0%,
                rgba(0, 0, 0, 0.2) 19%,
                rgba(0, 0, 0, 0.15) 38%,
                rgba(0, 0, 0, 0.05) 64%,
                rgba(0, 0, 0, 0) 100%
        ); /* FF3.6-15 */
        background: -webkit-linear-gradient(
                left,
                rgba(0, 0, 0, 0.65) 0%,
                rgba(0, 0, 0, 0.2) 19%,
                rgba(0, 0, 0, 0.15) 38%,
                rgba(0, 0, 0, 0.05) 64%,
                rgba(0, 0, 0, 0) 100%
        ); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(
                to right,
                rgba(0, 0, 0, 0.65) 0%,
                rgba(0, 0, 0, 0.2) 19%,
                rgba(0, 0, 0, 0.15) 38%,
                rgba(0, 0, 0, 0.05) 64%,
                rgba(0, 0, 0, 0) 100%
        ); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a6000000', endColorstr='#00000000', GradientType=1); /* IE6-9 */
    }

    .insert-block h3 {
        font-size: 18px;
        text-align: center;
    }

    .insert-block h3 span {
        font-size: 16px;
        display: block;
    }

    .insert-block img {
        max-width: 60%;
        max-height: 120px;
        margin: 1rem 0;
        object-fit: contain;
    }

    .insert-block svg {
        max-width: 40%;
    }

    @media (max-width: 1600px) {
        .slider-photo {
            height: 300px;
        }

        .insert-block {
            height: 300px;
        }

        .insert-block h3 {
            margin: 0;
        }
    }

    @media (max-width: 1550px) {
        .slider-photo {
            height: 230px;
        }

        .insert-block {
            height: 230px;
            min-height: 230px;
        }
    }

    @media (max-width: 140px) {
        .slider-photo {
            height: 200px;
        }

        .insert-block {
            height: 200px;
            min-height: 200px;
        }
    }

    @media (max-width: 1380px) {
        .slider-photo {
            /*height: 170px;*/
        }
    }

</style>
<script type="text/javascript">
    $(window).on("load", function () {
        $(".slider-photo").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            variableWidth: true,
            swape: false,
            autoplaySpeed: 3000,
            swipeToSlide: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
    });
</script>

<div class="solution-banner agroprom">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие АПК уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и
                    клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="agroprom">Читать
                                                                                                                  отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/apk.jpg"
                 alt="Ведущие АПК уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие АПК уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner bank banks-top">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие банки уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и
                    клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="bank banks-top">Читать
                                                                                                                        отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/banks_top3.jpg"
                 alt="Ведущие банки уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие банки уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner develop">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие строительные компании уже воспользовались <b>комплексом решений</b> для управления опытом
                    сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="develop">Читать
                                                                                                                 отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/development_top2.jpg"
                 alt="Ведущие строительные компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие строительные компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner logist">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие логистические компании уже воспользовались <b>комплексом решений</b> для управления опытом
                    сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="logist">Читать
                                                                                                                отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/logistics_top_c.jpg"
                 alt="Ведущие логистические компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие логистические компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner farm">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие фармацевтические и медицинские компании уже воспользовались <b>комплексом решений</b> для
                    управления опытом сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="farm">Читать
                                                                                                              отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/medicine_top.jpg"
                 alt="Ведущие фармацевтические и медицинские компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие фармацевтические и медицинские компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner sber">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие компании относящиеся к экосистеме Сбера уже воспользовались <b>комплексом решений</b> для
                    управления опытом сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="sber">Читать
                                                                                                              отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/sberecosystem.jpg"
                 alt="Ведущие компании относящиеся к экосистеме Сбера уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие компании относящиеся к экосистеме Сбера уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner education">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие компании сферы образования и науки уже воспользовались <b>комплексом решений</b> для
                    управления опытом сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="education">Читать
                                                                                                                   отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/education_top_c.jpg"
                 alt="Ведущие компании сферы образования и науки уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие компании сферы образования и науки уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner oil metal">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие компании из нефтегазовой сферы и энергетики уже воспользовались <b>комплексом решений</b>
                    для управления опытом сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="oil metal">Читать
                                                                                                                   отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/company_top2.jpg"
                 alt="Ведущие компании из нефтегазовой сферы и энергетики уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие компании из нефтегазовой сферы и энергетики уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner company build">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие производственные компании уже воспользовались <b>комплексом решений</b> для управления
                    опытом сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="company build">Читать
                                                                                                                       отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/company_top2.jpg"
                 alt="Ведущие производственные компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие производственные компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner service">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Лидеры отрасли профессиональных услуг уже воспользовались <b>комплексом решений</b> для управления
                    опытом сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="service">Читать
                                                                                                                 отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/services_top_%D1%81.jpg"
                 alt="Лидеры отрасли профессиональных услуг уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Лидеры отрасли профессиональных услуг уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner insurance">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие страховые компании уже воспользовались <b>комплексом решений</b> для управления опытом
                    сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="insurance">Читать
                                                                                                                   отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/insurance_top_c.jpg"
                 alt="Ведущие страховые компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие страховые компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner telekom">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие телекоммуникационные компании уже воспользовались <b>комплексом решений</b> для управления
                    опытом сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="telekom">Читать
                                                                                                                 отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/telekom_top.jpg"
                 alt="Ведущие телекоммуникационные компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие телекоммуникационные компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner eCommerce">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие eCommerce-компании уже воспользовались <b> комплексом решений</b> для управления опытом
                    сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="eCommerce">Читать
                                                                                                                   отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/ecommerce_top.jpg"
                 alt="Ведущие eCommerce-компании уже воспользовались <b > комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие eCommerce-компании уже воспользовались <b > комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner it it-10 it-500 it-1000 it-5000 it-max">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие IT компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников
                    и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews"
                           data-category="it it-10 it-500 it-1000 it-5000 it-max">Читать отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/it_top.jpg"
                 alt="Ведущие IT компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие IT компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner food_production food nofood moda electronica">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие розничные компании уже воспользовались <b> комплексом решений</b> для управления опытом
                    сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews"
                           data-category="food_production food nofood moda electronica">Читать отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/retail_top2_c.jpg"
                 alt="Ведущие розничные компании уже воспользовались <b > комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие розничные компании уже воспользовались <b > комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner media rpt">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие медиа компании уже воспользовались <b>комплексом решений</b> для управления опытом
                    сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="media rpt">Читать
                                                                                                                   отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/media_top.jpg"
                 alt="Ведущие медиа компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие медиа компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner kazakhstan">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие компании Казахстана уже воспользовались <b>комплексом решений</b> для управления опытом
                    сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="kazakhstan">Читать
                                                                                                                    отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/kazakhstan.jpg"
                 alt="Ведущие компании Казахстана уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие компании Казахстана уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner fmcg">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие FMCG-компании уже воспользовались <b>комплексом решений</b> для управления опытом
                    сотрудников и клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="fmcg">Читать
                                                                                                              отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/fmcg.jpg"
                 alt="Ведущие FMCG-компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие FMCG-компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>
<div class="solution-banner other">
    <div class="container">
        <div class="row solution-banner__content">
            <div class="col-sm-0 col-lg-0"></div>
            <div class="col-sm-11 col-lg-10">
                <div class="solution-banner__text">
                    Ведущие компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и
                    клиентов.
                    <div class="solution-banner__button" style="display: flex; gap: 1.5rem;">
                        <a href="/clients/reviews/" target="_blank" class="read-reviews" data-category="other">Читать
                                                                                                               отзывы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-banner__bg">
        <div>
            <img src="/img/p/solutions/other.jpg"
                 alt="Ведущие компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 title="Ведущие компании уже воспользовались <b>комплексом решений</b> для управления опытом сотрудников и клиентов."
                 class="lazyload" loading="lazy">
        </div>
    </div>
</div>

<style media="screen">
    .solution-banner {
        margin: 0;
        position: relative;
        z-index: 10;
        overflow: hidden;
        background: #d9e4ea;
        display: none;
    }

    .solution-banner.active {
        display: block;
    }

    .solution-banner__bg {
        position: absolute;
        background: #d9e4ea;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
        overflow: hidden;
    }

    .solution-banner__bg div {
        position: absolute;
        top: 0;
        right: -21px;
        display: block;
        height: 100%;
        width: 790px;
        overflow: hidden;
    }

    .solution-banner__bg img {
        position: absolute;
        z-index: 0;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 2px;
        width: 102.87%;
        display: block;
    }

    .solution-banner__text {
        padding: 50px 220px 50px 40px;
        font-size: 18px;
        line-height: 1.2;
        letter-spacing: -0.019em;
    }

    .solution-banner__button {
        margin-top: 25px;
    }

    .solution-banner__button a[href="/"] {
        display: none;
    }

    .solution-banner__button a {
        display: inline-block;
        padding: 12px 12px;
        border: 1px solid #000;
        margin-left: -4px;
        font-size: 17px;
        line-height: 1.2;
        border-radius: 7px;
        color: #000;
    }

    .solution-banner__button a::after {
        content: "";
        display: inline-block;
        width: 11px;
        height: 11px;
        border-top: 2px solid #000;
        border-right: 2px solid #000;
        transform: rotate(45deg);
        margin-left: 10px;
    }

    .solution-banner__button a:hover {
        text-decoration: none;
    }

    .solution-banner__button a:hover::after {
        -webkit-animation: rotation 0.2s linear;
        -moz-animation: rotation 0.2s linear;
        -ms-animation: rotation 0.2s linear;
        animation: rotation 0.2s linear;
    }

    @-webkit-keyframes rotation {
        from {
            -webkit-transform: rotate(0deg);
        }
        to {
            -webkit-transform: rotate(359deg);
        }
    }

    @-moz-keyframes rotation {
        from {
            -moz-transform: rotate(0deg);
        }
        to {
            -moz-transform: rotate(359deg);
        }
    }

    @-ms-keyframes rotation {
        from {
            -ms-transform: rotate(0deg);
        }
        to {
            -ms-transform: rotate(359deg);
        }
    }

    @keyframes rotation {
        from {
            transform: rotate(0deg);
        }
        to {
            \transform: rotate(359deg);
        }
    }

    @media (max-width: 1200px) {
        .solution-banner__text {
            padding: 40px 370px 40px 40px;
        }
    }

    @media (max-width: 991px) {
        .solution-banner__text {
            padding-right: 180px;
        }

        .solution-banner__bg div {
            width: 690px;
            right: -40px;
        }
    }

    @media (max-width: 767px) {
        .solution-banner .container {
            max-width: unset;
        }

        .solution-banner__text {
            padding-right: 42%;
        }
    }

    @media (max-width: 576px) {
        .solution-banner {
            margin-bottom: -85px;
        }

        .solution-banner__bg {
            height: auto;
            position: relative;
        }

        .solution-banner__bg div {
            width: 100%;
            right: 0;
            height: auto;
            position: relative;
        }

        .solution-banner__bg img {
            display: none;
            width: 200vw;
            left: -100vw;
            top: 0;
            transform: none;
            position: relative;
        }

        .solution-banner__text {
            padding: 40px 20px;
            text-align: center;
        }
    }

    .slider-photo__arrow.slick-arrow {
        display: none !important;
    }

</style>

<script>
    $(function () {
        $('.read-reviews').on('click', function () {
            let category = $(this).attr('data-category')
            localStorage.setItem('currentCategory', category)
        })
    })
</script>

<!-- endrender clients/benchmarks/03-company-logo-->

<!-- render clients/benchmarks/04-b-green-->
<style>
    .quote-block-wrapper {
        background-color: #61c13a;
        box-shadow: 0 -1px 3px -1px rgb(0 0 0 / 50%) inset;
        border-top: 1px solid #6d9f3b;
    }

    .quote-block {
        padding: 38px 0 27px;
        display: grid;
        grid-template-columns: 20% auto;
        grid-gap: 40px;
        align-items: center;
        text-align: left;
        font-size: 18px;
        color: #fff;
    }

    .quote-block-text {
        line-height: 21px;
    }

    .quote-block-image {
        max-width: 132px;
        margin: 0;
    }

    @media (max-width: 768px) {
        .quote-block {
            grid-template-columns: 1fr;
        }

        .quote-block-image {
            display: none;
        }
    }

    .quote-block-footer {
        background-color: transparent;
        color: #fff;
    }

    .quote-block-footer {
        padding-top: 0;
    }

    .quote-block-footer dl strong {
        font-weight: 600;
    }

    .quote-block-footer dd {
        font-size: 11px;
    }

</style>

<div class="wide-container quote-block-wrapper">
    <div class="container">
        <div class="quote-block">
            <figure class="quote-block-image">
                <img src="/img/p/clients/photo.png" alt="" class="quote-block__img lazyload" loading="lazy">
            </figure>
            <article class="quote-block-content">
                <div class="quote-block-text">
                    <p>Каждый день компании обращаются в Happy Job, потому что мы сделали опросы увлекательными для
                       сотрудников и помогаем руководителям эффективно работать с изменениями. Если вы не нашли компании
                       вашей отрасли или вашу отрасль среди Бенчмарков, приглашаем вас стать нашим клиентом, и мы в
                       кратчайшие сроки пригласим ваших конкурентов на нашу платформу.</p>

                    <p>Мы гарантируем, что благодаря высокому качеству платформы и приоритетной поддержке, вы будете
                       застрахованы от неудач как в процессе исследования, так и во время внедрения мероприятий по
                       развитию вовлеченности.</p>
                    <p>
                        Несколько цифр о нас:<br>
                        <b>75%</b>участия в опросах, <b>98%</b> удовлетворенность
                        опросами сотрудников, <b>0.15%</b> отказов в опросах и
                        <b>98%</b> постоянство клиентской базы.
                    </p>
                </div>
                <footer class="quote-block-footer">
                    <dl>
                        <dt><strong>Елена Блинова</strong></dt>
                        <dd>Директор департамента исследований, Happy Job</dd>
                    </dl>
                </footer>
            </article>
        </div>
    </div>
</div>
<!-- endrender clients/benchmarks/04-b-green-->

<!-- render common/footer-->
<style>
    html.swal2-shown.swal2-height-auto,
    body.swal2-shown.swal2-height-auto {
        overflow: hidden;
    }

    .swal2-shown.swal2-height-auto .header-top,
    .swal2-shown.swal2-height-auto .header-menu-dop {
        padding-right: 1rem;
    }

    .swal2-title {
        display: flex !important;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
    }

    .modal-title-top {
        font-size: 1.7rem;
        display: flex;
        flex-direction: column;
        margin-top: 1.5rem;
        font-weight: bold;
    }

    .modal-product {
        font-size: 0.7em;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        letter-spacing: 3px;
    }

    .modal-product .modal-description {
        font-size: 0.7em;
        font-weight: normal;
        letter-spacing: 0px;
    }

    .form-input {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        margin-bottom: 1rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .swal2-container .swal2-confirm.swal2-styled {
        background: #f4515a;
    }

    .form-label {
        border-top: none;
        text-align: left;
        font-size: 14px;
        padding-bottom: 0.3rem;
    }

    .form-label:before {
        content: attr(title);
    }

    .form-label:not([title='Комментарий:']):after {
        content: '*';
        color: red;
        transform: translateY(-3px);
    }

    .button {
        display: inline-flex;
        font-size: clamp(
                0.8rem,
                0.7142857142857143rem + 0.4285714285714286vw,
                1.1rem
        );
        color: #fff !important;
        background-color: #f4515a;
        padding: 0.6rem 1rem 0.7rem;
        transition: color 0s, background-color 0s ease-in-out,
        border-color 0s ease-in-out, box-shadow 0.15s ease-in-out;
        box-shadow: 0 4px 0 #c63839 !important;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        line-height: 1;
        max-height: 50px;
        justify-content: center;
        align-items: center;
    }

    .button.-client {
        background-color: #61c13b;
        box-shadow: 0 4px 0 #46882c !important;
    }

    .button.-service {
        background-color: #355fe5;
        box-shadow: 0 4px 0 #213b8e !important;
    }

    .button.-feedbackx {
        background-color: #ffaa00;
        box-shadow: 0 4px 0 #c88600 !important;
        color: #000;
    }

    .button.-survey {
        background-color: #a5a5a5;
        box-shadow: 0 4px 0 #6c6c6c !important;
        color: #000;
    }

    .button:hover {
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
    }

    .btn.btn-3 + .button {
        transform: translateY(-1rem);
    }

    .b-top-title .button {
        max-width: 190px;
    }

    .swal2-footer .privacy-btn > a[data-href='/privacy-policy/']:first-child,
    .swal2-footer a[href='mailto:sales@happy-job.ru'] {
        color: var(--c-link) !important;
    }

    .swal2-footer {
        text-align: center;
        font-size: 14px !important;
    }

    .swal2-footer .privacy-btn > a[data-href='/privacy-policy/']:first-child {
        display: inline-flex;
        gap: 0.2rem;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
        cursor: pointer;
        transform: translateY(4px);
    }

    .swal2-footer
    .privacy-btn
    > a[data-href='/privacy-policy/']:first-child:before {
        content: '';
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--material-symbols' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M4 22V8h3V6q0-2.075 1.463-3.538Q9.925 1 12 1t3.538 1.462Q17 3.925 17 6v2h3v14ZM9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6Zm3 9q.825 0 1.413-.587Q14 15.825 14 15q0-.825-.587-1.413Q12.825 13 12 13q-.825 0-1.412.587Q10 14.175 10 15q0 .825.588 1.413Q11.175 17 12 17Z'%3E%3C/path%3E%3C/svg%3E");
        flex-basis: 16px;
        min-width: 16px;
        width: 16px;
        height: 16px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
        transform: translateY(-2px);
    }

    .swal2-footer a[href='mailto:sales@happy-job.ru'] {
        font-size: 2em;
    }

    .swal2-close {
        box-shadow: none !important;
    }

    .swal2-no-war {
        display: none !important;
        opacity: 0;
    }

    body > footer {
        background-color: #fff;
        padding-top: 0;
    }

    .footer ul {
        margin: 0;
        padding: 0;
    }

    .footer ul li {
        list-style-type: none;
    }

    .footer-main {
        padding: clamp(
                1.25rem,
                0.7142857142857143rem + 2.6785714285714284vw,
                3.125rem
        ) 0;
        background: #d2d7db;
        color: #171717;
        border-top-color: rgba(241, 241, 241, 0.8);
    }

    .footer-main a {
        color: var(--c-text);
        text-decoration: none;
    }

    .footer-main a:hover {
        text-decoration: underline;
    }

    .footer-row {
        display: flex;
        margin: 0 -2rem;
    }

    .footer-col {
        flex: 1;
        padding: 0 2rem;
    }

    .footer-col:nth-child(1) {
        max-width: 200px;
    }

    .footer-col:nth-child(1) li {
        margin: 0 0 21px;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 1;
    }

    .footer-col:nth-child(1) a {
        font-size: 15px;
    }

    .footer-col span {
        font-size: 14px;
        display: block;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 1;
    }

    .footer-col .menu ul {
        padding: 1rem 0 0 0.7rem;
    }

    .footer-col .menu > li {
        margin-bottom: 21px;
    }

    .footer-col .menu ul li {
        position: relative;
        font-weight: 400;
        line-height: 1;
        margin: 0 0 12px;
    }

    .footer-col .menu ul li:before {
        content: '';
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--octicon' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 16 16'%3E%3Cpath fill='%2361c13a' d='m6.427 4.427l3.396 3.396a.25.25 0 0 1 0 .354l-3.396 3.396A.25.25 0 0 1 6 11.396V4.604a.25.25 0 0 1 .427-.177z'%3E%3C/path%3E%3C/svg%3E");
        top: -2px;
        left: -16px;
        position: absolute;
        width: 12px;
        height: 16px;
        background-size: cover;
    }

    .footer-col .menu a {
        font-size: 14px;
    }

    .address {
        position: relative;
        padding-left: 30px;
        margin-top: 21px;
        font-style: normal;
        line-height: 20px;
    }

    .address:before {
        content: '';
        display: block;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5z'%3E%3C/path%3E%3C/svg%3E");
        top: 3px;
        left: 0;
        width: 8px;
        height: 14px;
        position: absolute;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .address p {
        font-size: 14px;
    }

    .address strong {
        padding-right: 5px;
        display: inline-block;
        line-height: 1.1;
        width: 100%;
        padding-top: 3px;
    }

    .address a[href*='tel'],
    .address a[href*='mailto'] {
        color: var(--carnation);
        font-weight: bold;
        display: block;
    }

    .footer-link {
        color: #606367;
        line-height: 1;
        font-size: 14px;
        display: inline-block;
        font-weight: 700;
        list-style: none;
        text-align: center;
        padding: 39px 0px;
    }

    @media (max-width: 992px) {
        .footer-link {
            margin: 0 20px 7px;
        }
    }

    @media (max-width: 576px) {
        .footer-link {
            padding: 20px 0px;
            width: 50%;
            margin: 0 auto;
        }

        .footer-link br {
            display: none;
        }
    }

    .footer-link a {
        display: block;
        color: #606367;
        font-size: 14px;
        text-decoration: none;
        transition: all 0.3s;
        cursor: default;
    }

    .footer-link a[href] {
        cursor: pointer;
    }

    @media (max-width: 576px) {
        .footer-link a {
            display: flex;
            flex-direction: column;
            color: #606367;
            font-size: 14px;
            padding: 0 1rem;
            text-decoration: none;
            transition: all 0.3s;
        }
    }

    .footer-link img {
        height: auto;
        margin: 0 auto 11px;
        max-width: 80px;
    }

    .footer-link a[href]:hover {
        transform: scale(1.1);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
    }

    .copyright {
        padding: 15px 0;
        position: relative;
        text-align: center;
        display: flex;
        align-items: center;
        float: left;
    }

    .copyright a img {
        width: 120px;
        height: auto;
        margin-right: 19px;
    }

    .copyright p {
        display: inline-block;
        position: relative;
        top: 1px;
        margin: 0;
    }

    .copyright__policy {
        color: var(--c-text);
        margin: 0 0 0 10px;
        text-decoration: none;
        -moz-text-decoration-color: rgb(162, 162, 162);
        -webkit-text-decoration-color: rgb(162, 162, 162);
        text-decoration-color: rgb(162, 162, 162);
        transition: all 0.3s;
    }

    .sitemap {
        text-align: center;
        padding: 15px 0;
        float: right;
    }

    .social {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    @media (max-width: 576px) {
        .social {
            margin-bottom: 4rem;
        }
    }

    .social a {
        display: inline-block;
        padding-right: 13px;
        padding-left: 13px;
        padding-top: 1px;
    }

    .social a i {
        display: inline-block;
        margin: 0px 0px 5px 0;
        padding: 1px 0 0;
        border-radius: 50%;
        overflow: visible;
        box-shadow: 0 0px 1px 0 rgb(0 0 0 / 30%);
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        transition: all 0.2s ease;
        background: #fff;
        border-radius: 100%;
        display: block;
        height: 26px;
        line-height: 26px;
        width: 26px;
        text-align: center;
        color: #333;
        text-decoration: none;
        left: 0;
    }

    .social a:hover i {
        background-color: var(--c-link);
        color: #ffffff;
    }

    .fa-vk:before {
        content: '\f189';
    }

    .fa-telegram:before {
        content: '\f2c6';
    }

    @media (max-width: 992px) {
        .copyright {
            flex-direction: column;
            float: none;
        }
    }

    @media (max-width: 576px) {
        .footer-row {
            flex-direction: column;
        }
    }

    .f-solutions li {
        text-transform: none;
    }

    @media (max-width: 1024px) {
        .footer-row {
            margin: 0 -1rem;
        }

        .footer-col {
            padding: 0 1rem;
        }
    }

</style>

<style>
    .videos {
        box-shadow: inset -2px 4px 17px rgb(0 0 0 / 10%);
    }

    .videos .splide {
        margin-bottom: -2rem;
    }

    .container.mainc ~ .videos {
        margin-top: 3rem;
    }

    .videos-link {
        position: relative;
        display: block;
        padding: 0 clamp(0.875rem, 0.7678571428571428rem + 0.5357142857142857vw, 1.25rem);
        cursor: pointer;
    }

    .videos-block {
        display: block;
        margin: 0 auto;
        text-align: center;
    }

    .videos-block:after {
        content: "";
        position: absolute;
        height: 227px;
        opacity: 0.7;
        left: 1rem;
        right: 1rem;
        margin: auto;
        transform: scale(1, 0.1);
        z-index: 0;
        top: 1rem;
        background: -moz-radial-gradient(
                center,
                ellipse cover,
                rgba(0, 0, 0, 0.5) 0%,
                rgba(0, 0, 0, 0) 68%,
                rgba(0, 0, 0, 0) 69%
        );
        /* FF3.6-15 */
        background: -webkit-radial-gradient(
                center,
                ellipse cover,
                rgba(0, 0, 0, 0.5) 0%,
                rgba(0, 0, 0, 0) 68%,
                rgba(0, 0, 0, 0) 69%
        );
        /* Chrome10-25,Safari5.1-6 */
        background: radial-gradient(
                ellipse at center,
                rgba(0, 0, 0, 0.5) 0%,
                rgba(0, 0, 0, 0) 68%,
                rgba(0, 0, 0, 0) 69%
        );
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
        /* IE6-9 fallback on horizontal gradient */
    }

    .videos .splide__track {
        padding: 0.5rem 0 0;
    }

    .splide__pagination__page {
        background: #dcdddf;
        display: inline-block;
        width: 16px;
        height: 16px;
        margin: 0 12px;
        opacity: 1;
        transition: transform 0.2s linear;
    }

    .splide__pagination__page.is-active {
        background: #47657d;
    }

    .videos-image-wrapper {
        position: relative;
        height: 130px;
        z-index: 2;
        display: block;
        border-radius: 10px;
        border: 1px solid rgba(0, 0, 0, 0.06);
        overflow: hidden;
        transform: scale(1, 1);
        transition: transform 0.3s;
        background-color: #f4f5f7;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--material-symbols' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%23666666' d='M12 17.5q1.875 0 3.188-1.312Q16.5 14.875 16.5 13q0-1.875-1.312-3.188Q13.875 8.5 12 8.5q-1.875 0-3.188 1.312Q7.5 11.125 7.5 13q0 1.875 1.312 3.188Q10.125 17.5 12 17.5ZM4 21q-.825 0-1.412-.587Q2 19.825 2 19V7q0-.825.588-1.412Q3.175 5 4 5h3.15L9 3h6l1.85 2H20q.825 0 1.413.588Q22 6.175 22 7v12q0 .825-.587 1.413Q20.825 21 20 21Z'%3E%3C/path%3E%3C/svg%3E");
        background-position: center center;
        background-repeat: no-repeat;
    }

    .videos-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .videos-link:hover .videos-image-wrapper {
        transform: scale(1.05, 1.05);
    }

    .videos-play-button {
        position: absolute;
        inset: 0;
        z-index: 3;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        opacity: 0;
    }

    .play-button {
        width: 55px;
        height: 55px;
    }

    .videos-caption {
        position: absolute;
        top: 100%;
        left: 1rem;
        right: 1rem;
        margin: 0;
        padding: clamp(
                0.875rem,
                0.7678571428571428rem + 0.5357142857142857vw,
                1.25rem
        ) 0;
    }

    .videos-heading {
        margin: 0;
        font-weight: normal;
        font-size: 14px;
        letter-spacing: -0.2px;
        line-height: 1.1;
        color: var(--c-text);
    }

    .play-circle {
        width: 100%;
        height: 100%;
        fill: #243642;
        opacity: 0.18;
    }

    .play-circle.white {
        filter: invert(100%);
    }

    .play-triangle {
        width: 100%;
        height: 100%;
        fill: #243642;
        max-width: 50px;
        max-height: 50px;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }

    .play-triangle.white {
        filter: invert(100%);
    }

    .splide__arrow {
        display: block;
        width: 54px;
        height: 50px;
        background-color: transparent;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        transition: background-image 0.3s, left 0.3s, right 0.3s;
    }

    .splide__arrow svg {
        display: none;
    }

    .splide__arrow--next {
        background-image: url("data:image/svg+xml, %3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%2343677f'%3E%3Cpath d='M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42c.39.39 1.02.39 1.41 0l6.59-6.59a.996.996 0 0 0 0-1.41l-6.58-6.6a.996.996 0 1 0-1.41 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z'%3E%3C/path%3E%3C/svg%3E");
    }

    .splide__arrow--prev {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%2343677f'%3E%3Cpath d='M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42a.996.996 0 0 0-1.41 0l-6.59 6.59a.996.996 0 0 0 0 1.41l6.59 6.59a.996.996 0 1 0 1.41-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1z'%3E%3C/path%3E%3C/svg%3E");
    }

    @media (min-width: 1024px) {
        .splide__arrow:disabled {
            display: none;
        }
    }

    .section-footer .slider-footer-arrow {
        display: none;
    }

    @media (max-width: 1200px) {
        .videos-block:after {
            top: 1rem;
        }
    }

    @media (max-width: 1024px) {
        .videos .splide__track {
            padding: 0.5rem 0 3rem;
        }

        .videos section.splide {
            /* max-width: 600px; */
            margin: 0 auto;
        }

        .videos-block:after {
            top: 1rem;
        }

        .videos .splide__pagination {
            bottom: 0rem;
        }

        .videos .splide__arrow {
            top: initial;
            bottom: -2rem;
        }
    }


    @media (max-width: 640px) {
        .videos-block:after {
            top: 1.2rem;
        }

        .videos .splide__arrow {
            bottom: -1.4rem;
        }

        .splide__pagination__page {
            width: 12px;
            height: 12px;
            margin: 0 5px;
        }
    }

    @media (max-width: 576px) {
        .splide__arrow {
            width: 2rem;
            height: 2rem;
        }

        .videos section.splide {
            max-width: 100%;
            margin: 0 auto;
        }

        .videos-link {
            padding: 0;
        }

        .videos-image-wrapper {
            height: 170px;
            max-height: 170px;
        }
    }
</style>

<section class="videos">
    <header class="section-header">
        <h2 class="section-title">Вебинары и видео</h2>
    </header>
    <div class="container">
        <section class="splide-webinars splide" aria-labelledby="carousel-heading">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2022-11-25</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/775030996">
                                    <img class="single-video-image" src="/img/video/previews/775030996.jpg"
                                         alt="Вовлечённость в вовлечённость">
                                </a>
                                <figcaption class="single-video-caption">
                                    Вовлечённость в вовлечённость
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2022-08-22</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/741869709">
                                    <img class="single-video-image" src="/img/video/previews/741869709.jpg"
                                         alt="Как достичь лучших HR-метрик развивая вовлеченность">
                                </a>
                                <figcaption class="single-video-caption">
                                    Как достичь лучших HR-метрик развивая вовлеченность
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2022-05-08</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/736779306">
                                    <img class="single-video-image" src="/img/video/previews/736779306.jpg"
                                         alt="Как правильно измерять и развивать лояльность и стать лучшим работодателем">
                                </a>
                                <figcaption class="single-video-caption">
                                    Как правильно измерять и развивать лояльность и стать лучшим работодателем
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2021-11-15</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/646129647">
                                    <img class="single-video-image" src="/img/video/previews/646129647.jpg"
                                         alt="Елена Блинова о платформе Happy Job">
                                </a>
                                <figcaption class="single-video-caption">
                                    Елена Блинова о платформе Happy Job
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2021-09-06</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/560760387">
                                    <img class="single-video-image" src="/img/video/previews/560760387.jpg"
                                         alt="Экономическая польза развития вовлеченности">
                                </a>
                                <figcaption class="single-video-caption">
                                    Экономическая польза развития вовлеченности
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2021-06-03</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/558544165">
                                    <img class="single-video-image" src="/img/video/previews/558544165.jpg"
                                         alt="Экономическая польза оценки лояльности">
                                </a>
                                <figcaption class="single-video-caption">
                                    Экономическая польза оценки лояльности
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2021-05-11</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/547971978">
                                    <img class="single-video-image" src="/img/video/previews/547971978.jpg"
                                         alt="Максим Потапенко о личном кабинете и конструкторе отчетов">
                                </a>
                                <figcaption class="single-video-caption">
                                    Максим Потапенко о личном кабинете и конструкторе отчетов
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="single-video-card">
                            <small style="display: none;">2020-09-24</small>
                            <figure class="single-video-picture">
                                <a class="single-video-link" data-fancybox="footer-videos"
                                   href="https://vimeo.com/461290977">
                                    <img class="single-video-image" src="/img/video/previews/461290977.jpg"
                                         alt="Зачем измерять вовлеченность и лояльность?">
                                </a>
                                <figcaption class="single-video-caption">
                                    Зачем измерять вовлеченность и лояльность?
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <footer class="section-footer">
        <a href="https://happy-inc.ru/video/" target="_blank" class="button-outline"
           onclick="ym(46152993,'reachGoal','look_all_videos')">Смотреть все видео</a>
    </footer>
</section>

<script>
    // var resDisplay = $(window).width();
    // var elemLen = $(".videos-item").length;
    // videoSlider(resDisplay);
    // $(document).on("click", ".videos-dot", function () {
    //   clickOnDot($(this));
    // });

    // function showControls(numDots, numElems) {
    //   $(".videos-dots").find(".videos-dot").remove();
    //   for (var n = 1; n <= numDots; n++) {
    //     $(".videos-dots").append(
    //       '<a class="videos-dot" data-start="' +
    //         (n * numElems - (numElems - 1)) +
    //         '" data-end="' +
    //         n * numElems +
    //         '" >'
    //     );
    //   }
    //   $(".videos-dot:first-child").addClass("is-active");
    //   $(".videos-arrow a").show();
    // }

    // function hideControls(numElems) {
    //   $(".videos-dots").find(".videos-dot").remove();
    //   $(".videos-arrow a").hide();
    // }

    // function videoReorder(numElems) {
    //   $(".videos-item").removeClass("is-active");
    //   $(".videos-item:lt(" + numElems + ")").addClass("is-active");
    //   $("#videos-list").attr("data-items", numElems);
    //   var numDots = Math.floor(elemLen / numElems);
    //   if (numDots > 1) {
    //     showControls(numDots, numElems);
    //   } else {
    //     hideControls();
    //   }
    // }

    // function videoSlider(resDisplay) {
    //   if (resDisplay >= 1025) {
    //     videoReorder(8);
    //   }
    //   if (resDisplay < 1025 && resDisplay >= 769) {
    //     videoReorder(6);
    //   }
    //   if (resDisplay < 769 && resDisplay >= 577) {
    //     videoReorder(4);
    //   }
    //   if (resDisplay < 577) {
    //     videoReorder(2);
    //   }
    // }

    // function goNext() {
    //   var slideLen = $(document).find("#videos-list").attr("data-items");
    //   $(".videos-item.is-active").addClass("temp").removeClass("is-active");
    //   var first = parseInt($(document).find(".temp").last().index()) + 2;
    //   var last;
    //   if (first >= elemLen) {
    //     first = 0;
    //     last = parseInt(first) + parseInt(slideLen);
    //     $(".videos-dot.is-active").removeClass("is-active");
    //     $(".videos-dot:first-child").first().addClass("is-active");
    //   } else {
    //     last = parseInt(first) + parseInt(slideLen) - 1;
    //     $(".videos-dot.is-active")
    //       .removeClass("is-active")
    //       .next()
    //       .addClass("is-active");
    //   }
    //   $(
    //     ".videos-item:nth-child(n+" + first + "):nth-child(-n+" + last + ")"
    //   ).each(function (i) {
    //     var box = $(this);
    //     setTimeout(function () {
    //       box.addClass("is-active");
    //     }, 50 * i);
    //   });
    //   $(".videos-item").removeClass("temp");
    // }

    // function goPrev() {
    //   var elemLen = $(".videos-item").length;
    //   var slideLen = $(document).find("#videos-list").attr("data-items");
    //   $(".videos-item.is-active").addClass("temp").removeClass("is-active");
    //   var last = parseInt($(document).find(".temp").first().index());
    //   var first = parseInt(last) - parseInt(slideLen) + 1;
    //   if (first <= 0) {
    //     last = elemLen;
    //     first = parseInt(last) - parseInt(slideLen) + 1;
    //     $(
    //       ".videos-item:nth-child(n+" + first + "):nth-child(-n+" + last + ")"
    //     ).each(function (i) {
    //       var box = $(this);
    //       setTimeout(function () {
    //         box.addClass("is-active");
    //       }, 50 * i);
    //     });
    //     $(".videos-item").removeClass("temp");
    //     $(".videos-dot.is-active").removeClass("is-active");
    //     $(".videos-dot:last-child").addClass("is-active");
    //   } else {
    //     $(
    //       ".videos-item:nth-child(n+" + first + "):nth-child(-n+" + last + ")"
    //     ).each(function (i) {
    //       var box = $(this);
    //       setTimeout(function () {
    //         box.addClass("is-active");
    //       }, 50 * i);
    //     });
    //     $(".videos-item").removeClass("temp");
    //     $(".videos-dot.is-active")
    //       .removeClass("is-active")
    //       .prev()
    //       .addClass("is-active");
    //   }
    // }

    // function clickOnDot(dot) {
    //   $(".videos-dot").removeClass("is-active");
    //   $(".videos-item.is-active").addClass("temp").removeClass("is-active");
    //   var first = parseInt(dot.attr("data-start"));
    //   var last = parseInt(dot.attr("data-end"));
    //   console.log(first + "__" + last);
    //   $(
    //     ".videos-item:nth-child(n+" + first + "):nth-child(-n+" + last + ")"
    //   ).each(function (i) {
    //     var box = $(this);
    //     setTimeout(function () {
    //       box.addClass("is-active");
    //     }, 50 * i);
    //   });
    //   dot.addClass("is-active");
    // }

    // $(window).on("resize", function () {
    //   resDisplay = $(window).width();
    //   // console.log(resDisplay);
    //   videoSlider(resDisplay);
    // });
    // $(".videos-prev").on("click", function () {
    //   goPrev();
    // });
    // $(".videos-next").on("click", function () {
    //   goNext();
    // });

</script>

<style>
    .testimonials-slider.testimonials-slider--large {
        height: 350px;
    }

    .testimonials-slider--large .testimonials-item {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
    }

    .testimonials-slider--large .testimonials-item::after {
        content: "";
        height: 280px;
        width: 1px;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--c-border);
    }

    .testimonials-wrapper {
        display: flex;
        align-items: center;
    }

    .testimonials-wrapper .slick-arrow {
        flex: 0;
        top: -110px;
    }

    .testimonials-wrapper .slick-dots {
        position: relative;
        padding: 0 0 0;
    }

    .testimonials-slider {
        position: relative;
        overflow: hidden;
        flex: 1;
        padding-bottom: 1rem;
    }

    @media (min-width: 992px) {
        .testimonials-slider {
            max-height: 350px;
        }
    }


    .testimonials-item {
        position: relative;
    }

    .testimonials {
        padding: 0 0 3px;
        margin: 0 auto;
    }

    .client-card {
        width: 91%;
    }

    .client-card.right-side {
        margin-left: auto;
    }

    .client-card.right-side:before {
        content: "";
        display: block;
        position: absolute;
        width: 1px;
        height: 280px;
        background-color: var(--c-border);
        top: 0;
        left: 0;
    }

    .client-card-link {
        display: block;
        height: 160px;
        overflow: hidden;
        margin-bottom: 38px;
        position: relative;
    }

    .client-card-image {
        border-radius: 10px;
        width: 100%;
        display: block;
        margin: 0 auto;
        object-fit: cover;
    }

    .client-card-link .icon-play {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .client-card-logo {
        height: 50px;
    }

    .client-card-logo {
        display: block;
        height: 100%;
        margin: 0 auto;
    }

    .client-card-caption {
        text-align: center;
        max-width: 300px;
        margin-left: auto;
    }

    .client-card-title {
        font-weight: 700;
        font-size: 14px;
        line-height: 1.2;
        margin: 0 0 1px;
    }

    .client-card-description {
        margin: 0;
        font-size: 11px;
        line-height: 1.2;
        letter-spacing: 0.37px;
    }

    @media (max-width: 1600px) {
        .testimonials-wrapper .slick-arrow {
            flex-basis: 40px;
            min-width: 40px;
        }
    }

    @media (max-width: 1440px) {
        .client-card-link {
            height: auto;
        }

        .client-card-title {
            font-size: 13px;
        }

        .client-card-description {
            font-size: 11px;
        }
    }

    @media (max-width: 993px) {
        .testimonials-wrapper .slick-arrow {
            display: none;
        }
    }

    @media (max-width: 769px) {
        .client-card {
            width: 100%;
            max-width: 100%;
        }

        .client-card-link {
            margin-bottom: 1rem;
        }

        .client-card.right-side:before {
            display: none;
        }

        .slick-arrow-prev {
            right: 10px;
        }

        .slick-arrow-prev:hover {
            right: 12px;
        }

        .slick-arrow-next {
            left: 10px;
        }

        .slick-arrow-next:hover {
            left: 12px;
        }

        .testimonials-wrapper {
            margin: 0 auto;
            flex-basis: calc(100vw - 100px);
            max-width: calc(100vw - 100px);
        }
    }

    @media (max-width: 767px) {
        .client-card.right-side {
            margin-left: initial;
            margin-top: 2.5rem;
        }
    }

    @media (max-width: 577px) {
        .testimonials-wrapper {
            margin: 0 auto 1rem;
            flex-basis: calc(100vw - 60px);
            max-width: calc(100vw - 60px);
        }

        .testimonials-wrapper .slick-dots span {
            width: 12px;
            max-width: 12px;
            height: 12px;
            min-width: 12px;
        }

        .testimonials-arrows-wrapper .slider-footer-arrow {
            margin-top: 40px;
        }

        .section-footer.testimonials-arrows-wrapper .slider-footer-arrow .slick-arrow {
            top: -7rem;
        }

        .testimonials {
            margin: 0 0 -1rem;
        }

        .testimonials-slider--large .testimonials-item {
            justify-content: flex-start;
        }

        .testimonials-wrapper .slick-dots {
            padding: 20px 0 0;
        }

        .testimonials-slider.testimonials-slider--large {
            height: 550px;
        }

    }

    .testimonials-wrapper .slick-dots span {
        padding: 0;
        width: 16px;
        max-width: 16px;
        height: 16px;
        min-width: 16px;
        border-radius: 10px;
        box-sizing: border-box;
        background-color: #666;
        cursor: pointer;
        border: 0;
        box-shadow: 0 0 0 0 #47657d;
        transition: all 0.3s linear;
    }

    .testimonials-wrapper .slick-dots span.swiper-pagination-bullet-active {
        background-color: #47657d;
    }
</style>
<section class="section">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title" style="display: flex; justify-content: center; align-items: baseline;">
                <span class="animated-counter"
                      style="margin-right: 1rem;font-size: clamp(1.563rem, 0.938rem + 3.125vw, 3.75rem); font-weight: 900;">194</span>
                отзывов клиентов
            </h2>
        </header>

        <div class="section-body slow">
            <div class="testimonials-wrapper">
                <a class="slick-arrow">
                    <b class="slick-arrow-prev"></b>
                </a>
                <div class="testimonials-slider testimonials-slider--large swiper">
                    <ul class="testimonials  swiper-wrapper">
                        <li class="testimonials-item  swiper-slide">
                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link"
                                                                        data-fancybox="footer-reviews"
                                                                        href="https://vimeo.com/659238688">
                                        <img class="single-video-image" src="/img/happy-job/reviews/vid_obi.jpg"
                                             alt="Оценка вовлеченности персонала в OBI Россия"><b
                                                class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/obi.png" loading="lazy"
                                                 alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Катарина Карасева</div>
                                            <p class="single-video-description">
                                                Старший менеджер по развитию бренда работодателя и
                                                внутренним коммуникациям OBI Россия
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link"
                                                                        data-fancybox="footer-reviews"
                                                                        href="https://vimeo.com/637913619">
                                        <img class="single-video-image"
                                             src="/img/happy-job/reviews/aliexpress-video_0.jpg"
                                             alt="Как работают с персоналом в AliExpress"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/aliexpress-logo_0.png"
                                                 loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Ирина Бебешина</div>
                                            <p class="single-video-description">
                                                Бизнес-партнер по управлению персоналом Департамента
                                                ИТ
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </li>
                        <li class="testimonials-item  swiper-slide">
                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link"
                                                                        data-fancybox="footer-reviews"
                                                                        href="https://vimeo.com/391176331">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_alfa.jpg"
                                             alt="АльфаСтрахование – Отзыв о платформе Happy Job"><b
                                                class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/alfa.png"
                                                 loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Дмитрий Попов</div>
                                            <p class="single-video-description">
                                                руководитель направления внутренних коммуникаций,
                                                АльфаСтрахование
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link"
                                                                        data-fancybox="footer-reviews"
                                                                        href="https://vimeo.com/586641979">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_evroplan.jpg"
                                             alt="Развитие вовлеченности персонала в ЛК Европлан"><b
                                                class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/europlan-1.png"
                                                 loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Анаит Говорина</div>
                                            <p class="single-video-description">
                                                директор департамента по работе с персоналом, ЛК
                                                "Европлан"
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </li>
                        <li class="testimonials-item  swiper-slide">
                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link"
                                                                        data-fancybox="footer-reviews"
                                                                        href="https://vimeo.com/390686185" tabindex="0">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_sky.jpg"
                                             alt="Skyeng – Отзыв о платформе Happy Job"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/skyeng.svg"
                                                 loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Полина Лаптева</div>
                                            <p class="single-video-description">
                                                руководитель отдела внутренних коммуникаций, Skyeng
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link"
                                                                        data-fancybox="footer-reviews"
                                                                        href="https://vimeo.com/396639819" tabindex="0">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_ingos_0.jpg"
                                             alt="Ингосстрах – Отзыв о платформе Happy Job"><b
                                                class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/ingo_0.png"
                                                 loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Алексей Алексапольский</div>
                                            <p class="single-video-description">
                                                Руководитель проекта по развитию персонала
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </li>
                    </ul>
                    <ul class="slick-dots" style="" role="tablist"></ul>
                </div>
                <a class="slick-arrow">
                    <b class="slick-arrow-next"></b>
                </a>
            </div>

        </div>
        <footer class="section-footer testimonials-arrows-wrapper">
            <div class="slider-footer-row">
                <div class="slider-footer-arrow">
                    <a class="slick-arrow"><b class="slick-arrow-prev"></b></a>
                </div>
                <div class="slider-footer-center">
                    <a href="https://happy-job.ru/clients/reviews/" target="_blank" class="button-outline"
                       onclick="ym(46152993,'reachGoal','look_all_reviews')">Смотреть все отзывы</a>
                </div>
                <div class="slider-footer-arrow">
                    <a class="slick-arrow"><b class="slick-arrow-next"></b></a>
                </div>
            </div>
        </footer>
    </div>
</section>

<script>
    $(function () {
        if ($(".testimonials").length) {

            const swiper = new Swiper(".testimonials-slider", {
                slidesPerView: 1,

                autoplay: {
                    delay: 5000,
                },

                pagination: {
                    el: ".slick-dots",
                    clickable: true,
                },

                navigation: {
                    nextEl: ".slick-arrow-next",
                    prevEl: ".slick-arrow-prev",
                }
            });
        }
    })
</script>

<!-- 12. Форма Протестируйте бесплатно -->
<style>
    .free-test {
        background-color: #DFEAEC;
        position: relative;
        padding: clamp(3.75rem, 3.178571428571429rem + 2.857142857142857vw, 5.75rem) 1rem 0;
    }

    .free-test-scheme {
        display: grid;
        grid-template-columns: 300px 1fr 217px;
        grid-template-rows: auto 1fr;
        grid-template-areas: 'photo content form' 'photo cite form';
        grid-column-gap: 6vw;
        grid-row-gap: clamp(1.5rem, 1.0714285714285714rem + 2.142857142857143vw, 3rem);
        max-width: 1120px;
        margin: 0 auto;
        justify-content: center;
        align-items: stretch;
    }

    .free-test-photo {
        position: relative;
        grid-area: photo;
        align-self: end;
        margin: 0;
    }

    .free-test-photo img {
        width: 100%;
        position: absolute;
        display: block;
        transform: scale(160%) translate(-30px, -73px);
        bottom: 0;
    }

    .free-test-content {
        grid-area: content;
    }

    .free-test-content .form-title {
        font-weight: 600;
        padding: 0;
        margin: 0 0 clamp(1.25rem, 1.1428571428571428rem + 0.5357142857142857vw, 1.625rem);
        font-size: clamp(1.625rem, 1.4464285714285714rem + 0.8928571428571428vw, 2.25rem);
        line-height: 1.05;
    }

    .free-test-content .form-title span {
        display: block;
        color: var(--c-button);
    }

    .free-test-content p,
    .free-test-content li {
        font-size: 14px;
    }

    .free-test-content ol {
        padding-left: 1rem;
    }

    .free-test-cite {
        grid-area: cite;
        padding-left: 60px;
    }

    @media (min-width: 1200px) {
        .free-test-content,
        .free-test-cite {
            margin-left: -2rem;
            margin-top: 0;
        }

        .free-test-cite {
            align-items: center;
        }

        .footer-form .button-default {
            width: 100%;
            margin-bottom: 1rem;
        }
    }

    .free-test-cite q {
        position: relative;
        display: block;
        margin-bottom: 1rem;
    }

    .free-test-cite q:before {
        content: '';
        position: absolute;
        left: -58px;
        height: 1px;
        width: 45px;
        top: 7px;
        display: block;
        background-color: var(--c-text);
    }

    .free-test-form {
        grid-area: form;
        padding-bottom: 3rem;
    }

    .free-test-form a {
        color: var(--c-link);
    }

    .free-test-form .c-form-label,
    .free-test-form .c-form h2 {
        display: none;
    }

    .privacy-policy a {
        color: #61c13a;
    }

    @media (min-width: 1199px) {
        .free-test-form {
            min-height: 666px;
        }
    }

    .footer-form-list {
        padding: 0;
        margin: 0;
    }

    .footer-form-item {
        margin-bottom: 7px;
        list-style-type: none;
    }

    .footer-form-item .parsley-errors-list {
        padding: 0;
    }

    .footer-form-item .parsley-custom-error-message {
        list-style-type: none;
        font-size: 9px;
        color: red;
    }

    .footer-form-item.-select {
        display: flex;
        flex-direction: column;
    }

    .footer-form-item.-select .parsley-errors-list {
        order: 3;
    }

    .footer-form-item.-select .nice-select {
        height: 33px;
        padding: 10px 20px 9px 11px;
        border-color: var(--c-border);
        font-size: 12.5px;
        line-height: 1;
    }

    .footer-form-item.-select .current {
        color: #313131;
    }

    .free-test-form select {
        height: 33px;
    }

    .free-test-form input,
    .free-test-form select,
    .free-test-form textarea {
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
    }

    .form-description {
        padding-left: 4px;
        font-size: 11px;
        margin: 15px 0 15px;
        letter-spacing: 0.2px;
    }

    .privacy-policy {
        margin: 0;
    }

    .privacy-policy a {
        font-size: 12px;
        text-decoration: none;
    }

    .privacy-policy i {
        position: relative;
        top: 5px;
        width: 13px;
        height: 13px;
        right: inherit;
        margin-right: 4px;
        float: left;
    }


    @media (max-width: 1201px) {
        .free-test-scheme {
            grid-template-columns: 200px 1fr 300px;
            grid-template-rows: auto auto;
            grid-template-areas: 'content content form' 'photo cite form';
            padding: 0 1rem;
        }

        .free-test-photo img {
            position: relative;
            display: block;
            transform: scale(100%) translate(0px, 0px);
        }

        .free-test-cite {
            align-self: center;
            padding-left: 0px;
        }

    }

    @media (max-width: 769px) {
        .free-test-scheme {
            grid-template-columns: auto auto;
            grid-template-rows: auto auto;
            grid-template-areas: 'content content' 'form form' 'photo cite';
        }

        .free-test-photo {
            transform: scale(140%) translate(-19%, -14%);
        }

        .free-test-cite {
            padding-bottom: 3rem;
        }

        .free-test-cite * {
            font-size: 14px;
        }

        .free-test-form {
            < < < < < < < 1 e5c8831e94792433c6e9bcacfcce86f3f5b67bb
            padding-bottom: 3rem;
        = = = = = = = padding-bottom: 1 rem;
        >>> >>> > bb7a9d4b1014bd501c8c40e6c104b0c7aa7b8657
        }

        .free-test-cite q:before {
            left: -30px;
            height: 1px;
            width: 20px;
        }
    }

</style>

<style>
    .page-footer {
        margin-bottom: 0;
    }

    .page-footer-wrapper {
        background-color: #d3d6db;
    }

    .page-footer-container {
        max-width: 1120px;
        margin-inline: auto;
    }

    .container.-subfooter {
        max-width: 1250px;
    }

    .container.-copyright {
        max-width: 1160px;
    }

    .footer-menu,
    .footer-submenu {
        margin: 0;
        padding: 0;
    }

    .footer-menu {
        margin-inline: -2rem;
    }

    .footer-menu {
        display: flex;
    }

    .footer-block,
    .footer-submenu-item {
        list-style-type: none;
    }

    .footer-block {
        padding: 28px 28px 48px;
        margin: 0;
    }

    .footer-block-header {
        display: block;
        text-transform: uppercase;
        color: rgba(0, 0, 0, 0.35);
        padding: 1.5rem 0;
        font-size: 15px;
        font-weight: 600;
        letter-spacing: 0.6px;
    }

    .footer-block.-contacts {
        position: relative;
        color: #fff;
        background-color: #636c72;
    }

    .footer-block.-contacts .footer-block-header {
        color: #c1c4c7;
    }

    .footer-block.-contacts > * {
        position: relative;
    }

    .footer-block.-contacts:before {
        content: '';
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        background-color: #636c72;
        width: 1000%;
    }

    .footer-block.-contacts a {
        color: #fff;
    }

    .page-footer-divider {
        margin: 0;
    }

    .footer-menu-block:nth-child(1) {
        flex-basis: 32%;
        max-width: 32%;
    }

    .footer-menu-block:nth-child(2) {
        flex-basis: 34%;
        max-width: 34%;
    }

    .footer-menu-block:nth-child(3) {
        flex-basis: 18%;
        min-width: 18%;
    }

    .footer-menu-block:nth-child(4) {
        flex-basis: 25.5%;
        max-width: 25.5%;
    }

    .footer-menu-block.footer-block.-contacts {
        padding-left: 65px;
    }

    .footer-submenu-item.-logos img {
        margin-bottom: 9px;
    }

    .footer-submenu-item.-logos small {
        font-size: 15px;
        display: block;
        line-height: 1.4;
        letter-spacing: 0.4px;
        letter-spacing: -0.01px;
    }

    .footer-submenu-item.-logos {
        margin: 0;
        padding: 0;
    }

    .footer-submenu-item.-logos + .footer-submenu-item.-logos {
        margin-top: 2rem;
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item {
        line-height: 1.3;
        font-size: 12px;
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item + .footer-submenu-item {
        max-width: 270px;
        margin-top: 17px;
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item.-logos {
        position: relative;
        padding-bottom: 14px;
    }

    @media (min-width: 1200px) {
        .footer-menu-block:nth-child(2) .footer-submenu-item.-logos:after {
            content: '';
            display: block;
            position: absolute;
            bottom: -24px;
            left: 4px;
            width: 28px;
            height: 28px;
            border-left: 1px solid #545658;
            border-bottom: 1px solid #545658;
            border-radius: 0 0 0 14px;
        }
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item:not(:first-child) {
        padding-left: 49px;
    }

    .footer-menu-block:nth-child(3) .footer-submenu-item {
        line-height: 1.3;
        font-size: 15px;
        margin: 0;
    }

    .footer-menu-block:nth-child(3) .footer-submenu-item + .footer-submenu-item {
        margin-top: 15px;
    }

    .footer-menu-block.-contacts .footer-submenu-item {
        font-size: 15px;
        margin: 0;
    }

    .footer-menu-block.-contacts .footer-submenu-item a {
        white-space: nowrap;
    }

    .footer-menu-block.-contacts .footer-submenu-item + .footer-submenu-item {
        margin-top: 12px;
    }

    .footer-menu-block.-contacts .footer-submenu {
        position: relative;
        height: 210px;
        margin-bottom: 104px;
    }

    .footer-menu-block.-contacts .footer-submenu:after {
        content: '';
        display: block;
        position: absolute;
        bottom: 0;
        width: 70px;
        height: 4px;
        background-color: #fff;
    }

    .footer-contacts p {
        white-space: nowrap;
    }

    .footer-contacts p:nth-child(1) {
        font-size: 22px;
        margin-bottom: 9px;
    }

    .footer-contacts p:nth-child(2) {
        font-size: 22px;
        margin-bottom: 17px;
    }

    .footer-contacts address {
        font-size: 15px;
        line-height: 1.4;
        white-space: nowrap;
    }


    .subfooter-list {
        display: flex;
        justify-content: space-between;
        margin: 0;
        padding: 0;
        flex-flow: row wrap;
    }

    .subfooter-list .footer-link {
        flex: 1;
        padding: 0 1.5rem;
    }

    @media (max-width: 1440px) {
        .page-footer-container {
            padding-inline: 2rem;
        }

        .footer-menu-block:nth-child(1) {
            flex-basis: 24.5%;
            max-width: 24.5%;
        }

        .footer-menu-block:nth-child(2) {
            flex-basis: 26%;
            max-width: 26%;
        }

        .footer-block-header {
            padding: 1rem 0;
            font-size: 14px;
        }

        .footer-submenu-item.-logos small {
            font-size: 14px;
        }

        .footer-menu-block:nth-child(3) .footer-submenu-item {
            font-size: 15px;
        }

        .footer-menu-block.-contacts .footer-submenu-item {
            font-size: 15px;
        }

        .footer-contacts p:nth-child(1),
        .footer-contacts p:nth-child(2) {
            font-size: 15px;
        }

        .footer-menu-block.footer-block.-contacts {
            padding-left: 2rem;
        }

    }

    @media (max-width: 1300px) {
        .footer-menu {
            flex-flow: row wrap;
        }

        .footer-menu-block:nth-child(1) {
            flex-basis: 30%;
            max-width: 30%;
        }

        .footer-menu-block:nth-child(2) {
            flex-basis: 50%;
            max-width: 50%;
        }

        .footer-menu-block:nth-child(3) {
            flex-basis: 20%;
            max-width: 20%;
        }

        .footer-menu-block:nth-child(4) {
            flex-basis: 100%;
            max-width: 100%;
        }

        .contacts-wrapper {
            display: flex;
            align-items: center;
        }

        .footer-menu-block.-contacts .footer-submenu {
            height: inherit;
            margin-bottom: 0;
            padding-right: 4rem;
        }

        .footer-menu-block.-contacts .footer-submenu:after {
            top: 0;
            bottom: 0;
            width: 2px;
            right: 0;
            height: inherit;
        }

        .footer-contacts {
            padding-left: 4rem;
        }
    }

    @media (max-width: 993px) {
        .footer-menu-block:nth-child(1) {
            flex-basis: 30%;
            max-width: 30%;
        }

        .footer-menu-block:nth-child(2) {
            flex-basis: 40%;
            max-width: 40%;
        }

        .footer-menu-block:nth-child(3) {
            flex-basis: 30%;
            max-width: 30%;
        }

        .footer-menu-block:nth-child(2) .footer-submenu-item:not(:first-child) {
            padding-left: 0px;
        }
    }

    @media (max-width: 769px) {
        .footer-menu-block:nth-child(1) {
            flex-basis: 100%;
            max-width: 100%;
        }

        .footer-menu-block:nth-child(2) {
            flex-basis: 60%;
            max-width: 60%;
        }

        .footer-menu-block:nth-child(3) {
            flex-basis: 40%;
            max-width: 40%;
        }

        .contacts-wrapper {
            align-items: flex-start;
            flex-direction: column;
        }

        .footer-menu-block.-contacts .footer-submenu {
            height: inherit;
            margin-bottom: 0;
            padding-right: 0rem;
            padding-bottom: 2rem;
        }

        .footer-menu-block.-contacts .footer-submenu:after {
            top: inherit;
            bottom: 0;
            width: 4rem;
            right: 0;
            left: 0;
            height: 2px;
        }

        .footer-contacts {
            padding-left: 0;
            padding-top: 2rem;
        }
    }

    @media (max-width: 577px) {
        .footer-block {
            padding: 1rem;
        }

        .footer-menu-block:nth-child(2) {
            flex-basis: 100%;
            max-width: 100%;
        }

        .footer-menu-block:nth-child(3) {
            flex-basis: 100%;
            max-width: 100%;
        }

        .footer-menu-block.footer-block.-contacts {
            padding-left: 1rem;
        }

        .footer-link,
        .footer-link span {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    }

    .container.-subfooter {
        padding: 2rem 0;
    }

</style>

<style>
    .hellogirl {
        position: fixed;
        z-index: 9999;
        bottom: -10px;
        right: 10px;
        opacity: 0;
        visibility: hidden;
        transition: all 0.5s ease 0s;
        display: none !important;
    }

    .hellogirl__content {
        display: none;
        background: #ebecee;
        max-width: 210px;
        padding: 0px 0px 15px;
        margin: 0 30px 10px 0;
        line-height: 1.2;
        border-radius: 10px;
        position: relative;
        box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.11);
        text-align: center;
    }

    .hellogirl__title {
        padding: 8px 10px 8px;
        font-size: 16px;
        font-weight: bold;
    }

    .hellogirl__content_pilot .hellogirl__title {
        font-size: 23px;
        line-height: 1.1;
        padding-top: 20px;
    }

    .hellogirl__content_pilot .hellogirl__title span {
        color: #F5515A;
        font-size: 1em;
    }

    .hellogirl__content_pilot .hellogirl__img {
        margin: 12px 0 -5px;
    }

    .hellogirl__text {
        padding: 17px 5px 6px;
        font-size: 13px;
        letter-spacing: -0.01em;
        line-height: 1.4;
    }

    .hellogirl__text div {
        margin-top: 16px;
        font-size: 1em;
        letter-spacing: 0.01em;
        font-weight: bold;
    }

    .hellogirl__img {
        position: relative;
        z-index: 0;
        display: block;
    }

    .hellogirl__img img {
        width: 100%;
        max-width: 100%;
    }

    .hellogirl__img_video::before {
        content: '';
        display: block;
        width: 40px;
        height: 40px;
        border-radius: 50px;
        background-color: #fff;
        box-shadow: 0 0px 6px 1px rgb(0 0 0 / 35%);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 90%;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M8 6.82v10.36c0 .79.87 1.27 1.54.84l8.14-5.18a1 1 0 0 0 0-1.69L9.54 5.98A.998.998 0 0 0 8 6.82z'/%3E%3C/svg%3E");
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        will-change: transform;
        transition: transform 0.4s;
    }

    .hellogirl__img_video:hover::before {
        transform: translate(-50%, -50%) scale(1.1);
    }

    .hellogirl__logo {
        background: #fff;
        display: inline-block;
        margin: -17px auto -6px;
        padding: 12px 17px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        position: relative;
        z-index: 5;
    }

    .hellogirl__logo img {
        max-width: 55px;
        max-height: 55px;
    }

    .hellogirl__button {
        padding: 7px 10px 6px;
        background: #61c13a;
        display: block;
        max-width: 100%;
        font-size: 18px;
        line-height: 1;
        text-transform: none;
        vertical-align: top;
        margin-top: 0;
        box-shadow: 0 5px 0 #519e2d;
        color: #fff;
        margin: 10px 15px;
        text-align: center;
        border-radius: 5px;
        font-weight: bold;
        transition: all 0.05s ease 0s;
    }

    .hellogirl__button:hover,
    .hellogirl__button:focus,
    .hellogirl__button:active {
        text-decoration: none;
        color: #fff;
        background: #519f2d;
    }

    .hellogirl__content_pilot .hellogirl__button {
        color: #fff !important;
        cursor: pointer;
    }

    .hellogirl__content:after {
        content: "";
        bottom: -18px;
        left: 91px;
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top: 20px solid #ebecee;
        position: absolute;
        border-color: #ebecee transparent transparent transparent;
        -webkit-filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, .5));
        filter: drop-shadow(1px 2px 1px rgba(0, 0, 0, 0.1));
    }

    .hellogirl__close {
        position: absolute;
        right: 0px;
        top: -8px;
        width: 20px;
        height: 20px;
        cursor: pointer;
        background: url(https://happy-job.ru/img/happy-job/images/close.svg) center no-repeat;
        background-size: 17px auto;
    }

    .hellogirl__close:before {
        display: inline-block;
        content: "\00d7";
        font-size: 25px;
        line-height: 1;
        cursor: pointer;
        font-weight: bold;
        display: none;
    }

    @media (max-width: 767px) {
        .hellogirl__bg {
            display: none !important;
            position: fixed;
            top: 0;
            z-index: 9998;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.2);
            pointer-events: none;
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s ease 0s;
        }

        .hellogirl__close {
            display: none !important;
            right: 5px !important;
            top: -40px !important;
            width: 30px !important;
            height: 30px !important;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #000;
            border-radius: 50%;
        }

        .hellogirl__video {
            display: none;
        }

        .hellogirl__content {
            max-width: unset !important;
            margin-right: 0 !important;
            border-radius: 0 !important;
        }

        .hellogirl {
            right: 0 !important;
            width: 100vw;
            bottom: -15px !important;
        }

        .hellogirl__img, .hellogirl__logo {
            display: none;
        }

        .hellogirl__text {
            padding: 0 5px 5px;
        }

        .hellogirl__text div {
            margin-top: 5px;
        }

        .hellogirl__button {
            max-width: 300px;
            margin: 5px auto 10px;
        }
    }

    @media (max-width: 576px) and (orientation: portrait) {
        .hellogirl__text-text {
            padding-left: 0px !important;
        }

        .hellogirl__img,
        .hellogirl__img + br {
            display: none;
        }
    }

    @media (max-height: 450px) and (orientation: portrait) {
        .hellogirl__content_pilot .hellogirl__title {
            margin-bottom: -20px;
        }
    }

    @media (max-height: 450px) {
        .hellogirl__img, .hellogirl__logo {
            display: none;
        }

        .hellogirl__button {
            font-size: 14px;
        }

        .hellogirl__video {
            text-align: center;
        }

        .hellogirl__video canvas {
            height: 110px;
            margin-right: 12px;
        }

        .hellogirl__text:after {
            border-left-width: 10px;
            border-right-width: 10px;
            border-top-width: 10px;
            bottom: -8px;
            left: 70px
        }
    }
</style>
<script type="text/javascript">
    $(document).ready(function () {
        var outputCanvas = document.getElementById('output'),
            output = outputCanvas.getContext('2d', {willReadFrequently: true}),
            bufferCanvas = document.getElementById('buffer'),
            buffer = bufferCanvas.getContext('2d', {willReadFrequently: true}),
            video = document.getElementById('video-girl'),
            width = outputCanvas.width,
            height = outputCanvas.height,
            interval;
        if ($(window).width() > 767) {
            playgirlvideo();
        }
        $(window).resize(function () {
            if ($(window).width() > 767 && !$('#video-girl').hasClass('playing')) {
                playgirlvideo();
            }
        });
        var cookieObj = new URLSearchParams(document.cookie.replaceAll("; ", "&"));
        var cookieHideGirl = cookieObj.get('girl');

        if (cookieHideGirl == '1') {
            $('.hellogirl,.hellogirl__bg').css({'visibility': 'hidden', 'opacity': '0'});
        } else {
            var cookieElGirl = cookieObj.get('elgirl');
            if (!cookieElGirl) {
                cookieElGirl = '0';
            } else if (!$('.hellogirl__content').filter(':eq(' + cookieElGirl + ')').length) {
                cookieElGirl = '0';
            } else {
                cookieElGirl = parseInt(cookieElGirl);
                cookieElGirl++;
                if (cookieElGirl > $('.hellogirl__content').length - 1) {
                    cookieElGirl = '0';
                }
            }
            document.cookie = 'elgirl=' + cookieElGirl;
            $('.hellogirl__content').filter(':eq(' + cookieElGirl + ')').show();
            setTimeout(function () {
                $('.hellogirl,.hellogirl__bg').css({'visibility': 'visible', 'opacity': '1'});
            }, 1000);
        }

        $('.hellogirl__close').on('click', function (e) {
            document.cookie = 'girl=1';
            document.cookie = 'elgirl=0';
            $('.hellogirl,.hellogirl__bg').css({'visibility': 'hidden', 'opacity': '0'});
        });

        $('.hellogirl__button,.hellogirl__img_video').on('click', function (e) {
            document.cookie = 'girl=1';
            document.cookie = 'elgirl=0';
            $('.hellogirl,.hellogirl__bg').css({'visibility': 'hidden', 'opacity': '0'});
            if ($(this).hasClass('hellogirl__scroll')) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('.footer-form').offset().top - $('header').height() - 20
                }, 1000);
                return false;
            }
        });

        function processFrame() {
            buffer.drawImage(video, 0, 0);

            var image = buffer.getImageData(0, 0, width, height),
                imageData = image.data,
                alphaData = buffer.getImageData(0, height + 1, width, height).data;

            for (var i = 3, len = imageData.length; i < len; i = i + 4) {
                imageData[i] = alphaData[i - 1];
            }

            output.putImageData(image, 0, 0, 0, 0, width, height);
        }

        function playgirlvideo() {
            $('#video-girl source').each(function () {
                $(this).attr('src', $(this).data('src'));
            });
            $('#video-girl').addClass('playing');
            video.load();
            video.addEventListener('play', function () {
                clearInterval(interval);
                interval = setInterval(processFrame, 40)
            }, false);

            // Firefox doesn't support looping video, so we emulate it this way
            video.addEventListener('ended', function () {
                video.play();
            }, false);
            video.play();
        }
    });

</script>

<!-- endrender common/footer-->

<link async rel="stylesheet" type="text/css" href="/fonts/gp/stylesheet.css">
<link async rel="stylesheet" type="text/css" href="/fonts/fontello-a444d455/css/fontello.css">
<svg style="display: none">
    <symbol id="videoCircle" viewbox="0 0 152.51 152.51">
        <circle cx="76.26" cy="76.26" r="76.26"></circle>
    </symbol>
    <symbol id="videoTriangle" viewbox="0 0 152.51 152.51">
        <path d="M61,47.32v57.87c0,2.49,4.06,3.74,6.43,2l38.06-28.25a2.32,2.32,0,0,0,.06-3.91L67.49,45.39C65.15,43.56,61,44.8,61,47.32Z"></path>
    </symbol>
    <symbol id="videoArrow" viewbox="0 0 55.23 50.01">
        <path d="M54,22,33.26,1.26A4.29,4.29,0,1,0,27.2,7.32L40.86,21H4a4,4,0,1,0,0,8H40.86L27.2,42.69a4.29,4.29,0,1,0,6.06,6.06L54,28A4.29,4.29,0,0,0,54,22Z"></path>
    </symbol>
    <symbol id="caveat-k" viewbox="0 0 17 18" fill="none">
        <path d="M11.165 17.19C10.685 17.04 10.265 16.815 9.905 16.515C9.545 16.185 9.2 15.825 8.87 15.435C8.72 15.255 8.465 14.895 8.105 14.355C7.745 13.815 7.355 13.215 6.935 12.555C6.545 11.895 6.17 11.28 5.81 10.71C5.45 10.11 5.18 9.66 5 9.36C4.85 9.81 4.685 10.185 4.505 10.485C4.355 10.755 4.28 11.19 4.28 11.79C3.98 12.21 3.755 12.69 3.605 13.23C3.485 13.74 3.35 14.25 3.2 14.76C3.11 15.09 2.96 15.39 2.75 15.66C2.57 15.93 2.33 16.17 2.03 16.38C1.67 16.35 1.355 16.23 1.085 16.02C0.845 15.81 0.635 15.6 0.455 15.39C0.275 15.03 0.2 14.685 0.23 14.355C0.26 14.025 0.335 13.71 0.455 13.41C0.515 13.14 0.68 12.615 0.95 11.835C1.25 11.055 1.565 10.215 1.895 9.315C2.225 8.385 2.525 7.56 2.795 6.84C3.065 6.09 3.215 5.625 3.245 5.445C3.425 4.845 3.74 4.2 4.19 3.51C4.67 2.79 5 2.01 5.18 1.17C5.24 0.959999 5.39 0.764999 5.63 0.584999C5.87 0.374999 6.14 0.269999 6.44 0.269999C6.77 0.239999 7.04 0.404999 7.25 0.764999C7.31 0.794999 7.4 0.839999 7.52 0.899999C7.64 0.929999 7.73 0.99 7.79 1.08C8.03 1.35 8.165 1.635 8.195 1.935C8.255 2.235 8.195 2.55 8.015 2.88C7.625 3.57 7.295 4.14 7.025 4.59C6.785 5.01 6.545 5.475 6.305 5.985C6.065 6.495 5.795 7.2 5.495 8.1C6.005 7.98 6.38 7.89 6.62 7.83C6.86 7.74 7.085 7.605 7.295 7.425C7.535 7.215 7.85 6.9 8.24 6.48C8.39 6.33 8.69 6.045 9.14 5.625C9.62 5.175 10.115 4.695 10.625 4.185C11.165 3.675 11.63 3.225 12.02 2.835C12.44 2.445 12.665 2.22 12.695 2.16C12.875 1.89 13.055 1.65 13.235 1.44C13.445 1.2 13.715 1.02 14.045 0.899999C14.495 0.959999 14.81 1.05 14.99 1.17C15.17 1.26 15.515 1.515 16.025 1.935C16.175 2.055 16.235 2.34 16.205 2.79C16.175 3.21 16.01 3.54 15.71 3.78C15.17 4.2 14.495 4.74 13.685 5.4C12.875 6.06 12.005 6.75 11.075 7.47C10.175 8.19 9.275 8.865 8.375 9.495C8.795 10.185 9.17 10.845 9.5 11.475C9.83 12.075 10.1 12.585 10.31 13.005C10.37 13.755 10.64 14.265 11.12 14.535C11.63 14.775 12.245 14.895 12.965 14.895C13.205 15.015 13.355 15.165 13.415 15.345C13.505 15.495 13.55 15.675 13.55 15.885C13.58 16.065 13.61 16.245 13.64 16.425C13.22 16.695 12.92 16.935 12.74 17.145C12.59 17.325 12.41 17.43 12.2 17.46C12.02 17.46 11.675 17.37 11.165 17.19Z"
              fill="currentcolor"></path>
    </symbol>
</svg>
<script type="text/javascript" src="/jquery/swiper/swiper-bundle.min.js"></script>
<style>
    .node-article-blog figure.image figcaption {
        text-align: center;
        font-size: 14px;
        font-style: italic;
        letter-spacing: 0.5px;
        opacity: 0.5;
    }

    .container.blog figure.image img {
        margin-left: auto;
        margin-right: auto;
    }

    html.swal2-shown.swal2-height-auto,
    body.swal2-shown.swal2-height-auto {
        overflow: hidden;
    }

    .swal2-shown.swal2-height-auto .header-top,
    .swal2-shown.swal2-height-auto .header-menu-dop {
        padding-right: 1rem;
    }

    .swal2-title {
        display: flex !important;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
    }

    .modal-title-top {
        font-size: 1.7rem;
        display: flex;
        flex-direction: column;
        margin-top: 1.5rem;
        font-weight: bold;
    }

    .modal-product {
        font-size: 0.7em;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        letter-spacing: 3px;
    }

    .modal-product .modal-description {
        font-size: 0.7em;
        font-weight: normal;
        letter-spacing: 0px;
    }

    .form-input {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        margin-bottom: 1rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    #comment.form-input {
        height: 110px;
    }

    .swal2-container .swal2-confirm.swal2-styled {
        background: #f4515a;
    }

    .form-label {
        border-top: none;
        text-align: left;
        font-size: 14px;
        padding-bottom: 0.3rem;
    }

    .form-label:before {
        content: attr(title);
    }

    .form-label:not([title="Комментарий:"]):after {
        content: "*";
        color: red;
        transform: translateY(-3px);
    }

    .button {
        display: inline-flex;
        font-size: clamp(0.875rem, 0.75rem + 0.625vw, 1.3125rem);
        color: #fff !important;
        background-color: #f4515a;
        padding: 0.8rem 1rem 0.7rem;
        transition: color 0s, background-color 0s ease-in-out,
        border-color 0s ease-in-out, box-shadow 0.15s ease-in-out;
        box-shadow: 0 4px 0 #c63839 !important;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        line-height: 1;
        max-height: 50px;
        justify-content: center;
        align-items: center;
    }

    .button.-client {
        background-color: #61c13b;
        box-shadow: 0 4px 0 #46882c !important;
        font-weight: 700;
    }

    .button.-service {
        background-color: #355fe5;
        box-shadow: 0 4px 0 #213b8e !important;
    }

    .button.-feedbackx {
        background-color: #ffaa00;
        box-shadow: 0 4px 0 #c88600 !important;
        color: #000;
    }

    .button.-survey {
        background-color: #a5a5a5;
        box-shadow: 0 4px 0 #6c6c6c !important;
        color: #000;
    }

    .button:hover {
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
    }

    .btn.btn-3 + .button {
        transform: translateY(-1rem);
    }

    .b-top-title .button {
        max-width: 190px;
    }

    .swal2-footer .privacy-btn > a[data-href="/privacy-policy"]:first-child,
    .swal2-footer a[href="mailto:sales@happy-job.ru"] {
        color: var(--c-link) !important;
    }

    .swal2-footer {
        text-align: center;
        font-size: 14px !important;
    }

    .swal2-footer .privacy-btn > a[data-href="/privacy-policy"]:first-child {
        display: inline-flex;
        gap: 0.2rem;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
        cursor: pointer;
        transform: translateY(4px);
    }

    .swal2-footer .privacy-btn > a[data-href="/privacy-policy"]:first-child:before {
        content: "";
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--material-symbols' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M4 22V8h3V6q0-2.075 1.463-3.538Q9.925 1 12 1t3.538 1.462Q17 3.925 17 6v2h3v14ZM9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6Zm3 9q.825 0 1.413-.587Q14 15.825 14 15q0-.825-.587-1.413Q12.825 13 12 13q-.825 0-1.412.587Q10 14.175 10 15q0 .825.588 1.413Q11.175 17 12 17Z'%3E%3C/path%3E%3C/svg%3E");
        flex-basis: 16px;
        min-width: 16px;
        width: 16px;
        height: 16px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
        transform: translateY(-2px);
    }

    .swal2-footer a[href="mailto:sales@happy-job.ru"] {
        font-size: 2em;
    }

    .swal2-close {
        box-shadow: none !important;
    }

    .swal2-no-war {
        display: none !important;
        opacity: 0;
    }

    .order-demo-wrapper {
        position: relative;
    }

    html.with-fancybox {
        overflow: hidden;
    }

    .fancybox__container .fancybox__backdrop {
        background-color: rgba(0, 0, 0, .4);
    }

    .fancybox__content > .carousel__button.is-close {
        top: 0px;
        color: var(--fancybox-color, #000);
        background-color: #fff;
        border-radius: 5px;
    }

    .fancybox__content > .carousel__button.is-close:hover {
        color: #61C13B;
    }

    .fancybox__container .fancybox__carousel.is-draggable .fancybox__container .fancybox__slide,
    .fancybox__container .fancybox__carousel.is-draggable .fancybox__container .fancybox__slide .fancybox__content {
        overflow: hidden;
    }

    .fancybox__content :focus:not(.carousel__button.is-close) {
        outline: 1px solid #000;
    }

    .fancybox__content {
        padding: 20px 36px;
    }

    .main-modal {
        background-color: #fff;
        max-width: 500px;
        border-radius: 10px;
    }

    .main-modal-flow {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .main-modal-header {
    }

    .main-modal-title {
        font-size: 1.7rem;
        font-weight: bold;
        text-align: center;
        padding: 0;
    }

    .main-modal-form {
        display: grid;
        grid-template-columns: 1fr;
        grid-auto-flow: row dense;
        grid-gap: 0.75rem;
    }

    .main-modal-input {
        display: flex;
        flex-direction: column;
    }

    .main-modal-input input,
    .main-modal-input select,
    .main-modal-input textarea {
        display: block;
        font-size: 13px;
        line-height: 1.42857143;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        padding: 10px 14px;
        border-radius: 4px;
        color: #313131;
        outline: none;
    }

    .main-modal-input textarea {
        max-height: 100px;
    }

    .main-modal-input button {
        padding-bottom: 0.4rem;
    }

    .main-modal-input input[type="date"] {
        position: relative;
        padding: 7px 16px 5px 13px;
    }

    .main-modal-input input[type="date"]::-webkit-calendar-picker-indicator {
        position: absolute;
        inset: 0;
        width: 92.5%;
        height: 90%;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M5 6h14v2H5z' opacity='.3'/%3E%3Cpath fill='currentColor' d='M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right center;
        background-size: 20px 20px;
    }

    .main-modal-input select::-ms-expand {
        display: none;
    }

    .main-modal-input select#time {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M12 20a8 8 0 0 0 8-8a8 8 0 0 0-8-8a8 8 0 0 0-8 8a8 8 0 0 0 8 8m0-18a10 10 0 0 1 10 10a10 10 0 0 1-10 10C6.47 22 2 17.5 2 12A10 10 0 0 1 12 2m.5 5v5.25l4.5 2.67l-.75 1.23L11 13V7h1.5Z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 5px center;
        background-size: 20px 20px;
        padding: 8px 27px 6px 12px;
        -moz-appearance: none;
        -webkit-appearance: none;
    }

    .main-modal-input select#respondents {
        max-width: 140px;
        color: rgba(0, 0, 0, 0.55);
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 512 512'%3E%3Cpath fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='m112 184l144 144l144-144'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 5px center;
        background-size: 20px 20px;
        padding: 8px 27px 6px 14px;
        -moz-appearance: none;
        -webkit-appearance: none;
    }

    .main-modal-input select option {
        padding-top: 4px;
    }

    .main-modal-input input[type="date"]::-moz-selection {
        background: green;
    }

    .main-modal-input input[type="date"]::selection {
        background: green;
    }

    .main-modal-label {
        color: #777;
        font-size: 13px;
        margin-bottom: 0;
    }

    .main-modal-label sup {
        color: red;
    }

    .main-modal-input.-submit-button {
        align-items: center;
        justify-content: center;
    }

    .main-modal-divider {
        height: 1px;
        background-color: #eee;
        margin: 0.5rem 0;
    }

    .main-modal-footer {
        background-color: #fff;
        padding: 0;
        text-align: center;
    }

    .main-modal-footer p {
        margin: 0;
        font-size: 13px;
        line-height: 1.2;
    }

    .main-modal-footer p:nth-child(2) {
        margin: 0 0 1rem;
    }

    .main-modal-footer a,
    .main-modal-footer a:hover {
        color: var(--c-link);
    }

    .main-modal-footer a[href="/privacy-policy"] {
        display: flex;
        gap: 0.3rem;
        align-items: center;
        justify-content: center;
    }

    .privacy-policy-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--material-symbols' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M4 22V8h3V6q0-2.075 1.463-3.538Q9.925 1 12 1t3.538 1.462Q17 3.925 17 6v2h3v14ZM9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6Zm3 9q.825 0 1.413-.587Q14 15.825 14 15q0-.825-.587-1.413Q12.825 13 12 13q-.825 0-1.412.587Q10 14.175 10 15q0 .825.588 1.413Q11.175 17 12 17Z'%3E%3C/path%3E%3C/svg%3E");
        flex-basis: 16px;
        min-width: 16px;
        width: 16px;
        height: 16px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
        transform: translateY(-2px);
    }

    .main-modal-footer em {
        font-size: 1.6em;
        font-weight: bold;
        font-style: normal;
    }

    .main-modal-row {
        display: flex;
        gap: 1rem;
        justify-content: center;
        align-items: center;
    }

    .compensate-for-scrollbar {
        padding-right: 0 !important;
    }

    .video-case {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        z-index: 1;
    }

    .video-case a {
        display: block;
        width: 100%;
        height: 100%;
        position: relative;
    }

    .video-case a .videos-block,
    .video-case a .videos-block .videos-image-wrapper,
    .video-case a .videos-block .videos-image-wrapper picture {
        height: 100%;
    }

    .video-case a .videos-block {
        position: relative;
    }

    .video-case a .videos-block .videos-image-wrapper {
        max-height: 100%;
    }

    .video-case a .videos-block .videos-image-wrapper picture {
        display: block;
        transition: transform 0.3s;
    }

    .video-case a:hover .videos-block .videos-image-wrapper picture {
        transform: scale(1.05, 1.05);
    }

    .video-case a .videos-block .videos-caption .videos-heading,
    .video-case a .videos-block .videos-caption {
        height: 0;
        padding: 0;
        visibility: hidden;
        opacity: 0;
    }

    .video-case a .videos-play-button {
        opacity: 1;
    }

    .video-case a .videos-block:after {
        content: none !important;
    }

    @media (min-width: 1200px) {
        .video-case a .videos-block .videos-image-wrapper {
            height: 442px;
        }
    }

    @media (max-width: 992px) {
        .video-case {
            height: 300px;
        }
    }

    @media (max-width: 768px) {
        .video-case {
            height: 200px;
        }
    }

    @media (max-width: 576px) {
        .table {
            margin: 1rem 0;
        }

        .adactive-cards {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .adactive-cards > td {
            width: 100% !important;
        }

        .table td,
        .table th {
            padding: 0.25rem 0.5rem !important;
        }

        .table td p,
        .table th p {
            font-size: 14px !important;
        }

        .video-case {
            height: 250px;
        }
    }

    @media (max-width: 576px) {
        .fancybox__slide {
            padding: 0 !important;
        }

        .fancybox__content {
            border-radius: 0px !important;
        }

        .fancybox__content > .carousel__button.is-close {
            top: 0 !important;
            right: 7px;
            position: fixed !important;
        }

        .main-modal-input textarea {
            max-height: 40px;
        }

    }

    @media (max-width: 480px) {
        .video-case {
            height: 170px;
        }
    }
</style>
<style>

    .main-modal h2 {
        font-size: 1.7rem;
        font-weight: bold;
        text-align: center;
        padding: 0;
    }

    .main-modal-input .parsley-errors-list[aria-hidden="false"] {
        margin-bottom: -14px;
    }

    .main-modal-input .parsley-custom-error-message {
        list-style-type: none;
        font-size: 9px;
        color: red;
    }

    .main-modal .button-default {
        display: block;
        margin-inline: auto;
    }

    .main-modal .c-form-policy {
        text-align: center;
        border-top: 1px solid #eee;
        padding: 0;
        margin-top: 2rem;
    }

    .main-modal .c-form-policy a {
        display: inline-block;
    }

    @media (min-width: 1024px) {
        .fancybox__slide {
            padding: 30px 100px;
        }
    }
</style>
<div class="main-modal" id="main-modal" style="display:none; ">
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

    <form id="form-id" class="c-form" data-parsley-validate>
        <h2>Заполните заявку</h2>

        <ul class="c-form-list">
            <li class="c-form-item">
                <input type="hidden" name="form-id" value="form-id">
            </li>
            <li class="c-form-item">
                <input type="hidden" name="check" value="bot" id="checkinput">
            </li>

            <li class="c-form-item">
                <label class="c-form-label">
                    Ваше имя
                    <sup>*</sup>
                </label>
                <input type="text" id="name" name="name" placeholder="Как к вам обращаться" required
                       data-parsley-trigger="change" data-parsley-error-message="Укажите своё имя">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Компания
                    <sup>*</sup>
                </label>
                <input type="text" id="company" name="company" placeholder="Ваша компания" required
                       data-parsley-trigger="change" data-parsley-error-message="Укажите название компании">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Количество сотрудников
                    <sup>*</sup>
                </label>
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
                </select>
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Телефон
                    <sup>*</sup>
                </label>
                <input type="tel" id="phone" name="phone" placeholder="" required data-parsley-trigger="change"
                       data-parsley-pattern="^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}$"
                       data-parsley-error-message="Укажите номер телефона">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Корпоративный e-mail
                    <sup>*</sup>
                </label>
                <input type="email" id="email" name="email" placeholder="Ваш e-mail" required
                       data-parsley-trigger="change"
                       data-parsley-pattern="/^(?!.*@(gmail\.com|yahoo\.com|rambler\.ru|mail\.ru|yandex\.ru|ya\.ru)$)[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/"
                       data-parsley-error-message="Укажите корпоративный e-mail">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Комментарий
                </label>
                <textarea id="comment" name="comment"></textarea>
            </li>
            <li class="c-form-item">
                <label class="c-form-label">

                </label>
                <div class="c-form-date" style="display:none;">

                    <p>Вы также можете указать время,<br>в которое вам будет удобнее принять звонок </p>
                    <div class="c-form-date-column">
                        <input type="date" id="current-date" name="current-date" value="2024-01-24" min="2024-01-24">
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
                        </select>
                    </div>

                </div>
            </li>
        </ul>
        <button id="form-id-submit" type="submit" class="button-default">Отправить</button>

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
                    <a href="mailto:sales@happy-job.ru">sales@happy-job.ru</a>
                </strong>
            </p>
        </div>
    </form>

    <!-- /12. Форма Протестируйте бесплатно -->

    <script>
        $(function () {

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

            const sendForm = (formNode, formData, formNodeID, formURL) => {
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
                            console.log(formNodeID);
                            sendMetrik(formNodeID, formURL);
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
                const formNodeID = 'form-id';
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
    </script>
</div>
<div class="main-modal" id="get-email" style="display:none; ">
    <div class="main-modal-flow">
        <header class="main-modal-header">
            <h2 class="main-modal-title">Оставьте e-mail</h2>
            <p style="text-align: center;">и продолжите чтение</p>
        </header>
        <form class="main-modal-form" id="modal-email">
            <div class="main-modal-item">
                <div class="main-modal-input">
                    <label for="email" class="main-modal-label">Ваш e-mail:<sup>*</sup></label>
                    <input id="email" name="email" type="email" placeholder="Ваш e-mail" required>
                </div>
            </div>
            <div class="main-modal-item">
                <div class="main-modal-input -submit-button">
                    <button class="button button-default">Отправить</button>
                </div>
            </div>
        </form>
        <div class="main-modal-divider"></div>
        <footer class="main-modal-footer">
            <p>Нажимая на кнопку «Отправить», Вы даете согласие на обработку своих персональных данных.</p>
            <p><a href="/privacy-policy/"><b class="privacy-policy-icon"></b> Политика конфиденциальности</a></p>
            <p>Или пишите нам на почту:</p>
            <p><em><a href="mailto:sales@happy-job.ru">sales@happy-job.ru</a></em></p>
        </footer>
    </div>
</div>

<script>
    $(function () {
        $("#modal-email").on("submit", function (event) {
            event.preventDefault();
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
                $(document).find('.carousel__button.is-close').trigger('click');

                ym(69351811, 'reachGoal', 'event_send_form');

                if (resp.status === "success") {
                    Swal.fire(
                        'Отлично! ',
                        'Желаем приятного чтения',
                        'success'
                    )
                    $('.article-hide-content').addClass('active');
                    $('.show-article').hide();
                    $("#get-email").find('input[type="text"], input[type="phone"], input[type="email"], textarea').val('');
                    ym(46152993, 'reachGoal', 'mainpage_send_topform');
                    localStorage.setItem('happy-articlee-read', 1);
                    $('.article-hide-content').addClass('active');
                    $('.show-article, #modal-email').hide();

                }
                if (resp.status === "error") {
                    let message = resp.msg;
                    Swal.fire({
                        icon: 'error',
                        title: 'Упс!',
                        text: message,
                    });
                    ym(46152993, 'reachGoal', 'event_error')
                    $('.article-hide-content').addClass('active');
                    $('.show-article, #modal-email').hide();
                }
                if ((resp.status !== "success") && (resp.status !== "error")) {
                    let message = resp.msg;
                    Swal.fire({
                        icon: 'question',
                        title: 'А вот это уже интересно',
                        text: message,
                    })
                    ym(46152993, 'reachGoal', 'event_error')
                }
            });
            return false
        });
    })
</script>
<script src="https://www.google.com/recaptcha/api.js?render=6Le6d_gaAAAAAKOZFwTtVob1nLTWnMFhppylmKt4"></script>
<script async type="text/javascript" src="/js/0f83699923be789d2b9f6d89ce43f38e.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        for (var j = 0; j < document.scripts.length; j++) {
            if (document.scripts[j].src === r) {
                return;
            }
        }
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(46152993, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/46152993" style="position:absolute; left:-9999px;" alt=""></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<script src="/jquery/imask.js"></script>
<script src="/jquery/parsley/parsley.min.js"></script>
<link rel="stylesheet" href="/jquery/niceSelect/style.css">
<script src="/jquery/niceSelect/jquery.nice-select.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.addEventListener('mouseup', checkSelection);
        document.addEventListener('touchend', checkSelection);

        function checkSelection() {
            var selectedText = '';
            if (window.getSelection) {
                selectedText = window.getSelection().toString();
            } else if (document.selection && document.selection.type != "Control") {
                selectedText = document.selection.createRange().text;
            }
            if (isValidEmail(selectedText)) {
                console.log('выделен текст содержащий email')
                ym(46152993, 'reachGoal', 'event_textselect_slaesemail');
                console.log('вызов яндекс-метрики для выделенного email')
            }
        }

        function isValidEmail(text) {
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(text);
        }
    });
</script>