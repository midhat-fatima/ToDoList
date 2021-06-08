@extends('master')

@section('content')

{!! Form::open(array('url' => route('todolist.store'), 'method' => 'post')) !!}		
			{!! Form::text('task') !!}
			{!! Form::submit('Add New',array('style' => 'background-color:green; padding:10px; color:white; border-radius:10px;')) !!}
	
	{!! Form::close() !!}

@endsection