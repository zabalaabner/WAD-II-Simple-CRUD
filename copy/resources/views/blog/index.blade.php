@extends('master')

	@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1>Holy CRUD</h1>			
		</div>
	</div>

	<div class="row">
		<table class="table table-striped">
			<tr>
				<th>Student number</th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Course</th>
				<th>Address</th>
				<th>Guardian</th>
				<th>Contact number</th>
				<th>Actions</th>
			</tr>

			<a href="{{route('blog.create')}}" class="btn btn-info pull-right">Create new Entry</a><br />
			<hr>

			<?php $no=1; ?>

			@foreach($blogs as $blog)
			<tr>
				<td>{{$blog->Studentnumber}}</td>
				<td>{{$blog->Fname}}</td>
				<td>{{$blog->Mname}}</td>
				<td>{{$blog->Lname}}</td>
				<td>{{$blog->Course}}</td>
				<td>{{$blog->Address}}</td>
				<td>{{$blog->Guardian}}</td>
				<td>{{$blog->Contactnumber}}</td>
				<td>
					<form class="" action="{{route('blog.destroy',$blog->id)}}" method="post">
						<input type="hidden" name="_method" value="delete">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<a href="{{route('blog.edit',$blog->id)}}" class="btn btn-primary">Edit</a>
						<input type="submit" class="btn btn-danger" 
						onclick="return confirm('Are you sure?')" name="name" value="delete">

					</form>
				</td>
				
			</tr>
			@endforeach
		</table>
	</div>
	@stop