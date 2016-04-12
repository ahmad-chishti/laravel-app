@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Task: <strong class="text-info">{{ $task->title }}</strong></div>
        <div class="panel-body">
            <div class="row">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-xs-8 col-xs-offset-2">
                    <form method="post" action="{{ url('task/update') }}/{{ $task->id }}" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ $task->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-save"></i> Save</button>
                            <a href="{{ url('tasks') }}" class="btn btn-danger"><i class="fa fa-chevron-left"></i> Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection