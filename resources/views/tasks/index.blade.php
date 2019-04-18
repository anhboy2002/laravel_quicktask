@extends('layouts.app')
@section('content')

    <div class="panel-body">
    @include('common.message')

        {!! Form::open(['route' => 'task.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('task-name', trans('header.title_task') ,['class' => 'col-sm-3 control-label']) !!}

                <div class="col-sm-6">
                    {!! Form::text('name', '', ['class' => 'form-control', 'id'=> 'task-name']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::button('<i class="fa fa-trash"></i>Add Task', ['type' => 'submit', 'class' => 'btn btn-default']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
    @if (count($tasks) > config('defaul_value'))
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <thead>
                    <th>@lang('header.title_task')</th>
                    <th>&nbsp;</th>
                    </thead>

                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>

                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['task.destroy', $task->id]]) !!}
                                {!! Form::submit(trans('header.delete'), ['class' => 'btn btn-danger', 'id' => 'delete-task-'. $task->id]) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection

