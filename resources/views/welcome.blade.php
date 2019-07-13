<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="viewport" content="target-densitydpi=device-dpi">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kupi|Proday</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/welcome.css') }}" />

    <!-- Styles -->
    {{--<link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic'--}}
          {{--rel='stylesheet' type='text/css'>--}}

    <style>
        html{
            font-family: "Exo 2 Expanded";

        }

        .flex-center{
            display: block;
            position: relative;
            width: 1500px;
            height: 30px;
            /*background-color: green;*/
            left: 0;
        }

        .top-right{
            display: inline-block;

            margin-left: 900px;
            width: 600px;

        }

        /*-----------------------------------------------------------------*/

        .cont_header{
            display: block;
            position: relative;
            width: 100%;
            height: 100px;
            margin-top: 40px;
            background: black;

            contain: size;
            /*margin-left: -395px;*/



        }
        .logo{
            display: block;
            position: absolute;
            width: 300px;
            height: 30px;
            margin-top: 35px;
            margin-left: 100px;


        }

        nav{
            margin-left: 850px;
            margin-top: -30px;

        }
        nav>a{
            text-decoration: none;
            position: relative;
            display: inline-block;
            font-size: 13px;
            line-height: 40px;
            padding: 0 20px;
            -webkit-transition: all .3s ease;
            color: white;


        }
        nav>a:hover{
            background: rgba(255,255,255,.9);
            color: rgba(0, 0, 0, 0.17);
        }


        .search{
            margin-left: 1050px;
        }
        .searchinp{
            width: 270px;
            height: 25px;
            border-radius: 10px;
        }
        .searchbtn{
            border:none;
            padding:0;
            margin:0;
            font-size:15px;
            color:white;
            background-color:transparent;
            cursor: pointer;
        }
        .backgroundimg{
            background-image: URL({{asset('storage/images/backimg.png')}});
            background-repeat: no-repeat;
            text-align: center;
            display: block;
            position: relative;
            width: 100%;
            margin-top: 0;
            height: 600px;

        }
        .contbgr{
            display: block;
            text-align: center;
            position: absolute;
            margin-left: 350px;
            margin-top: 15px;
        }

        .section_tagline{
            font-size: 20px;
            color: white;
            display: block;

            margin-right: auto;
            margin-left: auto;
            text-align: center;



        }

        .section_title
        {
            display: block;

            margin-right: auto;
            margin-left: auto;
            margin-top: 100px;
            font-size: 50px;
            color: white;
            text-align: center;

        }


        .learn-more{
            width: 330px;
            height: 70px;
            font-size: 20px;
            background-color: white;
            border-radius: 15px;
            cursor: pointer;
            top: 50px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 270px;

        }

        .modal{
            display: none;
            position: fixed;
            z-index: 5;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8);
            perspective: 500px;
        }
        .modal-content{

            z-index: 10;
            background-color: #fefefe;
            margin: 1% auto;
            padding: 5px;
            border:1px solid#888;
            width: 50%;
            transform: rotateX(0deg);
            animation-name: modal;
            animation-duration: 1s;
            border-radius: 5px;
            height: auto;

        }

        .modal-content input{
            margin-left: 0px;
            width: 300px;
            height: 25px;


        }
        .close{
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            color: red;



        }
        .addproductForm{

            margin-left: 50px;
        }
        .selectCategory{
            width: 350px;
            height: 30px;
            margin-left: 20px;
            border-radius: 10px;

        }
        .cat_a{
            display: block;
            width: 130px;
            height: 40px;
            background: rgba(203, 203, 203, 0.65);
            color: black;
            text-align: center;
            vertical-align:middle;
            text-decoration: none;
            border: 2px solid rgba(245, 235, 225, 0.63);

        }


        .cat_a:hover{
            background: rgba(255,255,255,.9);
            color: rgba(0, 0, 0, 0.17);
        }
        .cat_input_search{
          cursor: pointer;
          height: 30px;
          border-radius: 10px;
        }
        .cat_input_search:hover{
            background-color: rgba(149, 149, 149, 0.78);
        }


        .addProductBtn{
            height: 30px;
            background: green;
            cursor: pointer;


        }



        .leftbar{
            display: block;
            position: relative;
            background-color: white;
            width: 250px;
            height: 1500px;
            margin-top:700px;
            color: black;




        }
        .leftbar a{
            color: black;
        }

        .cat_container{
            display: flex;
            justify-content:space-between;
            padding: 20px;
            color: black;

        }



        .catAll{
            display: block;
            position: absolute;
            width: 980px;
            height: 1500px;
            background-color: white;
            margin-left: 250px;
            margin-top: -1500px;
            border-left: 1px solid black;
            border-right: 1px solid black;



        }
        .iconcat{
            display: block;
            margin-right: auto;
            margin-left: auto;
            width: 500px;
            height: 150px;
        }

        .catsearch{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .hr_cat{
            width: 900px;
        }

        .rightbar{
            display: block;
            position: absolute;
            background-color: white;
            width: 250px;
            height: 1500px;
            margin-left: 1232px;
            margin-top: -1500px;
            color: black;


        }
        .table_curs{


            margin-left: 1px;
            margin-bottom: 50px;
            color: black;

        }
        .footer{
            width: 1500px;
            height: 250px;
            background: #90a094;

        }

        .selOption{
            width: 250px;

            margin: auto;
        }
        .textLeftbar{
            color: black;
            position: relative;
            display: block;
            margin-top: 20px;
            margin-left: 25px;
            text-align: justify;
        }


        .newscontainer{
            display: flex;
            flex-direction: column;
            margin-left: 1px;
            color: black;
        }
        .newscontainer>a{
            color: black;

        }
        .alert-danger{
            background-color: #ff959f;
        }
        h3{
            display: block;
            position: relative;
            color: darkred;
            margin-left: 50px;
            text-align: center;
            font-size: 50px;
        }

        .arrow_box {
            position: relative;
            background: #739dd5;
            border: 4px solid #a37ff5;
        }
        .arrow_box:after, .arrow_box:before {
            left: 100%;
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .arrow_box:after {
            border-color: rgba(115, 157, 213, 0);
            border-left-color: #739dd5;
            border-width: 30px;
            margin-top: -30px;
        }
        .arrow_box:before {
            border-color: rgba(163, 127, 245, 0);
            border-left-color: #a37ff5;
            border-width: 36px;
            margin-top: -36px;
        }
        .link_more{
            text-decoration: none;
        }
        .map_container{
            display: block;
            margin-top: 100px;
        }
        .map{
            display: block;
            background-image: url("https://gordonua.com/img/gallery/1226/19/89634_main.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            width: 250px;
            height: 200px;
            margin-left: 10px;
            border: 1px solid black;
        }
        .reklama{
            margin-top: 50px;
            margin-left: 20px;
        }
        .reklama_cont{
            display: block;
            background-color: whitesmoke;
            background-size: cover;
            width: 250px;
            height: 200px;
            margin-left: 10px;
            border: 1px solid black;

        }


        .cardproduct{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 1100px;
            height: 250px;
            position: relative;
            color: black;
            margin-bottom: 5px;
        }
        .imgcard{
            display: block;
            border-radius: 10px;
            width: 240px;
            height:220px;
            margin-left: 20px;
            border: 1px solid black;
            background-repeat: no-repeat;
        }
        .pagination{
            display: flex;
            margin-left: 300px;

        }
        .page-item{
            width: 25px;
            height: 25px;
            background: #90a094;
            margin: 8px;
            list-style-type: none;
            text-align: center;
            font-weight:900;

        }
        .but_card{
            margin-left: 700px;
            margin-top: 0px;
            height: 50px;
            width: 180px;
            background: rgba(131, 131, 131, 0.47);
            border-radius: 8px;
            cursor: pointer;

        }
        .but_card:hover{
            transition: 2ms;
            background-color: rgba(149, 149, 149, 0.78);
        }
        .desccontainer{
            display: flex;
            flex-direction: column;
            margin-left: 300px;
            margin-top: -200px;
        }
        .logfoot{
            display: block;
            margin-left: 600px;
            margin-top: 100px;
        }
        .social_media{
            display: block;
            position: absolute;
            height: 170px;
            margin-left: 1150px;
            margin-top: 40px;
        }
        @keyframes modal {
            from{
                opacity: 0;
                top: 5%;
                transform: rotateX(15deg);
            }

            to{
                opacity: 1;
                top: 15%;
                transform: rotateX(0deg);

            }


        }

    </style>



</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
        Login:   {{Auth::user()->name}}    <a href="{{ url('/home') }}">HOME</a>
            @else
                <style>.links{margin-left: 1300px;width: 150px}</style>
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>

                @endif
            @endauth
                @if (Auth::user() && Auth::user()->name == 'admin')
                    <a href="/admin">АДМИН ПАНЕЛЬ</a>
                @endif
                @if(Auth::user())
                    <a href="{{route("homePage")}}">ДОМАШНЯЯ СТРАНИЦА</a>
                @endif
        </div>
    @endif


        <div class="cont_header">
            <a href="/"><img class="logo" src="{{asset('storage/images/logo.png')}}" alt=""></a>




            <nav>
                @foreach($menus as $menu)

                    <a href="">{{$menu->items}}</a>
                @endforeach
            </nav>

            <form action="{{route('Search')}}" method="get" class="search">

                <input class="searchinp" type="text" name="search" placeholder="Поск по сайту..." value="" required>
                <button  class="searchbtn" type="submit">Поиск</button>
            </form>
        </div>

            <div class="backgroundimg">
                 <div class="contbgr">
                     <h1 class="section_tagline">Сервис продажи недвижимости</h1>
                     <h5 class="section_title">С нами продается быстрее!</h5>

                @if(Auth::user())
                    <button class="learn-more" id="modalBtn">ПОДАТЬ ОБЪЯВЛЕНИЕ</button>
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                              <form id="nubexForm" action="{{route("propertyAdd")}}" method="post" class="addproductForm" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <select name="category_id" size="1" class="selectCategory">
                                    @foreach($categorys as $category )
                                        <option class="selOption" value="{{$category->id}}">{{$category->name}}</option><br/>
                                    @endforeach
                                </select>


                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <br/>
                                <lable for="propName">Заголовок:</lable>
                                <br/>
                                <input class="inpName" type="text" name="propName"><br/>

                                <lable for="region">Область:</lable>
                                <br/>
                                <input type="text" name="region"><br/>

                                <lable for="city">Город:</lable>
                                <br/>
                                <input type="text" name="city"><br/>

                                <lable for="street">Улица:</lable>
                                <br/>
                                <input type="text" name="street"><br/>

                                <lable for="numhouse">Номер дома:</lable>
                                <br/>
                                <input type="text" name="numhouse"><br/>

                                <lable for="room">Количество комнат:</lable>
                                <br/>
                                <input type="text" name="room"><br/>

                                <lable for="area">Общая площадь:</lable>
                                <br/>
                                <input type="text" name="area"><br/>

                                <lable for="floor">Этаж:</lable>
                                <br/>
                                <input type="text" name="floor"><br/>

                                <lable for="price">Цена:</lable>
                                <br/>
                                <input type="tel" name="price"><br/>

                                <lable for="propDesc">Краткое описание:</lable>
                                <br/>
                                <textarea name="propDesc" id="" cols="45" rows="5"></textarea><br/>

                                <lable for="phone">Ваши контакты:</lable>
                                <br/>
                                <input type="tel" name="phone"><br/>

                                <lable for="phone">Ваш email:</lable>
                                <br/>
                                <input type="email" name="email"><br/>

                                <lable for="addImage1">Добавьте фото:</lable>
                                <br/>
                                <div class="imgDiv">
                                    <input type="file" name="addImage1"><br/>
                                </div>
                                <br/>
                                <lable for="addImage">Добавьте фото 2:</lable>
                                <br/>
                                <div class="imgDiv">
                                    <input type="file" name="addImage2"><br/>
                                </div>
                                <br/>
                                <lable for="addImage">Добавьте фото 3:</lable>
                                <br/>
                                <div class="imgDiv">
                                    <input type="file" name="addImage3"><br/>
                                </div>
                                <br/>


                                <input class="addProductBtn" type="submit" value="Подать">
                            </form>


                        </div>


                        @else
                            <a class="link_more" href="{{route("home")}}">
                                <button class="learn-more">ПОДАТЬ ОБЪЯВЛЕНИЕ</button>
                            </a>
                        @endif
                    </div>

            </div>








        </div>







    </div>







<div class="leftbar">
    <p class="textLeftbar">НОВОСТИ НЕДВИЖИМОСТИ</p>

<div class="newscontainer">
<ul>
@foreach($detailes as $detaile)
        <li><a href="{{route("newsShow",["id"=>$detaile->id])}}">{{mb_strimwidth($detaile->items,0,35,"...")}}</a></li><br>
@endforeach
</ul>
</div>

</div>

<div class="catAll">
    <img class="iconcat" src="{{asset("storage/images/icon_categ.png")}}" alt="">
    
    <div class="cat_container">

        <form action="{{route('catsearch')}}" method="get" class="catsearch">
        <select  name="catsearch" size="1" class="selectCategory">
            @foreach($categorys as $category )
                <option class="cat_a" value="{{$category->id}}">{{$category->name}}</option><br/>
            @endforeach
        </select>
            <input class="cat_input_search" type="submit" value="ВЫБРАТЬ">
        </form>

    </div>
    <hr>



        @if($propertys)
        @foreach($propertys as $property)
            <div class="cardproduct">
                <div>Описание: {{mb_strimwidth($property->name,0,100,"...")}}</div>
                <img id="imgcard" class="imgcard" src="{{asset("storage/$property->url")}}" alt="Фото не загружено">
                <div class="desccontainer">
                    <div>Область:{{$property->region}}</div>
                    <div>Город:{{$property->city}}</div>
                    <div>Улица:{{$property->street}}</div>
                    <div>Кол-во комнат:{{$property->room}}</div>
                    <div>Этаж:{{$property->floor}}</div>
                    <div>Площадь:{{$property->area}}</div>
                    <div><strong>Цена:{{$property->price}}грн.</strong></div>
                </div>
                <a href="{{route("propertyshow",["id"=>$property->id])}}">
                    <button class="but_card" >Подробнее</button>
                </a>
            </div>
           <hr class="hr_cat">
        @endforeach
            {{ $propertys->links() }}
        @else

        @yield("newsShow")

        @endif






</div>

<div class="rightbar">
    <strong>Курсы коммерческого банка на: {{date("d:m:o")}}</strong>

    <table class="table_curs" border="2px">
        <tr>
            <th>Валюта</th>
            <th>Покупка</th>
            <th>Продажа</th>
        </tr>


        @foreach($course_kbs as $course_kb)
            <tr><td>{{$course_kb["ccy"]}}</td>
                <td><b>{{round($course_kb["buy"],2,PHP_ROUND_HALF_UP)}}</b></td>
                <td><b>{{round($course_kb["sale"],2,PHP_ROUND_HALF_UP)}}</b></td>
            </tr>

        @endforeach
    </table>



    <strong>Курсы НБУ на: {{date("d:m:o")}}</strong>


    <table class="table_curs" border="2px">
        <tr>
            <th>Валюта</th>
            <th>Покупка</th>
            <th>Продажа</th>
        </tr>


    @foreach($course_nbus as $course_nbu)
            <tr><td>{{$course_nbu["ccy"]}}</td>
                <td><b>{{round($course_nbu["buy"],2,PHP_ROUND_HALF_UP)}}</b></td>
                <td><b>{{round($course_nbu["sale"],2,PHP_ROUND_HALF_UP)}}</b></td>
            </tr>

    @endforeach
    </table>

<div class="map_container">
    <div>Карта GOOGLE</div>

    <a href="https://www.google.com.ua/maps/@48.4372301,35.0808427,11z?hl=ru" target="_blank">
        <div class="map">

        </div>


    </a>




</div>

 <div class="reklama">Здесь может быть Ваша реклама</div>
 <div class="reklama_cont">Реклама

 </div>


</div>

<footer class="footer">

    <a href="/"><img class="logo logfoot" src="{{asset('storage/images/logo.png')}}" alt=""></a>
    <a href="https://uk-ua.facebook.com/" target="_blank">
        <img class="social_media" src="{{asset('storage/images/social_media.png')}}" alt="">
    </a>


</footer>

<script type="text/javascript">

    let modal = document.getElementById("myModal");
    let btn = document.getElementById("modalBtn");
    let span = document.querySelector(".close");

    btn.addEventListener("click",function () {
        modal.style.display = "block";
    });
    span.addEventListener("click",function () {
        modal.style.display = "none";
    });

    // window.addEventListener("click",function (e) {
    //     if(e.target == modal) modal.style.display = "none";
    // })

</script>
</body>
</html>