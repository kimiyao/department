@section('content')
	<div style="position:relative;">
	
	<div> 
		<h3>
			{{{ $user->firstname }}} {{{ $user->lastname }}} <!-- <a href="/user/{{{ $user->id }}}/edit">edit</a> --> 
		</h3>
	</div>
	<div class="profile_pic">
		<img src="{{{ $user->picture}}}">
	</div>
	<table class="table table-primary horizontal-table">
		<tr>
			<th>
				{{{ trans('default.Affiliation')}}}
			</th>
			<td>
				{{{ $user->teacher->affiliation->institution}}}
			</td>
		</tr>
		<tr>
			<th>
				{{{ trans('default.Office')}}}
			</th>
			<td>
				{{{ $user->teacher->office}}}
			</td>
		</tr>
		<tr>
			<th>
				{{{ trans('default.email')}}}
			</th>
			<td>
				{{{ $user->email}}}
			</td>
		</tr>
		<tr>
			<th>
				{{{ trans('default.Area of Interests')}}}
			</th>
			<td>
				@foreach($user->interestareas as $area)
					{{{ $area->area}}}<br/>
				@endforeach
			</td>
		</tr>
		<tr>
			<th>
				{{{ trans('default.Education')}}}
			</th>
			<td>
				@foreach($user->educations as $education)
					{{{ $education->edtype->degree}}}: 
					{{{ $education->studied->institution}}},
					{{{ trans('default.Department of')}}}
						{{{ $education->department}}},
					{{{ $education->graduated}}} <br/>
				@endforeach
			</td>
		</tr>
	</table>
	{{{trans('default.Courses')}}}: <br/>
		@foreach ($user->courses as $course)
			<a href="/course/{{{ $course->code }}}"> 
				{{{ $course->code }}} {{{ $course->name }}} 
			</a> <br/>
		@endforeach
	{{{trans('default.Publications')}}}:	<br/>
		@foreach ($user->publications as $publication)
			{{{ $publication->title }}}<br/>
		@endforeach
		</div>
@stop