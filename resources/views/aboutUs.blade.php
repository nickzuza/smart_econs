@extends('layout')
@section('meta')

@stop
@section('content')
    <div class="aboutUsPage page" id="aboutUsPage">
        <div class="container">
            <div class="breadcrumbs">
                <a href="#" class="breadcrumb">Главная</a>
                <a href="#" class="breadcrumb">О компании</a>
                <span class="breadcrumb" v-if="tab===0">Загустители</span>
                <span class="breadcrumb" v-if="tab===1">Миссия Компании</span>
                <span class="breadcrumb" v-if="tab===2">Наши партнеры</span>
            </div>
            <div class="h1-title">
                <h1>Миссия компании</h1>
            </div>
            <div class="template1">
                <div class="template1-left">
                    <div class="template1-left__menu">
                        <ul>
                            <li :class="{active : tab === 0}"><button v-on:click="tab = 0">О нас</button></li>
                            <li :class="{active : tab === 1}"><button v-on:click="tab = 1">Миссия Компании</button></li>
                            <li :class="{active : tab === 2}"><button v-on:click="tab = 2">Наши партнёры</button></li>

                        </ul>
                    </div>
                </div>
                <div class="template1-right">
                            <div v-if="tab === 0" v-cloak class="editor">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Aliquam delectus distinctio enim, in inventore itaque necessitatibus nihil reprehenderit sint velit.
                                Aperiam aspernatur beatae culpa dignissimos dolores eaque eligendi eveniet explicabo facere ipsam labore laborum nemo nihil, pariatur quo recusandae sint suscipit temporibus, veniam voluptatum?
                                Accusantium aperiam autem consequatur dolor, maiores nisi placeat praesentium sint sit temporibus ullam velit veniam voluptates? A accusantium, amet aspernatur atque corporis culpa dolore ex fugiat harum labore minus nobis perspiciatis quasi rerum, ut!
                                Commodi magni omnis quae sapiente tempora? Delectus, hic maxime minima molestias omnis quas ut.
                                Animi at autem deleniti deserunt eos eveniet incidunt ipsum laboriosam magni minima nostrum, odio perferendis quidem, reprehenderit velit, voluptate voluptatum?
                                Architecto at commodi cumque delectus doloremque iure laudantium libero maxime perferendis possimus quisquam ratione sapiente sit, tempora ullam ut velit voluptate? Accusamus adipisci alias animi aperiam aspernatur assumenda at atque aut consequatur
                                cum exercitationem explicabo fuga fugiat fugit iure labore molestiae nam nostrum officiis, pariatur perferendis perspiciatis porro provident quia quo sunt tempora vero. Architecto assumenda corporis laborum magni molestiae officiis omnis quam reiciendis voluptatem.
                                Earum fuga labore magni minima quam vero, voluptatibus! Aspernatur consequatur et impedit incidunt ipsam iure nemo nobis rem repellat rerum! Adipisci commodi, odit.
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, quibusdam.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, quibusdam.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, quibusdam.</li>
                                </ul>
                            </div>
                            <div v-if="tab === 1" class="missionCompany" v-cloak >
                                <div>
                                    <div class="editor">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Aliquam delectus distinctio enim, in inventore itaque necessitatibus nihil reprehenderit sint velit.
                                        Aperiam aspernatur beatae culpa dignissimos dolores eaque eligendi eveniet explicabo facere ipsam labore laborum nemo nihil, pariatur quo recusandae sint suscipit temporibus, veniam voluptatum?
                                        Accusantium aperiam autem consequatur dolor, maiores nisi placeat praesentium sint sit temporibus ullam velit veniam voluptates? A accusantium, amet aspernatur atque corporis culpa dolore ex fugiat harum labore minus nobis perspiciatis quasi rerum, ut!
                                        Commodi magni omnis quae sapiente tempora? Delectus, hic maxime minima molestias omnis quas ut.
                                        Animi at autem deleniti deserunt eos eveniet incidunt ipsum laboriosam magni minima nostrum, odio perferendis quidem, reprehenderit velit, voluptate voluptatum?
                                        Architecto at commodi cumque delectus doloremque iure laudantium libero maxime perferendis possimus quisquam ratione sapiente sit, tempora ullam ut velit voluptate? Accusamus adipisci alias animi aperiam aspernatur assumenda at atque aut consequatur
                                        cum exercitationem explicabo fuga fugiat fugit iure labore molestiae nam nostrum officiis, pariatur perferendis perspiciatis porro provident quia quo sunt tempora vero. Architecto assumenda corporis laborum magni molestiae officiis omnis quam reiciendis voluptatem.
                                        Earum fuga labore magni minima quam vero, voluptatibus! Aspernatur consequatur et impedit incidunt ipsam iure nemo nobis rem repellat rerum! Adipisci commodi, odit.
                                    </div>
                                    <div class="block-title">
                                        <h2>Преимущества</h2>
                                    </div>
                                    <div class="advs">
                                        <div class="adv">
                                            <div class="img"></div>
                                            <div class="text">
                                                профессиональные консултации
                                            </div>
                                        </div>
                                        <div class="adv">
                                            <div class="img"></div>
                                            <div class="text">
                                                индивидуальный подход
                                            </div>
                                        </div>
                                        <div class="adv">
                                            <div class="img"></div>
                                            <div class="text">
                                                комплексное решение
                                            </div>
                                        </div>
                                        <div class="adv">
                                            <div class="img"></div>
                                            <div class="text">
                                                выполнение работ в срок
                                            </div>
                                        </div>
                                        <div class="adv">
                                            <div class="img"></div>
                                            <div class="text">
                                                фиксированный бюджет на выполнение работ
                                            </div>
                                        </div>
                                        <div class="adv">
                                            <div class="img"></div>
                                            <div class="text">
                                                екологические материалы
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-title">
                                        <h2>Наши услуги</h2>
                                    </div>
                                    <div class="editor">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Aliquam delectus distinctio enim, in inventore itaque necessitatibus nihil reprehenderit sint velit.
                                        Aperiam aspernatur beatae culpa dignissimos dolores eaque eligendi eveniet explicabo facere ipsam labore laborum nemo nihil, pariatur quo recusandae sint suscipit temporibus, veniam voluptatum?
                                        Accusantium aperiam autem consequatur dolor, maiores nisi placeat praesentium sint sit temporibus ullam velit veniam voluptates? A accusantium, amet aspernatur atque corporis culpa dolore ex fugiat harum labore minus nobis perspiciatis quasi rerum, ut!
                                        Commodi magni omnis quae sapiente tempora? Delectus, hic maxime minima molestias omnis quas ut.
                                        Animi at autem deleniti deserunt eos eveniet incidunt ipsum laboriosam magni minima nostrum, odio perferendis quidem, reprehenderit velit, voluptate voluptatum?
                                        Architecto at commodi cumque delectus doloremque iure laudantium libero maxime perferendis possimus quisquam ratione sapiente sit, tempora ullam ut velit voluptate? Accusamus adipisci alias animi aperiam aspernatur assumenda at atque aut consequatur
                                        cum exercitationem explicabo fuga fugiat fugit iure labore molestiae nam nostrum officiis, pariatur perferendis perspiciatis porro provident quia quo sunt tempora vero. Architecto assumenda corporis laborum magni molestiae officiis omnis quam reiciendis voluptatem.
                                        Earum fuga labore magni minima quam vero, voluptatibus! Aspernatur consequatur et impedit incidunt ipsam iure nemo nobis rem repellat rerum! Adipisci commodi, odit.
                                    </div>


                                </div>
                            </div>
                            <div v-if="tab === 2" v-cloak  class="ourParteners">
                                    <div class="editor">
                                       <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eligendi labore nemo quibusdam repellat tempore! Eveniet fuga fugiat hic illum, inventore iusto minus, nihil placeat quasi ratione rem similique voluptatem!</p>
                                    </div>
                                    <div class="parteners">

                                        <a href="#" class="partener">
                                            <div class="img" style="background-image: url(http://piramida.propun.md/images/brands/14/jYtUuwXbEn.jpg)"></div>
                                            <div class="info">
                                                <div class="title">TEXNO</div>
                                                <div class="text">Торговое холодильное  оборудование</div>
                                            </div>

                                        </a>
                                        <a href="#" class="partener">
                                            <div class="img" style="background-image: url(http://piramida.propun.md/images/brands/18/DAChzQXccB.GIF)"></div>
                                            <div class="info">
                                                <div class="title">Mediatech</div>
                                                <div class="text"> Системы вентиляции</div>
                                            </div>

                                        </a>
                                        <a href="#" class="partener">
                                            <div class="img" style="background-image: url(http://piramida.propun.md/images/brands/14/jYtUuwXbEn.jpg)"></div>
                                            <div class="info">
                                                <div class="title">Venni</div>
                                                <div class="text">Кондиционерные установки</div>
                                            </div>

                                        </a>
                                        <a href="#" class="partener">
                                            <div class="img" style="background-image: url(http://piramida.propun.md/images/brands/18/DAChzQXccB.GIF)"></div>
                                            <div class="info">
                                                <div class="title">VELUX</div>
                                                <div class="text">Отопительные конвекторы</div>
                                            </div>

                                        </a>
                                        <a href="#" class="partener">
                                            <div class="img" style="background-image: url(http://piramida.propun.md/images/brands/14/jYtUuwXbEn.jpg)"></div>
                                            <div class="info">
                                                <div class="title">KNAUF</div>
                                                <div class="text">Торговое холодильное  оборудование</div>
                                            </div>

                                        </a>
                                        <a href="#" class="partener">
                                            <div class="img" style="background-image: url(http://piramida.propun.md/images/brands/18/DAChzQXccB.GIF)"></div>
                                            <div class="info">
                                                <div class="title">TEXNO</div>
                                                <div class="text">Торговое холодильное  оборудование</div>
                                            </div>

                                        </a>
                                    </div>
                            </div>


                            <div :class="{visible : tab === 1}" class="socials">
                                <div class="title">Поделиться</div>
                                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus"></div>
                            </div>
                </div>


            </div>

        </div>
    </div>
    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="//yastatic.net/share2/share.js"></script>

@stop