<style>
    .detailecontent{
        color: black;
        text-indent: 50px;
        text-align: justify;
    }
</style>



@extends('welcome')




@section("newsShow")



  {{--@dd($detaile)--}}

  <p class="detailecontent">{{mb_strimwidth($detaile->content,0,6000,"...")}}</p>


@endsection
