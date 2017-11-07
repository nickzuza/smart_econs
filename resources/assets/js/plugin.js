'use strict';
window.head=new Vue({
    el:'.header',
    data:{
        search:false
    },
    methods:{},
    mounted(){
        document.querySelector('.deep>.page-title').addEventListener('click',function(e){
            if(window.innerWidth <= 1100 ){
                e.preventDefault();
                var el= e.currentTarget;
                $(el).closest('.deep').find('.submenu').slideDown('slow');
            }
        });
        document.getElementsByClassName('close-menu')[0].addEventListener('click', function(){
            Velocity(document.getElementsByClassName('header-bottom-wrapper')[0], { left:'-100vw' }, { duration: 500 });
        });
        document.getElementsByClassName('mob-menu-butt')[0].addEventListener('click',function(){
            Velocity(document.getElementsByClassName('header-bottom-wrapper')[0], { left: 0 }, { duration: 500 });
        });
        window.addEventListener('resize',function(){
            if(window.innerWidth>1100){
                    document.getElementsByClassName('submenu')[0].removeAttribute('style');
            }
        });
    }
});