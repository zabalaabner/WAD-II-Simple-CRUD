@extends('master')

	@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1>Edit CRUD</h1>			
		</div>
	</div>

	<div class="row">
			<div class="col-md-12">
			<form class="" action="{{route('blog.update', $blog->id)}}" method="post">
			<input type="hidden" name="_method" value="PATCH">
				{{csrf_field()}}
				<div class="form-group{{ ($errors->has('Studentnumber')) ? $errors->first('Studentnumber') :''}}">
					
					<input type="text" name="Studentnumber" class="form-control" placeholder=" 15-xxxxx" value="{{$blog->Studentnumber}}">
					{!! $errors->first('Studentnumber','<p class="help-block">:message</p>') !!}
				</div>

				<div class="form-group{{ ($errors->has('Fname')) ? $errors->first('Fname'):''}}">
					
					<input type="text" name="Fname" class="form-control" placeholder=" First Name"
					value="{{$blog->Fname}}">
					{!! $errors->first('Fname','<p class="help-block">:message</p>') !!}
				</div>

				<div class="form-group{{ ($errors->has('Mname')) ? $errors->first('Mname'):''}}">
					
					<input type="text" name="Mname" class="form-control" placeholder=" Middle Name"
					value="{{$blog->Mname}}">
					{!! $errors->first('Mname','<p class="help-block">:message</p>') !!}
				</div>

				<div class="form-group{{ ($errors->has('Lname')) ? $errors->first('Lname') :''}}">
					
					<input type="text" name="Lname" class="form-control" placeholder=" Last Name"
					value="{{$blog->Lname}}">
					{!! $errors->first('Lname','<p class="help-block">:message</p>') !!}
				</div>

				<div class="form-group{{ ($errors->has('Course')) ? $errors->first('Course') :''}}">
					
					<input type="text" name="Course" class="form-control" placeholder=" Course"
					value="{{$blog->Course}}">
					{!! $errors->first('Course','<p class="help-block">:message</p>') !!}
				</div>

				<div class="form-group{{ ($errors->has('Address')) ? $errors->first('Address') :''}}">
					
					<input type="text" name="Address" class="form-control" placeholder=" Address"
					value="{{$blog->Address}}">
					{!! $errors->first('Address','<p class="help-block">:message</p>') !!}
				</div>

				<div class="form-group{{ ($errors->has('Guardian')) ? $errors->first('Guardian') :''}}">
					
					<input type="text" name="Guardian" class="form-control" placeholder=" Guardian"
					value="{{$blog->Guardian}}">
					{!! $errors->first('Guardian','<p class="help-block">:message</p>') !!}
				</div>

				<div class="form-group{{ ($errors->has('Contactnumber')) ? $errors->first('Contactnumber') :''}}">
					
					<input type="text" name="Contactnumber" class="form-control" placeholder=" 09xxxxx"
					value="{{$blog->Contactnumber}}">
					{!! $errors->first('Contactnumber','<p class="help-block">:message</p>') !!}
				</div>
					<input type="submit" class="btn btn-primary" value="save">
			</form>
			
			</div>
		</div>



@stop