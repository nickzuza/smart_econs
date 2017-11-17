@extends('layout')
@section('meta')

@stop
@section('content')

    <div class="vacantionsPage page" id="vacantionsPage">
        <modal v-if="modal" v-on:close="closeMod" v-cloak class="modal-base callback mobilemenu">

            <div class="title"><h2>Стань частью команды Smart Econs!</h2></div>
            <form action="">
                <div class="input-wrapper">
                    <label for="">Имя <sup>*</sup></label>
                    <div class="v-input">
                        <input type="text"
                               v-validate="'required|min:2|max:50'"
                               name="feedback_name"
                               v-model.lazy="feedback.name"
                               data-vv-validate-on="none"
                               v-on:focus="removeError('feedback_name')"

                        >
                        <span class="error" v-if="errors.has('feedback_name')">error</span>
                    </div>
                </div>
                <div class="input-wrapper">
                    <label for="">Мэйл или телефон <sup>*</sup></label>
                    <div class="v-input">
                        <input type="text"
                               v-validate="'required|min:2|max:50'"
                               name="feedback_email"
                               v-model.lazy="feedback.email"
                               data-vv-validate-on="none"
                               v-on:focus="removeError('feedback_email')"
                        >
                        <span class="error" v-if="errors.has('feedback_email')">error</span>
                    </div>
                </div>
                <div class="input-wrapper">
                    <label for="">Ваше сообщение <sup>*</sup></label>
                    <div class="v-input">
                        <textarea v-validate="'required|min:20'"
                                  name="feedback_text"
                                  v-model.lazy="feedback.text"
                                  data-vv-validate-on="none"
                                  v-on:focus="removeError('feedback_text')"></textarea>
                        <span class="error" v-if="errors.has('feedback_text')">error</span>
                    </div>
                </div>
                <input id="cvFile" type="file"
                       v-on:change="getFile"
                >
                <label for="cvFile">
                    Oставить CV
                </label>
                <button type="button" class="submit" v-on:click="validate">Отправить!</button>
            </form>

        </modal>
        <div class="container">
            <div class="breadcrumbs">
                <a href="#" class="breadcrumb">Главная</a>
                <a href="#" class="breadcrumb">Новости</a>
                <span class="breadcrumb">Деревянный дом мечты с лестницей-молнией</span>
            </div>
            <div class="h1-title">
                <h1>Вакансии</h1>
            </div>

           <div class="editor">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam et eveniet expedita fuga id itaque nulla pariatur quaerat, quasi quod, sapiente sint sunt suscipit temporibus.
           </div>
            <div class="accordeon-wrapper">
                <div class="accordeon active">
                    <div class="title">Менеджер продаж</div>
                    <div class="editor-wrapp">
                        <div class="editor">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid atque dignissimos doloremque eaque eos, excepturi ipsa maxime nesciunt nihil obcaecati odit omnis pariatur possimus praesentium ratione tempora veritatis? Amet aut consectetur, deserunt dolores enim id illum libero modi nisi placeat quo sed sint vel. Accusantium aspernatur consectetur corporis doloribus quam sapiente tempora vel? Ab, adipisci asperiores at blanditiis corporis delectus eaque est eum exercitationem id in ipsum iste iure laborum nam necessitatibus nemo neque nulla numquam omnis pariatur perferendis perspiciatis, quae, quaerat quis quod recusandae sed sit veritatis vitae! Animi aut commodi, debitis dolorem ea est id in ipsam ipsum minima neque nihil nisi nulla obcaecati placeat repellendus sint, tempore temporibus? Accusamus aliquid aperiam asperiores aut autem commodi delectus deleniti dolor dolorem dolorum ducimus error exercitationem fuga illum iusto laboriosam magnam maxime minima, molestias odit pariatur perferendis praesentium quam quis recusandae repellat, ut. Accusantium dicta laudantium molestias neque nobis.
                        </div>
                        <div class="editor-bottom">
                            <span>Заинтересовала наша вакансия? Отпавьте ваше CV.</span>
                            <button data-position="manager1" class=" addCv" v-on:click ="modal = true">
                                Oставить CV
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.73 31.73" style="enable-background:new 0 0 31.73 31.73;" xml:space="preserve" height="25px" width="25px">
                                <g>
                                    <g>
                                        <path d="M2.884,28.016V8.924h7.057V1.867h13.362v15.411c0.222-0.019,0.444-0.034,0.67-0.034c0.408,0,0.806,0.041,1.197,0.102V0    H8.755l-7.74,8.171v21.711h16.965c-0.46-0.562-0.843-1.189-1.132-1.867H2.884z M8.072,3.436v3.621H4.643L8.072,3.436z" fill="#FFFFFF"/>
                                        <rect x="5.122" y="14.174" width="15.825" height="2.104" fill="#FFFFFF"/>
                                        <path d="M20.036,18.331H5.122v2.104h12.602C18.344,19.586,19.13,18.87,20.036,18.331z" fill="#FFFFFF"/>
                                        <path d="M5.122,24.779h11.12c0.02-0.73,0.133-1.438,0.342-2.104H5.122V24.779z" fill="#FFFFFF"/>
                                        <path d="M23.973,18.244c-3.724,0-6.743,3.02-6.743,6.743s3.02,6.743,6.743,6.743s6.743-3.02,6.743-6.743    S27.696,18.244,23.973,18.244z M27.196,25.988h-2.224v2.225h-2v-2.225h-2.224v-2h2.224v-2.225h2v2.225h2.224V25.988z" fill="#FFFFFF"/>
                                    </g>
                                </g>
                            </svg>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="accordeon">
                    <div class="title">Менеджер продаж</div>
                    <div class="editor-wrapp">
                        <div class="editor">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid atque dignissimos doloremque eaque eos, excepturi ipsa maxime nesciunt nihil obcaecati odit omnis pariatur possimus praesentium ratione tempora veritatis? Amet aut consectetur, deserunt dolores enim id illum libero modi nisi placeat quo sed sint vel. Accusantium aspernatur consectetur corporis doloribus quam sapiente tempora vel? Ab, adipisci asperiores at blanditiis corporis delectus eaque est eum exercitationem id in ipsum iste iure laborum nam necessitatibus nemo neque nulla numquam omnis pariatur perferendis perspiciatis, quae, quaerat quis quod recusandae sed sit veritatis vitae! Animi aut commodi, debitis dolorem ea est id in ipsam ipsum minima neque nihil nisi nulla obcaecati placeat repellendus sint, tempore temporibus? Accusamus aliquid aperiam asperiores aut autem commodi delectus deleniti dolor dolorem dolorum ducimus error exercitationem fuga illum iusto laboriosam magnam maxime minima, molestias odit pariatur perferendis praesentium quam quis recusandae repellat, ut. Accusantium dicta laudantium molestias neque nobis.
                        </div>
                        <div class="editor-bottom">
                            <span>Заинтересовала наша вакансия? Отпавьте ваше CV.</span>
                            <button data-position="manager2" class=" addCv " v-on:click ="modal = true">
                                Oставить CV
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.73 31.73" style="enable-background:new 0 0 31.73 31.73;" xml:space="preserve" height="25px" width="25px">
                                <g>
                                    <g>
                                        <path d="M2.884,28.016V8.924h7.057V1.867h13.362v15.411c0.222-0.019,0.444-0.034,0.67-0.034c0.408,0,0.806,0.041,1.197,0.102V0    H8.755l-7.74,8.171v21.711h16.965c-0.46-0.562-0.843-1.189-1.132-1.867H2.884z M8.072,3.436v3.621H4.643L8.072,3.436z" fill="#FFFFFF"/>
                                        <rect x="5.122" y="14.174" width="15.825" height="2.104" fill="#FFFFFF"/>
                                        <path d="M20.036,18.331H5.122v2.104h12.602C18.344,19.586,19.13,18.87,20.036,18.331z" fill="#FFFFFF"/>
                                        <path d="M5.122,24.779h11.12c0.02-0.73,0.133-1.438,0.342-2.104H5.122V24.779z" fill="#FFFFFF"/>
                                        <path d="M23.973,18.244c-3.724,0-6.743,3.02-6.743,6.743s3.02,6.743,6.743,6.743s6.743-3.02,6.743-6.743    S27.696,18.244,23.973,18.244z M27.196,25.988h-2.224v2.225h-2v-2.225h-2.224v-2h2.224v-2.225h2v2.225h2.224V25.988z" fill="#FFFFFF"/>
                                    </g>
                                </g>
                            </svg>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="accordeon">
                    <div class="title">Менеджер продаж</div>
                    <div class="editor-wrapp">
                        <div class="editor">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid atque dignissimos doloremque eaque eos, excepturi ipsa maxime nesciunt nihil obcaecati odit omnis pariatur possimus praesentium ratione tempora veritatis? Amet aut consectetur, deserunt dolores enim id illum libero modi nisi placeat quo sed sint vel. Accusantium aspernatur consectetur corporis doloribus quam sapiente tempora vel? Ab, adipisci asperiores at blanditiis corporis delectus eaque est eum exercitationem id in ipsum iste iure laborum nam necessitatibus nemo neque nulla numquam omnis pariatur perferendis perspiciatis, quae, quaerat quis quod recusandae sed sit veritatis vitae! Animi aut commodi, debitis dolorem ea est id in ipsam ipsum minima neque nihil nisi nulla obcaecati placeat repellendus sint, tempore temporibus? Accusamus aliquid aperiam asperiores aut autem commodi delectus deleniti dolor dolorem dolorum ducimus error exercitationem fuga illum iusto laboriosam magnam maxime minima, molestias odit pariatur perferendis praesentium quam quis recusandae repellat, ut. Accusantium dicta laudantium molestias neque nobis.
                        </div>
                        <div class="editor-bottom">
                            <span>Заинтересовала наша вакансия? Отпавьте ваше CV.</span>
                            <button data-position="manager3" class=" addCv " v-on:click ="modal = true">
                                Oставить CV
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.73 31.73" style="enable-background:new 0 0 31.73 31.73;" xml:space="preserve" height="25px" width="25px">
                                <g>
                                    <g>
                                        <path d="M2.884,28.016V8.924h7.057V1.867h13.362v15.411c0.222-0.019,0.444-0.034,0.67-0.034c0.408,0,0.806,0.041,1.197,0.102V0    H8.755l-7.74,8.171v21.711h16.965c-0.46-0.562-0.843-1.189-1.132-1.867H2.884z M8.072,3.436v3.621H4.643L8.072,3.436z" fill="#FFFFFF"/>
                                        <rect x="5.122" y="14.174" width="15.825" height="2.104" fill="#FFFFFF"/>
                                        <path d="M20.036,18.331H5.122v2.104h12.602C18.344,19.586,19.13,18.87,20.036,18.331z" fill="#FFFFFF"/>
                                        <path d="M5.122,24.779h11.12c0.02-0.73,0.133-1.438,0.342-2.104H5.122V24.779z" fill="#FFFFFF"/>
                                        <path d="M23.973,18.244c-3.724,0-6.743,3.02-6.743,6.743s3.02,6.743,6.743,6.743s6.743-3.02,6.743-6.743    S27.696,18.244,23.973,18.244z M27.196,25.988h-2.224v2.225h-2v-2.225h-2.224v-2h2.224v-2.225h2v2.225h2.224V25.988z" fill="#FFFFFF"/>
                                    </g>
                                </g>
                            </svg>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="accordeon">
                    <div class="title">Менеджер продаж</div>
                    <div class="editor-wrapp">
                        <div class="editor">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid atque dignissimos doloremque eaque eos, excepturi ipsa maxime nesciunt nihil obcaecati odit omnis pariatur possimus praesentium ratione tempora veritatis? Amet aut consectetur, deserunt dolores enim id illum libero modi nisi placeat quo sed sint vel. Accusantium aspernatur consectetur corporis doloribus quam sapiente tempora vel? Ab, adipisci asperiores at blanditiis corporis delectus eaque est eum exercitationem id in ipsum iste iure laborum nam necessitatibus nemo neque nulla numquam omnis pariatur perferendis perspiciatis, quae, quaerat quis quod recusandae sed sit veritatis vitae! Animi aut commodi, debitis dolorem ea est id in ipsam ipsum minima neque nihil nisi nulla obcaecati placeat repellendus sint, tempore temporibus? Accusamus aliquid aperiam asperiores aut autem commodi delectus deleniti dolor dolorem dolorum ducimus error exercitationem fuga illum iusto laboriosam magnam maxime minima, molestias odit pariatur perferendis praesentium quam quis recusandae repellat, ut. Accusantium dicta laudantium molestias neque nobis.
                        </div>
                        <div class="editor-bottom">
                            <span>Заинтересовала наша вакансия? Отпавьте ваше CV.</span>
                            <button data-position="manager4" class=" addCv " v-on:click ="modal = true">
                                Oставить CV
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.73 31.73" style="enable-background:new 0 0 31.73 31.73;" xml:space="preserve" height="25px" width="25px">
                                <g>
                                    <g>
                                        <path d="M2.884,28.016V8.924h7.057V1.867h13.362v15.411c0.222-0.019,0.444-0.034,0.67-0.034c0.408,0,0.806,0.041,1.197,0.102V0    H8.755l-7.74,8.171v21.711h16.965c-0.46-0.562-0.843-1.189-1.132-1.867H2.884z M8.072,3.436v3.621H4.643L8.072,3.436z" fill="#FFFFFF"/>
                                        <rect x="5.122" y="14.174" width="15.825" height="2.104" fill="#FFFFFF"/>
                                        <path d="M20.036,18.331H5.122v2.104h12.602C18.344,19.586,19.13,18.87,20.036,18.331z" fill="#FFFFFF"/>
                                        <path d="M5.122,24.779h11.12c0.02-0.73,0.133-1.438,0.342-2.104H5.122V24.779z" fill="#FFFFFF"/>
                                        <path d="M23.973,18.244c-3.724,0-6.743,3.02-6.743,6.743s3.02,6.743,6.743,6.743s6.743-3.02,6.743-6.743    S27.696,18.244,23.973,18.244z M27.196,25.988h-2.224v2.225h-2v-2.225h-2.224v-2h2.224v-2.225h2v2.225h2.224V25.988z" fill="#FFFFFF"/>
                                    </g>
                                </g>
                            </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>



    </div>
    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="//yastatic.net/share2/share.js"></script>

@stop