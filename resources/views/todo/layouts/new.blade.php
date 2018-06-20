@extends('todo.layouts.default')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <div class="container">
        <div class="row">
            <h1>Create new task</h1>
    {!!   Form::open() !!}
    <input type="text" class="form-control" name="name" placeholder="Task name">
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
    {!! Form::close() !!}
    </div>
    </div>
@stop