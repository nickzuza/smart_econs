'use strict';
import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);
Vue.component('modal', {
    template: `<transition name="modal">
   <div class="modal-mask" @click="$emit(\'close\')">
      <div class="modal-wrapper">
         <div class="modal-container">
            <div class="modal-close" @click="$emit(\'close\')">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="12px" height="12px" x="0px" y="0px" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve">
                <g>
                    <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88   c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242   C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879   s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
                </g>
              </svg>
            </div>
            <div class="modal-body" @click.stop>
               <slot></slot>
            </div>
         </div>
      </div>
   </div>
</transition>`
});
window.head=new Vue({
    el:'.header',
    data:{
        toTop:false,
        searchData:'',
        loader:false,
        search:false,
        modal:false,
        feedback:{
            name:'',
            email:'',
            text:''
        }
    },
    methods:{
        closeMod(){
            this.modal=false;
        },
        removeError(name){
            this.errors.remove(name);
        },
        validate(){
            this.$validator.validateAll().then((result) => {
                if(result){
                    var data = {
                        name: this.feedback.name,
                        email :this.feedback.email,
                        comment:this.feedback.text,
                    }
                    // header.loader = true;
                    console.log('sent');
                }
            }).catch(() => {

            });
        }
    },
    mounted(){
        window.addEventListener('scroll',function(){
            if(window.scrollY > 500){
                    head.toTop = true;
            }else{
                head.toTop = false;
            }
        });
        document.addEventListener('click',function(e){
            if(e.target.classList.contains('toTop') || e.target.closest('.toTop')){
                $("html, body").animate({ scrollTop: 0 }, "slow");
            }
        });
        document.querySelector('.footer-mob > .mob-title').addEventListener('click',function(e){
            var el = e.currentTarget , close = el.getElementsByClassName('close')[0];
            $(el).closest('.footer-mob').find('ul').css('display') !== 'none' ? $(close).removeAttr('style')
            : $(close).css('transform','rotate(45deg)');
            $(el).closest('.footer-mob').find('ul').slideToggle();
        });
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
