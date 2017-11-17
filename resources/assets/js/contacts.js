"use strict";

if(document.getElementById('contactsPage')){
    window.contactsPage = new Vue({
            el:'#contactsPage',
            data:{
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
                            header.loader = true;
                            console.log('sent');
                        }
                    }).catch(() => {

                    });
                }
            }
    });
}