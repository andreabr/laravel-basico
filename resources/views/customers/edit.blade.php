@extends('layouts.main')

@section('page-title')
Editar cliente
@stop



@section('content')

{!! Form::model($customer, ['url' => 'foo/bar']) !!}

	@include('customers.partials.form')

{!! Form::close() !!}


@stop