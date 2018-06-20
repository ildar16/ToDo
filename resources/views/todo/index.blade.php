@extends('todo.layouts.default')

@section('content')
    <div class="container">
        <div class="row">
<h1>Items</h1>
<a href="{{ URL::route('new-task') }}"><button type="button" class="btn btn-success">New task</button></a>

        <div class="col-md-8 col-md-offset-2">
    <ul class="list-group">
        @foreach($items as $item)
            @if(Request::path() == 'todo')
                <div class="checkbox">
                    <label>
            <li class="list-group-item">
                {!!   Form::open() !!}

                <input type="checkbox" class="form-check-input" name="item" id="item_{{ $item->id }}" {{ $item->done ? 'checked' : '' }} onClick="this.form.submit()">
                <i class="fa fa-2x icon-checkbox"></i>
                <input type="hidden" name="item_id" value="{{ $item->id }}" />
                <label for="item_{{ $item->id }}">{{ e($item->name) }}</label>
                <a href="{{ URL::route('delete-task', $item->id) }}"><i class="fa fa-trash fa-2x trash" aria-hidden="true"></i></a>

                {!! Form::close() !!}

            </li>
                        </label>
                </div>
            @endif

                @if(Request::path() == 'todo/current' and $item->done == '0')
                    <div class="checkbox">
                        <label>
                            <li class="list-group-item">
                        {!!   Form::open() !!}

                        <input type="checkbox" name="item" id="item_{{ $item->id }}" {{ $item->done ? 'checked' : '' }} onClick="this.form.submit()">
                         <i class="fa fa-2x icon-checkbox"></i>
                        <input type="hidden" name="item_id" value="{{ $item->id }}" />
                        <label for="item_{{ $item->id }}">{{ e($item->name) }}</label>
                        <a href="{{ URL::route('delete-task', $item->id) }}"><i class="fa fa-trash fa-2x trash" aria-hidden="true"></i></a>

                        {!! Form::close() !!}

                            </li>
                        </label>
                    </div>
                @endif

                @if(Request::path() == 'todo/done' and $item->done == '1')
                    <div class="checkbox">
                        <label>
                            <li class="list-group-item">
                        {!!   Form::open() !!}

                        <input type="checkbox" name="item" id="item_{{ $item->id }}" {{ $item->done ? 'checked' : '' }} onClick="this.form.submit()">
                        <i class="fa fa-2x icon-checkbox"></i>
                        <input type="hidden" name="item_id" value="{{ $item->id }}" />
                        <label for="item_{{ $item->id }}">{{ e($item->name) }}</label>
                        <a href="{{ URL::route('delete-task', $item->id) }}"><i class="fa fa-trash fa-2x trash" aria-hidden="true"></i></a>

                        {!! Form::close() !!}

                            </li>
                        </label>
                    </div>
                @endif
        @endforeach
    </ul>
        </div>
    </div>
</div>

@stop