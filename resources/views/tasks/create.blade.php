@extends('layout')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->

        <!-- New Task Form -->
        <form action="{{ route('tasks.create') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="panel-body">
    	<table class="table table-stripped task-table">
        	<thead>
            	<td>ID</td>
                <td>Nama</td>
                <td>Action</td>
            </thead>
            <tbody>
            	@foreach ($jobs as $job)
                <tr>
                	<td>{{ $job->id }}</td>
                	<td>{{ $job->name }}</td>
                    <td>
                    	<form action="{{ route('tasks.delete', $job->id) }}" method="post">
                        	{{ csrf_field() }}
                            
                            <button type="submit" class="btn btn-danger">
                            	<i class="fa fa-trash">Delete</i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
    

    <!-- TODO: Current Tasks -->
@endsection