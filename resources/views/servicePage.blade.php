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

        //'https://www.youtube.com/watch?v=3XW-XdDe6j0'
        //"https://img.youtube.com/vi/.../default.jpg"
    </script>


    <div class="servicePage page" id="servicePage">
        <transition name="fade">
            <div class="back" v-cloak v-if="yt">
                <button class="back-close" v-on:click="yt = false">+</button>
                <youtube class="youtube" :video-id="videoLink" :player-width="width > 650 ? 640 : width - 30 " player-height="390" ></youtube>
            </div>
        </transition>

        <div class="container">
            <div class="breadcrumbs">
                <a href="#" class="breadcrumb">Главная</a>
                <a href="#" class="breadcrumb">Услуги</a>
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
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ex labore libero minus necessitatibus nisi perferendis porro quaerat quidem quis? Ad adipisci delectus deserunt ducimus exercitationem expedita nesciunt numquam, saepe. Cupiditate dolorem excepturi nemo? Enim illum impedit iure magnam magni, maiores minima perspiciatis quidem quis sequi tempora unde voluptas! Alias aliquam animi assumenda beatae cumque dicta dolor, dolore eaque ex fuga impedit maxime nulla pariatur porro quaerat quisquam sequi sunt, tempore unde vero. Amet, assumenda at atque debitis deserunt eius error eum facilis impedit minus neque non officia possimus praesentium quae quod repellendus sed suscipit vero voluptatem! Aspernatur consectetur dignissimos dolore dolores earum illum, incidunt laudantium magni nam neque nesciunt quidem quis quo quod reprehenderit rerum saepe sapiente suscipit? Aspernatur autem culpa dignissimos distinctio eaque, facere incidunt nihil non nostrum sint sunt totam ullam unde ut, voluptates! Dignissimos eveniet illo perferendis quae repellendus rerum sunt, voluptatem! Aspernatur debitis dolorem fugit laborum, natus non rem suscipit! Accusamus beatae consequatur corporis culpa cupiditate dignissimos ducimus eligendi eum fugiat illo incidunt iure mollitia nesciunt non, omnis optio perspiciatis possimus, quam quas quisquam repudiandae sunt ullam voluptas voluptate voluptatum? Aliquam amet consequuntur debitis et, labore odio porro quae repellendus similique veritatis! Eveniet illum, quis.
                    </div>
                    <div  class="socials">
                        <div class="title">Поделиться</div>
                        <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus"></div>
                    </div>

                    <div class="consult">
                        <div class="info">
                            <div class="title">Необходима консультация?</div>
                            <div class="text">Напишите нам!</div>
                        </div>
                        <button class="main-link">Написать</button>
                    </div>

                </div>
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

        </div>

    </div>
    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="//yastatic.net/share2/share.js"></script>
@stop