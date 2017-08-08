@extends('layouts.dashboard')

@section('content')
	<div class="mt-4">
		@include('partials.add-trigger')	
	</div>
	<div class="mt-4">
		<div class="row">
			@if(count($stuffs) > 0)
				@foreach($stuffs as $stuff)
					@if($stuff->user_id == auth()->user()->id)
					    <a href="{{ url('/dashboard')}}/{{ $stuff->type }}/{{ $stuff->title }}">
						    <div class="card card-outline-primary mx-1 my-1" style="width: 20rem;">
							  {{-- <img class="card-img-top" src="{{ asset('img/1.jpg')}}" alt="Card image cap"> --}}
							  <div class="card-block">
							    <h4 class="card-title">{{ $stuff->title }}</h4>
							    <div class="card-subtitle">{{ $stuff->type }}</div>
							    <p class="card-text">{{ $stuff->description }}</p>
							    <small>{{ $stuff->created_at }}</small>
							  </div>
							</div>
						</a>
					@endif
				@endforeach
			@else
				<div class="alert alert-success w-100" role='alert' >
					<strong>Hemm!!</strong> No awesome stuffs found
				</div>
			@endif
		</div>
	</div>
@endsection