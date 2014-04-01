@section('content')
<div class="content">
@for($i=1; $i<=8; $i++)
	
	<table class="table table-primary vertical-table">
	<tr>
		<th colspan="4" style="text-align:center; border-top:#08088A; background:#ACACAC; color:#08088A"> 
			{{{ trans('default.Semester') }}} {{{ $i }}} 
		</th>
	</tr>
		<tr>
			<th>
				{{{ trans('default.Code') }}} 
			</th>
			<th>
				{{{ trans('default.Name') }}} 
			</th>
			<th>
				{{{ trans('default.Credits') }}} 
			</th>
			<th>
				{{{ trans('default.Syllabus') }}} 
			</th>					
		</tr>
		@foreach($courses as $course)
			@if($course->semester == $i)

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

			@endif
		@endforeach	
	</table>
@endfor

</div>
@stop