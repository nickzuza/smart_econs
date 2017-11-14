@extends('layout')
@section('meta')

@stop
@section('content')

<div class="page homePage" id="homePage">
    <div class="homePage-slider">
        <div class="slide">
            <div class="img" style="background-image:url('http://www.planwallpaper.com/static/images/ComputerDesktopWallpapersCollection540_047_inxQEjv.jpg')"></div>
            <div class="container">
                <div class="slide-title">Smart Econs</div>
                <div class="slide-text">Строительная компания полного цикла - от эскиза до воплощения</div>
                <a class="slide-more" href="#" > more</a>
            </div>
        </div>
        <div class="slide">
            <div class="img" style="background-image:url('http://www.planwallpaper.com/static/images/ComputerDesktopWallpapersCollection540_047_inxQEjv.jpg')"></div>
            <div class="container">
                <div class="slide-title">Smart Econs</div>
                <div class="slide-text">Строительная компания полного цикла - от эскиза до воплощения</div>
                <a class="slide-more" href="#"> more</a>
            </div>
        </div>
    </div>
    <div class="homePage-services">
        <div class="container">
            <div class="block-title1">
                <h2>УСЛУГИ</h2>
            </div>
            <div class="services-block">
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg)"></div>
                    <div class="text">Проектирование и дизайн</div>
                </div>
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg)"></div>
                    <div class="text">Капитальное строительство</div>
                </div>
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg)"></div>
                    <div class="text">Реконструкция ремонт и отделка</div>
                </div>
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg)"></div>
                    <div class="text">Производство</div>
                </div>
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg)"></div>
                    <div class="text">Продажа стройматериалов</div>
                </div>
            </div>
            <a href="" class="main-link">Все услуги</a>
        </div>
    </div>
    <div class="homePage-aboutUs">
        <div class="block-title2">
            <h2>О компании</h2>
        </div>
        <div class="text">
           <p>Мы команда опытных специалистов в данной области, в работе применяем классические и современные технологии, ориентируемся на качество, используя экологические материалы высокого качества по цене наших поставщиков - партнеров.</p>
            <p>
                Основными причинами стабильности нашей компании, является взаимопонимание с клиентами и осуществление заказанных объектов в согласованные сроки.
                Мы защитим Вас от дополнительных сложностей и потери времени в поисках..
            </p>
        </div>
        <a href="#" class="main-link">
            Подробнее
        </a>
    </div>
    <div class="homePage-callUs">
        <div class="title">
            Нужна консультация?
        </div>
        <div class="text">
            Свяжитесь с нами, и наш эксперт поможет вам сделать правильный выбор!
        </div>
        <button class="main-link" v-on:click="calback">Связаться</button>

    </div>
    <div class="homePage-howWork">
        <div class="container">
            <div class="block-title3">
               <h2> Как мы работаем</h2>
            </div>
            <div class="howWork-block">
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg)"></div>
                    <div class="text">Проектирование и дизайн</div>
                </div>
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg)"></div>
                    <div class="text">Капитальное строительство</div>
                </div>
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg)"></div>
                    <div class="text">Реконструкция ремонт и отделка</div>
                </div>
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg)"></div>
                    <div class="text">Производство</div>
                </div>
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg)"></div>
                    <div class="text">Продажа стройматериалов</div>
                </div>
            </div>
        </div>

    </div>
    <div class="homePage-news">
        <div class="container">
            <div class="block-title1">
                <h2>Новости</h2>
            </div>
            <div class="news-block">
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg);"></div>
                    <div class="title" >О чем Вы хотели бы нас спросить?</div>
                    <div class="text">У нас большой опыт строительства индивидуальных домов, мы профессионалы своего дела и будем рады поделиться с Вами</div>
                    <div class="date">6 октября 2017</div>
                </div>
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg);"></div>
                    <div class="title">Приезжайте на просмотр дома Вилла 2 S</div>
                    <div class="text">В воскресенье 01.10.2017 мы показали готовый дом по проекту Бавария S+</div>
                    <div class="date">6 октября 2017</div>
                </div>
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg);"></div>
                    <div class="title">Компания БАКО на выставке «Красивые дома»</div>
                    <div class="text">Вы сможете оценить качество материалов и работ, удобство планировки и эффективность технологических решений.</div>
                    <div class="date">6 октября 2017</div>
                </div>
                <div class="item">
                    <div class="img" style="background-image: url(https://i.simpalsmedia.com/999.md/BoardImages/900x900/e44d2bc465be38542a8569fb3512012d.jpg);"></div>
                    <div class="title">Отчёт о показе готового дома Бавария S+</div>
                    <div class="text">Мы закончили строительство очередного дома и приглашаем всех желающих на просмотр</div>
                    <div class="date">6 октября 2017</div>
                </div>
            </div>
            <a href="#" class="main-link">Все новости</a>
        </div>
    </div>
    <div class="homePage-clients">
        <div class="container">
            <div class="block-title3">
                <h2>Отзывы клиентов</h2>
            </div>
            <div class="clients-block">
                <div class="item">
                    <div class="info">
                        <div class="img" style="background-image: url(https://res.cloudinary.com/demo/image/upload/w_200,h_200,c_thumb,g_face,r_max/face_left.png)"></div>
                        <div class="client-info">
                            <div class="name">Алексей</div>
                            <div class="date">25 октября 2017</div>
                        </div>
                    </div>
                    <div class="text">
                        Признаться, друзья я потрясен.....Как-то так повелись у нас, что строительство это дикий геморрой. Нормальной практикой является смена двух-трех бригад за строительство одного дома. Со скандалами, выяснениями отношений, розыском неизвестно куда пропавших людей с деньгами и..
                    </div>
                </div>
                <div class="item">
                    <div class="info">
                        <div class="img" style="background-image: url(https://res.cloudinary.com/demo/image/upload/w_200,h_200,c_thumb,g_face,r_max/face_left.png)"></div>
                        <div class="client-info">
                            <div class="name">Алексей</div>
                            <div class="date">25 октября 2017</div>
                        </div>
                    </div>
                    <div class="text">
                        Признаться, друзья я потрясен.....Как-то так повелись у нас, что строительство это дикий геморрой. Нормальной практикой является смена двух-трех бригад за строительство одного дома. Со скандалами, выяснениями отношений, розыском неизвестно куда пропавших людей с деньгами и..
                    </div>
                </div>
                <div class="item">
                    <div class="info">
                        <div class="img" style="background-image: url(https://res.cloudinary.com/demo/image/upload/w_200,h_200,c_thumb,g_face,r_max/face_left.png)"></div>
                        <div class="client-info">
                            <div class="name">Алексей</div>
                            <div class="date">25 октября 2017</div>
                        </div>
                    </div>
                    <div class="text">
                        Признаться, друзья я потрясен.....Как-то так повелись у нас, что строительство это дикий геморрой. Нормальной практикой является смена двух-трех бригад за строительство одного дома. Со скандалами, выяснениями отношений, розыском неизвестно куда пропавших людей с деньгами и..
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="homePage-parteners">
        <div class="block-title2">
            <h2>Наши партнеры</h2>
        </div>
        <div class="parteners-block">
            <div class="item">
                <div class="img" style="background-image: url(https://news2016.sciencesconf.org/conference/news2016/pages/NeuroPSI.png)"></div>
                <div class="info">
                    <div class="title">TEXNO</div>
                    <div class="text">Торговое холодильное  оборудование</div>
                </div>

            </div>
            <div class="item">
                <div class="img"  style="background-image: url(http://oberfeldsnowcap.com/wp-content/uploads/2011/12/Unic.png)"></div>
                <div class="info">
                    <div class="title">Mediatech</div>
                    <div class="text"> Системы вентиляции</div>
                </div>
            </div>
            <div class="item">
                <div class="img" style="background-image: url(http://oberfeldsnowcap.com/wp-content/uploads/2011/12/Unic.png)"></div>
                <div class="info">
                    <div class="title">Venni</div>
                    <div class="text"> Кондиционерные
                        установки</div>
                </div>

            </div>
            <div class="item">
                <div class="img" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvGPFoM2_a7joaXyN8wyi16s4k-ZMPbimpqsiDF0ThZKHrNn6cJQ)"></div>
                <div class="info">
                    <div class="title">KNAUF</div>
                    <div class="text">Торговое холодильное  оборудование</div>
                </div>

            </div>
            <div class="item">
                <div class="img" style="background-image: url(http://oberfeldsnowcap.com/wp-content/uploads/2011/12/Unic.png)"></div>
                <div class="info">
                    <div class="title">VELUX</div>
                    <div class="text"> Отопительные
                        конвекторы</div>
                </div>

            </div>
        </div>
        <a href="#" class="main-link">Все партнеры</a>
    </div>
</div>
@stop