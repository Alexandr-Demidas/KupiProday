@if (Auth::user() && Auth::user()->name == 'admin')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="viewport" content="target-densitydpi=device-dpi">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>



    <style>

        html{
            font-family: "Exo 2 Expanded";

        }

        body{
            background: #cbcbcb;

        }
        .itemNews{
          width: 500px;
          height: 30px;
        }
        .usersAll{
            background-color: #d5d5a4;
            border: 1px solid black;
            opacity: 0.8;

        }
        .propertyAll{
            background-color: #d5d5a4;
            margin-top: 10px;
            border: 1px solid black;
            opacity: 0.8;
        }
        .newsAll{
            background-color: #d5d5a4;
            margin-top: 10px;
            border: 1px solid black;
            opacity: 0.8;
        }
        .btn:hover{
            background-color: red;
        }
        .btn_add:hover{
            background-color: green;
        }

    </style>



</head>





<body>
<a href="/">На главную</a>

<h1>Админка - Панель управления</h1>

<div class="usersAll">
<h2>Таблица пользователей</h2>

<table border="2px">
    <tr>
        <th>ID</th>
        <th>Login</th>
        <th>Email</th>
        <th>Delete</th>
    </tr>

@foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <form action="{{route("userDelete",["user"=>$user->id])}}" method="post">
                    {{--<input type="hidden" name="_method" value="DELETE">--}}
                    {{csrf_field()}}
                    {{method_field("DELETE")}}
                    <button type="submit" class="btn">Удалить</button>
                </form>
            </td>

        </tr>

@endforeach

</table>
</div>

<div class="propertyAll">
<h2>Таблица категорий недвижимости</h2>

<table border="2px">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>DELETE</th>
    </tr>
 @foreach($categorys as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>
                <form action="{{route("categoryDelete",["category"=>$category->id])}}" method="post">
                    {{--<input type="hidden" name="_method" value="DELETE">--}}
                    {{csrf_field()}}
                    {{method_field("DELETE")}}
                <button type="submit" class="btn">Удалить</button>
                </form>
            </td>
        </tr>
 @endforeach

</table>


<h3>Добавить категорию</h3>

<form action="{{route('categorAdd')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="catName">
    <input type="submit" class="btn_add">
    
</form>
</div>

<div class="newsAll">
    <h2>Таблица новостей</h2>
<table border="2px">
    <tr>
        <th>ID</th>
        <th>NAME NEWS</th>
        <th>NEWS</th>
        <th>DELETE</th>
    </tr>
    @foreach($detailes as $detaile)
        <tr>
            <td>{{$detaile->id}}</td>
            <td>{{mb_strimwidth($detaile->items,0,50,"...")}}</td>
            <td>{{mb_strimwidth($detaile->content,0,100,"...")}}</td>
            <td>
                <form action="{{route("newsDelete",["detaile"=>$detaile->id])}}" method="post">
                    {{--<input type="hidden" name="_method" value="DELETE">--}}
                    {{csrf_field()}}
                    {{method_field("DELETE")}}
                    <button type="submit" class="btn">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>
<h2>Добавить новость</h2>
<form action="{{route('newsAdd')}}" method="post">
    {{csrf_field()}}
    <input class="itemNews" type="text" name="itemNewsAdd" placeholder="Заголовок новости"><br>
    <textarea name="contentNewsAdd" id="" cols="69" rows="15"></textarea><br>
    
    
    <input type="submit" class="btn_add">

</form>
</div>




</body>
</html>





@endif