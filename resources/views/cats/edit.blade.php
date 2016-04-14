@extends('layouts.master')

@section('header')
	<h2>Edit a cat</h2>
@stop

@section('content')
	{!! Form::model($cat, ['url' => '/cats/'.$cat->id], 'method' => 'put') !!}
		@include('partials.forms.cat')
	{!! Form::close() !!}
@stop
