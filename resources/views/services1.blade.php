@extends('layout')
@section('meta')

@stop
@section('content')
    <div class="services_stPAge page" id="services_st">

        <div class="page-shadow">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="#" class="breadcrumb">Главная</a>
                    <a href="#" class="breadcrumb">Услуги</a>
                    <span class="breadcrumb">Капитальное строительство</span>
                </div>
                <div class="h1-title">
                    <h1>Капитальное строительство</h1>
                </div>
                <div class="template1">
                    <div class="template1-left">
                        <div class="template1-left__menu-wrapper">
                            <button class="template1-left__menu-title">Разделы</button>
                            <div class="template1-left__menu" >
                                <ul>
                                    <li class="active"><a href="#">технологии</a></li>
                                    <li><a href="#">Гражданское строительство</a></li>
                                    <li><a href="#" >промышленое строительство</a></li>
                                    <li><a href="#">кровельные работы</a></li>
                                    <li><a href="#" >фасадные работы</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="template1-right">
                        <div class="servs">
                            <div class="serv">
                                <a href="#" class="serv_wrapp">
                                    <div class="img" style="background-image:url(http://piramida.propun.md/images/news/29/UDfPtty6j3.png)"></div>
                                    <div class="title">Технологии</div>
                                </a>

                            </div>
                            <div class="serv">
                                <a href="#" class="serv_wrapp">
                                    <div class="img" style="background-image:url(http://piramida.propun.md/images/news/29/UDfPtty6j3.png)"></div>
                                    <div class="title">Гражданское строительство</div>
                                </a>

                            </div>
                            <div class="serv">
                                <a href="#" class="serv_wrapp">
                                    <div class="img" style="background-image:url(http://piramida.propun.md/images/news/29/UDfPtty6j3.png)"></div>
                                    <div class="title">Кровельные работы</div>
                                </a>

                            </div>
                            <div class="serv">
                                <a href="#" class="serv_wrapp">
                                    <div class="img" style="background-image:url(http://piramida.propun.md/images/news/29/UDfPtty6j3.png)"></div>
                                    <div class="title">Фасадные работы</div>
                                </a>

                            </div>
                            <div class="serv">
                                <a href="#" class="serv_wrapp">
                                    <div class="img" style="background-image:url(http://piramida.propun.md/images/news/29/UDfPtty6j3.png)"></div>
                                    <div class="title">Промышленное строительство</div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="map" id="map"></div>
    </div>
    <script>
        window.mapPins = [
            {lat: -25.363, lng: 131.044},
//            {lat: -25.363, lng: -131.044},
//            {lat: 25.363, lng: 131.044},
//            {lat: 25.363, lng: -131.044}
        ];

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBinp18mlpjkOAKTgs-dtmtU0a743gKnec&callback=initMap" async defer></script>
    <script>
        function initMap(){

            var map = new google.maps.Map(document.getElementById('map'), {
                center: window.mapPins[0],
                zoom: 14,
                styles:[
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#bdbdbd"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e5e5e5"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dadada"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e5e5e5"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#c9c9c9"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    }
                ]
            });
            window.mapbounds = '';
            window.mapbounds = new google.maps.LatLngBounds();

                for(i = 0; i<window.mapPins.length; i++ ){
                    var marker = new google.maps.Marker({
                        position: window.mapPins[i],
                        map: map,
                        icon:'./img/pin.png'
                    });
                    if(window.mapPins.length >1){
                        window.mapbounds.extend(window.mapPins[i]);
                    }
                }
            if(window.mapPins.length >1){
                map.fitBounds(window.mapbounds);
            }

        }
    </script>
@stop