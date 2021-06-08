@extends('master')

@section('content')
	<!-- 	
	<form action="{{ route('todolist.update', ['todolist' => $todolist->id]) }}" method="post">
		@csrf
        <input type="hidden" name="_method" value="PUT">
		<input type="text" name="task" value='{{$todolist->task}}'>
		<input type="submit">
	</form> -->

	{!! Form::open(array('url' => route('todolist.update', ['todolist' => $todolist->id]), 'method' => 'put')) !!}		
			{!! Form::text('task',  $todolist->task) !!}
			{!! Form::submit('Edit') !!}
	
	{!! Form::close() !!}

@endsection