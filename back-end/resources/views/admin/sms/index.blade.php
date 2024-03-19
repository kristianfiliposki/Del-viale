@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">
           messaggi
        </h1>
        @foreach ($messagges as $item)
            <div>
                {{$item->testo}}
            </div>
        @endforeach

    </div>
</div>

<div class="content">
    <div class="container">
        <p>Footer Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, incidunt ex aliquam ullam temporibus ducimus ipsum dolores, eius ratione sed fuga! Necessitatibus quis inventore ipsam molestiae. Aperiam ad voluptatem alias.</p>
    </div>
</div>
@endsection