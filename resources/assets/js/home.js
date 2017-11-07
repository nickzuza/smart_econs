'use strict';
 if(document.getElementById('homePage')){
     window.home=new Vue({
         el:'#homePage',
         data:{

         },
         methods:{

         },
         mounted(){
             $('.homePage-slider').slick({
                 // autoplay:true,
                 // autoplaySpeed:5000,
                 arrows:true,
                 rows:0,
                 dots:true
             })
         }
     });
 }