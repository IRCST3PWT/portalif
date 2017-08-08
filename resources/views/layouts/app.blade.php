@extends('layouts.master')

@section('init')
    <div id="app">
        @include('layouts.navbar')
        <div class="container">
            @yield('content')
        </div>
    </div>
@endsection