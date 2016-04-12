@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Tasks</div>
        <div class="panel-body">
            <ul class="list-group">
                @foreach($tasks as $task)
                    <li class="list-group-item">{{ $task->title }}
                        <span class="pull-right">
                        <a href="{{ url('/task/edit') }}/{{ $task->id }}"><i class="fa fa-pencil"></i> Edit</a> |
                        <a class="text-danger" href="{{ url('/task/delete') }}/{{ $task->id }}"
                           onclick="return confirm('Are you sure you want to delete this item?');"><i
                                    class="fa fa-close"></i> Delete</a>
                    </span>
                    </li>
                @endforeach
            </ul>
            <div class="row">
                <div class="col-xs-6">
                    {{ $tasks->links() }}
                </div>
                <div class="col-xs-6">
                    <a style="margin-top: 18px;" href="{{ url('task/create') }}" class="btn btn-primary pull-right"><i class="fa fa-file"></i> Create Task</a>
                </div>
            </div>
        </div>
    </div>
@endsection