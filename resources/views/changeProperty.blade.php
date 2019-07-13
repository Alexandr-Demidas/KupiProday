<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="viewport" content="target-densitydpi=device-dpi">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>


<style>

 html{
     font-family: "Exo 2 Expanded";

 }
        body{
      background: #cbcbcb;

  }

  input{
      width: 300px;
      height: 25px;

  }
  .inputForm{
      display: block;
      /*position: relative;*/
      margin-left: 250px;
      margin-top: 0px;

      /*width: auto;*/
      /*height: auto;*/


  }
    .updatelink{
        display: block;
        width: 150px;
        height: 50px;
        border-radius: 5px;
        margin-left: 155px;
        margin-top: 50px;
    }
    .updatelink:hover{
        background-color: #bdbdbd;
    }
    .alert-danger{
          background-color: #ff959f;
    }


</style>


</head>
<body>
@if(Auth::user()->id == $propertys->user_id)
<a href="{{route("homePage")}}">НАЗАД</a>


{{--@dump($propertys);--}}
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<div class="inputForm">

@if($propertys)
    <form action="{{route("changeProp",["id"=>$propertys->id])}}" method="post">
        {{csrf_field()}}
    <br/><lable for="propName">Заголовок:</lable><br/>
    <input class="inpName" type="text" name="propName" placeholder="{{$propertys->name}}"><br/>

    <lable for="region">Область:</lable><br/>
    <input type="text" name="region" placeholder="{{$propertys->region}}"><br/>

    <lable for="city">Город:</lable><br/>
    <input type="text" name="city" placeholder="{{$propertys->city}}"><br/>

    <lable for="street">Улица:</lable><br/>
    <input type="text" name="street" placeholder="{{$propertys->street}}"><br/>

    <lable for="numhouse">Номер дома:</lable><br/>
    <input type="text" name="numhouse" placeholder="{{$propertys->numhouse}}"><br/>

    <lable for="room">Количество комнат:</lable><br/>
    <input type="text" name="room" placeholder="{{$propertys->room}}"><br/>

    <lable for="area">Общая площадь:</lable><br/>
    <input type="text" name="area" placeholder="{{$propertys->area}}"><br/>

    <lable for="floor">Этаж:</lable><br/>
    <input type="text" name="floor" placeholder="{{$propertys->floor}}"><br/>

    <lable for="price">Цена:</lable><br/>
    <input type="tel" name="price" placeholder="{{$propertys->price}}"><br/>

    <lable for="propDesc">Краткое описание:</lable><br/>
    <textarea name="propDesc" id="" cols="45" rows="5" placeholder="{{$propertys->desc}}"></textarea><br/>

    <lable for="phone">Ваши контакты:</lable><br/>
    <input type="tel" name="phone" placeholder="{{$propertys->phone}}"><br/>

    <lable for="phone">Ваш email:</lable><br/>
    <input type="email" name="email" placeholder="{{$propertys->email}}"><br/>
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
    <input type="hidden" name="category_id" value="{{$propertys->category_id}}">


    <button class="updatelink">ИЗМЕНИТЬ</button>
</form>

@endif

</div>

@endif

</body>
</html>

