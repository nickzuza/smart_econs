if(document.getElementById('createPage')){
    require('lightgallery');
    require('lightgallery/modules/lg-video');
    window.createPage = new Vue({
        el:"#createPage",
        data:{
            gallery:[]
        },
        mounted(){
            this.gallery = window.galeryItems;
            $(window).on('load',function(){
                $('.gallery').lightGallery();
            })
        }
    })
}