@extends('master')

@section('content')
<a style="background-color:green; color:white; padding:10px; text-decoration:none; border-radius:10px; position:absolute; top:150px; right:430px;"href="{{route('todolist.create')}} ">Add Task</a>

<table border="1" cellpaadding="0" style="margin:auto; margin-top:150px; border-color:white;">
    <thead>
        <tr>
            <th style="color:red; padding:10px;">S.no</th>
            <th style="color:red; padding:10px;">Task name</th>
            <th style="color:red; padding:10px;">Completed At</th>
            <th style="color:red; padding:10px;">Action</th> 
        </tr>
    </thead>
    <tbody>
    @if(count($list))
        @foreach ($list as $item)
        <tr>
            <td  style="color:white;">{{$item->id}}</td>
            <td style="color:white;">{{$item->task}}</td>
            <td style="color:white;">{{$item->completed_at}}</td>
            <td>{!! Form::open(array('url'=> route('todolist.edit', ['todolist'=> $item->id]), 'method' => 'get')) !!}
                    {!! Form::submit('Edit', array('style' => 'background-color:grey; color:white; border-radius:10px;')) !!}
                    {!! Form::close() !!}

                {!! Form::open(array('url'=> route('todolist.destroy', ['todolist'=> $item->id]), 'method' => 'delete')) !!}
                    {!! Form::submit('Delete',array('style' => 'background-color:red; color:white; border-radius:10px;')) !!}
                    {!! Form::close() !!}
                
                {!! Form::open(array('url'=> route('complete', ['id'=> $item->id]), 'method' => 'get')) !!}
                    {!! Form::submit('Complete',array('style' => 'background-color:red; color:white; border-radius:10px;')) !!}
                    {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    @endif
    </tbody>
</table>