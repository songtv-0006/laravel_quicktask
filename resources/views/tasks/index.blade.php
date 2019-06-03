@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        {!! Form::open(['method' => 'POST', 'url' => 'task', 'class' => 'form-horizontal']) !!}
            
            <!-- Task Name -->
            <div class="form-group">
                {!! Form::label('task-name', 'Task', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', '', ['id' => 'task-name', 'class' => 'form-control']) !!}
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::button('<i class="fa fa-plus"></i> Add Task', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>

    <!-- Current Tasks -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel panel-heading">
                {{ trans('heading.current_tasks') }}
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <!-- Table Heading -->
                    <thead>
                        <th>{{ trans('heading.task') }}</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task name -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Task -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
