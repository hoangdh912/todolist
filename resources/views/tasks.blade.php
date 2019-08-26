<?php 



?>

<!-- Inherit from app.blade.php -->
@extends('layouts.app');

<!-- Content -->
<!-- Using app.css -->
@section('content')
	
	<!-- Task homepage content -->
	<div class="panel-body">
		<!-- Form to input new task -->
		<form action="{{url('task')}}" method="POST" class="form-horizontal">
			{{csrf_field()}}
			
			<!-- Task name -->
			<div class="form-group">
				<label for="task" class="col-sm-3 control-label" >Task</label>
				<div class="col-sm-6">
					<input type="text" name="name" id="task-name" class="form-control">
				</div>
			</div>

			<!-- Add Task button -->
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn_default">
						<i class="fa fa-plus">Add Task</i>
					</button>
				</div>
			</div>
		</form>
	</div>

@endsection