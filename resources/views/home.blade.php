@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Сообщение:</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Привет &nbsp &nbsp  {{Auth::user()->name}}!&nbsp &nbsp &nbsp &nbsp <a href="/">На главную</a>&nbsp &nbsp &nbsp &nbsp
                        @if (Auth::user() && Auth::user()->name == 'admin')
                            <a href="/admin">В админ панель</a>
                        @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
