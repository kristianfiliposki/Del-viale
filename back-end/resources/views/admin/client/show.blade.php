@extends('layouts.admin')


@section('content')

    <h2>Utente connesso</h2>
    <ul>
        <li>Nome: {{ Auth::user()->name }}</li>
        <li>Email: {{ Auth::user()->email }}</li>
    </ul>

    <ul>
        <li>Nome: {{ $cliente->name }}</li>
        <li>I tuoi punti: {{ $cliente->punti }}</li>
    </ul>


@endsection