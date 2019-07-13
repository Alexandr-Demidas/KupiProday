<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="viewport" content="target-densitydpi=device-dpi">
    <title>Homepage</title>


    <link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>



    <style>
        html{
            font-family: "Exo 2 Expanded";

        }

        body{
            background: #cbcbcb;

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
        .delbtn{
            display: block;
            width: 150px;
            height: 50px;
            border-radius: 5px;
            margin-left: 500px;
        }

        .delbtn:hover{
            background: red;
        }

        .updatebtn{
            display: block;
            width: 150px;
            height: 50px;
            border-radius: 5px;
            margin-left: 300px;
            margin-top: -50px;


        }

        .updatebtn:hover{
            background: #bdbdbd;
        }
        .updatelink{
            text-decoration: none;
        }
        /*.imgleft{*/
            /*margin-left: 5px;*/
        /*}*/

    </style>

</head>
<body>

<a href="/">НА ГЛАВНУЮ</a>

    {{--@dump ($errors->has())--}}


<h1>ВАШИ ОБЪЯВЛЕНИЯ</h1>
<hr>

@foreach($property as $prop)
    @if(Auth::user()->id==$prop->user_id)
    <div>Объявление:{{$prop->name}}</div>

    <img class="img1 imgleft" src="{{asset("storage/$prop->url")}}" alt="">
    <img class="img1" src="{{asset("storage/$prop->url2")}}" alt="">
    <img class="img1 imgright" src="{{asset("storage/$prop->url3")}}" alt=""><br>
    <div>price:{{$prop->price}}</div>
    <div>room:{{$prop->room}}</div>
    <div> floor:{{$prop->floor}}</div>
    <div>area:{{$prop->area}}</div>
    <div>region:{{$prop->region}}</div>
    <div>city:{{$prop->city}}</div>
    <div>street:{{$prop->street}}</div>
    <div>numhouse:{{$prop->numhouse}}</div>
    <div>desc: {{$prop->desc}}</div>
    <div>phone:<a href="tel:{{$prop->phone}}">{{$prop->phone}}</a></div>
    <div>написать:<a href="mailto:{{$prop->email}}">{{$prop->email}}</a></div>
    {{--<div>email:{{$property->id}}</div>--}}


    <form action="{{route("homePageDelete",["property"=>$prop->id])}}" method="post">

        {{csrf_field()}}
        {{method_field("DELETE")}}
        <button type="submit" class="delbtn">УДАЛИТЬ</button>
    </form>
    <a class="updatelink" href="{{route("changePage",["id"=>$prop->id])}}"><button class="updatebtn">ИЗМЕНИТЬ</button> </a>

    <hr>
    {{--url2--}}
    {{--url3--}}
 @endif
@endforeach



{{--@dd($comments)--}}

</body>
</html>