<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="viewport" content="target-densitydpi=device-dpi">
    <title>Detailes</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>

    <style>

        html{
            font-family: "Exo 2 Expanded";

        }
        body{
            background: #cbcbcb;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .cont_header{
            display: block;
            position: relative;
            width: 1500px;
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

        .container{
            display: block;
            width: 1225px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            background-color: rgba(0, 0, 0, 0.18);
            opacity: 0.9;
        }

        .img1{
            width: 400px;
            height: 300px;
            border: 1px solid black;

        }
        /*.img1:hover{*/
            /*width: 800px;*/
            /*height: 500px;*/
        /*}*/
        .imgleft{
            margin-left: 5px;
        }

        .user{
            margin-left: 1350px;

        }
    </style>



</head>

<body>

<div class="user">
    @if(isset(Auth::user()->name))
        Login:{{Auth::user()->name}}
    @else
        Login:
    @endif


</div>

<div class="cont_header">
    <a href="/"><img class="logo" src="{{asset('storage/images/logo.png')}}" alt=""></a>

</div>


<div class="container">
    @if($property)
        <div>Объявление:{{$property->name}}</div>

        <img class="img1 imgleft" src="{{asset("storage/$property->url")}}" alt="ФОТО НЕ ЗАГРУЖЕНО">
        <img class="img1" src="{{asset("storage/$property->url2")}}" alt="ФОТО НЕ ЗАГРУЖЕНО">
        <img class="img1 imgright" src="{{asset("storage/$property->url3")}}" alt="ФОТО НЕ ЗАГРУЖЕНО"><br>
        <div>Комнат:{{$property->room}}</div>
        <div>Этаж:{{$property->floor}}</div>
        <div>Площадь:{{$property->area}}</div>
        <div>Область:{{$property->region}}</div>
        <div>Город:{{$property->city}}</div>
        <div>Улица:{{$property->street}}</div>
        <div>Номер дома:{{$property->numhouse}}</div>
        <div>Описание: {{$property->desc}}</div>
        <div>Цена:{{$property->price}}грн.</div>
        <div>Телефон:<a href="tel:{{$property->phone}}">{{$property->phone}}</a></div>
        <div>Написать:<a href="mailto:{{$property->email}}">{{$property->email}}</a></div>

        {{--url2--}}
        {{--url3--}}

    @endif
    <hr>
    <div>




     Комментарий:<br>
     (только зарегистрированные пользователи могут оставить комментарий)
     @foreach($comments as $comment)
    <div>Оставил: {{$comment->user->name}}</div>
    <div>{{$comment->comment}}</div>
         <hr>

     @endforeach
    </div>
     <hr>

        @if(Auth::user())
            <div>Добавить комментарий</div>
            <form action="{{route("commentAdd")}}" method="post">
                 {{csrf_field()}}
                 <input type="hidden" name="comment_user_id" value="{{Auth::user()->id}}">
                 <input type="hidden" name="comment_property_id" value="{{$property->id}}">
                 <textarea name="comment" id="" cols="30" rows="10"></textarea><br>
                 <button>Добавить</button>
            </form>
        @endif



</div>



</body>
</html>




