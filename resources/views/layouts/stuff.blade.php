@extends('layouts.master')

@section('init')
    <div id="app">
        @include('layouts.navbar')
		<div class="container-fluid mt-4">
			<div class="row">
				<div class="col-md-2">
					@include('layouts.sidebar')
				</div>
				<div class="com-md-10">
					@yield('content')
				</div>
			</div>
		</div>
    </div>
@endsection