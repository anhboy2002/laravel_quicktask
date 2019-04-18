@extends('layouts.app')
@section('content')
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
    @include('common.error')

    <!-- New Task Form -->
        {!! Form::open(['route' => 'addtask', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

        <!-- Task Name -->
            <div class="form-group">
                {!! Form::label('task-name', trans('header.title_task') ,['class' => 'col-sm-3 control-label']) !!}

                <div class="col-sm-6">
                    {!! Form::text('name', '', ['class' => 'form-control', 'id'=> 'task-name']) !!}
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::button('<i class="fa fa-trash"></i>Add Task', ['type' => 'submit', 'class' => 'btn btn-default']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>

    <!-- TODO: Current Tasks -->
@endsection

