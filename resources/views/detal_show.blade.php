<style>
    .cardproductdet{
        display: inline-block;
        margin: 20px;
    }
    .imgcarddet{
        border-radius: 10px;
        width: 250px;
        height:220px;
    }

</style>


@extends('cat-show')
{{--@section('detalshow')--}}

<div class="cardproductdet">
    @if($propertys)
        <div>{{$propertys->name}}</div><br>
        <img id="imgcard" class="imgcarddet" src="{{$propertys->url}}" alt=""><br>
        <div>{{$propertys->region}}</div>
    @endif

</div>


{{--@endsection--}}