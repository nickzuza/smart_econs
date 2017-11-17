@extends('layout')
@section('meta')

@stop
@section('content')
    <script>
        window.slideItems = [
            {
                link:'http://animalsbirds.com/wp-content/uploads/2016/07/chicken-nature-free-hd-wallpapers.jpg',
                type:'img'
            },
            {
                link:'http://ndl.mgccw.com/mu3/app/20140615/16/1402829111133/ss/0_small.png',
                type:'img'
            },
            {
                link: 'https://i.pinimg.com/736x/45/cc/6a/45cc6a072f8491cea0a8255e96045d4c--background-hd-wallpaper-wallpaper-free.jpg',
                type:'img'
            },
            {
                link:  'https://s6.favim.com/610/150924/camera-hd-wallpaper-iphone-wallpaper-Favim.com-3351516.jpg',
                type:'img'
            },
            {
                link:'https://i.pinimg.com/736x/31/a9/a2/31a9a2faea862231203855b2eff19816--wallpaper-for-mobile-iphone--wallpaper.jpg',
                type:'img'
            },
            {
                link:  'https://i.pinimg.com/736x/ab/01/85/ab018500f59052fd62c6668d160e8cd6--iphone-backgrounds-phone-wallpapers.jpg',
                type:'img'
            },
            {
                link:  '3XW-XdDe6j0',
                type:'yt'
            },
            {
                link:'https://i.pinimg.com/736x/ea/47/52/ea47521cb9350e5795e691254c1602ca--wallpaper-backgrounds-phone-wallpapers.jpg',
                type:'img'
            },


        ]
        window.galeryItems = [
            {
                link:'http://animalsbirds.com/wp-content/uploads/2016/07/chicken-nature-free-hd-wallpapers.jpg',
                type:'img'
            },
            {
                link:'http://ndl.mgccw.com/mu3/app/20140615/16/1402829111133/ss/0_small.png',
                type:'img'
            },
            {
                link: 'https://i.pinimg.com/736x/45/cc/6a/45cc6a072f8491cea0a8255e96045d4c--background-hd-wallpaper-wallpaper-free.jpg',
                type:'img'
            },
            {
                link:  'https://s6.favim.com/610/150924/camera-hd-wallpaper-iphone-wallpaper-Favim.com-3351516.jpg',
                type:'img'
            },
            {
                link:'https://i.pinimg.com/736x/31/a9/a2/31a9a2faea862231203855b2eff19816--wallpaper-for-mobile-iphone--wallpaper.jpg',
                type:'img'
            },
            {
                link:  'https://i.pinimg.com/736x/ab/01/85/ab018500f59052fd62c6668d160e8cd6--iphone-backgrounds-phone-wallpapers.jpg',
                type:'img'
            },
            {
                link:  '3XW-XdDe6j0',
                type:'yt'
            },
            {
                link:'https://i.pinimg.com/736x/ea/47/52/ea47521cb9350e5795e691254c1602ca--wallpaper-backgrounds-phone-wallpapers.jpg',
                type:'img'
            },


        ]
    </script>


    <div class="workPage page" id="workPage">
        <transition name="fade">
            <div class="back" v-cloak v-if="yt">
                <button class="back-close" v-on:click="yt = false">+</button>
                <youtube class="youtube" :video-id="videoLink" :player-width="width > 650 ? 640 : width - 30 " player-height="390" ></youtube>
            </div>
        </transition>

        <div class="container">
            <div class="breadcrumbs">
                <a href="#" class="breadcrumb">Главная</a>
                <a href="#" class="breadcrumb">Портфолио</a>
                <a href="#" class="breadcrumb">Наши работы</a>
                <a href="#" class="breadcrumb">Дизайн интерьеров</a>
                <span class="breadcrumb">Капитальное строительство</span>
            </div>
            <div class="h1-title">
                <h1>Капитальное строительство</h1>
            </div>
            <div class="template2">
                <div class="template2-left">
                    <div class="template2-left-slider-wrapp">
                        <div class="item-slider">
                            <div class="img"
                                 v-for="item in slides"
                                 :style="item.type==='img'?{backgroundImage : 'url('+item.link+')' }:{backgroundImage : 'url(https://img.youtube.com/vi/'+item.link+'/hqdefault.jpg)' }"
                                 :class="{video : item.type !== 'img'}"
                                 :data-src="item.link">
                            </div>
                        </div>
                        <div class="item-nav">
                            <div v-for="(item , index) in slides"
                                 :style="item.type==='img'?{backgroundImage : 'url('+item.link+')' }:{backgroundImage : 'url(https://img.youtube.com/vi/'+item.link+'/default.jpg)' }"
                                 class="img"
                                 :data-slide="index"
                                 :data-src="item.link"
                                 :class="{active :activeSlide === index , video : item.type !== 'img'} "
                            ></div>
                        </div>
                    </div>
                </div>
                <div class="template2-right">
                    <div class="editor">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis cumque, harum ipsum maiores non officiis recusandae. A consequatur cum debitis, eum eveniet expedita incidunt minus neque numquam quod reiciendis sint voluptates voluptatum. Asperiores deserunt dignissimos dolore doloribus et impedit in libero magni nostrum, nulla optio perferendis quia reiciendis veniam voluptates? Aliquam cupiditate deleniti dolor, labore odio quidem voluptates voluptatibus voluptatum. Aliquam culpa cupiditate dolorem dolorum eaque nostrum, totam voluptatem!
                    </div>
                    <div  class="socials">
                        <div class="title">Поделиться</div>
                        <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus"></div>
                    </div>
                </div>
            </div>
            <div class="block-page">
                <h2>Описание</h2>
            </div>
            <div class="editor">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ipsam ipsum molestiae, officia praesentium quia recusandae sapiente! Accusantium aliquam aliquid aut beatae debitis, dignissimos dolores ducimus et exercitationem explicabo fugiat fugit iusto laborum magni modi nesciunt nihil officia omnis, perferendis provident quibusdam quos repudiandae similique soluta temporibus vel voluptatibus? Ab, accusantium, aliquam, amet cupiditate delectus doloribus ex illum molestiae natus neque officiis possimus quae quibusdam repellendus rerum ut veniam voluptatem? Assumenda at, autem consequatur culpa cum deleniti dignissimos dolorum eius explicabo inventore magnam magni neque nostrum odit optio placeat praesentium quis quos sapiente, totam ut veniam vero. Ab cum doloremque dolores id laudantium nesciunt, nisi odio officiis quaerat quia quibusdam rem sint. Aspernatur incidunt libero maxime velit veniam? Aliquid amet deleniti deserunt dignissimos dolor dolore, eligendi error ex expedita itaque magnam, molestias, nisi obcaecati odit officiis pariatur sit sunt suscipit veniam veritatis. Accusantium dolore fugit, harum ipsum magnam nesciunt praesentium.
            </div>
            <div class="block-page">
                <h2>Галерея</h2>
            </div>
            <div class="gallery">
                <div class="img-wrapp"
                     v-for="item in gallery"
                     :data-src="item.type==='img' ? item.link : 'https://www.youtube.com/watch?v='+item.link"
                >
                    <div class="img"
                         :style="item.type==='img'?{backgroundImage : 'url('+item.link+')' }:{backgroundImage : 'url(https://img.youtube.com/vi/'+item.link+'/hqdefault.jpg)' }"
                         :class="{video : item.type !== 'img'}"
                    >
                    </div>
                </div>
            </div>
            <div class="block-page">
                <h2>Скачать документацию</h2>

            </div>
            <div class="files">
                <a href="css.pdf" target="_blank" class="file">
                    <div class="img"></div>
                    <div class="title">Lorem ipsum dolor sit amet.</div>
                </a>
                <a href="css.docx" target="_blank" class="file">
                    <div class="img"></div>
                    <div class="title">Lorem ipsum dolor sit amet.</div>
                </a>
                <a href="css.pdf" target="_blank"  class="file">
                    <div class="img"></div>
                    <div class="title">Lorem ipsum dolor sit amet.</div>
                </a>
            </div>
            <div class="block-page">
                <h2>Отзыв клиента</h2>
            </div>
            <div class="user">
                <div class="img" style="background-image: url(https://www.shareicon.net/download/2016/05/29/772558_user_512x512.png)"></div>
                <div class="repl">
                    <div class="top">
                        <div class="name">
                            Олег Иванов
                        </div>
                        <div class="date">
                            25 sent 2017
                        </div>
                    </div>
                    <div class="speciality">
                        boss
                    </div>
                    <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores aspernatur culpa deleniti dignissimos dolorum eius eum eveniet exercitationem explicabo hic illo in incidunt ipsa ipsum non omnis perferendis porro qui quod, sint vel voluptates voluptatibus. Aspernatur culpa cumque dignissimos, dolorem fuga iusto magnam odit provident vel voluptatum. Alias assumenda aut autem consectetur distinctio eaque eligendi explicabo harum id, illo impedit iste labore molestias nemo obcaecati quidem quisquam quos saepe sapiente sed similique sunt tempora. Aliquam aperiam atque autem blanditiis dolorum ea, eaque error esse in ipsa laudantium modi nam nisi nostrum numquam saepe similique sit, sunt. Adipisci aspernatur consequatur corporis culpa eius et, porro reiciendis reprehenderit repudiandae saepe, vero?
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="//yastatic.net/share2/share.js"></script>
@stop