@extends('layouts.base')

@section('body')
    @include('layouts.sidebar')
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection

@stack('scripts')
