@extends('layouts.master')

@section('init')
    <div id="app">
        @include('layouts.navbar')
		<div class="container-fluid mx-4">
			@yield('content')
		</div>
    </div>
@endsection