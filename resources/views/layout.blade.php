<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('meta')
</head>
<body>

    <div class="header" :class="{searchActive: search}">
        <transition name="fadeUp">
            <div class="toTop" v-if="toTop">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 451.847 451.846" style="enable-background:new 0 0 451.847 451.846;" xml:space="preserve">
                    <g>
                        <path d="M248.292,106.406l194.281,194.29c12.365,12.359,12.365,32.391,0,44.744c-12.354,12.354-32.391,12.354-44.744,0   L225.923,173.529L54.018,345.44c-12.36,12.354-32.395,12.354-44.748,0c-12.359-12.354-12.359-32.391,0-44.75L203.554,106.4   c6.18-6.174,14.271-9.259,22.369-9.259C234.018,97.141,242.115,100.232,248.292,106.406z"/>
                    </g>
                </svg>
            </div>
        </transition>

        <transition name="fade">
            <div class="preloader" v-if="loader" v-cloak>
                <div class="el-loading-mask is-fullscreen" style="">
                    <div class="el-loading-spinner">
                        <svg viewBox="25 25 50 50" class="circular">
                            <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                        </svg>
                    </div>
                </div>
            </div>
        </transition>
        <modal v-if="modal" v-on:close="closeMod" v-cloak class="modal-base callback mobilemenu">
            <div class="title"><h2>Напишите нам!</h2></div>
            <form action="">
                <div class="input-wrapper">
                    <label for="">Имя <sup>*</sup></label>
                    <div class="v-input">
                        <input type="text"
                               v-validate="'required|min:2|max:50'"
                               name="feedback_name"
                               v-model.lazy="feedback.name"
                               data-vv-validate-on="none"
                               v-on:focus="removeError('feedback_name')"

                        >
                        <span class="error" v-if="errors.has('feedback_name')">error</span>
                    </div>
                </div>
                <div class="input-wrapper">
                    <label for="">Мэйл или телефон <sup>*</sup></label>
                    <div class="v-input">
                        <input type="text"
                               v-validate="'required|min:2|max:50'"
                               name="feedback_email"
                               v-model.lazy="feedback.email"
                               data-vv-validate-on="none"
                               v-on:focus="removeError('feedback_email')"
                        >
                        <span class="error" v-if="errors.has('feedback_email')">error</span>
                    </div>
                </div>
                <div class="input-wrapper">
                    <label for="">Ваше сообщение <sup>*</sup></label>
                    <div class="v-input">
                        <textarea v-validate="'required|min:20'"
                                  name="feedback_text"
                                  v-model.lazy="feedback.text"
                                  data-vv-validate-on="none"
                                  v-on:focus="removeError('feedback_text')"></textarea>
                        <span class="error" v-if="errors.has('feedback_text')">error</span>
                    </div>
                </div>
                <button type="button" class="submit" v-on:click="validate">Отправить!</button>
            </form>
        </modal>
        <div class="container">
            <div class="header-wrapper">
                <div class="header-top">
                    <div class="logo-wrapper">
                        <div class="logo">
                            <img src="./img/logo.png" alt="">
                        </div>
                        <div class="logo-text">
                            <div class="big">SMART ECONS</div>
                            <div class="small">Строительная Компания</div>
                        </div>
                    </div>
                    <div class="lang">
                        <div class="lang-active">
                            <div class="img" style="background-image: url(./img/ru.png)"></div>
                        </div>
                        <ul class="lang-list">
                            <li><a href="#" style="background-image: url(./img/ro.png)"></a></li>
                            <li><a href="#" style="background-image: url(./img/en.png)"></a></li>
                        </ul>
                    </div>
                    <div class="contacts">
                        <div class="email">info@smartecons.md</div>
                        <div class="place">str. Columna 174, et 2, of 210</div>
                    </div>
                    <div class="phones">
                        <div class="phones-num">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="25px" height="20px" viewBox="0 0 348.077 348.077" style="enable-background:new 0 0 348.077 348.077;" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <path d="M340.273,275.083l-53.755-53.761c-10.707-10.664-28.438-10.34-39.518,0.744l-27.082,27.076     c-1.711-0.943-3.482-1.928-5.344-2.973c-17.102-9.476-40.509-22.464-65.14-47.113c-24.704-24.701-37.704-48.144-47.209-65.257     c-1.003-1.813-1.964-3.561-2.913-5.221l18.176-18.149l8.936-8.947c11.097-11.1,11.403-28.826,0.721-39.521L73.39,8.194     C62.708-2.486,44.969-2.162,33.872,8.938l-15.15,15.237l0.414,0.411c-5.08,6.482-9.325,13.958-12.484,22.02     C3.74,54.28,1.927,61.603,1.098,68.941C-6,127.785,20.89,181.564,93.866,254.541c100.875,100.868,182.167,93.248,185.674,92.876     c7.638-0.913,14.958-2.738,22.397-5.627c7.992-3.122,15.463-7.361,21.941-12.43l0.331,0.294l15.348-15.029     C350.631,303.527,350.95,285.795,340.273,275.083z"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div class="phone">
                                022 005 034
                            </div>
                        </div>
                        <div class="phones-num">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="25px" height="35px" viewBox="0 0 341.648 341.648" style="enable-background:new 0 0 341.648 341.648;" xml:space="preserve">
                                <g>
                                    <path d="M238.468,40.062c-6.791,0-12.292-5.51-12.292-12.298V12.298C226.176,5.504,220.664,0,213.878,0h-8.202   c-6.798,0-12.298,5.504-12.298,12.298V27.77c0,6.788-5.513,12.298-12.298,12.298h-77.894c-6.794,0-12.298,5.503-12.298,12.298   v276.986c0,6.785,5.503,12.297,12.298,12.297h135.276c6.785,0,12.298-5.512,12.298-12.297V52.359   C250.76,45.57,245.26,40.062,238.468,40.062z M117.79,278.358c0-6.791,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.507,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,290.656,117.79,285.144,117.79,278.358z    M130.087,225.324c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298c-6.794,0-12.298-5.513-12.298-12.298   C117.79,230.83,123.293,225.324,130.087,225.324z M117.79,196.886c0-6.792,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,209.184,117.79,203.671,117.79,196.886z    M195.804,320.729h-51.5c-3.401,0-6.149-2.75-6.149-6.149c0-3.398,2.748-6.148,6.149-6.148h51.5c3.398,0,6.149,2.75,6.149,6.148   C201.953,317.973,199.202,320.729,195.804,320.729z M170.056,225.324c6.788,0,12.298,5.506,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,230.83,163.261,225.324,170.056,225.324z    M157.757,196.886c0-6.792,5.503-12.298,12.298-12.298c6.788,0,12.298,5.506,12.298,12.298c0,6.785-5.51,12.298-12.298,12.298   C163.261,209.184,157.757,203.671,157.757,196.886z M170.056,266.061c6.788,0,12.298,5.507,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,271.567,163.261,266.061,170.056,266.061z    M210.023,290.656c-6.798,0-12.298-5.513-12.298-12.298c0-6.791,5.5-12.298,12.298-12.298c6.785,0,12.298,5.507,12.298,12.298   C222.321,285.144,216.809,290.656,210.023,290.656z M210.023,249.92c-6.798,0-12.298-5.513-12.298-12.298   c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298C222.321,244.407,216.809,249.92,210.023,249.92z    M210.023,209.184c-6.798,0-12.298-5.513-12.298-12.298c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298   C222.321,203.671,216.809,209.184,210.023,209.184z M230.007,149.03c0,6.791-5.512,12.298-12.298,12.298h-93.771   c-6.794,0-12.298-5.507-12.298-12.298v-67.81c0-6.794,5.503-12.297,12.298-12.297h93.771c6.786,0,12.298,5.503,12.298,12.297   V149.03z"/>
                                </g>

                            </svg>
                            <div class="phone">
                                076 704 300
                            </div>
                        </div>
                    </div>
                    <button v-on:click="modal = !modal" class="callback">Оставить Заявку</button>
                </div>
            </div>
        </div>
            <div class="header-bottom">
                <div class="container">
                    <button class="mob-menu-butt">☰</button>
                    <div class="phones-num">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="25px" height="35px" viewBox="0 0 341.648 341.648" style="enable-background:new 0 0 341.648 341.648;" xml:space="preserve">
                                <g>
                                    <path d="M238.468,40.062c-6.791,0-12.292-5.51-12.292-12.298V12.298C226.176,5.504,220.664,0,213.878,0h-8.202   c-6.798,0-12.298,5.504-12.298,12.298V27.77c0,6.788-5.513,12.298-12.298,12.298h-77.894c-6.794,0-12.298,5.503-12.298,12.298   v276.986c0,6.785,5.503,12.297,12.298,12.297h135.276c6.785,0,12.298-5.512,12.298-12.297V52.359   C250.76,45.57,245.26,40.062,238.468,40.062z M117.79,278.358c0-6.791,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.507,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,290.656,117.79,285.144,117.79,278.358z    M130.087,225.324c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298c-6.794,0-12.298-5.513-12.298-12.298   C117.79,230.83,123.293,225.324,130.087,225.324z M117.79,196.886c0-6.792,5.503-12.298,12.298-12.298   c6.789,0,12.298,5.506,12.298,12.298c0,6.785-5.509,12.298-12.298,12.298C123.293,209.184,117.79,203.671,117.79,196.886z    M195.804,320.729h-51.5c-3.401,0-6.149-2.75-6.149-6.149c0-3.398,2.748-6.148,6.149-6.148h51.5c3.398,0,6.149,2.75,6.149,6.148   C201.953,317.973,199.202,320.729,195.804,320.729z M170.056,225.324c6.788,0,12.298,5.506,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,230.83,163.261,225.324,170.056,225.324z    M157.757,196.886c0-6.792,5.503-12.298,12.298-12.298c6.788,0,12.298,5.506,12.298,12.298c0,6.785-5.51,12.298-12.298,12.298   C163.261,209.184,157.757,203.671,157.757,196.886z M170.056,266.061c6.788,0,12.298,5.507,12.298,12.298   c0,6.785-5.51,12.298-12.298,12.298c-6.795,0-12.298-5.513-12.298-12.298C157.757,271.567,163.261,266.061,170.056,266.061z    M210.023,290.656c-6.798,0-12.298-5.513-12.298-12.298c0-6.791,5.5-12.298,12.298-12.298c6.785,0,12.298,5.507,12.298,12.298   C222.321,285.144,216.809,290.656,210.023,290.656z M210.023,249.92c-6.798,0-12.298-5.513-12.298-12.298   c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298C222.321,244.407,216.809,249.92,210.023,249.92z    M210.023,209.184c-6.798,0-12.298-5.513-12.298-12.298c0-6.792,5.5-12.298,12.298-12.298c6.785,0,12.298,5.506,12.298,12.298   C222.321,203.671,216.809,209.184,210.023,209.184z M230.007,149.03c0,6.791-5.512,12.298-12.298,12.298h-93.771   c-6.794,0-12.298-5.507-12.298-12.298v-67.81c0-6.794,5.503-12.297,12.298-12.297h93.771c6.786,0,12.298,5.503,12.298,12.297   V149.03z"/>
                                </g>

                            </svg>
                        <div class="phone">
                            076 704 300
                        </div>
                    </div>
                    <div class="header-bottom-wrapper">
                        <button class="close-menu">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="15px" height="15px" x="0px" y="0px" viewBox="0 0 47.971 47.971" xml:space="preserve"><g><path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88   c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242   C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879   s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"></path></g></svg>
                        </button>
                        <div class="mob-wrapper">
                            <div class="search-wrapper">
                                <form class="container">
                                    <button  class="searchButton">
                                        <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="17px" height="15px" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                                             <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                            </svg>
                                    </button>
                                    <input type="text" placeholder="Поиск на сайте" v-model="searchData">
                                </form>
                                <div class="lang">
                                    <div class="lang-active">
                                        <div class="img" style="background-image: url(./img/ru.png)"></div>
                                    </div>
                                    <ul class="lang-list">
                                        <li><a href="#" style="background-image: url(./img/ro.png)"></a></li>
                                        <li><a href="#" style="background-image: url(./img/en.png)"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="nav-list">
                                <li><a class="page-title" href="#">Главная</a></li>
                                <li><a class="page-title" href="#">О компании</a></li>
                                <li class="deep">
                                    <a class="page-title" href="#">Услуги</a>
                                    <div class="submenu">
                                        <div class="submenu-wrapper">
                                            <ul class="subcat-list">
                                                <li class="st-lvl deep">
                                                    <a class="st-lvl-title" href="#">
                                                        Проектирование и дизайн
                                                    </a>

                                                    <ul class="nd-lvl">
                                                        <li>
                                                            <a href="#">Архитектура и проектирование</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="st-lvl deep">
                                                    <a class="st-lvl-title" href="#">
                                                        Производство
                                                    </a>

                                                    <ul class="nd-lvl">
                                                        <li>
                                                            <a href="#">Металлопроизводство</a>
                                                        </li>
                                                        <li><a href="#">Столярное Производство</a></li>
                                                    </ul>
                                                </li>

                                                <li class="st-lvl deep">
                                                    <a class="st-lvl-title" href="#">
                                                        Продажа строй материалов
                                                    </a>

                                                    <ul class="nd-lvl">
                                                        <li>
                                                            <a href="#">Домокомплекты из ОЦБ</a>

                                                        </li>
                                                        <li> <a href="#">Оцилиндрованное бревно</a></li>
                                                    </ul>
                                                </li>

                                                <li class="st-lvl deep">
                                                    <a class="st-lvl-title" href="#">
                                                        Капитальное строительство
                                                    </a>

                                                    <ul class="nd-lvl">
                                                        <li> <a href="#">Технологии</a></li>
                                                        <li> <a href="#">Гражданское строительство</a></li>
                                                        <li> <a href="#">Промышленное строительство</a></li>
                                                        <li> <a href="#">Кровельные работы</a></li>
                                                        <li> <a href="#">Фасадные работы</a></li>
                                                    </ul>
                                                </li>

                                                <li class="st-lvl deep">
                                                    <a class="st-lvl-title" href="#">
                                                        Реконструкция, ремонт и отделка
                                                    </a>

                                                    <ul class="nd-lvl">
                                                        <li> <a href="#">Фундаменты</a></li>
                                                        <li> <a href="#">Стены</a></li>
                                                        <li> <a href="#">Потолки</a></li>
                                                        <li> <a href="#">Полы</a></li>
                                                        <li> <a href="#">Инженерные сети</a></li>
                                                        <li> <a href="#">Благоустройство территорий</a></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a class="page-title" href="#">Производство</a></li>
                                <li><a class="page-title" href="#">Портфолио работ</a></li>
                                <li><a class="page-title" href="#">Новости</a></li>
                                <li><a class="page-title" href="#">Контакты</a></li>
                            </ul>
                            
                        </div>
                        <div class="search-butt" v-on:click="search = !search">
                            <transition name="fade" mode="out-in">

                                <svg v-cloak v-if="search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 47.971 47.971" width="15px" height="15px" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve">
                                    <g>
                                        <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88   c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242   C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879   s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
                                    </g>
                                </svg>

                                <svg v-if="!search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="17px" height="15px" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                </svg>
                            </transition>
                        </div>
                    </div>
                </div>

            </div>


    </div>
    <div class="content">
        <main>
            @yield('content')
        </main>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer-mob">
                <div class="mob-title">Информация <span class="close">+</span></div>
                <ul>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Наши работы</a></li>
                    <li><a href="#">Производство</a></li>
                    <li><a href="#">Вакансии</a></li>
                </ul>
            </div>
            <div class="footer-desktop">
                <div class="col">
                <span class="email">
                    info@smartecons.md
                </span>
                    <span>str. Columna 174, et 2, of 210</span>
                    <a class="contacts" href="#">
                        Как доехать?
                    </a>
                </div>
                <div class="col">
                    <span class="number desk">022 005 034</span>
                    <span class="number">076 704 300</span>
                    <div class="socials">
                        <a href="#"><span class="img" style="background-image: url(/img/fb.png)"></span></a>
                        <a href="#"><span class="img" style="background-image: url(/img/g+.png)"></span></a>
                        <a href="#"><span class="img" style="background-image: url(/img/insta.png)"></span></a>
                        <a href="#"><span class="img" style="background-image: url(/img/tw.png)"></span></a>
                    </div>
                </div>
                <div class="col menu">
                    <a href="#">О нас</a>
                    <a href="#">Новости</a>
                    <a href="#">Услуги</a>
                </div>
                <div class="col menu">
                    <a href="#">Наши работы</a>
                    <a href="#">Производство</a>
                    <a href="#">Вакансии</a>
                </div>
                <div class="col">
                    <button id="fCallBack" class="main-link">Оставить заявку</button>
                </div>
                <div class="col">
                    <a href="#" class="uniweb">
                        <span>Создание сайта </span>
                        <img src="/img/uniweb.png" alt="uniweb">
                    </a>
                </div>
            </div>
        </div>


    </div>
    <script>
        document.getElementById('fCallBack').addEventListener('click',function(){
            head.modal = !head.modal
        });
    </script>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
    //]]></script>
<script src="{{asset('js/app.js')}}"></script>
@yield('script')
</body>
</html>
