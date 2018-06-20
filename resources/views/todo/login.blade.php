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
{!!   Form::open(['class' => 'form-signin', 'route' => ['user-login']]) !!}
    <h2 class="form-signin-heading">Please sign in</h2>
    <input type="email" name="username" class="form-control" placeholder="Email address" required autofocus>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
        <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
{!! Form::close() !!}
    </div>

    <style>
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
    </style>
@stop