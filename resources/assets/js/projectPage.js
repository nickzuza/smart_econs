"use strict";
import VueYouTubeEmbed from  'vue-youtube-embed';

Vue.use(VueYouTubeEmbed);
if( document.getElementById('projectPage') || document.getElementById('servicePage') || document.getElementById('workPage')) {
    require('lightgallery');
    require('lightgallery/modules/lg-video');
    switch ((document.getElementById('projectPage') || document.getElementById('servicePage') || document.getElementById('workPage'))){
        case document.getElementById('projectPage'):
            window.page = '#projectPage'
            break;
        case document.getElementById('servicePage'):
            window.page = '#servicePage'
            break;
        case document.getElementById('workPage'):
            window.page = '#workPage';
            break;
        default :console.log('no prod');
    }
    window.projectPage= new Vue({
        el: window.page ,
        data:{
            slides:window.slideItems,
            activeSlide:0,
            videoLink:'',
            yt:false,
            width:window.innerWidth,
            gallery:[]
        },
        mounted(){
            if(window.page !== "#workPage"){
                $('.item-slider').slick({
                    rows:0,
                    fade:true,
                    arrows:false,
                });
            }else{
                this.gallery = window.galeryItems;
                $('.item-slider').slick({
                    rows:0,
                    fade:true,
                    arrows:false,
                    asNavFor:'.item-nav'
                });
                $('.item-nav').slick({
                    rows:0,
                    slidesToShow:4,
                    vertical:true,
                    arrows:false,
                    focusOnSelect: true,
                    asNavFor:'.item-slider',
                    responsive:[
                        {
                            breakpoint:1170 ,
                            settings:{
                                vertical:false,
                                slidesToShow:4,

                            }
                        },
                        {
                            breakpoint:750 ,
                            settings:{
                                vertical:false,
                                slidesToShow:2,

                            }
                        }
                    ]
                });
                $(window).on('load',function(){
                    $('.gallery').lightGallery();
                })
            }

            window.addEventListener('resize',function(){
                window.projectPage.width = window.innerWidth;
            });
        },
        watch:{
            yt(){
                if(this.yt) {
                    document.getElementsByTagName('html')[0].classList.add('scr-no');
                    document.getElementsByTagName('body')[0].classList.add('scr-no');
                }else{
                    this.videoLink='';
                    document.getElementsByTagName('html')[0].classList.remove('scr-no');
                    document.getElementsByTagName('body')[0].classList.remove('scr-no');
                }
            }
        }
    });
    if(document.querySelector('.consult .main-link') !== null){
        document.querySelector('.consult .main-link').addEventListener('click',function () {
            window.callback();
        });
    }
    if(window.page === '#workPage'){
        window.onload=function(){
        }
    }
    document.addEventListener('click',function(e){
        if(window.page !== '#workPage'){
            if(e.target.closest('.item-nav') && e.target.classList.contains('img')){
                window.projectPage.activeSlide = +e.target.getAttribute('data-slide');
                $('.item-slider').slick('slickGoTo' , $(e.target).attr('data-slide'));
                if(e.target.classList.contains('video')){
                    projectPage.videoLink=e.target.getAttribute('data-src');
                    projectPage.yt=true;
                }
            }
        }

        if(e.target.closest('.item-slider')&& e.target.classList.contains('video')){
            projectPage.videoLink=e.target.getAttribute('data-src');
            projectPage.yt=true;
        }
    });
}