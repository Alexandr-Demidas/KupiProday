@extends('welcome')
@section('content')

    @if($header)


        <div>{{$header->items}}</div><br/>
        <div>{{$header->content}}</div><br>


    @endif


@endsection



