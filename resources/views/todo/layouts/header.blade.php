<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.css') }}"  rel="stylesheet">
    <link href="{{ asset('/css/custom.css') }}"  rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon.ico">

    <title>ToDo</title>
    @if(Auth::check() == true)
<header class="header">

    <div class="navbar-collapse">
    <ul class="nav nav-tabs">
        <li class="{{ Request::path() == 'todo' ? "active" : '' }}">
            <a href="{{ URL::route('todo') }}"><i class="fa fa-list-ol fa-2x" aria-hidden="true"></i> All tasks</a>
        </li>
        <li class="{{ Request::path() == 'todo/current' ? "active" : '' }}">
            <a href="{{ URL::route('current-tasks') }}"><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i> Current tasks</a>
        </li>
        <li class="{{ Request::path() == 'todo/done' ? "active" : '' }}">
            <a href="{{ URL::route('done-tasks') }}"><i class="fa fa-check-circle fa-2x" aria-hidden="true"></i> Done tasks</a>
        </li>
        <li class="navbar-right">
            <a href="{{ URL::route('get-logout') }}"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i> Logout</a>
        </li>

    </ul>

    </div>
</header>
    @endif
</head>
<body>







