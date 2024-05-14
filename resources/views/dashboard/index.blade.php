@extends('layout.app')

@section('title', 'Tablero')

@section('content')
    <div class="min-h-screen">
        Bienvenido {{ Auth::user()->account }}, este es el tablero.
    </div>
@overwrite
