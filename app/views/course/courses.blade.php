@section('content')

@foreach($courses as $course)
	@for($i=1; $i<=8; $i++)
		@if($course->semester == $i)
			{{{ trans('default.Semester') }}} : {{{ $i }}}
			<table class="table table-primary">
				<tr>
					<td>
						{{{ trans('default.Code') }}} 
					</td>
					<td>
						{{{ trans('default.Name') }}} 
					</td>
					<td>
						{{{ trans('default.Credits') }}} 
					</td>
					<td>
						{{{ trans('default.Syllabus') }}} 
					</td>					
				</tr>
				<tr>
					<td>						
						{{{ $course->code }}}						
					</td>
					<td>
						<a href="/course/{{{ $course->code }}}"> 
							{{{ $course->name }}}
						</a>
					</td>
					<td>
						{{{ $course->credit }}} ({{{ $course->credit_theory }}}:{{{ $course->credit_practice }}})
					</td>
					<td>
						<a href="/syllabuses/{{{ $course->url }}}"> 
							{{{ trans('default.download') }}}
						</a>
					</td>
				</tr>
			</table>
		@endif
	@endfor
@endforeach	



@stop