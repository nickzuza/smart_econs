if(document.getElementById('vacantionsPage')){
    window.vacantions = new Vue ({
        el:"#vacantionsPage",
        data:{
            modal:false,
            feedback:{
                name:'',
                email:'',
                text:'',
                position:'',
                file:undefined
            }
        },
        methods:{
            closeMod(){
                this.modal=false;
                this.feedback.file = undefined;
                this.feedback.name='';
                this.feedback.email='';
                this.feedback.text='';
                this.feedback.position='';
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
                        console.log(this.feedback.name+' ; '+this.feedback.email+' ; '+this.feedback.text+' ; '+this.feedback.file.name+' ; '+this.feedback.position);
                    }
                }).catch(() => {

                });
            },
            getFile(){

                var fInp = document.getElementById('cvFile');
                if(fInp.files.length > 0){
                    this.feedback.file = fInp.files[0];
                    fInp.labels[0].innerHTML=fInp.files[0].name;
                }

            }
        }
    });
    for(i = 0 ; i < document.getElementsByClassName('addCv').length ; i++){
        document.getElementsByClassName('addCv')[i].addEventListener('click',function(e){
            vacantions.feedback.position = e.currentTarget.getAttribute('data-position');
        });
    }

    for(i =0 ; i < document.querySelectorAll('.accordeon .title').length ;i++){
        document.querySelectorAll('.accordeon .title')[i].addEventListener('click',function(e){
            var el = e.currentTarget;
            for(j =0 ; j < document.querySelectorAll('.accordeon .title').length ;j++){
                Velocity(document.querySelectorAll('.accordeon')[j].querySelector('.editor-wrapp') , "slideUp" , {duration: 500});
                document.querySelectorAll('.accordeon')[j].classList.remove('active');
            }
            if(el.closest('.accordeon').querySelector('.editor-wrapp').style.display==='none'){

                Velocity(el.closest('.accordeon').querySelector('.editor-wrapp') , "slideDown" , {duration: 500});
                el.closest('.accordeon').classList.add('active');
                var scroll= function(){
                    setTimeout(function(){
                        Velocity(document.getElementsByTagName("body")[0] ,"scroll" , {offset:el.closest('.accordeon').offsetTop +'px' ,  mobileHA: false} )
                    } , 500);
                }
                scroll();


            }else{
                Velocity(el.closest('.accordeon').querySelector('.editor-wrapp') , "slideUp" , {duration: 500});
                el.closest('.accordeon').classList.remove('active');
            }
        })
    }


}