@extends('layout')
@section('meta')

@stop
@section('content')
    <script>
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


    <div class="createPage page" id="createPage">
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
            <div class="editor">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ipsam ipsum molestiae, officia praesentium quia recusandae sapiente! Accusantium aliquam aliquid aut beatae debitis, dignissimos dolores ducimus et exercitationem explicabo fugiat fugit iusto laborum magni modi nesciunt nihil officia omnis, perferendis provident quibusdam quos repudiandae similique soluta temporibus vel voluptatibus? Ab, accusantium, aliquam, amet cupiditate delectus doloribus ex illum molestiae natus neque officiis possimus quae quibusdam repellendus rerum ut veniam voluptatem? Assumenda at, autem consequatur culpa cum deleniti dignissimos dolorum eius explicabo inventore magnam magni neque nostrum odit optio placeat praesentium quis quos sapiente, totam ut veniam vero. Ab cum doloremque dolores id laudantium nesciunt, nisi odio officiis quaerat quia quibusdam rem sint. Aspernatur incidunt libero maxime velit veniam? Aliquid amet deleniti deserunt dignissimos dolor dolore, eligendi error ex expedita itaque magnam, molestias, nisi obcaecati odit officiis pariatur sit sunt suscipit veniam veritatis. Accusantium dolore fugit, harum ipsum magnam nesciunt praesentium.
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
            <div  class="socials">
                <div class="title">Поделиться</div>
                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus"></div>
            </div>
        </div>

    </div>
    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="//yastatic.net/share2/share.js"></script>
@stop