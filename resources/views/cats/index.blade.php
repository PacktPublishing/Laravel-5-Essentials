@extends('layouts.master')

@section('header')
	@if (isset($breed))
		<a href="{{ url('/') }}">Back to overview</a>
	@endif
	<h2>
		All @if (isset($breed)){{ $breed->name }}@endif Cats
		<a href="{{ url('cats/create') }}" class="btn btn-primary pull-right">
			Add a new cat
		</a>
	</h2>
@stop

@section('content')
	@foreach ($cats as $cat)
		<div class="cat">
			<a href="{{ url('cats/'.$cat->id) }}">
				<strong>{{ $cat->name }}</strong> - {{ $cat->breed->name }}
			</a>
		</div>
	@endforeach
@stop
