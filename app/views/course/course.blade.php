@section('content')

<div class="content">
	<h3>{{{ $course->code }}} : {{{ $course->name }}} </h3>
	<table class="table table-primary horizontal-table">
		<tr>
			<th>
				{{{trans('default.Offered by')}}}  
			</th>
			<td>
				{{{ $course->department->getName() }}}, {{{trans('default.Faculty of')}}} {{{ $course->department->faculty->getName() }}} <br/>
			</td>
		</tr>
		<tr>
			<th>
				{{{trans('default.Instructor')}}}  
			</th>
			<td>
				@foreach ($course->instructors as $instructor)
				<a href="/user/{{{ $instructor->id }}}" >
					{{{ $instructor->firstname }}} {{{ $instructor->lastname }}}
				</a><br/> 
				@endforeach	
			</td>
		</tr>
		<tr>
			<th>
				{{{trans('default.Credits')}}} 
			</th>
			<td>
				{{{ $course->credit }}} ({{{$course->credit_theory}}}-{{{$course->credit_practice}}})<br/>
			</td>
		</tr>
	</table>


	<div class="course-description">
		<h4>{{{ trans('default.Course description') }}}</h4>
		{{{ $course->description }}}
	</div>

	<a href="/courses/24" class="btn btn-primary btn-sm"> {{{ trans('default.back')}}} </a>
</div>


@stop