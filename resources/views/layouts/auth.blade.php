@extends('layouts.base')

@section('body')
    <div class="flex bg-img-login flex-col justify-center min-h-screen py-12 sm:px-6 lg:px-8">

        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
    <style>
        .bg-img-login {
            background-image: url('storage/images/bgschool-login.jpg');
            /* background-image: url(https://wallpapers.com/images/hd/anime-school-background-0akglzygbxchtz5t.jpg); */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            object-fit: cover;
            width: auto;
            height: 90vh;
        }
    </style>
@endsection
