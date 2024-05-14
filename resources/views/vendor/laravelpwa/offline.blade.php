@extends('layout.app')

@section('title', 'Offline')

@section('description', 'You are currently not connected to any networks.')

@section('keywords', 'offline, network, connection')

@section('robots', 'noindex, nofollow')

@section('content')
    <div class="min-h-screen flex flex-col justify-center items-center px-4">
        <h1 class="text-3xl font-bold text-center">You are currently not connected to any networks.</h1>
    </div>
@endsection
