@extends('master')

@section('content')

{!! Form::open(array('url' => route('todolist.store'), 'method' => 'post')) !!}		
			{!! Form::text('task', '', array('style' => 'position:absolute; top:100px; left:550px;' )) !!}
			{!! Form::submit('Add New',array('style' => 'background-color:green; padding:10px; color:white; border-radius:10px; position:absolute; top:90px; left:720px;')) !!}
	
	{!! Form::close() !!}

@endsection